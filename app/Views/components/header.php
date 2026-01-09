
<header>
    <nav class="navbar">
        <div class="menu">
                <picture>
                <a href="<?= URL_PATH ?>">
                    <img src="<?= URL_PATH ?>assets/images/brand/dark_logo.svg" width="120" height="38" alt="Código Nativo - Agencia de Marketing Digital" fetchpriority="high">
                </a>
            </picture>
            <div class="main-nav">
                <ul class="mobile-menu">
                    <li>
                        <i class="fa-solid fa-bars"></i>
                    </li>
                </ul>
                <ul class="link-menu" role="menu">
                    <li role="menuitem"><a href="<?= URL_PATH ?>">Inicio</a></li>
                    <li role="menuitem"><a href="<?= URL_PATH ?>nosotros">Nosotros</a></li>
                    <li role="group"><button type="button" aria-haspopup="true" aria-expanded="false" id="servicios">Servicios<i class="arrowService fas fa-chevron-down"></i></button></li>
                    <li role="menuitem"><a href="<?= URL_PATH ?>blog">Blog</a></li>
                    <li role="menuitem"><a href="<?= URL_PATH ?>contacto">Contacto</a></li>
                </ul>
                <ul class="cta-menu">
                    <li>
                        <a id="cta-free-consultation" href="/login" target="_blank" rel="noopener noreferrer" class="cta">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="submenu" role="menu">
            
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/diseno-web">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Diseño Web" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Diseño web <span class="badge destacado">DESTACADO</span></h2>
                        <p>Sitios web rápidos, seguros y escalables</p>
                    </div>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/rediseno-web">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Re-diseño Web" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Re-diseño web</h2>
                        <p>Webs profesionales que impulsan tu negocio</p>
                    </div>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/mantenimiento-web">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Mantenimiento Web" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Mantenimiento web</h2>
                        <p>Soporte continuo para tu página web</p>
                    </div>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/optimizacion-web">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Optimización Web" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Optimización web</h2>
                        <p>Mejora tu velocidad y posicionamiento</p>
                    </div>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/auditoria-web">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Auditorías Web" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Auditorías</h2>
                        <p>Diagnóstico completo para mejorar tu web</p>
                    </div>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?= URL_PATH ?>servicios/diseno-ux-ui">
                    <picture>
                        <img width="40" height="40" src="<?= URL_PATH ?>assets/images/servicios1.png" alt="Icono Diseño UX/UI" loading="lazy">
                    </picture>
                    <div class="serv">
                        <h2>Diseño UX/UI <span class="badge nuevo">NUEVO</span></h2>
                        <p>Experiencias intuitivas que convierten</p>
                    </div>
                </a>
            </li>
            
            <li class="linkAllServices" role="menuitem"><a href="<?= URL_PATH ?>servicios">Ver todos los servicios</a></li>
        </ul>
    </nav>
</header>
 
<main>
