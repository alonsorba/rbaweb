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
            <li class="nav-item"><a class="nav-link" href="index.php#servicios">Inicio</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="servicios.php#portafolio">Nuestros servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="quienes.php#nosotros">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="servicio-cliente.php#soporte">Servicio al cliente</a></li>
          </ul>
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
          <div class="col-md-6 col-lg-4 anchor-offset" id="empresariales">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-building-check"></i></div>
              <h5 class="fw-semibold">Seguros Empresariales</h5>
              <p class="text-muted">Protegemos activos criticos, operaciones y responsabilidades para que tu negocio no se detenga.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Daños, flota, transporte y equipo electronico.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Responsabilidad civil y profesional.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Planes por sitio, proyecto o franquicia.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Agenda diagnostico</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="personales">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-heart-pulse"></i></div>
              <h5 class="fw-semibold">Seguros Personales</h5>
              <p class="text-muted">Acompañamos a familias con planes de salud, vida y ahorro administrados con cuidado.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gastos medicos mayores con red hospitalaria premium.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Vida, ahorro y retiro con proyecciones claras.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Autos ejecutivos y asistencia en viaje.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Solicitar propuesta</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="gobierno">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-bank"></i></div>
              <h5 class="fw-semibold">Seguros de Gobierno</h5>
              <p class="text-muted">Programas para entes publicos con cumplimiento regulatorio y soporte documental completo.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Polizas de obra, servicios y responsabilidad.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Gestion de renovaciones y entregables.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Soporte a licitaciones y testigos sociales.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Hablar con especialista</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="fianzas">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-cash-coin"></i></div>
              <h5 class="fw-semibold">Fianzas</h5>
              <p class="text-muted">Respaldamos obligaciones con tiempos de emision ajustados a tus proyectos.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Cumplimiento, anticipo, buena calidad y fidelidad.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Afianzadoras lideres y cartas fianza.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Acompañamiento en procesos de liberacion.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Subir requisitos</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="rcusa">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-globe-americas"></i></div>
              <h5 class="fw-semibold">Seguro RC USA</h5>
              <p class="text-muted">Coberturas de responsabilidad civil y productos para operaciones en Estados Unidos.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Polizas emitidas con aseguradoras avaladas en USA.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Soporte en ingles y coordinacion de certificados.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Extension a ventas en linea y exportaciones.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Solicitar certificado</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 anchor-offset" id="siniestros">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-lightning-charge"></i></div>
              <h5 class="fw-semibold">Respuesta a siniestros</h5>
              <p class="text-muted">Equipo dedicado para activar polizas, coordinar ajustadores y cerrar indemnizaciones.</p>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Mesa de control 24/7 con seguimiento puntual.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Checklist de documentos y calendarizacion de visitas.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Reporteria ejecutiva hasta el pago.</span></li>
              </ul>
              <a class="link-primary fw-semibold" href="index.php#contacto">Reportar ahora</a>
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
