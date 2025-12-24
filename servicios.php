<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $ctaMessage = 'Cobertura integral';
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?> | Nuestros servicios</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css?v=2">
</head>

<body>
  <header class="shadow-sm sticky-top bg-white">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="topNav">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-primary" href="index.php">
          <img src="assets/img/R BAIDON V3 BLANCO.png" class="brand-logo" alt="RBA Seguros &amp; Fianzas">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="servicios.php">Nuestros servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="quienes.php">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="servicio-cliente.php">Servicio al cliente</a></li>
          </ul>
          <div class="ms-lg-3 mt-3 mt-lg-0">
            <a class="btn nav-access-btn w-100" href="https://neo.rbaidon.com/">Acceso a usuarios</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="page-hero py-5">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <div class="eyebrow text-white-80">Soluciones integrales</div>
            <h1 class="display-5 fw-semibold lh-tight mb-3">Coberturas hechas a medida para tu empresa y tu familia.</h1>
            <p class="lead text-white-80 mb-4">Diseñamos el programa completo: diagnostico de riesgos, colocacion con las mejores aseguradoras y acompañamiento en siniestros sin importar la hora.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-light text-primary" href="index.php#contacto">Habla con un asesor</a>
              <a class="btn btn-lg btn-outline-light" href="tel:<?php echo $phone; ?>">Llamar ahora</a>
            </div>
            <div class="d-flex align-items-center gap-3 mt-4 text-white-80 small">
              <div class="d-flex align-items-center gap-2"><i class="bi bi-shield-check"></i><span>Colocacion multiaseguradora</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-clock-history"></i><span>Atencion 24/7</span></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tile shadow-lg">
              <p class="text-primary fw-semibold mb-1"><?php echo $ctaMessage; ?></p>
              <h5 class="fw-semibold">Que puedes esperar de nuestro equipo</h5>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-0">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Auditoria de polizas actuales y deteccion de brechas.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Plan de proteccion por unidades de negocio, patrimonio y personas clave.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Reporte ejecutivo con indicadores y recordatorios de renovacion.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gestor dedicado para siniestros y tramites.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portafolio" class="py-5">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Nuestros servicios</div>
          <h2 class="fw-semibold">Proteccion a la medida en un solo portafolio.</h2>
          <p class="text-muted">Selecciona el frente que quieres fortalecer y te asignamos a un especialista.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 anchor-offset" id="autos">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-car-front"></i></div>
              <h5 class="fw-semibold">Autos</h5>
              <p class="text-muted">Cobertura integral para tu vehiculo y terceros con asistencia en carretera y gestion de siniestros.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Danio material y perdidas totales.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Robo total con acompanamiento en tramites.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Responsabilidad civil y danos a terceros.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos medicos a ocupantes.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Asistencia vial 24/7.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Asistencia legal y gestor en siniestro.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Cotizar cobertura</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="gastos-medicos">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-heart-pulse"></i></div>
              <h5 class="fw-semibold">Gastos Medicos</h5>
              <p class="text-muted">Planes nacionales e internacionales respaldados por aseguradoras lideres y red hospitalaria premium.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos medicos menores.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos medicos mayores.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Accidentes personales.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Solicitar propuesta</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="vida">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-shield-heart"></i></div>
              <h5 class="fw-semibold">Vida</h5>
              <p class="text-muted">Proteccion financiera ante fallecimiento o invalidez con planes disenados para ahorro, educacion o retiro.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Proteccion, ahorro, educacion y retiro.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Fallecimiento y muerte accidental.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Perdidas organicas.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Invalidez total y permanente.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Seguro saldado por invalidez.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Hablar con especialista</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="casa">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-house-check"></i></div>
              <h5 class="fw-semibold">Casa Habitacion</h5>
              <p class="text-muted">Proteccion para tu hogar, bienes y responsabilidad a terceros con planes hechos a la medida.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Incendio, rayo y/o explosion.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Fenomenos hidrometeorologicos.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Terremoto y/o erupcion volcanica.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Robo y rotura de cristales.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Responsabilidad civil familiar, patronal o arrendatario.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Asistencia en el hogar y remocion de escombros.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos extra o perdida de rentas.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Equipo electronico y electrodomestico.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Solicitar evaluacion</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="viajero">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-airplane"></i></div>
              <h5 class="fw-semibold">Viajero</h5>
              <p class="text-muted">Cobertura en cualquier parte del mundo con respaldo en emergencias medicas y traslados.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos medicos de emergencia.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Indemnizacion por muerte accidental.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Indemnizacion por invalidez total o permanente.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Traslado de emergencia y repatriacion medica.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos funerarios o repatriacion de restos.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Solicitar certificado</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="proceso" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <div class="eyebrow text-primary">Como trabajamos</div>
            <h3 class="fw-semibold mb-3">Metodologia clara de principio a fin.</h3>
            <p class="text-muted">Cada cliente tiene un gestor dedicado y tableros de seguimiento para renovaciones, siniestros y certificados.</p>
            <a class="btn btn-gradient mt-2" href="index.php#contacto">Iniciar evaluacion</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-clipboard-check"></i></div>
                  <h6 class="fw-semibold mb-1">1. Diagnostico</h6>
                  <p class="text-muted small mb-0">Revisamos polizas actuales, contratos y riesgos operativos.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-layers"></i></div>
                  <h6 class="fw-semibold mb-1">2. Diseno</h6>
                  <p class="text-muted small mb-0">Preparamos escenarios comparativos con aseguradoras top.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-rocket-takeoff"></i></div>
                  <h6 class="fw-semibold mb-1">3. Implementacion</h6>
                  <p class="text-muted small mb-0">Emision, certificados y onboarding de usuarios.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-headset"></i></div>
                  <h6 class="fw-semibold mb-1">4. Acompañamiento</h6>
                  <p class="text-muted small mb-0">Mesa de servicio y reportes para renovaciones y siniestros.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="py-5 text-center text-white position-relative overflow-hidden">
      <div class="shape-blur"></div>
      <div class="container position-relative">
        <div class="eyebrow text-white-80">Listos para empezar</div>
        <h2 class="fw-semibold">Cuéntanos que necesitas asegurar.</h2>
        <p class="lead text-white-80 mb-4">Un asesor te contactara el mismo dia para preparar la propuesta correcta.</p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <a class="btn btn-lg btn-light text-primary" href="index.php#contacto">Contactar ahora</a>
          <a class="btn btn-lg btn-outline-light" href="mailto:<?php echo $email; ?>">Enviar correo</a>
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
            <li><a href="servicios.php#autos">Autos</a></li>
            <li><a href="servicios.php#gastos-medicos">Gastos Medicos</a></li>
            <li><a href="servicios.php#vida">Vida</a></li>
            <li><a href="servicios.php#casa">Casa Habitacion</a></li>
            <li><a href="servicios.php#viajero">Viajero</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Quienes Somos?</h6>
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
            <li><a href="servicio-cliente.php#faq">Preguntas Frecuentes</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Contacto</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="index.php#contacto">Formulario de Contacto</a></li>
            <li><a href="aviso-privacidad.php">Aviso de Privacidad</a></li>
            <li><a href="ubicacion.php#cd-obregon">Ubicacion</a></li>
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
  <script src="assets/js/main.js?v=4"></script>
</body>
</html>

