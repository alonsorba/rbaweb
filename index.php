<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $ctaMessage = 'Cotiza en minutos';
  $year = date('Y');
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
  <link rel="stylesheet" href="assets/css/style.css?v=2">
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
            <li class="nav-item"><a class="nav-link" href="quienes.php">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="servicio-cliente.php">Servicio al cliente</a></li>
          </ul>
        </div>
      </div>
    </nav>
</header>

  <main>
    <section class="hero-carousel">
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Primera diapositiva"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Segunda diapositiva"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Tercera diapositiva"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/01.jpg" class="d-block w-100" alt="Asesores de seguros colaborando">
            <div class="carousel-caption">
              <div class="eyebrow text-white-80">Proteccion total</div>
              <h2 class="fw-semibold mb-2">Soluciones integrales para tu empresa y familia.</h2>
              <p class="mb-0 text-white-80">Gestionamos riesgos con asesoria experta y respuesta inmediata.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/02.jpg" class="d-block w-100" alt="Asegurando acuerdos de negocio">
            <div class="carousel-caption">
              <div class="eyebrow text-white-80">Servicio boutique</div>
              <h2 class="fw-semibold mb-2">Acompa¤amos cada decision de cobertura.</h2>
              <p class="mb-0 text-white-80">Planes claros, sin letras peque¤as y listos para tus operaciones.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/03.jpg" class="d-block w-100" alt="Familia protegida con seguro">
            <div class="carousel-caption">
              <div class="eyebrow text-white-80">Confianza que responde</div>
              <h2 class="fw-semibold mb-2">Coberturas que se ajustan a tu estilo de vida.</h2>
              <p class="mb-0 text-white-80">Red de atencion 24/7 y gestoria de siniestros sin fricciones.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </section>

    <section id="servicios" class="py-5">
      <div class="container">
        <div class="row align-items-center mb-4">
          <div class="col-lg-8">
            <div class="eyebrow text-primary">Portafolio</div>
            <h2 class="fw-semibold">Coberturas diseñadas para empresas y familias.</h2>
            <p class="text-muted lead">Simplificamos la contratacion y administracion de seguros para que tu operacion siga sin fricciones.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="btn btn-outline-primary btn-lg" href="#contacto">Agenda una llamada</a>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-building-check"></i>
              </div>
              <h5 class="fw-semibold">Seguros Empresariales</h5>
              <p class="text-muted">Proteccion patrimonial, responsabilidad civil, transporte y riesgos especiales con planes a medida.</p>
              <a class="link-primary fw-semibold" href="#contacto">Hablar con un especialista</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <h5 class="fw-semibold">Gastos Medicos</h5>
              <p class="text-muted">Cobertura nacional e internacional, red hospitalaria premium y concierge de salud.</p>
              <a class="link-primary fw-semibold" href="#contacto">Solicitar guia medica</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-shield-fill-check"></i>
              </div>
              <h5 class="fw-semibold">Vida y Ahorro</h5>
              <p class="text-muted">Soluciones de prevision, ahorro y retiro con acompañamiento humano y transparente.</p>
              <a class="link-primary fw-semibold" href="#contacto">Conocer planes</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-car-front"></i>
              </div>
              <h5 class="fw-semibold">Autos Ejecutivos</h5>
              <p class="text-muted">Coberturas flexibles, autos de reemplazo y asistencia en carretera sin esperas.</p>
              <a class="link-primary fw-semibold" href="#contacto">Cotizar flota</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-cash-coin"></i>
              </div>
              <h5 class="fw-semibold">Fianzas</h5>
              <p class="text-muted">Cumplimiento, fidelidad y licitaciones con respaldo de afianzadoras lideres.</p>
              <a class="link-primary fw-semibold" href="#contacto">Subir requisitos</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="tile h-100">
              <div class="icon-circle">
                <i class="bi bi-lightning-charge"></i>
              </div>
              <h5 class="fw-semibold">Respuesta a Siniestros</h5>
              <p class="text-muted">Acompañamiento inmediato, coordinacion con ajustadores y gestion hasta el pago.</p>
              <a class="link-primary fw-semibold" href="#contacto">Reportar ahora</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="hero" class="position-relative overflow-hidden text-white">
      <div class="shape-blur"></div>
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="eyebrow">Seguros empresariales y personales</div>
            <h1 class="display-4 fw-semibold lh-tight mb-3">Protegemos lo que valoras con un servicio que se siente premium.</h1>
            <p class="lead text-white-80 mb-4">Asesoria experta, respuesta inmediata y productos a la medida respaldados por las mejores aseguradoras y afianzadoras.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-gradient" href="#contacto">Habla con un asesor</a>
              <a class="btn btn-lg btn-outline-light" href="servicios.php#portafolio">Ver coberturas</a>
            </div>
            <div class="d-flex align-items-center gap-3 mt-4 text-white-80">
              <div class="d-flex align-items-center gap-2"><i class="bi bi-shield-check text-white"></i><span>Respaldo integral</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-clock-history text-white"></i><span>Atencion 24/7</span></div>
            </div>
          </div>
          <div class="col-lg-6 text-center mt-5 mt-lg-0">
            <div class="glass-card p-4">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <p class="text-white-80 small mb-1"><?php echo $ctaMessage; ?></p>
                  <h3 class="fw-semibold mb-0">Recibe tu propuesta hoy</h3>
                </div>
                <span class="badge bg-light text-primary">VIP</span>
              </div>
              <hr class="border-light">
              <form class="row g-3">
                <div class="col-12">
                  <label class="form-label text-white-80">Nombre</label>
                  <input type="text" class="form-control form-control-lg" placeholder="Escribe tu nombre" required>
                </div>
                <div class="col-12">
                  <label class="form-label text-white-80">Correo</label>
                  <input type="email" class="form-control form-control-lg" placeholder="nombre@correo.com" required>
                </div>
                <div class="col-12">
                  <label class="form-label text-white-80">Interes</label>
                  <select class="form-select form-select-lg">
                    <option>Seguros Empresariales</option>
                    <option>Gastos Medicos</option>
                    <option>Vida</option>
                    <option>Autos</option>
                    <option>Fianzas</option>
                  </select>
                </div>
                <div class="col-12 d-grid">
                  <button type="submit" class="btn btn-lg btn-gradient">Recibir asesoria</button>
                </div>
                <p class="small text-white-60 mb-0">Protegemos tus datos conforme a nuestro <a class="text-white" href="aviso-privacidad.php">Aviso de Privacidad</a>.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="ventajas" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="eyebrow text-primary">Por que elegirnos</div>
            <h2 class="fw-semibold mb-4">Un trato humano con estandares de servicio de marcas de lujo.</h2>
            <ul class="list-unstyled d-grid gap-3">
              <li class="d-flex gap-3 align-items-start">
                <div class="check-circle"><i class="bi bi-check-lg"></i></div>
                <div>
                  <h6 class="mb-1 fw-semibold">Diseño y tecnologia</h6>
                  <p class="mb-0 text-muted">Paneles, recordatorios y reportes listos para integrarse a tu ERP o CRM.</p>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-start">
                <div class="check-circle"><i class="bi bi-check-lg"></i></div>
                <div>
                  <h6 class="mb-1 fw-semibold">Equipo especialista</h6>
                  <p class="mb-0 text-muted">Suscripcion, siniestros y afinacion de polizas con consultores senior.</p>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-start">
                <div class="check-circle"><i class="bi bi-check-lg"></i></div>
                <div>
                  <h6 class="mb-1 fw-semibold">Respuestas claras</h6>
                  <p class="mb-0 text-muted">Sin letras pequeñas: indicadores de riesgo y cobertura en dashboards simples.</p>
                </div>
              </li>
            </ul>
            <div class="d-flex gap-3 mt-4">
              <a class="btn btn-gradient" href="#contacto">Programar onboarding</a>
              <a class="btn btn-outline-primary" href="mailto:<?php echo $email; ?>">Escribenos</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg">
              <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1200&q=80" class="w-100 h-100 object-fit-cover" alt="Equipo de seguros">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonios" class="py-5">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Clientes</div>
          <h2 class="fw-semibold">Confianza que se gana con resultados.</h2>
          <p class="text-muted">Historias reales de empresas y familias que aseguramos.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="avatar">JG</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Jessica G.</h6>
                  <small class="text-muted">Directora de Finanzas</small>
                </div>
              </div>
              <p class="mb-0 text-muted">"Migramos toda la poliza corporativa sin interrupciones. El seguimiento a siniestros es impecable."</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="avatar">MR</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Marco R.</h6>
                  <small class="text-muted">Emprendedor</small>
                </div>
              </div>
              <p class="mb-0 text-muted">"Me explicaron cada opcion de vida y ahorro con claridad. Se siente un servicio boutique."</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tile h-100">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="avatar">AL</div>
                <div>
                  <h6 class="mb-0 fw-semibold">Ana L.</h6>
                  <small class="text-muted">Operaciones</small>
                </div>
              </div>
              <p class="mb-0 text-muted">"Reporte un siniestro nocturno y respondieron en minutos. Todo quedo resuelto rapido."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="py-5 text-center text-white position-relative overflow-hidden">
      <div class="shape-blur"></div>
      <div class="container position-relative">
        <div class="eyebrow text-white-80">Listos cuando nos necesites</div>
        <h2 class="fw-semibold">Hablemos de tu proximo proyecto o poliza.</h2>
        <p class="lead text-white-80 mb-4">Deja que nuestro equipo prepare una propuesta que proteja tu operacion y tu gente.</p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <a class="btn btn-lg btn-light text-primary" href="tel:<?php echo $phone; ?>">Llamanos</a>
          <a class="btn btn-lg btn-outline-light" href="mailto:<?php echo $email; ?>">Escribenos</a>
        </div>
      </div>
    </section>

    <section id="contacto" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="eyebrow text-primary">Contacto</div>
            <h2 class="fw-semibold">Estamos cerca, con un equipo dedicado.</h2>
            <p class="text-muted">Completa el formulario y agenda una llamada con un consultor especializado en tu sector.</p>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-telephone-forward text-primary fs-4"></i><span><?php echo $phone; ?></span></div>
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-envelope-open text-primary fs-4"></i><span><?php echo $email; ?></span></div>
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-geo-alt text-primary fs-4"></i><span>CDMX y atencion nacional</span></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="tile p-4 shadow-sm">
              <form method="post" action="procesar-contacto.php" class="row g-3">
                <div class="col-12">
                  <label class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Correo</label>
                  <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Telefono</label>
                  <input type="tel" name="telefono" class="form-control" placeholder="55 0000 0000" required>
                </div>
                <div class="col-12">
                  <label class="form-label">Servicio de interes</label>
                  <select name="servicio" class="form-select">
                    <option>Seguros Empresariales</option>
                    <option>Gastos Medicos</option>
                    <option>Autos</option>
                    <option>Vida</option>
                    <option>Fianzas</option>
                    <option>Otro</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Mensaje</label>
                  <textarea name="mensaje" rows="4" class="form-control" placeholder="Cuentanos que necesitas" required></textarea>
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center">
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
            <li><a href="#contacto">Formulario de Contacto</a></li>
            <li><a href="aviso-privacidad.php">Aviso de Privacidad</a></li>
            <li><a href="ubicacion.php#cd-obregon">Ubicacion</a></li>
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
  <script src="assets/js/main.js?v=2"></script>
</body>
</html>
