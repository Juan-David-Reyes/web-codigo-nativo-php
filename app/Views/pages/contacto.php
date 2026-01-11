

<section class="contact" itemscope itemtype="https://schema.org/ContactPage">
    <a href="<?= URL_PATH ?>" class="back-logo" aria-label="Volver al inicio">
        <img src="<?= URL_PATH ?>assets/images/brand/light_logo.svg" alt="Código Nativo - Agencia de Diseño Web" width="140" height="44">
    </a>
    <div class="contact-info">
        <div class="card-data" itemscope itemtype="https://schema.org/Organization">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <h3 class="">Conversa con nuestro equipo</h3>
            <div class="person" itemprop="employee" itemscope itemtype="https://schema.org/Person">
                <p itemprop="name"><strong>Juan David Reyes</strong></p>
                <span itemprop="jobTitle">CEO & Co-founder</span>
                <span itemprop="jobTitle">Head of Product Design</span>
                <a href="tel:+573126357309" itemprop="telephone" aria-label="Llamar a Juan David Reyes">(+57) 312 635 7309</a>
            </div>
            <p class="cta-text">¿Listo para impulsar tu proyecto digital? Hablemos de tu idea.</p>
        </div>
        <div class="card-data" itemscope itemtype="https://schema.org/PostalAddress">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <h3 class="">Visítanos en Bogotá</h3>
            <p itemprop="streetAddress">Calle 66C # 60-65</p>
            <p><span itemprop="addressLocality">Bogotá</span>, <span itemprop="addressCountry">Colombia</span></p>
            <p class="business-hours">Atención presencial con cita previa</p>
        </div>
        <div class="card-data" itemscope itemtype="https://schema.org/ContactPoint">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <h3 class="">Llámanos</h3>
            <p itemprop="hoursAvailable">Lunes a sábados de 8:00 AM a 6:00 PM (hora Colombia)</p>
            <a href="tel:+573126357309" itemprop="telephone" aria-label="Llamar a Código Nativo">(+57) 312 635 7309</a>
            <p class="response-time">Tiempo de respuesta: menos de 2 horas</p>
        </div>
    </div>
    <form action="<?= URL_PATH ?>procesar-contacto" method="POST" class="contact-form" aria-label="Formulario de contacto">
        <h1 class="dark">¿Tienes un proyecto en mente? <span class="light green">Estamos listos para hacerlo realidad</span></h1>
        <p class="form-intro">Cuéntanos sobre tu idea y te responderemos en menos de 24 horas con una propuesta personalizada.</p>
        
        <div class="group">
            <label for="nombre">Nombre completo <span aria-label="campo requerido">*</span></label>
            <input type="text" id="nombre" name="nombre" required autocomplete="name" placeholder="Tu nombre completo" aria-required="true">
        </div>
        
        <div class="group">
            <label for="correo">Correo electrónico <span aria-label="campo requerido">*</span></label>
            <input type="email" id="correo" name="correo" required autocomplete="email" placeholder="tu@email.com" aria-required="true">
        </div>
        
        <div class="group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" autocomplete="tel" placeholder="(+57) 300 000 0000">
        </div>
        
        <div class="group">
            <label for="asunto">Cuéntanos sobre tu proyecto <span aria-label="campo requerido">*</span></label>
            <textarea name="asunto" id="asunto" rows="5" required placeholder="Describe tu proyecto, objetivos y lo que necesitas..." aria-required="true"></textarea>
        </div>
        
        <fieldset class="services-fieldset">
            <legend>¿Qué servicios te interesan?</legend>
            <div class="group checkbox">
                <input type="checkbox" id="diseno-web" name="servicios[]" value="diseno-web">
                <label for="diseno-web">Diseño web profesional</label>
            </div>
            <div class="group checkbox">
                <input type="checkbox" id="ux-ui" name="servicios[]" value="ux-ui">
                <label for="ux-ui">Diseño UX/UI</label>
            </div>
            <div class="group checkbox">
                <input type="checkbox" id="rediseno" name="servicios[]" value="rediseno">
                <label for="rediseno">Rediseño web</label>
            </div>
            <div class="group checkbox">
                <input type="checkbox" id="mantenimiento" name="servicios[]" value="mantenimiento">
                <label for="mantenimiento">Mantenimiento web WordPress</label>
            </div>
            <div class="group checkbox">
                <input type="checkbox" id="auditoria" name="servicios[]" value="auditoria">
                <label for="auditoria">Auditoría web</label>
            </div>
            <div class="group checkbox">
                <input type="checkbox" id="optimizacion" name="servicios[]" value="optimizacion">
                <label for="optimizacion">Optimización SEO y rendimiento</label>
            </div>
        </fieldset>
        
        <div class="group">
            <label for="presupuesto">Presupuesto aproximado (opcional)</label>
            <select id="presupuesto" name="presupuesto">
                <option value="">Selecciona un rango</option>
                <option value="menos-5">Menos de $5.000.000 COP</option>
                <option value="5-10">$5.000.000 - $10.000.000 COP</option>
                <option value="10-20">$10.000.000 - $20.000.000 COP</option>
                <option value="mas-20">Más de $20.000.000 COP</option>
            </select>
        </div>
        
        <button type="submit" class="primary-action">Enviar solicitud</button>
        <p class="privacy-notice">Al enviar este formulario aceptas nuestra <a href="<?= URL_PATH ?>politica-privacidad">política de privacidad</a>. Tus datos están seguros con nosotros.</p>
    </form>
</section>