// Menu desplegable de servicios
document.addEventListener('DOMContentLoaded', () => {
    const serviciosBtn = document.getElementById('servicios');
    const submenu = document.querySelector('.submenu');
    
    if (serviciosBtn && submenu) {
        // Toggle del submenu al hacer click en el botón
        serviciosBtn.addEventListener('click', (e) => {
            e.preventDefault();
            submenu.classList.toggle('active');
            serviciosBtn.classList.toggle('active');
            
            // Actualizar aria-expanded
            const isExpanded = submenu.classList.contains('active');
            serviciosBtn.setAttribute('aria-expanded', isExpanded);
        });
        
        // Cerrar el submenu al hacer click fuera
        document.addEventListener('click', (e) => {
            if (!serviciosBtn.contains(e.target) && !submenu.contains(e.target)) {
                submenu.classList.remove('active');
                serviciosBtn.classList.remove('active');
                serviciosBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Cerrar el submenu con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && submenu.classList.contains('active')) {
                submenu.classList.remove('active');
                serviciosBtn.classList.remove('active');
                serviciosBtn.setAttribute('aria-expanded', 'false');
                serviciosBtn.focus();
            }
        });
        
        // Cerrar el submenu al hacer scroll
        window.addEventListener('scroll', () => {
            if (submenu.classList.contains('active')) {
                submenu.classList.remove('active');
                serviciosBtn.classList.remove('active');
                serviciosBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }
});
