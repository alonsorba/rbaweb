<?php
$pageTitle = 'R. Baidón | Seguros empresariales y personales';
$pageDescription = 'Base del Home preparada con navbar, hero, métricas, presencia nacional, ESR, compromiso, soluciones y la sección ¿Por qué nosotros? reutilizables para el sitio institucional de R. Baidón.';
require __DIR__ . '/includes/head.php';

$rbNavbarData = [
    'context' => 'home',
    'brandHref' => '#inicio',
    'brandSrc' => SITE_BASE_URL . '/assets/img/' . rawurlencode('R BAIDON V3 BLANCO.png'),
    'brandScrolledSrc' => SITE_BASE_URL . '/assets/img/' . rawurlencode('R BAIDON V3 RGB (WEB).png'),
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
    'floatingBadge' => [],
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

$rbSolutionsData = [
    'section_id' => 'soluciones',
    'title' => 'Soluciones',
    'categories' => [
        [
            'id' => 'empresas',
            'label' => 'Empresas',
            'active' => true,
            'items' => [
                [
                    'title' => 'Daños',
                    'description' => 'Protección para activos, instalaciones y continuidad operativa.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('escudo.png'),
                    'image_alt' => 'Cobertura de daños con escudo de protección',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Autos',
                    'description' => 'Cobertura para vehículos de trabajo y movilidad cotidiana.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('carro.png'),
                    'image_alt' => 'Cobertura para autos',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Gastos Médicos',
                    'description' => 'Respaldo para atención médica y bienestar del equipo.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('corazon.png'),
                    'image_alt' => 'Cobertura de gastos médicos',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Vida',
                    'description' => 'Protección financiera para personas clave y colaboradores.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('vida.png'),
                    'image_alt' => 'Cobertura de vida',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Viaje',
                    'description' => 'Asistencia para traslados nacionales e internacionales.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('avion.png'),
                    'image_alt' => 'Cobertura de viaje',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Fianzas',
                    'description' => 'Garantías para contratos, obligaciones y compromisos.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('fianzas.png'),
                    'image_alt' => 'Cobertura de fianzas',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Servicios Actuariales',
                    'description' => 'Análisis técnico para decisiones y estimación de riesgos.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('servicios actuariales.png'),
                    'image_alt' => 'Servicios actuariales',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
            ],
        ],
        [
            'id' => 'personas',
            'label' => 'Personas',
            'active' => false,
            'items' => [
                [
                    'title' => 'Gastos Médicos',
                    'description' => 'Cobertura médica con enfoque en bienestar personal.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('corazon.png'),
                    'image_alt' => 'Cobertura de gastos médicos para personas',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Vida',
                    'description' => 'Respaldo para quienes dependen de ti.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('vida.png'),
                    'image_alt' => 'Cobertura de vida para personas',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Viaje',
                    'description' => 'Asistencia para salidas fuera de casa.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('avion.png'),
                    'image_alt' => 'Cobertura de viaje para personas',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Asesoría Integral',
                    'description' => 'Acompañamiento para definir la protección adecuada.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('asesoria.png'),
                    'image_alt' => 'Asesoría integral para personas',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Reclamaciones',
                    'description' => 'Gestión clara de procesos y seguimiento.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('reclamaciones.png'),
                    'image_alt' => 'Gestión de reclamaciones',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Siniestros',
                    'description' => 'Atención ordenada cuando ocurre un evento.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('siniestro.png'),
                    'image_alt' => 'Gestión de siniestros',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
            ],
        ],
        [
            'id' => 'gestion-integral',
            'label' => 'Gestión Integral',
            'active' => false,
            'items' => [
                [
                    'title' => 'Reclamaciones',
                    'description' => 'Seguimiento y resolución en cada etapa.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('reclamaciones.png'),
                    'image_alt' => 'Gestión de reclamaciones',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Siniestros',
                    'description' => 'Soporte operativo ante eventos cubiertos.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('siniestro.png'),
                    'image_alt' => 'Gestión de siniestros',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Prevención e Ingeniería de Riesgo',
                    'description' => 'Identificación y reducción de exposiciones.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('prevención de riesgos.png'),
                    'image_alt' => 'Prevención e ingeniería de riesgo',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Asesoría Integral',
                    'description' => 'Diagnóstico y diseño de programa.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('asesoria.png'),
                    'image_alt' => 'Asesoría integral',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
                [
                    'title' => 'Servicios Actuariales',
                    'description' => 'Modelos y análisis para decisiones sostenibles.',
                    'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('servicios actuariales.png'),
                    'image_alt' => 'Servicios actuariales',
                    'url' => '#contacto',
                    'cta_label' => 'VER COBERTURA',
                ],
            ],
        ],
    ],
];

$rbWhyData = [
    'section_id' => 'por-que-nosotros',
    'title' => '¿Por qué nosotros?',
    'items' => [
        [
            'title_lines' => [
                'Asesoría',
                'personalizada',
            ],
            'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('nose.png'),
            'image_alt' => 'Asesoría personalizada de R. Baidón',
            'image_scale' => 1.12,
        ],
        [
            'title_lines' => [
                'Prevención',
                'de riesgos',
            ],
            'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('misa.png'),
            'image_alt' => 'Prevención de riesgos con acompañamiento de R. Baidón',
            'image_scale' => 1.14,
        ],
        [
            'title_lines' => [
                'Análisis',
                'inteligente',
            ],
            'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('jenny.png'),
            'image_alt' => 'Análisis inteligente con una especialista de R. Baidón',
            'image_scale' => 1.13,
        ],
        [
            'title_lines' => [
                'Acompañamiento',
                'constante',
            ],
            'image' => SITE_BASE_URL . '/assets/img/' . rawurlencode('itzel.png'),
            'image_alt' => 'Acompañamiento constante de R. Baidón',
            'image_scale' => 1.11,
        ],
    ],
];

$rbPartnersData = [
    'section_id' => 'aseguradoras',
    'counter' => [
        'eyebrow' => 'Trabajamos con',
        'value' => '+20',
        'label' => 'aseguradoras',
    ],
    'message_lines' => [
        'Te asesoramos para',
        'seleccionar la mejor opción',
        'de protección',
    ],
    'logos' => [
        [
            'name' => 'AIG',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('aig.png'),
            'alt' => 'AIG',
            'position' => 'aig',
            'opacity' => 0.8,
        ],
        [
            'name' => 'AXA',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('axa.png'),
            'alt' => 'AXA',
            'position' => 'axa',
            'opacity' => 0.82,
        ],
        [
            'name' => 'Chubb',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('Chubb.png'),
            'alt' => 'Chubb',
            'position' => 'chubb',
            'opacity' => 0.74,
        ],
        [
            'name' => 'GNP',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('GNP.png'),
            'alt' => 'GNP Seguros',
            'position' => 'gnp',
            'opacity' => 0.8,
        ],
        [
            'name' => 'HDI',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('hdi.png'),
            'alt' => 'HDI Seguros',
            'position' => 'hdi',
            'opacity' => 0.76,
        ],
        [
            'name' => 'Mapfre',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('Mapfre.png'),
            'alt' => 'Mapfre',
            'position' => 'mapfre',
            'opacity' => 0.82,
        ],
        [
            'name' => 'Quálitas',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('QUALITAS.png'),
            'alt' => 'Quálitas',
            'position' => 'qualitas',
            'opacity' => 0.8,
        ],
        [
            'name' => 'Zurich',
            'image' => SITE_BASE_URL . '/assets/img/logos%20blanco/' . rawurlencode('Zurich.png'),
            'alt' => 'Zurich',
            'position' => 'zurich',
            'opacity' => 0.78,
        ],
    ],
];

$rbTestimonialsData = [
    'section_id' => 'testimonios',
    'title' => 'Lo que dicen nuestros clientes',
    'items' => [
        [
            'name' => 'Cliente provisional 01',
            'role' => 'Direccion administrativa',
            'company' => 'Empresa industrial mediana',
            'avatar' => '',
            'avatar_alt' => 'Avatar provisional de Cliente provisional 01',
            'avatar_initials' => '01',
            'rating' => 5,
            'quote' => 'La atencion fue clara, ordenada y con seguimiento puntual desde el primer contacto.',
            'provisional' => true,
        ],
        [
            'name' => 'Cliente provisional 02',
            'role' => 'Gerencia de operaciones',
            'company' => 'Firma logistica regional',
            'avatar' => '',
            'avatar_alt' => 'Avatar provisional de Cliente provisional 02',
            'avatar_initials' => '02',
            'rating' => 5,
            'quote' => 'Recibimos opciones entendibles y respuestas rapidas para comparar coberturas sin perder tiempo.',
            'provisional' => true,
        ],
        [
            'name' => 'Cliente provisional 03',
            'role' => 'Recursos humanos',
            'company' => 'Grupo de servicios profesionales',
            'avatar' => '',
            'avatar_alt' => 'Avatar provisional de Cliente provisional 03',
            'avatar_initials' => '03',
            'rating' => 5,
            'quote' => 'El acompanamiento nos ayudo a definir una proteccion mas completa para el equipo.',
            'provisional' => true,
        ],
    ],
];

$rbFinalCtaData = [
    'section_id' => 'solucion-final',
    'eyebrow' => 'Encuentra la solucion ideal',
    'title' => 'Encuentra la solucion ideal para proteger lo que mas importa',
    'description' => 'Nuestro equipo puede ayudarte a comparar opciones y elegir una cobertura de acuerdo con tus necesidades.',
    'primary_action' => [
        'href' => '#contacto',
        'label' => 'HABLAR CON UN ASESOR',
        'variant' => 'primary',
    ],
    'secondary_action' => [
        'href' => '#soluciones',
        'label' => 'CONOCER SOLUCIONES',
        'variant' => 'outline',
    ],
];

$rbContactSolutionOptions = [];
if (is_array($rbSolutionsData['categories'] ?? null)) {
    foreach ($rbSolutionsData['categories'] as $rbContactSolutionCategory) {
        if (!is_array($rbContactSolutionCategory)) {
            continue;
        }

        $rbContactSolutionLabel = trim((string) ($rbContactSolutionCategory['label'] ?? ''));
        $rbContactSolutionValue = trim((string) ($rbContactSolutionCategory['id'] ?? ''));

        if ($rbContactSolutionLabel === '' || $rbContactSolutionValue === '') {
            continue;
        }

        $rbContactSolutionOptions[] = [
            'value' => $rbContactSolutionValue,
            'label' => $rbContactSolutionLabel,
        ];
    }
}

if ($rbContactSolutionOptions === []) {
    $rbContactSolutionOptions = [
        ['value' => 'empresas', 'label' => 'Empresas'],
        ['value' => 'personas', 'label' => 'Personas'],
        ['value' => 'gestion-integral', 'label' => 'Gestión Integral'],
    ];
}

$rbContactData = [
    'section_id' => 'contacto',
    'title' => 'Contáctanos',
    'description' => 'Cuéntanos qué necesitas y uno de nuestros asesores se pondrá en contacto contigo.',
    'intro' => 'Los campos marcados con * son obligatorios.',
    'form' => [
        'action' => '',
        'method' => 'post',
        'submit_label' => 'ENVIAR SOLICITUD',
        'fields' => [
            [
                'name' => 'full_name',
                'type' => 'text',
                'label' => 'Nombre completo',
                'placeholder' => 'Escribe tu nombre completo',
                'required' => true,
                'autocomplete' => 'name',
                'minlength' => 3,
                'maxlength' => 120,
            ],
            [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Correo electrónico',
                'placeholder' => 'tu@correo.com',
                'required' => true,
                'autocomplete' => 'email',
                'maxlength' => 120,
            ],
            [
                'name' => 'phone',
                'type' => 'tel',
                'label' => 'Teléfono',
                'placeholder' => 'Tu número de contacto',
                'required' => true,
                'autocomplete' => 'tel',
                'inputmode' => 'tel',
                'maxlength' => 20,
            ],
            [
                'name' => 'client_type',
                'type' => 'select',
                'label' => 'Tipo de cliente',
                'required' => true,
                'options' => [
                    [
                        'value' => '',
                        'label' => 'Selecciona una opción',
                        'disabled' => true,
                        'selected' => true,
                    ],
                    [
                        'value' => 'persona',
                        'label' => 'Persona',
                    ],
                    [
                        'value' => 'empresa',
                        'label' => 'Empresa',
                    ],
                ],
            ],
            [
                'name' => 'solution_interest',
                'type' => 'select',
                'label' => 'Solución de interés',
                'required' => true,
                'full_width' => true,
                'options' => array_merge(
                    [
                        [
                            'value' => '',
                            'label' => 'Selecciona una opción',
                            'disabled' => true,
                            'selected' => true,
                        ],
                    ],
                    $rbContactSolutionOptions
                ),
            ],
            [
                'name' => 'message',
                'type' => 'textarea',
                'label' => 'Mensaje',
                'placeholder' => 'Cuéntanos brevemente lo que necesitas',
                'required' => true,
                'full_width' => true,
                'minlength' => 10,
                'maxlength' => 1000,
            ],
            [
                'name' => 'privacy_acceptance',
                'type' => 'checkbox',
                'label' => 'Acepto el tratamiento de mis datos conforme al',
                'required' => true,
                'full_width' => true,
            ],
        ],
        'status_message' => 'El formulario está listo para integrarse con el servicio de envío. Actualmente no realiza envíos.',
    ],
    'privacy' => [
        'label' => 'Acepto el tratamiento de mis datos conforme al',
        'link_label' => 'Aviso de Privacidad',
        'url' => 'aviso-privacidad.php',
        'suffix' => '.',
    ],
    'contact_items' => [],
    'provisional' => true,
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
?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="rb-main rb-main--home">
    <?php require __DIR__ . '/includes/components/hero.php'; ?>
    <?php require __DIR__ . '/includes/components/stats.php'; ?>
    <?php require __DIR__ . '/includes/components/presence.php'; ?>
    <?php require __DIR__ . '/includes/components/esr.php'; ?>
    <?php require __DIR__ . '/includes/components/commitment.php'; ?>
    <?php require __DIR__ . '/includes/components/solutions.php'; ?>
    <?php require __DIR__ . '/includes/components/why.php'; ?>
    <?php require __DIR__ . '/includes/components/partners.php'; ?>
    <?php require __DIR__ . '/includes/components/testimonials.php'; ?>
    <?php require __DIR__ . '/includes/components/final-cta.php'; ?>
    <?php require __DIR__ . '/includes/components/contact.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
