<?php
$rbPresenceData = $rbPresenceData ?? [];

$rbPresenceSectionId = $rbPresenceData['section_id'] ?? 'presencia';
$rbPresenceEyebrow = $rbPresenceData['eyebrow'] ?? '';
$rbPresenceTitle = $rbPresenceData['title'] ?? '';
$rbPresenceMapImage = $rbPresenceData['map_image'] ?? '';
$rbPresenceMapAlt = $rbPresenceData['map_alt'] ?? 'Mapa de México con presencia de R. Baidón';
$rbPresenceMapWidth = (int) ($rbPresenceData['map_width'] ?? 0);
$rbPresenceMapHeight = (int) ($rbPresenceData['map_height'] ?? 0);
$rbPresenceLocation = $rbPresenceData['location_label'] ?? [];
$rbPresenceStat = $rbPresenceData['stat'] ?? [];

$rbPresenceMapPath = '';
if ($rbPresenceMapImage !== '') {
    $rbPresencePath = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbPresenceMapImage);
    $rbPresencePath = ltrim((string) $rbPresencePath, '/');
    $rbPresencePath = rawurldecode($rbPresencePath);
    $rbPresenceMapPath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbPresenceMapPath .= DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbPresencePath);

    if (!is_file($rbPresenceMapPath)) {
        $rbPresenceMapImage = '';
    }
}
?>
<section class="rb-section rb-section--alt rb-presence" id="<?= htmlspecialchars($rbPresenceSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-presence-title">
    <div class="rb-container">
        <div class="rb-presence__shell rb-card">
            <div class="rb-presence__copy">
                <div class="rb-presence__header">
                    <?php if ($rbPresenceEyebrow !== ''): ?>
                        <p class="rb-presence__eyebrow rb-section-label mb-2"><?= htmlspecialchars($rbPresenceEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <?php if ($rbPresenceTitle !== ''): ?>
                        <h2 class="rb-presence__title" id="rb-presence-title"><?= htmlspecialchars($rbPresenceTitle, ENT_QUOTES, 'UTF-8') ?></h2>
                    <?php endif; ?>
                </div>

                <div class="rb-presence__location" aria-label="Ubicación de matriz">
                    <?php if (!empty($rbPresenceLocation['line_1'])): ?>
                        <span class="rb-presence__location-line"><?= htmlspecialchars($rbPresenceLocation['line_1'], ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endif; ?>
                    <?php if (!empty($rbPresenceLocation['line_2'])): ?>
                        <span class="rb-presence__location-line"><?= htmlspecialchars($rbPresenceLocation['line_2'], ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div
                class="rb-presence__visual"
                aria-label="Mapa de México"
                <?php if ($rbPresenceMapImage !== ''): ?>
                    style="--rb-presence-map-bg: url('<?= htmlspecialchars($rbPresenceMapImage, ENT_QUOTES, 'UTF-8') ?>')"
                <?php endif; ?>
            >
                <span class="rb-presence__connector" aria-hidden="true">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none" focusable="false" aria-hidden="true">
                        <line x1="0" y1="72" x2="100" y2="28"></line>
                    </svg>
                </span>
                <span class="rb-presence__marker" aria-hidden="true"></span>
                <?php if ($rbPresenceMapImage !== ''): ?>
                    <img
                        class="rb-presence__map visually-hidden"
                        src="<?= htmlspecialchars($rbPresenceMapImage, ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($rbPresenceMapAlt, ENT_QUOTES, 'UTF-8') ?>"
                        width="<?= $rbPresenceMapWidth > 0 ? $rbPresenceMapWidth : 1200 ?>"
                        height="<?= $rbPresenceMapHeight > 0 ? $rbPresenceMapHeight : 800 ?>"
                        loading="lazy"
                        decoding="async"
                    >
                <?php endif; ?>
            </div>

            <article class="rb-presence__stat rb-stat-card" aria-label="Estadísticas de presencia">
                <?php if (!empty($rbPresenceStat['value'])): ?>
                    <p class="rb-presence__value mb-2"><?= htmlspecialchars($rbPresenceStat['value'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
                <?php if (!empty($rbPresenceStat['label'])): ?>
                    <p class="rb-presence__label mb-0"><?= htmlspecialchars($rbPresenceStat['label'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
            </article>
        </div>
    </div>
</section>
