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
                  <line class="infographic-map__connector-line presence-map-line" x1="-290" y1="1500" x2="890" y2="760"></line>
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
          <div class="services-solutions__pills" role="tablist" aria-label="Tipos de solución">
            <button type="button" class="services-solutions__pill active" data-solution-key="empresas" aria-pressed="true">Empresas</button>
            <button type="button" class="services-solutions__pill" data-solution-key="personas" aria-pressed="false">Personas</button>
            <button type="button" class="services-solutions__pill" data-solution-key="gestion" aria-pressed="false">Gestión Integral</button>
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

    <section id="por-que-nosotros" class="why-us-section">
      <div class="container">
        <div class="why-us-section__header text-center">
          <h2 class="why-us-section__title">¿Por qué nosotros?</h2>
        </div>

        <div class="why-us-grid">
          <article class="why-us-card why-us-card--portrait">
            <div class="why-us-card__visual">
              <img src="assets/img/itzel.png" alt="Asesoría personalizada" class="why-us-card__image" loading="lazy" decoding="async">
            </div>
            <div class="why-us-card__label">Asesoría<br>personalizada</div>
          </article>

          <article class="why-us-card why-us-card--scene">
            <div class="why-us-card__visual">
              <img src="assets/img/nose.png" alt="Prevención de riesgos" class="why-us-card__image" loading="lazy" decoding="async">
            </div>
            <div class="why-us-card__label">Prevención<br>de riesgos</div>
          </article>

          <article class="why-us-card why-us-card--portrait">
            <div class="why-us-card__visual">
              <img src="assets/img/jenny.png" alt="Análisis inteligente" class="why-us-card__image" loading="lazy" decoding="async">
            </div>
            <div class="why-us-card__label">Análisis<br>inteligente</div>
          </article>

          <article class="why-us-card why-us-card--portrait">
            <div class="why-us-card__visual">
              <img src="assets/img/misa.png" alt="Acompañamiento constante" class="why-us-card__image" loading="lazy" decoding="async">
            </div>
            <div class="why-us-card__label">Acompañamiento<br>constante</div>
          </article>
        </div>
      </div>
    </section>

    <section id="aseguradoras" class="partners-section">
      <div class="partners-section__logos" aria-hidden="true">
        <img src="assets/img/logos%20blanco/aig.png" alt="" class="partners-logo partners-logo--aig">
        <img src="assets/img/logos%20blanco/QUALITAS.png" alt="" class="partners-logo partners-logo--qualitas">
        <img src="assets/img/logos%20blanco/axa.png" alt="" class="partners-logo partners-logo--axa">
        <img src="assets/img/logos%20blanco/hdi.png" alt="" class="partners-logo partners-logo--hdi">
        <img src="assets/img/logos%20blanco/Zurich.png" alt="" class="partners-logo partners-logo--zurich">
        <img src="assets/img/logos%20blanco/GNP.png" alt="" class="partners-logo partners-logo--gnp">
        <img src="assets/img/logos%20blanco/Mapfre.png" alt="" class="partners-logo partners-logo--mapfre">
        <img src="assets/img/logos%20blanco/seguros-atlas.png" alt="" class="partners-logo partners-logo--atlas">
      </div>

      <div class="container">
        <div class="partners-section__panel">
          <div class="partners-section__copy">
            <p class="partners-section__eyebrow">Trabajamos con</p>
            <div class="partners-section__count">+20</div>
            <p class="partners-section__label">aseguradoras</p>
          </div>

          <div class="partners-section__message">
            Te asesoramos para seleccionar la mejor opción de protección
          </div>

        </div>
      </div>
    </section>

    <section id="testimonios" class="testimonials-section testimonials-section--home">
      <div class="container">
        <div class="testimonials-section__panel">
          <h2 class="testimonials-section__title">Lo que dicen nuestros clientes</h2>

          <div class="testimonials-section__track" aria-label="Testimonios de clientes">
            <article class="testimonials-card testimonials-card--featured">
              <div class="testimonials-card__name-row">
                <h3>Roberto García</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>La verdad no sabía qué seguro elegir y me explicaron todo con mucha paciencia. Se siente que sí les importa ayudarte.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Gabriela Pérez</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Tuve un siniestro y me acompañaron en todo el proceso. No me dejaron sola en ningún momento, eso se agradece muchísimo.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Pablo Ibarra</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Parte importante para mí es que mi equipo esté bien protegido. Me ayudaron a encontrar la mejor opción y hoy me quedo mucho más tranquilo.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Ana López</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>La atención fue rápida, clara y muy profesional. Siento que tengo un respaldo real para mi empresa y mi familia.</p>
            </article>

            <article class="testimonials-card testimonials-card--featured">
              <div class="testimonials-card__name-row">
                <h3>Jessica G.</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Migramos toda la póliza corporativa sin interrupciones. El seguimiento a siniestros es impecable.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Luis Hernández</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Me dieron opciones claras y rápidas. La asesoría fue muy profesional y eso me ahorró bastante tiempo.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Patricia Soto</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Me acompañaron en cada paso del proceso. Siempre tuve respuesta oportuna y seguimiento puntual.</p>
            </article>

            <article class="testimonials-card testimonials-card--featured">
              <div class="testimonials-card__name-row">
                <h3>Fernando Reyes</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>Encontraron una cobertura mejor de la que teníamos antes y con condiciones más claras. Excelente servicio.</p>
            </article>

            <article class="testimonials-card">
              <div class="testimonials-card__name-row">
                <h3>Valeria Luna</h3>
                <div class="testimonials-card__stars" aria-label="5 de 5 estrellas">
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                  <i class="bi bi-star-fill" aria-hidden="true"></i>
                </div>
              </div>
              <p>La experiencia fue sencilla, clara y sin complicaciones. Hoy tengo más confianza en mis decisiones.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section id="solucion-ayuda" class="help-solution-section">
      <div class="container">
        <div class="help-solution-section__inner">
          <h2 class="help-solution-section__title">
            Te ayudamos a encontrar la mejor<br>
            solución <span>para ti o tu empresa</span>
          </h2>

          <p class="help-solution-section__subtitle">
            Diseñamos propuestas cuidando lo que es importante para ti.
          </p>

          <h3 class="help-solution-section__question">¿Cómo podemos ayudarte?</h3>

          <div class="help-solution-section__choices" aria-label="Opciones de ayuda">
            <article class="help-solution-card is-selected">
              <span class="help-solution-card__badge" aria-hidden="true">
                <i class="bi bi-check-lg"></i>
              </span>
              <div class="help-solution-card__media">
                <img src="assets/img/edificio.png" alt="Empresas">
              </div>
              <h4>Empresas</h4>
              <p>Protege tu empresa, sus activos y a tu equipo ante cualquier riesgo.</p>
            </article>

            <article class="help-solution-card">
              <span class="help-solution-card__badge" aria-hidden="true">
                <i class="bi bi-check-lg"></i>
              </span>
              <div class="help-solution-card__media">
                <img src="assets/img/persona.png" alt="Personas">
              </div>
              <h4>Personas</h4>
              <p>Protege tu salud, tu patrimonio y a quienes dependen de ti.</p>
            </article>

            <article class="help-solution-card">
              <span class="help-solution-card__badge" aria-hidden="true">
                <i class="bi bi-check-lg"></i>
              </span>
              <div class="help-solution-card__media">
                <img src="assets/img/asesoria.png" alt="Asesoría integral">
              </div>
              <h4>Asesoría integral</h4>
              <p>Te ayudamos a construir la mejor estrategia de protección y previsión.</p>
            </article>
          </div>

          <div class="help-solution-section__cta-wrap">
            <a class="help-solution-section__cta" href="servicios.php#portafolio">Continuar</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer global con enlaces utiles -->
  <footer class="footer-main">
    <div class="container">
      <div class="footer-main__panel">
        <div class="footer-main__columns">
          <div class="footer-main__column">
            <h6 class="footer-main__title">Empresas</h6>
            <ul class="list-unstyled footer-main__list">
              <li><a href="servicios.php#portafolio">Daños</a></li>
              <li><a href="servicios.php#portafolio">Autos</a></li>
              <li><a href="servicios.php#portafolio">Gastos Médicos</a></li>
              <li><a href="servicios.php#portafolio">Vida</a></li>
              <li><a href="servicios.php#portafolio">Viaje</a></li>
              <li><a href="servicios.php#portafolio">Fianzas</a></li>
              <li><a href="servicios.php#portafolio">Servicios Actuariales</a></li>
            </ul>
          </div>

          <div class="footer-main__column">
            <h6 class="footer-main__title">Personas</h6>
            <ul class="list-unstyled footer-main__list">
              <li><a href="servicios.php#portafolio">Autos</a></li>
              <li><a href="servicios.php#portafolio">Gastos Médicos</a></li>
              <li><a href="servicios.php#portafolio">Vida</a></li>
              <li><a href="servicios.php#portafolio">Viaje</a></li>
              <li><a href="servicios.php#portafolio">Hogar</a></li>
              <li><a href="servicios.php#portafolio">RC USA</a></li>
              <li><a href="servicios.php#portafolio">Servicios Actuariales</a></li>
            </ul>
          </div>

          <div class="footer-main__column">
            <h6 class="footer-main__title">Gestión Integral</h6>
            <ul class="list-unstyled footer-main__list">
              <li><a href="servicio-cliente.php#siniestros">Siniestros</a></li>
              <li><a href="servicio-cliente.php#reclamaciones">Reclamaciones</a></li>
              <li><a href="servicios.php#portafolio">Prevención e Ingeniería de riesgo</a></li>
              <li><a href="https://neo.rbaidon.com/" target="_blank" rel="noopener">Portal Clientes 24/7</a></li>
            </ul>
          </div>

          <div class="footer-main__column">
            <h6 class="footer-main__title">Nosotros</h6>
            <ul class="list-unstyled footer-main__list">
              <li><a href="quienes.php#nosotros">¿Quiénes Somos?</a></li>
              <li><a href="quienes.php#esr">Empresa Socialmente Responsable</a></li>
            </ul>
          </div>

          <div class="footer-main__column footer-main__column--contact">
            <h6 class="footer-main__title">Contacto</h6>
            <ul class="list-unstyled footer-main__list footer-main__list--contact">
              <li><a href="servicio-cliente.php#soporte" class="is-strong">Preguntas frecuentes</a></li>
              <li><a href="aviso-privacidad.php" class="is-strong">Aviso de privacidad</a></li>
            </ul>
            <a class="footer-main__access-btn" href="https://neo.rbaidon.com/" target="_blank" rel="noopener">Acceso a usuarios</a>
          </div>
        </div>

        <div class="footer-main__meta">
          <div class="footer-main__meta-left">
            <div class="footer-main__social">
              <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="footer-main__contact-line">
              <span>+52 (644) 410 8600</span>
              <span>|</span>
              <a href="mailto:obregon@rbaidon.com.mx">obregon@rbaidon.com.mx</a>
            </div>
          </div>

          <div class="footer-main__meta-right">
            Morelos No. 522 Ote. Col. Zona Norte. Cd. Obregón, Sonora. C.P. 85010<br>
            <?php echo $year; ?> © R. Baidón Agente de Seguros y de Fianzas.<br>
            Todos los derechos reservados.
          </div>
        </div>
      </div>

      <div class="footer-main__cta-strip">
        <a class="footer-main__cta-btn" href="https://neo.rbaidon.com/" target="_blank" rel="noopener">Habla con un asesor</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/main.js?v=8"></script>
</body>
</html>



