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
  <link rel="stylesheet" href="assets/css/style.css?v=4">
</head>
<body>
  <!-- Header global con navegacion principal -->
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
            <li class="nav-item"><a class="nav-link" href="quienes.php">Quiénes somos</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="servicio-cliente.php">Servicio al cliente</a></li>
          </ul>
          <div class="ms-lg-3 mt-3 mt-lg-0">
            <a class="btn nav-access-btn w-100" href="https://neo.rbaidon.com/">Acceso a usuarios</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Hero de soporte: canales directos y CTA a reclamaciones/siniestros -->
    <section id="soporte" class="page-hero py-5">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <div class="eyebrow text-white-80">Servicio al cliente y siniestros</div>
            <h1 class="display-5 fw-semibold lh-tight mb-3">Respondemos rápido, resolvemos claro.</h1>
            <p class="lead text-white-80 mb-4">Mesa de servicio que atiende reclamaciones, siniestros y solicitudes operativas sin perder de vista tus tiempos.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="btn btn-lg btn-light text-primary" href="#reclamaciones">Levantar solicitud</a>
              <a class="btn btn-lg btn-outline-light" href="#reclamaciones">Enviar mensaje</a>
              <a class="btn btn-lg btn-outline-light" href="tel:<?php echo $phone; ?>"><i class="bi bi-telephone me-2"></i>Llamar ahora</a>
            </div>
            <div class="d-flex align-items-center gap-3 mt-4 text-white-80 small">
              <div class="d-flex align-items-center gap-2"><i class="bi bi-headset"></i><span>Atención 24/7</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-patch-check"></i><span>Seguimiento documentado</span></div>
              <div class="d-flex align-items-center gap-2"><i class="bi bi-chat-dots"></i><span>Respuesta en minutos</span></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tile shadow-lg">
              <p class="text-primary fw-semibold mb-1"><?php echo $ctaMessage; ?></p>
              <h5 class="fw-semibold">Canales directos</h5>
              <ul class="list-unstyled feature-list d-grid gap-2 small text-muted mb-3">
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-telephone-forward"></i><span>Línea de siniestros y reclamaciones <?php echo $phone; ?></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-envelope-open"></i><span>Correo prioritario <?php echo $email; ?></span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-stopwatch"></i><span>Confirmación de folio y hora estimada de respuesta.</span></li>
                <li class="d-flex gap-2 align-items-start"><i class="bi bi-people"></i><span>Gestor asignado durante todo el caso.</span></li>
              </ul>
              <div class="d-flex gap-2">
                <a class="btn btn-gradient flex-fill" href="#reclamaciones">Enviar mensaje</a>
                <a class="btn btn-outline-primary flex-fill" href="#siniestros">Ver siniestros</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bloque de reclamaciones por ramo -->
    <section id="reclamaciones" class="py-5 bg-soft">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Reclamaciones</div>
          <h2 class="fw-semibold">Selecciona el tipo de Reclamación.</h2>
          <p class="text-muted">Gestionamos vida y salud con seguimiento dedicado.</p>
        </div>
        <div class="row g-4">
          <!-- Reclamaciones Vida -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-heart-pulse"></i></div>
              <h5 class="fw-semibold">Vida</h5>
              <p class="text-muted">Formatos y requisitos para reclamaciones de vida.</p>
              <div class="accordion small" id="vidaAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#vidaCollapseOne" aria-expanded="true" aria-controls="vidaCollapseOne">
                      Formatos basicos
                    </button>
                  </h2>
                  <div id="vidaCollapseOne" class="accordion-collapse collapse show" aria-labelledby="vidaHeadingOne" data-bs-parent="#vidaAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj2XqfyvMiBcgjnLox%2FDeclaraci%C3%B3n%2Bde%2BFallecimiento%2B1%2Be%2Binstructivo%2Beditableok.pdf?alt=media&token=e4f15516-f355-4b6b-a488-d27307a3bb24">GNP - Formato de fallecimiento 1</a></li>
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj2d5HJD8aCRqdg_PG%2FDeclaraci%C3%B3n%2Bde%2BFallecimiento%2B2%2Be%2BInstructivo%2Beditableok.pdf?alt=media&token=cde0f2de-b2e1-4789-91ba-c0981b195d29">GNP - Formato de fallecimiento 2</a></li>
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj2zji0WPtyzHPCqPJ%2FFormato%2B%C3%9Anico%2Bde%2BIdentificaci%C3%B3n%2Bde%2BCliente_dic15ok.pdf?alt=media&token=28d215a4-cf80-4220-86dc-406fa35bd520">GNP - Identificación al cliente</a></li>
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj1mpYuzw2SCy-diLp%2FFormato%2B%C3%9Anico%2Bde%2BInformaci%C3%B3n%2BBancaria%2Bpara%2Bpago%2Bv%C3%ADa%2BTransferencia%2BElectr%C3%B3nica%2BMayo%2B3ok.pdf?alt=media&token=1e43d018-a1d0-4b89-9186-a975a662af8e">GNP - Información bancaria</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidaCollapseTwo" aria-expanded="false" aria-controls="vidaCollapseTwo">
                      Formatos por aseguradora
                    </button>
                  </h2>
                  <div id="vidaCollapseTwo" class="accordion-collapse collapse" aria-labelledby="vidaHeadingTwo" data-bs-parent="#vidaAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li><a class="link-primary" href="https://www.gnp.com.mx/post-venta/contacto/masinfo/servicios-relacionados/formatos/formatos-masinfo#!/gnp/servicios-formatos">GNP</a></li>
                        <li><a class="link-primary" href="https://axa.mx/documents/20247/361325/Formato-Reclamacion-de-siniestro-Persona-fisica-30-ABRIL-2014-Vida.pdf">AXA</a></li>
                        <li><a class="link-primary" href="https://www.mapfre.com.mx/seguros-mx/images/formato-Reclamacion-siniestro-vida_tcm584-82285.pdf">MAPFRE</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Descargas.html">ATLAS - Descargas</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/VIDA_INDV/Formatos_y_Solicitudes/FORMULARIO%20MEDICO_%20FF-333.pdf">ATLAS - Formulario médico</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/VIDA_INDV/Formatos_y_Solicitudes/Declaracion%20DE%20TESTIGOS%20FF-334.pdf">ATLAS - Declaración de testigos</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/VIDA_INDV/Formatos_y_Solicitudes/SOLICITUD%20RECLAMACION%20DE%20BENEFICIARIOS%20FF-335.pdf">ATLAS - Solicitud de beneficiarios</a></li>
                        <li><a class="link-primary" href="https://www.metlife.com.mx/soy-cliente/documentacion-y-solicitudes/">METLIFE</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidaCollapseThree" aria-expanded="false" aria-controls="vidaCollapseThree">
                      Documentos de Identificación
                    </button>
                  </h2>
                  <div id="vidaCollapseThree" class="accordion-collapse collapse" aria-labelledby="vidaHeadingThree" data-bs-parent="#vidaAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-1"><strong>Asegurado</strong></p>
                      <ul class="list-unstyled mb-2">
                        <li>Acta de Defunción (original)</li>
                        <li>Acta de nacimiento (original)</li>
                        <li>Certificado de Defunción (copia notariada MAPFRE)</li>
                        <li>Copia de INE</li>
                      </ul>
                      <p class="mb-1"><strong>Beneficiario</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>Acta de nacimiento (original)</li>
                        <li>Acta de matrimonio (original)</li>
                        <li>Comprobante de domicilio</li>
                        <li>Copia de INE</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidaCollapseFour" aria-expanded="false" aria-controls="vidaCollapseFour">
                      Casos especiales y certificado
                    </button>
                  </h2>
                  <div id="vidaCollapseFour" class="accordion-collapse collapse" aria-labelledby="vidaHeadingFour" data-bs-parent="#vidaAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-2">
                        <li>Vida grupo: recibos de nómina y alta/baja ante IMSS.</li>
                        <li>Accidente con doble pago: expediente completo del Ministerio Público.</li>
                      </ul>
                      <p class="mb-1"><strong>Certificado-consentimiento</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>Sin tachaduras y con letra de molde.</li>
                        <li>Datos correctos de beneficiarios.</li>
                        <li>Beneficiarios mayores de edad.</li>
                        <li>Beneficiarios en Línea directa (Cónyuge, padres, hijos).</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaHeadingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidaCollapseFive" aria-expanded="false" aria-controls="vidaCollapseFive">
                      Vida deudores
                    </button>
                  </h2>
                  <div id="vidaCollapseFive" class="accordion-collapse collapse" aria-labelledby="vidaHeadingFive" data-bs-parent="#vidaAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-1"><strong>Asegurado</strong></p>
                      <ul class="list-unstyled mb-2">
                        <li>Acta de nacimiento original.</li>
                        <li>Acta de Defunción original.</li>
                        <li>Copia de certificado de fallecimiento.</li>
                        <li>Formato de fallecimiento.</li>
                        <li>Última Declaración pagada.</li>
                        <li>Contratos y avisos firmados.</li>
                      </ul>
                      <p class="mb-1"><strong>Beneficiario</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>Acta constitutiva de la empresa.</li>
                        <li>Poder legal del representante.</li>
                        <li>INE del representante legal.</li>
                        <li>Estado de cuenta bancario (no mayor a 3 meses).</li>
                        <li>Formato de Información bancaria firmado.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Reclamaciones Salud -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-clipboard2-heart"></i></div>
              <h5 class="fw-semibold">Salud</h5>
              <p class="text-muted">Accidentes personales, gastos médicos mayores y menores.</p>
              <div class="accordion small" id="saludAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseOne" aria-expanded="true" aria-controls="saludCollapseOne">
                      Médicos y hospitales en red
                    </button>
                  </h2>
                  <div id="saludCollapseOne" class="accordion-collapse collapse show" aria-labelledby="saludHeadingOne" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li><a class="link-primary" href="hospitales-y-medicos-gnp-2018.pdf">Manual de usuario GNP</a></li>
                        <li><a class="link-primary" href="https://www.gnp.com.mx/post-venta/contacto/masinfo/servicios-relacionados/directorios/medicos#!/gnp/directorios">Directorio GNP</a></li>
                        <li><a class="link-primary" href="hospitales-y-medicos-seguros-atlas-2018.pdf">Manual de usuario ATLAS</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Descargas.html">ATLAS - Descargas</a></li>
                        <li><a class="link-primary" href="https://axa.mx/web/servicios-axa/prestadores-de-servicios">AXA - Prestadores</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseTwo" aria-expanded="false" aria-controls="saludCollapseTwo">
                      Formatos de Reclamación
                    </button>
                  </h2>
                  <div id="saludCollapseTwo" class="accordion-collapse collapse" aria-labelledby="saludHeadingTwo" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj1HY9Tb-FgZrgMIjO%2FInforme%2Bm%C3%A9dicoAviso%2Bde%2Baccidente%2By%2Bo%2BenfermedadGMMok.pdf?alt=media&token=a09a4186-7d62-4687-a217-cd8d20bc34e5">GNP - Informe médico y aviso</a></li>
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj-qhnUFqDZVpKgiNz%2FReembolso%2Bde%2BAccidente%2By-o%2Benfermedad%2B%2B09%2B2017.pdf?alt=media&token=91f279ad-85bb-444e-8bfc-5e3f6b2581fa">GNP - Formato de reembolso</a></li>
                        <li><a class="link-primary" href="https://firebasestorage.googleapis.com/v0/b/gnp-soycliente-pro.appspot.com/o/mis-tramites%2F-Kvj17kSB-WjaL9Qh7Bq%2FFormato%2B%C3%9Anico%2Bde%2BInformaci%C3%B3n%2BBancaria%2Bpara%2Bpago%2Bv%C3%ADa%2BTransferencia%2BElectr%C3%B3nica%2BMayo%2B3ok.pdf?alt=media&token=5d0591f0-1013-473b-b747-f0e767b1c120">GNP - Información bancaria</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/GASTOS_MEDICOS/Formatos_y_Solicitudes/INFORME%20MEDICO%20FF-284-PDF.pdf">ATLAS - Informe médico</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/GASTOS_MEDICOS/Formatos_y_Solicitudes/CARTA%20REMESA%20%20FF-023-PDF_.pdf">ATLAS - Carta remesa</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/GASTOS_MEDICOS/Formatos_y_Solicitudes/FORMATO%20DE%20AVISO%20DE%20ACCIDENTE%20O%20ENFERMEDAD%20FF-285-PDF.pdf">ATLAS - Aviso de accidente</a></li>
                        <li><a class="link-primary" href="http://www.segurosatlas.com.mx/Documentos/ACCIDENTES/Formatos_y_Solicitudes/FORMATO%20UNICO%20DE%20TRASFERENCIA%20ELECTRONICA%20FF-349-%20PDF.pdf">ATLAS - Información bancaria</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseThree" aria-expanded="false" aria-controls="saludCollapseThree">
                      Que cubre la maternidad
                    </button>
                  </h2>
                  <div id="saludCollapseThree" class="accordion-collapse collapse" aria-labelledby="saludHeadingThree" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li>Cubre el evento del parto (no prenatal ni postnatal).</li>
                        <li>Incluye hospital, ginecologo, anestesiologo y ayudante.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseFour" aria-expanded="false" aria-controls="saludCollapseFour">
                      Que hacer en caso de Reclamación
                    </button>
                  </h2>
                  <div id="saludCollapseFour" class="accordion-collapse collapse" aria-labelledby="saludHeadingFour" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li><a class="link-primary" href="https://www.rbaidon.com.mx/img/38.jpg">Reembolso</a></li>
                        <li><a class="link-primary" href="https://www.rbaidon.com.mx/img/39.jpg">Programación de Cirugía</a></li>
                        <li><a class="link-primary" href="https://www.rbaidon.com.mx/img/40.jpg">Reporte hospitalario</a></li>
                        <li><a class="link-primary" href="https://www.rbaidon.com.mx/img/41.jpg">Urgencia accidentes personales</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseFive" aria-expanded="false" aria-controls="saludCollapseFive">
                      Sabias que...
                    </button>
                  </h2>
                  <div id="saludCollapseFive" class="accordion-collapse collapse" aria-labelledby="saludHeadingFive" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li>Si el beneficiario no es Línea directa, puede aplicar retencion ISR 20%.</li>
                        <li>Si asignas 100% a un beneficiario, se recomienda un sustituto.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludHeadingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludCollapseSix" aria-expanded="false" aria-controls="saludCollapseSix">
                      Contacto R. Baidon
                    </button>
                  </h2>
                  <div id="saludCollapseSix" class="accordion-collapse collapse" aria-labelledby="saludHeadingSix" data-bs-parent="#saludAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-0">
                        Lic. Patricia Hernandez Figueroa<br>
                        Reclamaciones beneficios<br>
                        Tel. (644) 410 86 00 Ext. 116<br>
                        Cel. (644) 134 14 15<br>
                        <a class="link-primary" href="mailto:reclamaciones@rbaidon.com.mx">reclamaciones@rbaidon.com.mx</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bloque de siniestros por categoria -->
        <section id="siniestros" class="py-5">
      <div class="container">
        <div class="text-center mb-4">
          <div class="eyebrow text-primary">Siniestros</div>
          <h2 class="fw-semibold">Guias por tipo de siniestro.</h2>
          <p class="text-muted">Selecciona la categoria para ver pasos, requisitos y contactos.</p>
        </div>
        <div class="row g-4">
          <!-- Siniestros Autos -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-car-front"></i></div>
              <h5 class="fw-semibold">Autos</h5>
              <p class="text-muted">Guia rapida y contactos de apoyo.</p>
              <div class="accordion small" id="autosAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="autosHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#autosCollapseOne" aria-expanded="true" aria-controls="autosCollapseOne">
                      Pasos inmediatos
                    </button>
                  </h2>
                  <div id="autosCollapseOne" class="accordion-collapse collapse show" aria-labelledby="autosHeadingOne" data-bs-parent="#autosAccordion">
                    <div class="accordion-body text-muted">
                      <h6 class="fw-semibold">Colision, volcadura, inundaciones, rotura de cristales e incendio</h6>
                      <ul class="list-unstyled mb-0">
                        <li>- Mantenga la calma.</li>
                        <li>- Si hay lesionados, solicite servicios de emergencia.</li>
                        <li>- Si no obstruye la circulacion, permanezca en el lugar.</li>
                        <li>- Reporte el accidente con su aseguradora.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="autosHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#autosCollapseTwo" aria-expanded="false" aria-controls="autosCollapseTwo">
                      Reporte a cabina y asistencia
                    </button>
                  </h2>
                  <div id="autosCollapseTwo" class="accordion-collapse collapse" aria-labelledby="autosHeadingTwo" data-bs-parent="#autosAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-1"><strong>Directorio de Compañías</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>Qualitas - 01 800 288 67 00</li>
                        <li>CHUBB Seguros - 01 800 834 34 00</li>
                        <li>GNP - 01 800 400 9000</li>
                        <li>Seguros ATLAS - 01 800 849 39 17</li>
                        <li>AXA Seguros - 01 800 900 12 92</li>
                      </ul>
                      <p class="mb-1"><strong>Necesitas para el reporte</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>- Numero de Póliza e inciso.</li>
                        <li>- Nombre del asegurado y del conductor.</li>
                        <li>- Nombre de quien reporta y Teléfono de contacto.</li>
                        <li>- Datos del vehiculo (marca, tipo, color, placas, serie).</li>
                        <li>- Lugar del accidente y referencias.</li>
                      </ul>
                      <p class="mb-1"><strong>Recomendaciones</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>- No abandonar a las victimas salvo riesgo de vida.</li>
                        <li>- No hacer acuerdos de pago.</li>
                        <li>- No abandonar el vehiculo despues del accidente.</li>
                      </ul>
                      <p class="mb-1"><strong>Asistencia vial</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>- Identificar tipo de asistencia: grua, gasolina, paso de corriente.</li>
                        <li>- Flotillas: 2 asistencias viales por vigencia anual.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="autosHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#autosCollapseThree" aria-expanded="false" aria-controls="autosCollapseThree">
                      Sabias que y robo
                    </button>
                  </h2>
                  <div id="autosCollapseThree" class="accordion-collapse collapse" aria-labelledby="autosHeadingThree" data-bs-parent="#autosAccordion">
                    <div class="accordion-body text-muted">
                      <a class="link-primary fw-semibold d-inline-block mb-3" href="https://www.rbaidon.com.mx/guia-siniestros-autos.pdf">Guia que hacer en caso de siniestro</a>
                      <p class="mb-1"><strong>Factura</strong></p>
                      <p>Se requiere factura de origen (o titulo/pedimento) y endosos previos para Indemnización.</p>
                      <p class="mb-1"><strong>Reparacion</strong></p>
                      <p>Tiempo promedio de 7 a 45 dias habiles.</p>
                      <p class="mb-1"><strong>Auto sustituto</strong></p>
                      <p>Cobertura adicional para renta en caso de perdida total o robo.</p>
                      <p class="mb-1"><strong>Perdida total</strong></p>
                      <p>Se considera cuando el dano excede 65% del valor, segun Póliza.</p>
                      <p class="mb-1"><strong>Atención en agencia</strong></p>
                      <p>Solo unidades con antiguedad maxima de 2 anos.</p>
                      <h6 class="fw-semibold mt-3">Qué hacer en caso de robo</h6>
                      <p>Denuncia ante Ministerio Público, llama a tu aseguradora y notifica a R. Baidon.</p>
                      <p class="mb-1"><strong>De la factura</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>- Marca, tipo y modelo.</li>
                        <li>- Numero de motor y serie.</li>
                        <li>- Numero de registro federal (si aplica).</li>
                        <li>- Placas y color.</li>
                      </ul>
                      <p class="mb-1"><strong>Información adicional</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>- Forma en que ocurrio el robo.</li>
                        <li>- Documentacion y pertenencias en el vehiculo.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="autosHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#autosCollapseFour" aria-expanded="false" aria-controls="autosCollapseFour">
                      Contacto R. Baidon
                    </button>
                  </h2>
                  <div id="autosCollapseFour" class="accordion-collapse collapse" aria-labelledby="autosHeadingFour" data-bs-parent="#autosAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-0">
                        Ing. Manuel Hernandez Dominguez<br>
                        Siniestros autos<br>
                        Tel. (644) 410 86 00 Ext. 143<br>
                        Cel. (644) 222 29 88<br>
                        <a class="link-primary" href="mailto:siniestrosautos@rbaidon.com.mx">siniestrosautos@rbaidon.com.mx</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Siniestros Daños -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-building"></i></div>
              <h5 class="fw-semibold">Daños</h5>
              <p class="text-muted">Pasos, directorio y proceso de ajuste.</p>
              <div class="accordion small" id="danosAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="danosHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#danosCollapseOne" aria-expanded="true" aria-controls="danosCollapseOne">
                      Qué hacer en caso de siniestro
                    </button>
                  </h2>
                  <div id="danosCollapseOne" class="accordion-collapse collapse show" aria-labelledby="danosHeadingOne" data-bs-parent="#danosAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-3">
                        <li>- Mantenga la calma.</li>
                        <li>- Si hay lesionados, solicite servicios de emergencia.</li>
                        <li>- Reporte a la aseguradora e informe a R. Baidon.</li>
                        <li>- Tome fotografias del siniestro.</li>
                        <li>- Espere al ajustador para iniciar el proceso.</li>
                      </ul>
                      <p class="mb-1"><strong>Casos especiales</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>- Incendio: llamar a bomberos.</li>
                        <li>- Robo: interponer denuncia.</li>
                        <li>- Transporte de carga: salvaguardar el producto.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="danosHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#danosCollapseTwo" aria-expanded="false" aria-controls="danosCollapseTwo">
                      Reporte y directorio
                    </button>
                  </h2>
                  <div id="danosCollapseTwo" class="accordion-collapse collapse" aria-labelledby="danosHeadingTwo" data-bs-parent="#danosAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-1"><strong>Para reportar el siniestro</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>- Numero de Póliza.</li>
                        <li>- Fecha y hora del siniestro.</li>
                        <li>- Domicilio de la ubicación afectada o lugar del accidente.</li>
                        <li>- Nombre y Teléfono de contacto.</li>
                        <li>- Causa del siniestro.</li>
                      </ul>
                      <p class="mb-1"><strong>Directorio por Compañías</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>MAPFRE México - 01 800 2021212</li>
                        <li>GNP - 01 800 400 9000 (1,5)</li>
                        <li>Chubb Seguros - 01 800 834 34 00</li>
                        <li>Seguros ATLAS - 01 800 849 39 17</li>
                        <li>AXA Seguros - 01 800 900 12 92</li>
                        <li>AIG México - (01) 55 5488-4700</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="danosHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#danosCollapseThree" aria-expanded="false" aria-controls="danosCollapseThree">
                      Puntos de Interés y proceso de ajuste
                    </button>
                  </h2>
                  <div id="danosCollapseThree" class="accordion-collapse collapse" aria-labelledby="danosHeadingThree" data-bs-parent="#danosAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-1"><strong>Puntos de Interés y ayuda</strong></p>
                      <ul class="list-unstyled mb-3">
                        <li>- Contar con factura para acreditar propiedad.</li>
                        <li>- Reportar en las primeras 24 horas.</li>
                        <li>- Avaluo del inmueble si aplica.</li>
                        <li>- Planos con caracteristicas constructivas.</li>
                        <li>- Relacion de activos en caso de Daños a contenidos.</li>
                        <li>- Fotografias en USB y respaldo contable.</li>
                        <li>- Contar con inventarios.</li>
                      </ul>
                      <p class="mb-1"><strong>Proceso de ajuste</strong></p>
                      <ul class="list-unstyled mb-0">
                        <li>- Ajustador revisa documentos y envia informe.</li>
                        <li>- Aseguradora autoriza convenio.</li>
                        <li>- Ajustador envia convenio y finiquito para firma.</li>
                        <li>- Se revisan diferencias y se aclaran.</li>
                        <li>- Autorización final con aseguradora.</li>
                        <li>- Firma de documentos y trámite de pago.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="danosHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#danosCollapseFour" aria-expanded="false" aria-controls="danosCollapseFour">
                      Contacto R. Baidon
                    </button>
                  </h2>
                  <div id="danosCollapseFour" class="accordion-collapse collapse" aria-labelledby="danosHeadingFour" data-bs-parent="#danosAccordion">
                    <div class="accordion-body text-muted">
                      <p class="mb-0">
                        Ma. De Jesus Ruesga Gonzalez<br>
                        Siniestros Daños<br>
                        Tel. (644) 410 86 00 Ext. 121<br>
                        Cel. (644) 196 09 06<br>
                        <a class="link-primary" href="mailto:mariajesus@rbaidon.com.mx">mariajesus@rbaidon.com.mx</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Siniestros Vida -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-heart-pulse"></i></div>
              <h5 class="fw-semibold">Vida</h5>
              <p class="text-muted">Documentacion requerida para iniciar el proceso.</p>
              <div class="accordion small" id="vidaSiniestrosAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="vidaSiniestrosHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#vidaSiniestrosCollapseOne" aria-expanded="true" aria-controls="vidaSiniestrosCollapseOne">
                      Documentos comunes
                    </button>
                  </h2>
                  <div id="vidaSiniestrosCollapseOne" class="accordion-collapse collapse show" aria-labelledby="vidaSiniestrosHeadingOne" data-bs-parent="#vidaSiniestrosAccordion">
                    <div class="accordion-body text-muted">
                      <p>Cuando ocurre un siniestro en vida, el beneficiario debe contactar a nuestros asesores para integrar la documentación requerida por la aseguradora.</p>
                      <ul class="list-unstyled mb-0">
                        <li>- Formato de Reclamación (proporcionado por R. Baidon).</li>
                        <li>- Consentimiento o designacion de beneficiarios.</li>
                        <li>- Último recibo de prima pagada.</li>
                        <li>- Acta o certificado de Defunción.</li>
                        <li>- Acta de nacimiento, pasaporte o carta de naturalizacion.</li>
                        <li>- En muerte no natural: copia de averiguacion previa.</li>
                      </ul>
                      <p class="mt-3 mb-0">Mantenos informados de cualquier retraso para brindarte apoyo.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Siniestros Salud -->
          <div class="col-md-6">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-hospital"></i></div>
              <h5 class="fw-semibold">Salud</h5>
              <p class="text-muted">Urgencias, Cirugía y reembolsos.</p>
              <div class="accordion small" id="saludSiniestrosAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludSiniestrosHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#saludSiniestrosCollapseOne" aria-expanded="true" aria-controls="saludSiniestrosCollapseOne">
                      Reporte hospitalario o urgencia médica
                    </button>
                  </h2>
                  <div id="saludSiniestrosCollapseOne" class="accordion-collapse collapse show" aria-labelledby="saludSiniestrosHeadingOne" data-bs-parent="#saludSiniestrosAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li>- Acude al hospital e identifícate como asegurado.</li>
                        <li>- Si hay convenio, el hospital tramita la Reclamación.</li>
                        <li>- Sin convenio, opera por reembolso.</li>
                        <li>- Reporta a R. Baidon para apoyo.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludSiniestrosHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludSiniestrosCollapseTwo" aria-expanded="false" aria-controls="saludSiniestrosCollapseTwo">
                      Programación de Cirugía
                    </button>
                  </h2>
                  <div id="saludSiniestrosCollapseTwo" class="accordion-collapse collapse" aria-labelledby="saludSiniestrosHeadingTwo" data-bs-parent="#saludSiniestrosAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li>- Solicita informe médico y envíalo a R. Baidon.</li>
                        <li>- Confirma recepción con tu asesor.</li>
                        <li>- Solicita Autorización con 10 dias de anticipacion.</li>
                        <li>- R. Baidon gestiona la Autorización con la aseguradora.</li>
                        <li>- Se da seguimiento hasta la fecha de Cirugía.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="saludSiniestrosHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saludSiniestrosCollapseThree" aria-expanded="false" aria-controls="saludSiniestrosCollapseThree">
                      Reembolso
                    </button>
                  </h2>
                  <div id="saludSiniestrosCollapseThree" class="accordion-collapse collapse" aria-labelledby="saludSiniestrosHeadingThree" data-bs-parent="#saludSiniestrosAccordion">
                    <div class="accordion-body text-muted">
                      <ul class="list-unstyled mb-0">
                        <li>- Presenta facturas para tramitar reembolso.</li>
                        <li>- Facturas a nombre del asegurado (o titular si es menor).</li>
                        <li>- Para estudios: orden médica, resultados y factura.</li>
                        <li>- Se da seguimiento hasta entrega del cheque.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Siniestros Agricola -->
          <div class="col-md-6 offset-md-3">
            <div class="tile h-100">
              <div class="icon-circle"><i class="bi bi-flower3"></i></div>
              <h5 class="fw-semibold">Agricola</h5>
              <p class="text-muted">Datos para reporte y seguimiento.</p>
              <div class="accordion small" id="agricolaAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="agricolaHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agricolaCollapseOne" aria-expanded="true" aria-controls="agricolaCollapseOne">
                      Datos necesarios
                    </button>
                  </h2>
                  <div id="agricolaCollapseOne" class="accordion-collapse collapse show" aria-labelledby="agricolaHeadingOne" data-bs-parent="#agricolaAccordion">
                    <div class="accordion-body text-muted">
                      <p>Reporte el siniestro a la Compañía de seguros. El ajustador informara los pasos a seguir.</p>
                      <ul class="list-unstyled mb-3">
                        <li>- Nombre del contratante o asegurado.</li>
                        <li>- Numero de Póliza.</li>
                        <li>- Ubicación del predio danado.</li>
                        <li>- Nombre, Dirección y Teléfono de contacto.</li>
                        <li>- Fecha y hora del siniestro.</li>
                        <li>- Causas del siniestro.</li>
                        <li>- Bienes afectados.</li>
                      </ul>
                      <p class="mb-0">Informe a R. Baidon para apoyo en integracion y pago del siniestro.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
            <li><a href="quienes.php#equipo">Equipo</a></li>
            <li><a href="quienes.php#alianzas">Alianzas</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="footer-heading">Servicio al cliente</h6>
          <ul class="list-unstyled footer-links">
            <li><a href="#reclamaciones">Reclamaciones</a></li>
            <li><a href="#siniestros">Siniestros</a></li>
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
  <script src="assets/js/main.js?v=5"></script>
</body>
</html>









