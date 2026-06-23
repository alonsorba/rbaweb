<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $year = date('Y');
  $mapImagePath = 'assets/img/mapaa.png';
  $mapImageExists = file_exists(__DIR__ . '/assets/img/mapaa.png');
  $esrImagePath = 'assets/img/esr con sombre.png';
  $esrImageExists = file_exists(__DIR__ . '/assets/img/esr con sombre.png');
  $commitmentImagePath = 'assets/img/compromiso.png';
  $commitmentImageExists = file_exists(__DIR__ . '/assets/img/compromiso.png');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css?v=12">
</head>
<body class="home-index">
  <!-- Header global: logo, navegacion y acceso a usuarios -->
  <header class="shadow-sm sticky-top">
    <nav class="navbar navbar-expand-lg home-nav" id="topNav">
      <div class="container-fluid home-nav-shell">
        <a class="navbar-brand home-mobile-brand" href="index.php" aria-label="Inicio RBA Seguros y Fianzas">
          <img src="assets/img/R BAIDON V3 BLANCO.png" class="brand-logo" alt="RBA Seguros &amp; Fianzas">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse home-nav-collapse" id="navbarNav">
          <div class="home-nav-content">
            <ul class="navbar-nav home-nav-menu home-nav-menu-left">
              <li class="nav-item"><a class="nav-link" href="servicios.php#empresarial-pane">Empresas</a></li>
              <li class="nav-item"><a class="nav-link" href="servicios.php#personales-pane">Personas</a></li>
              <li class="nav-item"><a class="nav-link" href="servicios.php">Gestión Integral</a></li>
              <li class="nav-item"><a class="nav-link" href="quienes.php">Nosotros</a></li>
            </ul>
            <a class="navbar-brand home-center-brand" href="index.php" aria-label="Inicio RBA Seguros y Fianzas">
              <img src="assets/img/R BAIDON V3 BLANCO.png" class="brand-logo" alt="RBA Seguros &amp; Fianzas">
            </a>
            <div class="home-nav-actions">
              <a class="nav-link home-contact-link" href="#contacto">Contacto</a>
              <a class="btn nav-access-btn" href="https://neo.rbaidon.com/">Acceso a usuarios</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero-carousel hero-v2 home-landing-hero" aria-labelledby="homeHeroTitle">
      <img class="home-landing-hero__image" src="assets/img/DSC_1181.png" alt="Interior de oficinas RBA con escaleras y área de recepción">
      <div class="hero-v2-content home-hero-card">
        <h1 class="hero-v2-title" id="homeHeroTitle">Seguros empresariales y<br>personales para optimizar<br>tu administración<br>de riesgos</h1>
        <p class="hero-v2-copy">Menos riesgo. Más control. Mejores decisiones.</p>
        <div class="hero-v2-actions">
          <a class="btn home-primary-btn" href="#contacto">
            <i class="bi bi-chat-dots" aria-hidden="true"></i>
            <span>Habla con un asesor</span>
          </a>
          <a class="btn home-secondary-btn" href="#servicios">
            <i class="bi bi-arrow-right" aria-hidden="true"></i>
            <span>Ver soluciones</span>
          </a>
        </div>
      </div>
    </section>

    <section id="trust-bar" class="infographic-section">
      <div class="container">
        <div class="infographic-shell">
          <div class="infographic-stats reveal-on-scroll">
            <div class="infographic-stats__item">
              <div class="infographic-stats__number" data-count-target="150" data-count-prefix="+">+150</div>
              <div class="infographic-stats__label">empresas aseguradas</div>
            </div>
            <div class="infographic-stats__item">
              <div class="infographic-stats__number" data-count-target="35" data-count-prefix="+">+35</div>
              <div class="infographic-stats__label">años de experiencia</div>
            </div>
            <div class="infographic-stats__item">
              <div class="infographic-stats__number" data-count-target="80" data-count-prefix="+">+80</div>
              <div class="infographic-stats__label">colaboradores</div>
            </div>
          </div>

          <div class="infographic-layout">
            <div class="infographic-copy">
              <div class="infographic-label reveal-on-scroll">
                <span class="infographic-label__icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                <span class="infographic-label__text">Matriz en Ciudad<br>Obregón, Sonora</span>
              </div>

              <span class="infographic-connector-line" aria-hidden="true"></span>

              <div class="infographic-presence reveal-on-scroll">
              <div class="infographic-presence__number" data-count-target="25" data-count-prefix="+">+25</div>
                <div class="infographic-presence__text">estados con presencia</div>
              </div>
            </div>

            <div class="infographic-map reveal-on-scroll">
              <div class="infographic-map__stage">
                <span class="infographic-map__dot" aria-hidden="true"></span>
                <?php if ($mapImageExists): ?>
                  <img src="<?php echo $mapImagePath; ?>" alt="Mapa de México con presencia nacional de RBA" class="infographic-map__image" loading="lazy">
                <?php else: ?>
                  <div class="infographic-map__placeholder">
                    <!-- Reemplazar este bloque por la imagen del mapa cuando esté disponible en assets/img/mapaa.png -->
                    <p>Mapa de México</p>
                  </div>
                <?php endif; ?>

                <div class="infographic-map__hover">
                  <div class="infographic-map__hover-card">
                    <strong>Presencia nacional</strong>
                    <p>Matriz en Ciudad Obregón, Sonora. Cobertura activa en 25 estados.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="infographic-esr reveal-on-scroll">
            <div class="infographic-esr__content">
              <div class="infographic-esr__eyebrow">XV años</div>
              <h2 class="infographic-esr__title">
                <span>de ser</span>
                <span>Empresa Socialmente</span>
                <span>Responsable</span>
              </h2>
              <p class="infographic-esr__copy">Seguimos construyendo un futuro más responsable todos los días.</p>

              <div class="infographic-esr__bar">
                <span>Ética Empresarial</span>
                <span>Cuidado del Medio Ambiente</span>
                <span>Bienestar Social</span>
              </div>
            </div>

            <div class="infographic-esr__media">
              <?php if ($esrImageExists): ?>
                <img src="<?php echo $esrImagePath; ?>" alt="Reconocimiento ESR de RBA Seguros y Fianzas" class="infographic-esr__image" loading="lazy">
              <?php else: ?>
                <div class="infographic-esr__placeholder">
                  <!-- Reemplazar este bloque por la imagen del reconocimiento ESR cuando esté disponible en assets/img/esr con sombre.png -->
                  <div class="infographic-esr__placeholder-eyebrow">Reconocimiento ESR</div>
                  <p>Colocar aquí el trofeo ESR.</p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="compromiso" class="commitment-section">
      <div class="commitment-container">
        <div class="commitment-copy reveal-on-scroll" style="max-width: 760px; padding-right: clamp(2rem, 4vw, 4rem);">
          <h2 class="commitment-title" style="margin: 0; color: #565656; font-size: clamp(1.8rem, 2.25vw, 3.1rem); line-height: 1.18; font-weight: 400; letter-spacing: -0.035em;">
            <span><strong>Nuestro compromiso</strong> es brindarte</span>
            <span>un <strong>servicio en excelencia</strong> para</span>
            <span>lograr al máximo <strong>tus necesidades</strong></span>
            <span><strong>de protección.</strong></span>
          </h2>
        </div>

        <div class="commitment-media reveal-on-scroll" style="width: clamp(540px, 42vw, 760px); max-width: 100%; justify-self: end; transform: translateY(-24px);">
          <div class="commitment-image-card" style="width: 100%; aspect-ratio: 1.85 / 1; border-radius: clamp(24px, 2vw, 38px); overflow: hidden; background: transparent; box-shadow: none;">
            <?php if ($commitmentImageExists): ?>
              <img src="<?php echo $commitmentImagePath; ?>" alt="Asesoría profesional RBA" class="commitment-image" loading="lazy" style="display: block; width: 100%; height: 100%; object-fit: contain; object-position: center bottom;">
            <?php else: ?>
              <div class="commitment-image commitment-image--placeholder">
                <span>RBA</span>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="servicios" class="py-5 services-v2">
      <div class="container">
        <div class="row align-items-end mb-4">
          <div class="col-lg-8">
            <div class="eyebrow text-primary">Portafolio</div>
            <h2 class="fw-semibold mb-2">Coberturas diseñadas para cada etapa.</h2>
            <p class="text-muted mb-0">Selecciona tu frente de interés y conoce las opciones recomendadas por nuestros especialistas.</p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a class="btn btn-outline-primary btn-lg" href="#contacto">Agenda una llamada</a>
          </div>
        </div>

        <ul class="nav nav-pills services-tabs mb-4" id="servicesTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="empresarial-tab" data-bs-toggle="pill" data-bs-target="#empresarial-pane" type="button" role="tab" aria-controls="empresarial-pane" aria-selected="true">Empresarial</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="personales-tab" data-bs-toggle="pill" data-bs-target="#personales-pane" type="button" role="tab" aria-controls="personales-pane" aria-selected="false">Personales</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="fianzas-tab" data-bs-toggle="pill" data-bs-target="#fianzas-pane" type="button" role="tab" aria-controls="fianzas-pane" aria-selected="false">Fianzas y siniestros</button>
          </li>
        </ul>

        <div class="tab-content" id="servicesTabContent">
          <div class="tab-pane fade show active" id="empresarial-pane" role="tabpanel" aria-labelledby="empresarial-tab" tabindex="0">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-building-check"></i></div><h5 class="fw-semibold">Seguros Empresariales</h5><p class="text-muted">Protección patrimonial, responsabilidad civil, transporte y riesgos especiales con planes a medida.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-car-front"></i></div><h5 class="fw-semibold">Autos Ejecutivos</h5><p class="text-muted">Coberturas flexibles, autos de reemplazo y asistencia en carretera para operación continua.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-shield-check"></i></div><h5 class="fw-semibold">Responsabilidad Civil</h5><p class="text-muted">Blindaje legal y financiero para operaciones, proveedores y relaciones comerciales.</p></div></div>
            </div>
          </div>
          <div class="tab-pane fade" id="personales-pane" role="tabpanel" aria-labelledby="personales-tab" tabindex="0">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-heart-pulse"></i></div><h5 class="fw-semibold">Gastos Médicos</h5><p class="text-muted">Cobertura nacional e internacional con red hospitalaria premium y concierge de salud.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-shield-fill-check"></i></div><h5 class="fw-semibold">Vida y Ahorro</h5><p class="text-muted">Soluciones de previsión, ahorro y retiro con acompañamiento transparente.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-house-check"></i></div><h5 class="fw-semibold">Patrimonio Familiar</h5><p class="text-muted">Protección de hogar y activos clave con esquemas personalizables.</p></div></div>
            </div>
          </div>
          <div class="tab-pane fade" id="fianzas-pane" role="tabpanel" aria-labelledby="fianzas-tab" tabindex="0">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-cash-coin"></i></div><h5 class="fw-semibold">Fianzas</h5><p class="text-muted">Cumplimiento, fidelidad y licitaciones con respaldo de afianzadoras líderes.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-lightning-charge"></i></div><h5 class="fw-semibold">Respuesta a Siniestros</h5><p class="text-muted">Coordinación inmediata con ajustadores y seguimiento hasta resolución.</p></div></div>
              <div class="col-md-6 col-lg-4"><div class="tile h-100"><div class="icon-circle"><i class="bi bi-file-earmark-text"></i></div><h5 class="fw-semibold">Gestión de Trámites</h5><p class="text-muted">Control documental y renovación sin fricción para tu equipo.</p></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="proceso" class="py-5 bg-soft">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Metodología</div>
          <h2 class="fw-semibold">Un proceso claro de inicio a fin.</h2>
        </div>
        <div class="timeline-v2">
          <div class="timeline-v2-step"><span>1</span><h6>Diagnóstico</h6><p>Revisión de riesgos y pólizas activas.</p></div>
          <div class="timeline-v2-step"><span>2</span><h6>Diseño</h6><p>Escenarios comparativos por aseguradora.</p></div>
          <div class="timeline-v2-step"><span>3</span><h6>Implementación</h6><p>Emisión, certificados y onboarding.</p></div>
          <div class="timeline-v2-step"><span>4</span><h6>Acompañamiento</h6><p>Seguimiento operativo y de siniestros.</p></div>
        </div>
      </div>
    </section>

    <section id="testimonios" class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
          <div>
            <div class="eyebrow text-primary">Clientes</div>
            <h2 class="fw-semibold mb-0">Confianza respaldada por resultados.</h2>
          </div>
          <a class="btn btn-outline-primary" href="#contacto">Quiero asesoría</a>
        </div>
        <div class="row g-4">
          <div class="col-lg-4"><div class="tile h-100"><div class="d-flex align-items-center gap-3 mb-3"><div class="avatar">JG</div><div><h6 class="mb-0 fw-semibold">Jessica G.</h6><small class="text-muted">Directora de Finanzas</small></div></div><p class="mb-0 text-muted">"Migramos toda la Póliza corporativa sin interrupciones. El seguimiento a siniestros es impecable."</p></div></div>
          <div class="col-lg-4"><div class="tile h-100"><div class="d-flex align-items-center gap-3 mb-3"><div class="avatar">MR</div><div><h6 class="mb-0 fw-semibold">Marco R.</h6><small class="text-muted">Emprendedor</small></div></div><p class="mb-0 text-muted">"Me explicaron cada opción de vida y ahorro con claridad. Se siente un servicio boutique."</p></div></div>
          <div class="col-lg-4"><div class="tile h-100"><div class="d-flex align-items-center gap-3 mb-3"><div class="avatar">AL</div><div><h6 class="mb-0 fw-semibold">Ana L.</h6><small class="text-muted">Operaciones</small></div></div><p class="mb-0 text-muted">"Reporté un siniestro nocturno y respondieron en minutos. Todo quedó resuelto rápido."</p></div></div>
        </div>
      </div>
    </section>

    <section id="contacto" class="py-5 cta-contact-v2">
      <div class="container">
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-5">
            <div class="tile h-100 cta-copy-v2">
              <div class="eyebrow text-primary">Listos para empezar</div>
              <h2 class="fw-semibold">Hablemos de tu próximo proyecto o póliza.</h2>
              <p class="text-muted">Te asignamos un asesor para construir una propuesta clara, accionable y alineada a tus riesgos reales.</p>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-3 align-items-center"><i class="bi bi-telephone-forward text-primary fs-4"></i><span><?php echo $phone; ?></span></div>
                <div class="d-flex gap-3 align-items-center"><i class="bi bi-envelope-open text-primary fs-4"></i><span><?php echo $email; ?></span></div>
                <div class="d-flex gap-3 align-items-center"><i class="bi bi-geo-alt text-primary fs-4"></i><span>CDMX y atención nacional</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="tile p-4 shadow-sm h-100">
              <form method="post" action="procesar-contacto.php" class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Correo</label>
                  <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Teléfono</label>
                  <input type="tel" name="telefono" class="form-control" placeholder="55 0000 0000" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Servicio de interés</label>
                  <select name="servicio" class="form-select">
                    <option>Seguros Empresariales</option>
                    <option>Gastos Médicos</option>
                    <option>Autos</option>
                    <option>Vida</option>
                    <option>Fianzas</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Mensaje</label>
                  <textarea name="mensaje" rows="4" class="form-control" placeholder="Cuéntanos qué necesitas" required></textarea>
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center flex-wrap gap-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="aviso" required>
                    <label class="form-check-label" for="aviso">Acepto el <a class="link-primary" href="aviso-privacidad.php">Aviso de Privacidad</a></label>
                  </div>
                  <button type="submit" class="btn btn-gradient">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer global con enlaces utiles -->
  <footer class="footer-main">
    <div class="container py-5">
      <div class="row g-4 align-items-start">
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Nuestros Servicios</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="servicios.php#portafolio">Seguros Personales</a></li>
            <li><a href="servicios.php#portafolio">Seguros Empresariales</a></li>
            <li><a href="servicios.php#portafolio">Seguros de Gobierno</a></li>
            <li><a href="servicios.php#portafolio">Fianzas</a></li>
            <li><a href="servicios.php#portafolio">Seguro RC USA</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">¿Quiénes somos?</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="quienes.php#nosotros">Sobre Nosotros</a></li>
            <li><a href="quienes.php#equipo">Mensaje del Director</a></li>
            <li><a href="quienes.php#alianzas">Alianzas</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Servicio al cliente</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="servicio-cliente.php#reclamaciones">Reclamaciones</a></li>
            <li><a href="servicio-cliente.php#siniestros">Siniestros</a></li>
            <li><a href="servicio-cliente.php#soporte">Preguntas Frecuentes</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Contacto</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="#contacto">Formulario de Contacto</a></li>
            <li><a href="aviso-privacidad.php">Aviso de Privacidad</a></li>
            <li><a href="ubicacion.php#cd-obregon">Ubicación</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom pt-4 mt-3 border-top">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">
          <div class="d-flex align-items-center gap-3">
            <img src="assets/img/R BAIDON V3 RGB (WEB).png" class="footer-logo" alt="RBA Seguros &amp; Fianzas">
          </div>
          <div class="text-muted small text-center text-lg-end">
            &copy; <?php echo $year; ?> R. Baidon Agente de Seguros y de Fianzas.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/main.js?v=7"></script>
</body>
</html>






 


