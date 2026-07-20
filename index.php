<?php
$pageTitle = 'R. Baidón | Seguros empresariales y personales';
$pageDescription = 'Base del Home preparada con navbar, hero y métricas reutilizables para el sitio institucional de R. Baidón.';
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
?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main rb-main--home">
    <?php require __DIR__ . '/includes/components/hero.php'; ?>
    <?php require __DIR__ . '/includes/components/stats.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
