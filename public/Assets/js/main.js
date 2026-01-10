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
    
    // Marcar el enlace activo según la página actual
    const currentPath = window.location.pathname;
    const menuLinks = document.querySelectorAll('.link-menu a');
    
    menuLinks.forEach(link => {
        const linkPath = new URL(link.href).pathname;
        
        // Marcar como activo si coincide exactamente
        if (linkPath === currentPath) {
            link.classList.add('active');
        }
        // Caso especial: marcar "Servicios" si estamos en cualquier ruta de servicios
        else if (currentPath.includes('/servicios') && linkPath.includes('/servicios')) {
            link.classList.add('active');
        }
    });
    
    // Efecto de escala y translateY animado para footer
    const bannerCta = document.querySelector('footer');
    
    if (bannerCta) {
        const animateBannerScale = () => {
            // Calcular distancia al final del documento
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            
            // Distancia restante hasta el final del scroll
            const distanceToBottom = documentHeight - (scrollTop + windowHeight);
            
            const triggerDistance = 400; // Comienza a animar cuando quedan 400px
            
            if (distanceToBottom <= triggerDistance) {
                // Calcular progreso: 1 cuando quedan 400px, 0 cuando quedan 0px
                const progress = Math.max(0, Math.min(1, 1 - (distanceToBottom / triggerDistance)));
                
                // TranslateY desde 350px hasta 0px
                const translateY = 200 - (progress * 200);
                // Scale desde 0.9 hasta 1
                const scale = 0.9 + (progress * 0.1);
                bannerCta.style.transform = `translateY(${translateY}px)`;
            } else {
                // Mantener en 350px y scale 0.9 si está lejos del final
                bannerCta.style.transform = 'translateY(200px)';
            }
        };
        
        // Ejecutar al cargar la página
        animateBannerScale();
        
        // Ejecutar al hacer scroll con throttle para mejor rendimiento
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    animateBannerScale();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
});
