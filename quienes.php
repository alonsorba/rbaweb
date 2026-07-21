<?php
$pageTitle = 'Quiénes somos | R. Baidón';
$pageDescription = 'Conoce el enfoque institucional de R. Baidón, su forma de acompañar a personas y empresas y su presencia preparada para evolucionar con el sitio.';
$bodyClass = 'rb-page rb-page--internal';
require __DIR__ . '/includes/head.php';

$rbNavbarData = [
    'context' => 'internal',
    'brandHref' => SITE_BASE_URL . '/index.php#inicio',
    'brandSrc' => SITE_BASE_URL . '/assets/img/' . rawurlencode('R BAIDON V3 RGB (WEB).png'),
    'brandAlt' => 'R. Baidón',
    'label' => 'Navegación institucional',
    'toggleLabel' => 'Abrir navegación institucional',
    'toggleTarget' => 'rbNavbarMenu',
    'links' => [
        [
            'href' => SITE_BASE_URL . '/index.php#inicio',
            'label' => 'Inicio',
        ],
        [
            'href' => SITE_BASE_URL . '/quienes.php',
            'label' => 'Quiénes somos',
            'current' => true,
        ],
        [
            'href' => SITE_BASE_URL . '/index.php#soluciones',
            'label' => 'Soluciones',
        ],
        [
            'href' => SITE_BASE_URL . '/index.php#contacto',
            'label' => 'Contacto',
        ],
    ],
    'actions' => [
        [
            'href' => SITE_BASE_URL . '/index.php#soluciones',
            'label' => 'Ver soluciones',
            'variant' => 'outline',
        ],
        [
            'href' => SITE_BASE_URL . '/index.php#contacto',
            'label' => 'Contactarnos',
            'variant' => 'accent',
        ],
    ],
];

$rbAboutPageData = [
    'page_id' => 'quienes-somos',
    'provisional' => true,
    'hero' => [
        'section_id' => 'rb-internal-hero',
        'eyebrow' => 'CONÓCENOS',
        'title' => 'Protegemos lo que impulsa a personas y empresas',
        'description' => 'En R. Baidón acompañamos a nuestros clientes en la identificación de riesgos y en la selección de soluciones de protección adecuadas para sus necesidades.',
        'image' => [
            'src' => SITE_BASE_URL . '/assets/img/EDIFICIO-RBA-DIA.png',
            'alt' => 'Exterior diurno de la sede de R. Baidón',
            'width' => 4256,
            'height' => 2832,
        ],
    ],
    'intro' => [
        'section_id' => 'rb-about-intro',
        'eyebrow' => 'Quiénes somos',
        'title' => 'Experiencia, cercanía y visión preventiva',
        'paragraphs' => [
            'Trabajamos con un enfoque consultivo que combina asesoría personalizada, análisis y acompañamiento continuo.',
            'Nuestra prioridad es entender el contexto de cada cliente para orientar decisiones más claras, útiles y sostenibles.',
        ],
        'note' => [
            'title' => 'Cómo trabajamos',
            'items' => [
                'Diagnóstico del contexto y de las necesidades prioritarias.',
                'Selección de alternativas de protección alineadas al objetivo.',
                'Seguimiento cercano para sostener la relación y la claridad.',
            ],
        ],
    ],
    'differentiators' => [
        'section_id' => 'rb-about-differentiators',
        'eyebrow' => 'Nuestra forma de acompañarte',
        'title' => 'Diferenciadores institucionales',
        'items' => [
            [
                'title' => 'Asesoría personalizada',
                'description' => 'Acompañamos cada decisión con una lectura clara de necesidades, prioridades y escenarios posibles.',
            ],
            [
                'title' => 'Prevención de riesgos',
                'description' => 'Priorizamos la anticipación para reducir exposición y fortalecer la continuidad de cada proyecto.',
            ],
            [
                'title' => 'Análisis inteligente',
                'description' => 'Organizamos información y alternativas para orientar una selección más informada y conveniente.',
            ],
            [
                'title' => 'Acompañamiento constante',
                'description' => 'Mantenemos cercanía antes, durante y después de cada decisión para sostener el seguimiento.',
            ],
        ],
    ],
    'history' => [
        'enabled' => false,
        'items' => [],
    ],
    'principles' => [
        'enabled' => false,
        'items' => [],
    ],
    'cta' => [
        'section_id' => 'rb-internal-cta',
        'eyebrow' => 'Siguiente paso',
        'title' => 'Conoce las soluciones que podemos ofrecerte',
        'description' => 'Explora el portafolio de soluciones o escríbenos para recibir orientación sobre el punto de partida más adecuado.',
        'actions' => [
            [
                'label' => 'VER SOLUCIONES',
                'href' => SITE_BASE_URL . '/index.php#soluciones',
                'variant' => 'primary',
            ],
            [
                'label' => 'CONTACTARNOS',
                'href' => SITE_BASE_URL . '/index.php#contacto',
                'variant' => 'outline',
            ],
        ],
    ],
];

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
                'label' => 'Quiénes somos',
                'href' => SITE_BASE_URL . '/quienes.php',
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

$rbInternalHeroData = $rbAboutPageData['hero'];
$rbInstitutionalIntroData = $rbAboutPageData['intro'];
$rbInstitutionalDifferentiatorsData = $rbAboutPageData['differentiators'];
$rbInternalCtaData = $rbAboutPageData['cta'];
?>

<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main rb-main--internal">
    <?php require __DIR__ . '/includes/components/internal-hero.php'; ?>
    <?php require __DIR__ . '/includes/components/institutional-intro.php'; ?>
    <?php require __DIR__ . '/includes/components/institutional-differentiators.php'; ?>
    <?php require __DIR__ . '/includes/components/internal-cta.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
