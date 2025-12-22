<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $ctaMessage = 'Acompanamiento cercano';
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?> | Quienes somos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="shadow-sm sticky-top bg-white">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="topNav">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-primary" href="index.php">
          <img src="assets/img/R BAIDON V3 RGB (WEB).png" class="brand-logo" alt="RBA Seguros &amp; Fianzas">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="servicios.php">Nuestros servicios</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="quienes.php">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="servicio-cliente.php">Servicio al cliente</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="nosotros" class="page-hero py-5">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <div class="eyebrow text-white-80">Sobre RBA</div>
            <h1 class="display-5 fw-semibold lh-tight mb-3">Somos un equipo que protege personas, proyectos y reputacion.</h1>
            <p class="lead text-white-80 mb-4">Por mas de 15 anos hemos disenado programas de seguros y fianzas que combinan analisis tecnico y un servicio tan cercano como el de un concierge.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-light text-primary" href="index.php#contacto">Agenda una llamada</a>
              <a class="btn btn-lg btn-outline-light" href="servicios.php#portafolio">Ver coberturas</a>
            </div>
            <div class="d-flex align-items-center gap-3 mt-4 text-white-80 small">
              <div class="d-flex align-items-center gap-2"><i class="bi bi-people"></i><span>Equipo senior multidisciplinario</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-patch-check"></i><span>Procesos auditados y medibles</span></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tile shadow-lg">
              <p class="text-primary fw-semibold mb-1"><?php echo $ctaMessage; ?></p>
              <h5 class="fw-semibold">Nuestra promesa</h5>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-0">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Te asignamos gestores con experiencia en tu industria.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Te acompanamos en siniestros y renovaciones con tableros claros.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Tomamos decisiones respaldadas por datos y aseguradoras lideres.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="historia" class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="eyebrow text-primary">Trayectoria</div>
            <h3 class="fw-semibold mb-3">Crecimos atendiendo empresas y familias que buscan claridad.</h3>
            <p class="text-muted mb-3">Nacimos como un despacho boutique y hoy operamos con procesos de clase empresarial: evaluaciones de riesgo, colocacion multiaseguradora y mesas de servicio 24/7.</p>
            <p class="text-muted mb-4">Cada cuenta tiene un responsable ejecutivo y un equipo especializado en suscripcion, operacion y siniestros.</p>
            <div class="d-flex gap-3">
              <a class="btn btn-gradient" href="servicios.php#portafolio">Explorar portafolio</a>
              <a class="btn btn-outline-primary" href="index.php#contacto">Hablar con direccion</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                  <h6 class="fw-semibold mb-1">Enfoque empresarial</h6>
                  <p class="text-muted small mb-0">Programas por unidad de negocio, sitio y proyectos especiales.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-heart-pulse"></i></div>
                  <h6 class="fw-semibold mb-1">Cuidado personal</h6>
                  <p class="text-muted small mb-0">Gestion humana para familias, patrimonio y salud.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-lightning-charge"></i></div>
                  <h6 class="fw-semibold mb-1">Mesa de respuesta</h6>
                  <p class="text-muted small mb-0">Siniestros atendidos por un equipo que sigue indicadores.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-shield-lock"></i></div>
                  <h6 class="fw-semibold mb-1">Gobernanza</h6>
                  <p class="text-muted small mb-0">Cumplimiento documental y auditorias recurrentes.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="equipo" class="py-5 bg-soft">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Equipo</div>
          <h3 class="fw-semibold">Liderazgo cercano y accesible.</h3>
          <p class="text-muted">Direccion que participa en cada cuenta y equipos operativos dedicados por sector.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-2">
                <div class="avatar">RB</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Rodrigo Baidon</h6>
                  <small class="text-muted">Director General</small>
                </div>
              </div>
              <p class="text-muted small mb-3">Mas de 20 anos en seguros y fianzas dirigiendo programas corporativos y patrimoniales.</p>
              <a class="link-primary fw-semibold small" href="index.php#contacto">Coordinar mensaje</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-2">
                <div class="avatar">SG</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Mesa de Siniestros</h6>
                  <small class="text-muted">Respuesta 24/7</small>
                </div>
              </div>
              <p class="text-muted small mb-3">Coordinadores y ajustadores aliados que activan polizas y entregables sin esperas.</p>
              <a class="link-primary fw-semibold small" href="index.php#contacto">Reportar caso</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-2">
                <div class="avatar">CS</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Consultoria Sectorial</h6>
                  <small class="text-muted">Industria, retail y gobierno</small>
                </div>
              </div>
              <p class="text-muted small mb-3">Consultores por vertical con benchmarks, comparativos y seguimiento a KPIs de riesgo.</p>
              <a class="link-primary fw-semibold small" href="servicios.php#empresariales">Ver enfoque</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="valores" class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <div class="eyebrow text-primary">Valores</div>
            <h3 class="fw-semibold mb-3">Principios que guian cada renovacion y cada siniestro.</h3>
            <p class="text-muted mb-3">Creamos relaciones de largo plazo con compromisos medibles y reportes periodicos.</p>
            <p class="text-muted mb-4">Creemos en decisiones basadas en datos, transparencia y acompanamiento humano.</p>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-clipboard2-check"></i></div>
                  <h6 class="fw-semibold mb-1">Claridad</h6>
                  <p class="text-muted small mb-0">Explicamos escenarios y exclusiones con lenguaje simple.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-speedometer2"></i></div>
                  <h6 class="fw-semibold mb-1">Agilidad</h6>
                  <p class="text-muted small mb-0">Respuestas en minutos y compromisos de seguimiento por escrito.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-people-fill"></i></div>
                  <h6 class="fw-semibold mb-1">Empatia</h6>
                  <p class="text-muted small mb-0">Un gestor acompana cada tramite y siniestro.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-stars"></i></div>
                  <h6 class="fw-semibold mb-1">Excelencia</h6>
                  <p class="text-muted small mb-0">Procesos auditados y mediciones de satisfaccion.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="alianzas" class="py-5 bg-soft">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Alianzas</div>
          <h3 class="fw-semibold">Trabajamos con aseguradoras y afianzadoras lideres.</h3>
          <p class="text-muted">Seleccionamos la combinacion correcta segun tu riesgo y velocidad de respuesta requerida.</p>
        </div>
        <div class="row g-3">
          <div class="col-6 col-md-3">
            <div class="tile text-center h-100">
              <div class="icon-circle mx-auto"><i class="bi bi-building"></i></div>
              <p class="mb-0 fw-semibold">Aseguradoras top</p>
              <small class="text-muted">Programas corporativos</small>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="tile text-center h-100">
              <div class="icon-circle mx-auto"><i class="bi bi-shield-check"></i></div>
              <p class="mb-0 fw-semibold">Afianzadoras</p>
              <small class="text-muted">Fianzas a la medida</small>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="tile text-center h-100">
              <div class="icon-circle mx-auto"><i class="bi bi-cpu"></i></div>
              <p class="mb-0 fw-semibold">Herramientas</p>
              <small class="text-muted">Paneles y reportes</small>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="tile text-center h-100">
              <div class="icon-circle mx-auto"><i class="bi bi-geo-alt"></i></div>
              <p class="mb-0 fw-semibold">Cobertura nacional</p>
              <small class="text-muted">Red de ajustadores</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="py-5 text-center text-white position-relative overflow-hidden">
      <div class="shape-blur"></div>
      <div class="container position-relative">
        <div class="eyebrow text-white-80">Listos para apoyarte</div>
        <h2 class="fw-semibold">Conectemos para entender tu situacion y priorizar riesgos.</h2>
        <p class="lead text-white-80 mb-4">Un asesor senior se encargara personalmente de tu caso.</p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <a class="btn btn-lg btn-light text-primary" href="tel:<?php echo $phone; ?>">Llamanos</a>
          <a class="btn btn-lg btn-outline-light" href="index.php#contacto">Escribir al equipo</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer-main">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Nuestros Servicios</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="servicios.php#personales">Seguros Personales</a></li>
            <li><a href="servicios.php#empresariales">Seguros Empresariales</a></li>
            <li><a href="servicios.php#gobierno">Seguros de Gobierno</a></li>
            <li><a href="servicios.php#fianzas">Fianzas</a></li>
            <li><a href="servicios.php#rcusa">Seguro RC USA</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Quienes Somos?</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="quienes.php#nosotros">Sobre Nosotros</a></li>
            <li><a href="quienes.php#equipo">Equipo</a></li>
            <li><a href="quienes.php#alianzas">Alianzas</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Servicio al cliente</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="servicio-cliente.php#reclamaciones">Reclamaciones</a></li>
            <li><a href="servicio-cliente.php#siniestros">Siniestros</a></li>
            <li><a href="servicio-cliente.php#faq">Preguntas Frecuentes</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Contacto</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="index.php#contacto">Formulario de Contacto</a></li>
            <li><a href="aviso-privacidad.php">Aviso de Privacidad</a></li>
            <li><a href="index.php#contacto">Ubicacion</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">
            <a class="footer-heading-link" href="#">Acceso a Clientes</a>
          </h6>
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
  <script src="assets/js/main.js"></script>
</body>
</html>
