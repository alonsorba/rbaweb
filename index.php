<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $year = date('Y');
  $homeLogoWhite = 'assets/img/R BAIDON V3 BLANCO.png';
  $homeLogoRgb = 'assets/img/R BAIDON V3 RGB (WEB).png';
  $mapImagePath = 'assets/img/mapa al ras.png';
  $mapImageExists = file_exists(__DIR__ . '/assets/img/mapa al ras.png');
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
  <link rel="stylesheet" href="assets/css/style.css?v=18">
</head>
<body class="home-index">
  <!-- Header global: logo, navegacion y acceso a usuarios -->
  <header class="shadow-sm sticky-top">
    <nav class="navbar navbar-expand-lg home-nav" id="topNav">
      <div class="container-fluid home-nav-shell">
        <a class="navbar-brand home-mobile-brand" href="index.php" aria-label="Inicio RBA Seguros y Fianzas">
          <img src="<?php echo $homeLogoWhite; ?>" class="brand-logo" alt="RBA Seguros &amp; Fianzas" fetchpriority="high" decoding="sync" data-home-logo-light="<?php echo $homeLogoWhite; ?>" data-home-logo-dark="<?php echo $homeLogoRgb; ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse home-nav-collapse" id="navbarNav">
          <div class="home-nav-content">
            <ul class="navbar-nav home-nav-menu home-nav-menu-left">
              <li class="nav-item"><a class="nav-link" href="servicios.php#portafolio">Empresas</a></li>
              <li class="nav-item"><a class="nav-link" href="servicios.php#portafolio">Personas</a></li>
              <li class="nav-item"><a class="nav-link" href="servicios.php">Gestión Integral</a></li>
              <li class="nav-item"><a class="nav-link" href="quienes.php">Nosotros</a></li>
            </ul>
            <a class="navbar-brand home-center-brand" href="index.php" aria-label="Inicio RBA Seguros y Fianzas">
              <img src="<?php echo $homeLogoWhite; ?>" class="brand-logo" alt="RBA Seguros &amp; Fianzas" fetchpriority="high" decoding="sync" data-home-logo-light="<?php echo $homeLogoWhite; ?>" data-home-logo-dark="<?php echo $homeLogoRgb; ?>">
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

    <section id="indicadores" class="counter-section">
      <div class="container">
        <div class="counter-stage">
          <div class="infographic-stats counter-stats reveal-on-scroll">
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
        </div>
      </div>
    </section>

    <section id="trust-bar" class="infographic-section">
      <div class="container">
        <div class="infographic-shell">
          <div class="infographic-layout">
            <div class="infographic-copy">
              <div class="infographic-label reveal-on-scroll">
                <span class="infographic-label__icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                <span class="infographic-label__text">Matriz en Ciudad<br>Obregón, Sonora</span>
              </div>

              <div class="infographic-presence reveal-on-scroll">
              <div class="infographic-presence__number" data-count-target="25" data-count-prefix="+">+25</div>
                <div class="infographic-presence__text">estados con presencia</div>
              </div>
            </div>

            <div class="infographic-map reveal-on-scroll">
              <div class="infographic-map__stage presence-map-wrapper">
                <svg class="infographic-map__connector presence-map-indicator" viewBox="0 0 4114 2712" preserveAspectRatio="xMidYMid meet" aria-hidden="true" focusable="false">
                  <line class="infographic-map__connector-line presence-map-line" x1="0" y1="1390" x2="890" y2="760"></line>
                  <circle class="infographic-map__connector-dot presence-map-point" cx="890" cy="760" r="27"></circle>
                </svg>
                <?php if ($mapImageExists): ?>
                  <img src="<?php echo $mapImagePath; ?>" alt="Mapa de México con presencia nacional de RBA" class="infographic-map__image presence-map-image" loading="lazy">
                <?php else: ?>
                  <div class="infographic-map__placeholder">
                    <!-- Reemplazar este bloque por la imagen del mapa cuando esté disponible en assets/img/mapa al ras.png -->
                    <p>Mapa de México</p>
                  </div>
                <?php endif; ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="esr-section" class="infographic-esr-section">
      <div class="container">
          <div class="infographic-esr infographic-esr--standalone reveal-on-scroll">
            <div class="infographic-esr__content">
              <div class="infographic-esr__eyebrow">XV años <span>de ser</span></div>
              <h2 class="infographic-esr__title">
                  <span>Empresa</span>
                  <span>Socialmente</span>
                  <span>Responsable</span>
              </h2>
              <p class="infographic-esr__copy">Seguimos construyendo un futuro <span>más responsable</span> todos los días.</p>

              <div class="infographic-esr__bar">
                  <span class="infographic-esr__bar-item">
                    <img src="assets/img/Ética empresarial.png" alt="" class="infographic-esr__bar-icon" loading="lazy" decoding="async">
                    <span class="infographic-esr__bar-label">Ética<br>Empresarial</span>
                  </span>
                  <span class="infographic-esr__bar-item">
                    <img src="assets/img/Cuidado del medio ambiente.png" alt="" class="infographic-esr__bar-icon" loading="lazy" decoding="async">
                    <span class="infographic-esr__bar-label">Cuidado del<br>Medio Ambiente</span>
                  </span>
                  <span class="infographic-esr__bar-item">
                    <img src="assets/img/Bienestar social.png" alt="" class="infographic-esr__bar-icon" loading="lazy" decoding="async">
                    <span class="infographic-esr__bar-label">Bienestar<br>Social</span>
                  </span>
              </div>
            </div>

            <div class="infographic-esr__media">
              <?php if ($esrImageExists): ?>
                <img src="<?php echo $esrImagePath; ?>" alt="Reconocimiento ESR de RBA Seguros y Fianzas" class="infographic-esr__image" loading="lazy" decoding="async">
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
        <div class="commitment-copy reveal-on-scroll">
          <h2 class="commitment-title">
            <span><strong>Nuestro compromiso</strong> es brindarte</span>
            <span>un <strong>servicio de excelencia</strong> para</span>
            <span>lograr al máximo <strong>tus necesidades</strong></span>
            <span><strong>de protección.</strong></span>
          </h2>
        </div>

        <div class="commitment-media reveal-on-scroll">
          <div class="commitment-image-card">
            <?php if ($commitmentImageExists): ?>
              <img src="<?php echo $commitmentImagePath; ?>" alt="Asesoría profesional RBA" class="commitment-image" loading="lazy">
            <?php else: ?>
              <div class="commitment-image commitment-image--placeholder">
                <span>RBA</span>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="servicios" class="services-solutions py-5" aria-labelledby="solutionsTitle">
      <div class="container">
        <div class="services-solutions__header text-center">
          <h2 class="services-solutions__title" id="solutionsTitle">Soluciones</h2>
          <p class="services-solutions__subtitle">Explora por categoría y desliza horizontalmente para ver más coberturas.</p>
          <div class="services-solutions__pills" role="tablist" aria-label="Tipos de solución">
            <button type="button" class="services-solutions__pill active" data-solution-key="empresas" aria-pressed="true">Empresas</button>
            <button type="button" class="services-solutions__pill" data-solution-key="personas" aria-pressed="false">Personas</button>
            <button type="button" class="services-solutions__pill" data-solution-key="fianzas" aria-pressed="false">Fianzas</button>
            <button type="button" class="services-solutions__pill" data-solution-key="gestion" aria-pressed="false">Gestión Integral</button>
          </div>
          <div class="services-solutions__controls" aria-label="Navegación del carrusel de soluciones">
            <button type="button" class="services-solutions__control" data-solution-prev aria-label="Ver soluciones anteriores">
              <i class="bi bi-arrow-left" aria-hidden="true"></i>
              <span>Anterior</span>
            </button>
            <button type="button" class="services-solutions__control" data-solution-next aria-label="Ver más soluciones">
              <span>Siguiente</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>

        <div class="services-solutions__carousel-shell">
          <div class="services-solutions__carousel solutions-carousel" id="solutionsCarousel" data-solution-carousel aria-label="Carrusel de soluciones">
            <div class="services-solutions__track solutions-track" id="solutionsTrack" data-solution-track>
              <article class="solution-card">
                <img src="assets/img/escudo.png" alt="Daños" class="solution-card__image">
                <div class="solution-card__content">
                  <h3>Daños</h3>
                  <p>Protección para los activos de tu empresa y su responsabilidad civil ante siniestros.</p>
                  <a href="#contacto" class="solution-card__btn">VER COBERTURA</a>
                </div>
              </article>

              <article class="solution-card">
                <img src="assets/img/carro.png" alt="Autos" class="solution-card__image">
                <div class="solution-card__content">
                  <h3>Autos</h3>
                  <p>Protección para vehículos empresariales y de colaboradores.</p>
                  <a href="#contacto" class="solution-card__btn">VER COBERTURA</a>
                </div>
              </article>

              <article class="solution-card">
                <img src="assets/img/corazon.png" alt="Gastos Médicos" class="solution-card__image">
                <div class="solution-card__content">
                  <h3>Gastos Médicos</h3>
                  <p>Cobertura de salud para colaboradores con planes diseñados para tu empresa.</p>
                  <a href="#contacto" class="solution-card__btn">VER COBERTURA</a>
                </div>
              </article>

              <article class="solution-card">
                <img src="assets/img/asesoria.png" alt="Vida" class="solution-card__image">
                <div class="solution-card__content">
                  <h3>Vida</h3>
                  <p>Protección económica para colaboradores y sus familias.</p>
                  <a href="#contacto" class="solution-card__btn">VER COBERTURA</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="proceso" class="py-5 bg-soft process-section">
      <div class="container">
        <div class="text-center mb-4 process-header">
          <div class="eyebrow text-primary">Metodología</div>
          <h2 class="fw-semibold process-title">Un proceso claro de inicio a fin.</h2>
          <p class="process-subtitle">Seguimos una secuencia ordenada para diagnosticar, diseñar, implementar y acompañar cada solución.</p>
        </div>
        <div class="timeline-v2">
          <article class="timeline-v2-step">
            <span class="timeline-v2-step__badge">1</span>
            <span class="timeline-v2-step__icon" aria-hidden="true"><i class="bi bi-search"></i></span>
            <h6>Diagnóstico</h6>
            <p>Revisión de riesgos y pólizas activas.</p>
          </article>
          <article class="timeline-v2-step">
            <span class="timeline-v2-step__badge">2</span>
            <span class="timeline-v2-step__icon" aria-hidden="true"><i class="bi bi-bezier2"></i></span>
            <h6>Diseño</h6>
            <p>Escenarios comparativos por aseguradora.</p>
          </article>
          <article class="timeline-v2-step">
            <span class="timeline-v2-step__badge">3</span>
            <span class="timeline-v2-step__icon" aria-hidden="true"><i class="bi bi-check2-square"></i></span>
            <h6>Implementación</h6>
            <p>Emisión, certificados y onboarding.</p>
          </article>
          <article class="timeline-v2-step">
            <span class="timeline-v2-step__badge">4</span>
            <span class="timeline-v2-step__icon" aria-hidden="true"><i class="bi bi-people"></i></span>
            <h6>Acompañamiento</h6>
            <p>Seguimiento operativo y de siniestros.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="testimonios" class="py-5 testimonials-section">
      <div class="container">
        <div class="testimonials-section__header d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
          <div class="testimonials-section__intro">
            <div class="eyebrow text-primary">Clientes</div>
            <h2 class="fw-semibold mb-2">Confianza respaldada por resultados.</h2>
            <p class="text-muted mb-0">Testimonios seleccionados de clientes que valoran la claridad, el seguimiento y la respuesta oportuna.</p>
          </div>
          <a class="btn btn-outline-primary" href="#contacto">Quiero asesoría</a>
        </div>
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-4 d-flex">
            <article class="tile testimonials-card h-100 w-100">
              <div class="d-flex align-items-center gap-3">
                <div class="avatar">JG</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Jessica G.</h6>
                  <small class="text-muted">Directora de Finanzas</small>
                </div>
              </div>
              <div class="testimonials-card__stars d-flex align-items-center gap-1" aria-label="Calificación de 5 de 5 estrellas">
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <span class="visually-hidden">5 de 5 estrellas</span>
              </div>
              <p class="testimonials-card__quote mb-0">"Migramos toda la póliza corporativa sin interrupciones. El seguimiento a siniestros es impecable."</p>
              <div class="testimonials-card__footer pt-3 mt-auto border-top">
                <small class="text-uppercase text-muted d-block">Empresa</small>
                <div class="fw-semibold">Grupo Delta</div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 d-flex">
            <article class="tile testimonials-card h-100 w-100">
              <div class="d-flex align-items-center gap-3">
                <div class="avatar">MR</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Marco R.</h6>
                  <small class="text-muted">Emprendedor</small>
                </div>
              </div>
              <div class="testimonials-card__stars d-flex align-items-center gap-1" aria-label="Calificación de 5 de 5 estrellas">
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <span class="visually-hidden">5 de 5 estrellas</span>
              </div>
              <p class="testimonials-card__quote mb-0">"Me explicaron cada opción de vida y ahorro con claridad. Se siente un servicio boutique."</p>
              <div class="testimonials-card__footer pt-3 mt-auto border-top">
                <small class="text-uppercase text-muted d-block">Empresa</small>
                <div class="fw-semibold">Consultoría Independiente</div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 d-flex">
            <article class="tile testimonials-card h-100 w-100">
              <div class="d-flex align-items-center gap-3">
                <div class="avatar">AL</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Ana L.</h6>
                  <small class="text-muted">Operaciones</small>
                </div>
              </div>
              <div class="testimonials-card__stars d-flex align-items-center gap-1" aria-label="Calificación de 5 de 5 estrellas">
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <i class="bi bi-star-fill" aria-hidden="true"></i>
                <span class="visually-hidden">5 de 5 estrellas</span>
              </div>
              <p class="testimonials-card__quote mb-0">"Reporté un siniestro nocturno y respondieron en minutos. Todo quedó resuelto rápido."</p>
              <div class="testimonials-card__footer pt-3 mt-auto border-top">
                <small class="text-uppercase text-muted d-block">Empresa</small>
                <div class="fw-semibold">Operadora del Norte</div>
              </div>
            </article>
          </div>
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
            <img src="<?php echo $homeLogoRgb; ?>" class="footer-logo" alt="RBA Seguros &amp; Fianzas">
          </div>
          <div class="text-muted small text-center text-lg-end">
            &copy; <?php echo $year; ?> R. Baidon Agente de Seguros y de Fianzas.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/main.js?v=8"></script>
</body>
</html>






 




