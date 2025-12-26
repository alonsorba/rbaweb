<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?> | Ubicacion</title>
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
            <div class="eyebrow text-white-80">Ubicacion</div>
            <h1 class="display-5 fw-semibold lh-tight mb-3">Estamos cerca de ti con oficinas en Sonora.</h1>
            <p class="lead text-white-80 mb-4">Cd. Obregon es nuestra oficina matriz y Hermosillo extiende nuestra atencion en el estado.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-light text-primary" href="#cd-obregon">Ver oficina matriz</a>
              <a class="btn btn-lg btn-outline-light" href="#hermosillo">Ver oficina Hermosillo</a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tile shadow-lg">
              <p class="text-primary fw-semibold mb-1">Contactanos directo</p>
              <h5 class="fw-semibold">Telefonos y correos</h5>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-0">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-geo-alt-fill"></i><span>Cd. Obregon (oficina matriz): <a href="tel:+526444108600" class="link-primary fw-semibold">(644) 410 8600</a> · <a href="mailto:obregon@rbaidon.com.mx" class="link-primary fw-semibold">obregon@rbaidon.com.mx</a></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-geo-alt-fill"></i><span>Hermosillo: <a href="tel:+526222105870" class="link-primary fw-semibold">(622) 210 58 70</a> · <a href="mailto:hermosillo@rbaidon.com.mx" class="link-primary fw-semibold">hermosillo@rbaidon.com.mx</a></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-clock-history"></i><span>Atencion personalizada y seguimiento en sitio cuando lo necesites.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" id="cd-obregon">
      <div class="container">
        <div class="location-header d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
          <div>
            <div class="location-pill">Oficina matriz</div>
            <h2 class="fw-semibold mb-1">Cd. Obregon</h2>
            <p class="text-muted mb-0">Nuestra sede principal y punto de atencion central para clientes.</p>
          </div>
          <a class="btn btn-outline-primary btn-sm" href="https://maps.app.goo.gl/vNUhqXXGTEnwPeto8" target="_blank" rel="noopener">Abrir en Google Maps</a>
        </div>
        <div class="location-card mb-4">
          <div class="ratio ratio-21x9 location-map">
            <iframe src="https://www.google.com/maps?q=R.+Baidon,+Av.+Jose+Maria+Morelos+y+Pavon+522,+Norte,+Urb.+No.+4,+85000+Cd.+Obregon,+Sonora&output=embed" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="location-info text-center">
            <h5 class="fw-semibold mb-1">Morelos No. 522 Ote. Col. Zona Norte</h5>
            <p class="text-muted mb-1">Cd. Obregon, Sonora C.P. 85010</p>
            <p class="mb-2">Tel. (644) 410 8600</p>
            <a class="link-primary fw-semibold" href="mailto:obregon@rbaidon.com.mx">obregon@rbaidon.com.mx</a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-soft" id="hermosillo">
      <div class="container">
        <div class="location-header d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
          <div>
            <div class="location-pill">Oficina</div>
            <h2 class="fw-semibold mb-1">Hermosillo</h2>
            <p class="text-muted mb-0">Equipo local para visitas y seguimiento en la capital del estado.</p>
          </div>
          <a class="btn btn-outline-primary btn-sm" href="https://maps.app.goo.gl/5AWZf6QMzi85Wz8Z8" target="_blank" rel="noopener">Abrir en Google Maps</a>
        </div>
        <div class="location-card">
          <div class="ratio ratio-21x9 location-map">
            <iframe src="https://www.google.com/maps?q=R.+Baidon+-+Sucursal+Hermosillo,+Av.+Santos+Degollado+3,+Local+C,+Col.+Constitucion,+Hermosillo,+Sonora+83150&output=embed" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="location-info text-center">
            <h5 class="fw-semibold mb-1">Av. Santos Degollado 3-Local C</h5>
            <p class="text-muted mb-1">Col. Constitucion</p>
            <p class="text-muted mb-1">Hermosillo, Sonora C.P. 83150</p>
            <p class="mb-2">Tel. (622) 210 58 70</p>
            <a class="link-primary fw-semibold" href="mailto:hermosillo@rbaidon.com.mx">hermosillo@rbaidon.com.mx</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer-main">
    <div class="container py-5">
      <div class="row g-4 align-items-start">
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
