<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <section class="hero position-relative overflow-hidden">
        <div class="gradient-bg"></div>
        <div class="container position-relative py-5">
            <div class="row align-items-center py-5">
                <div class="col-lg-6">
                    <p class="badge bg-light text-dark rounded-pill mb-3">Agente certificado · Respuestas en minutos</p>
                    <h1 class="display-4 fw-semibold mb-3">Seguros claros, servicio premium.</h1>
                    <p class="lead text-muted mb-4">Protege a tu familia, negocio y patrimonio con coberturas pensadas para la vida actual. Sin letras chiquitas, sin fricción.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a class="btn btn-primary btn-lg px-4" href="#contacto">Cotizar</a>
                        <a class="btn btn-outline-secondary btn-lg px-4" href="#servicios">Ver opciones</a>
                    </div>
                    <div class="d-flex gap-4 mt-4 flex-wrap">
                        <div>
                            <p class="h4 fw-semibold mb-0">15+</p>
                            <p class="text-muted small mb-0">Años de experiencia</p>
                        </div>
                        <div>
                            <p class="h4 fw-semibold mb-0">24/7</p>
                            <p class="text-muted small mb-0">Acompañamiento real</p>
                        </div>
                        <div>
                            <p class="h4 fw-semibold mb-0">98%</p>
                            <p class="text-muted small mb-0">Renuevan con nosotros</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="glass-card p-4">
                        <p class="text-uppercase small text-muted mb-2">Cotización express</p>
                        <form class="row g-3">
                            <div class="col-12">
                                <label class="form-label">¿Qué quieres proteger?</label>
                                <select class="form-select">
                                    <option value="">Selecciona una opción</option>
                                    <option>Auto y movilidad</option>
                                    <option>Hogar y patrimonio</option>
                                    <option>Vida y salud</option>
                                    <option>Negocio y PYME</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" placeholder="+52">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary w-100">Recibir propuesta</button>
                            </div>
                            <div class="col-12">
                                <p class="small text-muted mb-0">Respondemos en menos de 20 minutos hábiles. Sin spam.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <div>
                    <p class="text-uppercase small text-muted mb-1">Portafolio</p>
                    <h2 class="h1 fw-semibold mb-0">Coberturas diseñadas a medida.</h2>
                </div>
                <a href="#contacto" class="link-primary fw-semibold">Habla con un asesor</a>
            </div>
            <div class="row g-4">
                <?php
                $servicios = [
                    [
                        'titulo' => 'Auto inteligente',
                        'texto' => 'Cobertura total con asistencia vial, rastreo y reemplazo inmediato. Tu movilidad siempre activa.',
                        'detalle' => 'Incluye auto sustituto y telemetría opcional.',
                    ],
                    [
                        'titulo' => 'Vida & salud',
                        'texto' => 'Planes flexibles con coberturas críticas, hospitalización y protección familiar.',
                        'detalle' => 'Acceso a red premium y acompañamiento de siniestros.',
                    ],
                    [
                        'titulo' => 'Hogar & patrimonio',
                        'texto' => 'Protección contra robo, incendio, desastres y gadgets asegurados.',
                        'detalle' => 'Asistencia 24/7 y valuación rápida de bienes.',
                    ],
                    [
                        'titulo' => 'Negocio & PYME',
                        'texto' => 'Seguros empresariales con responsabilidad civil y continuidad operativa.',
                        'detalle' => 'Planes modulares para crecer sin complicaciones.',
                    ],
                ];
                foreach ($servicios as $servicio): ?>
                    <div class="col-lg-6">
                        <div class="feature-card h-100 p-4">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="h4 fw-semibold mb-0"><?php echo $servicio['titulo']; ?></p>
                                <span class="badge bg-primary-soft">Nuevo</span>
                            </div>
                            <p class="text-muted mb-3"><?php echo $servicio['texto']; ?></p>
                            <p class="small fw-semibold mb-1"><?php echo $servicio['detalle']; ?></p>
                            <a class="link-dark fw-semibold" href="#contacto">Explorar</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="beneficios" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <p class="text-uppercase small text-muted mb-2">Por qué RBA</p>
                    <h2 class="h1 fw-semibold mb-3">Diseño simple, protección completa.</h2>
                    <p class="text-muted mb-4">Tomamos lo mejor de la tecnología y lo combinamos con asesoría humana. Así, cada seguro se siente tan fluido como tu día a día.</p>
                    <ul class="list-unstyled d-grid gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <span class="check-icon mt-1"></span>
                            <div>
                                <p class="fw-semibold mb-1">Gestión digital</p>
                                <p class="text-muted mb-0">Documentos, pagos y renovaciones desde tu celular.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <span class="check-icon mt-1"></span>
                            <div>
                                <p class="fw-semibold mb-1">Atención humana</p>
                                <p class="text-muted mb-0">Un asesor dedicado para emergencias y dudas.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <span class="check-icon mt-1"></span>
                            <div>
                                <p class="fw-semibold mb-1">Cobertura transparente</p>
                                <p class="text-muted mb-0">Condiciones claras, sin letras chiquitas.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="metric-card p-4">
                                <p class="small text-muted mb-2">Satisfacción</p>
                                <p class="display-5 fw-semibold mb-1">4.9★</p>
                                <p class="text-muted mb-0">Clientes califican nuestra respuesta.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card p-4">
                                <p class="small text-muted mb-2">Tiempo de respuesta</p>
                                <p class="display-6 fw-semibold mb-1">-20 min</p>
                                <p class="text-muted mb-0">Promedio para presentar opciones.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card p-4">
                                <p class="small text-muted mb-2">Siniestros resueltos</p>
                                <p class="display-6 fw-semibold mb-1">3.1k</p>
                                <p class="text-muted mb-0">Acompañamiento de inicio a fin.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card p-4">
                                <p class="small text-muted mb-2">Renovaciones</p>
                                <p class="display-6 fw-semibold mb-1">98%</p>
                                <p class="text-muted mb-0">Clientes que se quedan cada año.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experiencias" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <div>
                    <p class="text-uppercase small text-muted mb-1">Experiencias reales</p>
                    <h2 class="h1 fw-semibold mb-0">Clientes que confían en nosotros.</h2>
                </div>
                <a href="#contacto" class="link-dark fw-semibold">Programa una llamada</a>
            </div>
            <div class="row g-4">
                <?php
                $testimonios = [
                    [
                        'nombre' => 'Mariana L.',
                        'rol' => 'Emprendedora',
                        'texto' => 'Mi seguro de negocio y de vida están aquí. Son claros, puntuales y me acompañaron en un siniestro de principio a fin.',
                    ],
                    [
                        'nombre' => 'Carlos D.',
                        'rol' => 'Director de operaciones',
                        'texto' => 'Renovamos flota completa en 3 días. La telemetría nos ayuda a prevenir incidentes y reducir costos.',
                    ],
                    [
                        'nombre' => 'Alejandro R.',
                        'rol' => 'Padre de familia',
                        'texto' => 'Cotización rápida, sin presiones. Ya tuve un choque y la respuesta fue inmediata, me dieron auto sustituto el mismo día.',
                    ],
                ];
                foreach ($testimonios as $testimonio): ?>
                    <div class="col-lg-4">
                        <div class="testimonial-card h-100 p-4">
                            <p class="mb-3"><?php echo $testimonio['texto']; ?></p>
                            <p class="fw-semibold mb-0"><?php echo $testimonio['nombre']; ?></p>
                            <p class="text-muted small mb-0"><?php echo $testimonio['rol']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contacto" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <p class="text-uppercase small text-secondary mb-2">Contacto</p>
                    <h2 class="h1 fw-semibold mb-3">Hablemos de tu protección.</h2>
                    <p class="text-secondary mb-4">Cuéntanos qué necesitas y te enviamos una propuesta curada por un agente certificado.</p>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex gap-3 align-items-center">
                            <span class="contact-dot"></span>
                            <div>
                                <p class="fw-semibold mb-0">WhatsApp / Teléfono</p>
                                <p class="text-secondary mb-0">+52 55 1234 5678</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <span class="contact-dot"></span>
                            <div>
                                <p class="fw-semibold mb-0">Correo</p>
                                <p class="text-secondary mb-0">hola@rbaseguros.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-dark rounded-4 p-4 p-lg-5">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" placeholder="+52">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Horario preferido</label>
                                <select class="form-select">
                                    <option value="">Selecciona</option>
                                    <option>Mañana</option>
                                    <option>Tarde</option>
                                    <option>Noche</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">¿Qué quieres proteger?</label>
                                <input type="text" class="form-control" placeholder="Auto, hogar, negocio, etc.">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mensaje</label>
                                <textarea class="form-control" rows="3" placeholder="Cuéntanos el contexto"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary w-100">Enviar mensaje</button>
                            </div>
                            <div class="col-12">
                                <p class="small text-muted mb-0">Tus datos se usan solo para contactarte. Sin spam.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
