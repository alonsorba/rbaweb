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
  <link rel="stylesheet" href="assets/css/style.css?v=3">
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
            <li class="nav-item"><a class="nav-link" href="servicios.php">Nuestros servicios</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="quienes.php">Quienes somos</a></li>
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
    <section class="qs-hero py-5 position-relative overflow-hidden">
      <div class="container py-4">
        <div class="row align-items-end">
          <div class="col-lg-7">
            <div class="eyebrow text-white-80">Quienes Somos</div>
            <h1 class="display-5 fw-semibold lh-tight text-white mb-3">Comprometidos con su tranquilidad.</h1>
            <p class="lead text-white-80 mb-4">Protegemos a nuestros clientes con alternativas de prevision y proteccion justas, acompanandolos en cada tramite y siniestro.</p>
            <div class="d-flex flex-wrap gap-3 text-white-80 small">
              <div class="pill-highlight d-flex align-items-center gap-2"><i class="bi bi-shield-check"></i><span>Pago justo y servicio cercano</span></div>
              <div class="pill-highlight d-flex align-items-center gap-2"><i class="bi bi-people"></i><span>Equipo humano profesional</span></div>
              <div class="pill-highlight d-flex align-items-center gap-2"><i class="bi bi-lightning-charge"></i><span>Respuesta rapida y clara</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 mission-vision">
      <div class="container">
        <div class="row g-5 align-items-start">
          <div class="col-lg-6">
            <div class="section-title-line">
              <h3 class="fw-semibold">Nuestra Mision</h3>
            </div>
            <p class="text-muted mb-0">Proporcionar a nuestros clientes las mejores alternativas de prevision y proteccion, asi como el pago mas justo en el caso de presentarse una eventualidad, tratando siempre de satisfacer al maximo sus necesidades de costo, coberturas, condiciones y servicios competitivos, desarrollando productos y servicios de calidad con un equipo humano profesional, capaz e innovador que garantice la permanencia y crecimiento de nuestros clientes, colaboradores, accionistas y de nuestro pais.</p>
          </div>
          <div class="col-lg-6">
            <div class="section-title-line">
              <h3 class="fw-semibold">Nuestra Vision</h3>
            </div>
            <p class="text-muted mb-0">Lograr el liderazgo en la region noroeste del pais, con calidad de servicio global, contando con un equipo humano profesional, capaz e innovador y con infraestructura y tecnologia de alto nivel.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="values-banner position-relative py-5 overflow-hidden text-white">
      <div class="container position-relative">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <h3 class="fw-semibold mb-3">Nuestros Valores</h3>
            <p class="text-white-80 mb-4">Cuidamos la relacion de largo plazo con cada cliente, colocando sus intereses por encima de los nuestros.</p>
          </div>
          <div class="col-lg-6">
            <ul class="values-list list-unstyled mb-0">
              <li>Servicio</li>
              <li>Responsabilidad</li>
              <li>Liderazgo</li>
              <li>Efectividad</li>
              <li>Honestidad</li>
              <li>Innovacion</li>
              <li>Mejora Continua</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="director-banner position-relative py-5 text-white overflow-hidden">
      <div class="container position-relative">
        <div class="row g-4 align-items-center">
          <div class="col-lg-4">
            <div class="director-heading">Mensaje del Director</div>
          </div>
          <div class="col-lg-8">
            <div class="glass-card director-card p-4 p-lg-5 text-white">
              <p class="mb-3">En R. Baidon estamos "Comprometidos con su Tranquilidad", nuestro compromiso es satisfacer al maximo las necesidades de proteccion de Usted, su familia y su negocio.</p>
              <p class="mb-3">Nos interesa mucho establecer una relacion de largo plazo con Usted, una relacion basada en cuidar siempre sus intereses aun por encima de los nuestros.</p>
              <p class="mb-3">Ademas, nos comprometemos a seguir buscando nuevas y mejores formas de resolver sus necesidades de proteccion y ofrecerle un excelente servicio en la contratacion de su seguro.</p>
              <p class="mb-4">Asi mismo, nos comprometemos a estar siempre disponibles para apoyarlo en caso de presentarse un siniestro o reclamacion y asegurarnos asi de que usted reciba la mejor atencion y el pago mas justo.</p>
              <div class="director-signature">
                <div class="title">Ing. Rogelio Baidon Olvera</div>
                <div class="subtitle">Director General</div>
              </div>
            </div>
          </div>
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
