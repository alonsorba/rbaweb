<?php
$pageTitle = 'R. Baidón | Seguros empresariales y personales';
$pageDescription = 'Base del Home preparada con navbar, hero, métricas, presencia nacional y ESR reutilizables para el sitio institucional de R. Baidón.';
require __DIR__ . '/includes/head.php';

$rbNavbarData = [
    'brandHref' => '#inicio',
    'brandSrc' => SITE_BASE_URL . '/assets/img/' . rawurlencode('R BAIDON V3 RGB (WEB).png'),
    'brandAlt' => 'R. Baidón',
    'label' => 'Navegación principal',
    'toggleLabel' => 'Abrir navegación principal',
    'toggleTarget' => 'rbNavbarMenu',
    'links' => [
        ['href' => '#empresas', 'label' => 'Empresas'],
        ['href' => '#personas', 'label' => 'Personas'],
        ['href' => '#gestion-integral', 'label' => 'Gestión Integral'],
        ['href' => '#nosotros', 'label' => 'Nosotros'],
    ],
    'actions' => [
        [
            'href' => '#contacto',
            'label' => 'Contacto',
            'variant' => 'outline',
        ],
        [
            'href' => '#usuarios',
            'label' => 'Acceso a usuarios',
            'variant' => 'accent',
        ],
    ],
];

$rbHeroData = [
    'id' => 'inicio',
    'backgroundImage' => SITE_BASE_URL . '/assets/img/oficina.png',
    'eyebrow' => 'Protección integral para empresas y personas',
    'titleLines' => [
        'Seguros empresariales y',
        'personales para optimizar',
        'tu administración',
        'de riesgos',
    ],
    'subtitle' => 'Menos riesgo. Más control. Mejores decisiones.',
    'primaryAction' => [
        'href' => '#contacto',
        'label' => 'Habla con un asesor',
    ],
    'secondaryAction' => [
        'href' => '#soluciones',
        'label' => 'Ver soluciones',
    ],
    'floatingBadge' => [
        'label' => 'Atención estratégica',
        'title' => 'Acompañamiento para decisiones complejas',
        'text' => 'Una base visual pensada para crecer hacia CMS sin rehacer la estructura principal.',
    ],
];

$rbStatsData = [
    'id' => 'estadisticas',
    'items' => [
        [
            'value' => '+150',
            'label' => 'empresas aseguradas',
        ],
        [
            'value' => '+35',
            'label' => 'años de experiencia',
        ],
        [
            'value' => '+80',
            'label' => 'colaboradores',
        ],
    ],
];

$rbPresenceData = [
    'section_id' => 'presencia',
    'eyebrow' => 'Presencia nacional',
    'title' => 'Cobertura estratégica en México',
    'map_image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('mapa al ras.png'),
    'map_alt' => 'Mapa de México con presencia de R. Baidón',
    'map_width' => 4114,
    'map_height' => 2712,
    'location_label' => [
        'line_1' => 'Matriz en Ciudad',
        'line_2' => 'Obregón, Sonora',
    ],
    'stat' => [
        'value' => '+25',
        'label' => 'estados con presencia',
    ],
];

$rbEsrData = [
    'section_id' => 'responsabilidad-social',
    'eyebrow' => 'XV años',
    'eyebrow_suffix' => 'de ser',
    'title_lines' => [
        'Empresa Socialmente',
        'Responsable',
    ],
    'description' => [
        'prefix' => 'Seguimos construyendo un futuro',
        'highlight' => 'más responsable',
        'suffix' => 'todos los días.',
    ],
    'pillars' => [
        [
            'icon' => SITE_BASE_URL . '/assets/img/' . rawurlencode('Ética empresarial.png'),
            'alt' => 'Ética Empresarial',
            'label' => 'Ética Empresarial',
        ],
        [
            'icon' => SITE_BASE_URL . '/assets/img/' . rawurlencode('Cuidado del medio ambiente.png'),
            'alt' => 'Cuidado del Medio Ambiente',
            'label' => 'Cuidado del Medio Ambiente',
        ],
        [
            'icon' => SITE_BASE_URL . '/assets/img/' . rawurlencode('Bienestar social.png'),
            'alt' => 'Bienestar Social',
            'label' => 'Bienestar Social',
        ],
    ],
    'secondary_badge' => [
        'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('esr.png'),
        'alt' => 'Distintivo ESR secundario de R. Baidón',
    ],
    'trophy' => [
        'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('esr con sombra.png'),
        'alt' => 'Trofeo de Empresa Socialmente Responsable de R. Baidón',
    ],
];

$rbCommitmentData = [
    'section_id' => 'compromiso',
    'text_lines' => [
        [
            [
                'text' => 'Nuestro compromiso',
                'highlight' => true,
            ],
            [
                'text' => ' es brindarte',
                'highlight' => false,
            ],
        ],
        [
            [
                'text' => 'un ',
                'highlight' => false,
            ],
            [
                'text' => 'servicio en excelencia',
                'highlight' => true,
            ],
            [
                'text' => ' para',
                'highlight' => false,
            ],
        ],
        [
            [
                'text' => 'lograr al máximo ',
                'highlight' => false,
            ],
            [
                'text' => 'tus necesidades',
                'highlight' => true,
            ],
        ],
        [
            [
                'text' => 'de protección.',
                'highlight' => true,
            ],
        ],
    ],
    'image' => [
        'src' => SITE_BASE_URL . '/assets/img/' . rawurlencode('compromiso.png'),
        'alt' => 'Equipo de R. Baidón brindando atención personalizada',
    ],
];
?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main rb-main--home">
    <?php require __DIR__ . '/includes/components/hero.php'; ?>
    <?php require __DIR__ . '/includes/components/stats.php'; ?>
    <?php require __DIR__ . '/includes/components/presence.php'; ?>
    <?php require __DIR__ . '/includes/components/esr.php'; ?>
    <?php require __DIR__ . '/includes/components/commitment.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
