<?php
  $siteTitle = 'RBA Seguros y Fianzas';
  $phone = '+52 55 1234 5678';
  $email = 'contacto@rbaseguros.mx';
  $ctaMessage = 'Mesa de servicio 24/7';
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?> | Servicio al cliente</title>
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
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Servicio al cliente</a></li>
          </ul>
          <div class="ms-lg-3 mt-3 mt-lg-0">
            <a class="btn nav-access-btn w-100" href="https://neo.rbaidon.com/">Acceso a usuarios</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="soporte" class="page-hero py-5">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <div class="eyebrow text-white-80">Servicio al cliente y siniestros</div>
            <h1 class="display-5 fw-semibold lh-tight mb-3">Respondemos rapido, resolvemos claro.</h1>
            <p class="lead text-white-80 mb-4">Mesa de servicio que atiende reclamaciones, siniestros y solicitudes operativas sin perder de vista tus tiempos.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-light text-primary" href="#reclamaciones">Levantar solicitud</a>
              <a class="btn btn-lg btn-outline-light" href="#contacto">Enviar mensaje</a>
              <a class="btn btn-lg btn-outline-light" href="tel:<?php echo $phone; ?>"><i class="bi bi-telephone me-2"></i>Llamar ahora</a>
            </div>
            <div class="d-flex align-items-center gap-3 mt-4 text-white-80 small">
              <div class="d-flex align-items-center gap-2"><i class="bi bi-headset"></i><span>Atencion 24/7</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-patch-check"></i><span>Seguimiento documentado</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-chat-dots"></i><span>Respuesta en minutos</span></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tile shadow-lg">
              <p class="text-primary fw-semibold mb-1"><?php echo $ctaMessage; ?></p>
              <h5 class="fw-semibold">Canales directos</h5>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-telephone-forward"></i><span>Linea de siniestros y reclamaciones <?php echo $phone; ?></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-envelope-open"></i><span>Correo prioritario <?php echo $email; ?></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-stopwatch"></i><span>Confirmacion de folio y hora estimada de respuesta.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-people"></i><span>Gestor asignado durante todo el caso.</span></li>
              </ul>
              <div class="d-flex gap-2">
                <a class="btn btn-gradient flex-fill" href="#contacto">Enviar mensaje</a>
                <a class="btn btn-outline-primary flex-fill" href="#faq">Ver preguntas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="acciones" class="py-5">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Elige que necesitas</div>
          <h2 class="fw-semibold">Te guiamos paso a paso segun tu solicitud.</h2>
          <p class="text-muted">Haz clic para ir directo a la seccion correcta.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-clipboard2-check"></i></div>
              <h6 class="fw-semibold">Reclamaciones</h6>
              <p class="text-muted small mb-3">Reporta cargos, deducibles u otras reclamaciones administrativas.</p>
              <a class="link-primary fw-semibold small" href="#reclamaciones">Iniciar ahora</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-lightning-charge"></i></div>
              <h6 class="fw-semibold">Siniestros</h6>
              <p class="text-muted small mb-3">Activa tu poliza y recibe checklist para ajustadores.</p>
              <a class="link-primary fw-semibold small" href="#siniestros">Reportar siniestro</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-file-earmark-text"></i></div>
              <h6 class="fw-semibold">Constancias y certificados</h6>
              <p class="text-muted small mb-3">Solicita COI, cartas de fianza o comprobantes de cobertura.</p>
              <a class="link-primary fw-semibold small" href="#documentos">Solicitar documento</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-question-circle"></i></div>
              <h6 class="fw-semibold">Preguntas frecuentes</h6>
              <p class="text-muted small mb-3">Revisalo antes de levantar un folio o agenda una llamada.</p>
              <a class="link-primary fw-semibold small" href="#faq">Ver respuestas</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="reclamaciones" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="eyebrow text-primary">Reclamaciones y aclaraciones</div>
            <h3 class="fw-semibold mb-3">Dinos que paso y te asignamos un gestor en minutos.</h3>
            <p class="text-muted mb-3">Ingresa la informacion clave y generamos un folio de seguimiento con tiempos comprometidos.</p>
            <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-4">
              <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Detalle del evento, fecha y numero de poliza.</span></li>
              <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Documentos de respaldo o tickets de cobro.</span></li>
              <li class="d-flex gap-2 align-items-start"><i class="bi bi-check-circle-fill"></i><span>Prioridad y medio de contacto preferido.</span></li>
            </ul>
            <div class="d-flex gap-3 flex-wrap">
              <a class="btn btn-gradient" href="#contacto">Enviar reclamacion</a>
              <a class="btn btn-outline-primary" href="mailto:<?php echo $email; ?>">Compartir por correo</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="tile p-4 shadow-sm h-100">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="icon-circle"><i class="bi bi-clipboard-check"></i></div>
                <div>
                  <h6 class="fw-semibold mb-0">Check list inmediato</h6>
                  <small class="text-muted">Ten estos datos listos</small>
                </div>
              </div>
              <div class="d-grid gap-3 small">
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1"></i><span>Numero de poliza, aseguradora y vigencia.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1"></i><span>Datos del asegurado o titular del contrato.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1"></i><span>Fecha, hora, lugar y descripcion breve.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1"></i><span>Evidencia (fotos, facturas, reportes medicos o policiales).</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1"></i><span>Contacto para notificaciones y autorizaciones.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="siniestros" class="py-5">
      <div class="container">
        <div class="row g-4 align-items-start">
          <div class="col-lg-5">
            <div class="eyebrow text-primary">Siniestros</div>
            <h3 class="fw-semibold mb-3">Activamos ajustadores y entregables sin esperas.</h3>
            <p class="text-muted mb-3">Nuestro equipo coordina con aseguradoras y ajustadores para asegurarte una ruta clara.</p>
            <a class="btn btn-gradient" href="#contacto">Reportar siniestro</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-stopwatch"></i></div>
                  <h6 class="fw-semibold mb-1">1. Confirmacion</h6>
                  <p class="text-muted small mb-0">Generamos folio y te confirmamos ventana de respuesta.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-people"></i></div>
                  <h6 class="fw-semibold mb-1">2. Asignacion</h6>
                  <p class="text-muted small mb-0">Designamos gestor y ajustador segun la cobertura y ubicacion.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-clipboard-data"></i></div>
                  <h6 class="fw-semibold mb-1">3. Documentacion</h6>
                  <p class="text-muted small mb-0">Checklist de documentos y visitas en sitio cuando aplica.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tile h-100">
                  <div class="icon-circle"><i class="bi bi-flag"></i></div>
                  <h6 class="fw-semibold mb-1">4. Cierre</h6>
                  <p class="text-muted small mb-0">Seguimiento hasta el pago, constancias y conclusiones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="documentos" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="eyebrow text-primary">Documentacion</div>
            <h3 class="fw-semibold mb-3">Certificados, cartas y constancias sin friccion.</h3>
            <p class="text-muted mb-3">Solicita comprobantes de cobertura, COI o cartas de fianza y te los enviamos listos para tus contrapartes.</p>
            <div class="d-flex gap-3 flex-wrap">
              <a class="btn btn-gradient" href="#contacto">Pedir documento</a>
              <a class="btn btn-outline-primary" href="mailto:<?php echo $email; ?>">Enviar requisitos</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="tile p-4 shadow-sm h-100">
              <h6 class="fw-semibold mb-3">Documentos mas solicitados</h6>
              <div class="d-grid gap-2 small text-muted">
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-file-earmark-medical text-primary"></i><span>Certificados de seguro y cobertura activa.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-file-earmark-lock text-primary"></i><span>Cartas fianza y constancias para licitaciones.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-file-earmark-text text-primary"></i><span>Constancias de no siniestralidad.</span></div>
                <div class="d-flex gap-2 align-items-start"><i class="bi bi-file-earmark-person text-primary"></i><span>Altas y bajas de asegurados.</span></div>
              </div>
              <hr>
              <p class="small text-muted mb-0">Agrega fecha limite y formato requerido (PDF, Excel, editable) para agilizar la entrega.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq" class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="eyebrow text-primary">Preguntas frecuentes</div>
            <h3 class="fw-semibold mb-3">Respuestas rapidas antes de levantar un folio.</h3>
            <p class="text-muted mb-3">Si necesitas algo mas especifico, deja tu mensaje y te respondemos en minutos.</p>
            <a class="btn btn-gradient" href="#contacto">Contactar ahora</a>
          </div>
          <div class="col-lg-7">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1Body" aria-expanded="true" aria-controls="faq1Body">
                    Como reporto un siniestro fuera de horario?
                  </button>
                </h2>
                <div id="faq1Body" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted small">
                    Llamanos al <?php echo $phone; ?> y envia evidencia basica a <?php echo $email; ?>. Registramos el caso, activamos al ajustador y te confirmamos la ventana de atencion.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2Body" aria-expanded="false" aria-controls="faq2Body">
                    Que pasa despues de enviar una reclamacion?
                  </button>
                </h2>
                <div id="faq2Body" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted small">
                    Recibes tu folio y un gestor dedicado. Compartimos checklist, tiempos de cada fase y el canal directo para actualizaciones.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3Body" aria-expanded="false" aria-controls="faq3Body">
                    En cuanto tiempo entregan certificados o cartas?
                  </button>
                </h2>
                <div id="faq3Body" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted small">
                    Para constancias estandar, el mismo dia; cartas fianza y COI dependen de las validaciones con aseguradoras, pero confirmamos fecha de entrega al recibir la solicitud.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4Body" aria-expanded="false" aria-controls="faq4Body">
                    Puedo dar de alta o baja asegurados desde aqui?
                  </button>
                </h2>
                <div id="faq4Body" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted small">
                    Si, comparte el nombre, CURP y fecha de efecto. Confirmamos cambios y enviamos constancia actualizada en tu correo.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contacto" class="py-5 bg-soft">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="eyebrow text-primary">Contactanos</div>
            <h4 class="fw-semibold">Mesa de servicio lista para ayudarte.</h4>
            <p class="text-muted mb-3">Cuentanos tu caso y te respondemos con un folio y gestor asignado.</p>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-telephone-forward text-primary fs-4"></i><span><?php echo $phone; ?></span></div>
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-envelope-open text-primary fs-4"></i><span><?php echo $email; ?></span></div>
              <div class="d-flex gap-3 align-items-center"><i class="bi bi-clock-history text-primary fs-4"></i><span>Atencion prioritaria en menos de 30 minutos</span></div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="tile p-4 shadow-sm">
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
                  <label class="form-label">Telefono</label>
                  <input type="tel" name="telefono" class="form-control" placeholder="55 0000 0000" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Tipo de solicitud</label>
                  <select name="servicio" class="form-select">
                    <option>Reclamacion</option>
                    <option>Siniestro</option>
                    <option>Documento o constancia</option>
                    <option>Alta o baja de asegurado</option>
                    <option>Otra</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Mensaje</label>
                  <textarea name="mensaje" rows="4" class="form-control" placeholder="Describe brevemente tu caso" required></textarea>
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
            <li><a href="quienes.php#equipo">Equipo</a></li>
            <li><a href="quienes.php#alianzas">Alianzas</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Servicio al cliente</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="#reclamaciones">Reclamaciones</a></li>
            <li><a href="#siniestros">Siniestros</a></li>
            <li><a href="#faq">Preguntas Frecuentes</a></li>
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
