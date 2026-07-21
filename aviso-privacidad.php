<?php
$pageTitle = 'Aviso de Privacidad | R. Baidón';
$pageDescription = 'Ruta provisional preparada para el Aviso de Privacidad del sitio institucional de R. Baidón.';
require __DIR__ . '/includes/head.php';

$rbFooterData = [
    'section_id' => 'footer',
    'brand' => [
        'label' => 'R. Baidón',
        'eyebrow' => 'Institucional',
        'href' => '#inicio',
        'logo' => SITE_BASE_URL . '/assets/img/' . rawurlencode('R BAIDON V3 BLANCO.png'),
        'logo_width' => 2773,
        'logo_height' => 721,
        'description' => 'Seguros empresariales y personales con una base modular lista para evolucionar hacia CMS.',
    ],
    'navigation' => [
        'label' => 'Navegación institucional',
        'items' => [
            [
                'label' => 'Inicio',
                'href' => '#inicio',
            ],
            [
                'label' => 'Soluciones',
                'href' => '#soluciones',
            ],
            [
                'label' => '¿Por qué nosotros?',
                'href' => '#por-que-nosotros',
            ],
            [
                'label' => 'Contacto',
                'href' => '#contacto',
            ],
        ],
    ],
    'legal' => [
        'label' => 'Enlaces legales',
        'items' => [
            [
                'label' => 'Aviso de Privacidad',
                'href' => SITE_BASE_URL . '/aviso-privacidad.php',
            ],
        ],
    ],
    'meta' => [
        'label' => 'Información legal',
        'copyright' => '© R. Baidón',
    ],
];
?>

<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main">
    <section class="rb-section">
        <div class="rb-container rb-container--md">
            <div class="rb-card rb-card--elevated">
                <div class="rb-card__body">
                    <p class="rb-pill mb-3">Ruta provisional</p>
                    <h1 class="rb-section-title mb-3">Aviso de Privacidad</h1>
                    <p class="mb-0 text-body-secondary">
                        Esta ruta queda preparada para el contenido legal aprobado por el equipo responsable. La versión definitiva se incorporará cuando exista el texto validado para publicación.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
