<?php
$pageTitle = 'R. Baidón | Base del sitio institucional';
$pageDescription = 'Estructura inicial del nuevo sitio web institucional de R. Baidón.';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main">
    <section class="hero-shell py-5 py-lg-5">
        <div class="container">
            <div class="row align-items-center g-4 g-xl-5">
                <div class="col-12 col-lg-7">
                    <div class="rb-kicker mb-3">Base front-end en PHP + Bootstrap 5.3.3</div>
                    <h1 class="display-5 fw-semibold text-primary-emphasis mb-3">
                        Sitio institucional de R. Baidón listo para construir por secciones.
                    </h1>
                    <p class="lead text-body-secondary mb-4">
                        Esta primera entrega valida la estructura modular, la carga de estilos, la
                        tipografía de interfaz y el comportamiento inicial responsive sin adelantarse
                        al contenido final aprobado por Comunicación.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn btn-rb-primary" href="#estado-base">Revisar estado base</a>
                        <a class="btn btn-rb-ghost" href="#inventario">Ver inventario inicial</a>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="rb-status-card" id="estado-base">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                            <div>
                                <p class="rb-section-label mb-1">Comprobación técnica</p>
                                <h2 class="h4 mb-0">Recursos cargados</h2>
                            </div>
                            <span class="badge rounded-pill text-bg-success" id="js-status-badge">JS pendiente</span>
                        </div>

                        <ul class="rb-status-list list-unstyled mb-0">
                            <li><span>PHP modular</span><strong>Activo</strong></li>
                            <li><span>Bootstrap 5.3.3</span><strong>Configurado</strong></li>
                            <li><span>CSS propio</span><strong>Cargado</strong></li>
                            <li><span>Montserrat</span><strong>Temporal</strong></li>
                        </ul>

                        <div class="rb-status-note mt-4">
                            <p class="mb-0">
                                La tipografía oficial se documenta como carga provisional mientras se
                                obtienen los archivos licenciados definitivos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2 mt-lg-4" id="inventario">
                <div class="col-12 col-md-4">
                    <article class="rb-mini-card h-100">
                        <p class="rb-section-label mb-2">Arquitectura</p>
                        <h2 class="h5">Base reutilizable</h2>
                        <p class="mb-0">
                            <code>head</code>, <code>header</code>, <code>footer</code> y <code>scripts</code> quedan separados para facilitar la
                            expansión por páginas y componentes.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article class="rb-mini-card h-100">
                        <p class="rb-section-label mb-2">Activos</p>
                        <h2 class="h5">Recursos ya presentes</h2>
                        <p class="mb-0">
                            El repositorio incluye logos, fotografías, ilustraciones y archivos fuente
                            previos que se conservan sin modificaciones destructivas.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article class="rb-mini-card h-100">
                        <p class="rb-section-label mb-2">Siguiente paso</p>
                        <h2 class="h5">Home por secciones</h2>
                        <p class="mb-0">
                            Esta base queda lista para comenzar el desglose del home y documentar los
                            campos editables pensados para CMS.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
