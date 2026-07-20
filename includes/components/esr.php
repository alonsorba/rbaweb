<?php
$rbEsrData = $rbEsrData ?? [];

$rbEsrSectionId = (string) ($rbEsrData['section_id'] ?? 'responsabilidad-social');
$rbEsrEyebrow = (string) ($rbEsrData['eyebrow'] ?? '');
$rbEsrEyebrowSuffix = (string) ($rbEsrData['eyebrow_suffix'] ?? '');
$rbEsrTitleLines = is_array($rbEsrData['title_lines'] ?? null) ? $rbEsrData['title_lines'] : [];
$rbEsrDescription = is_array($rbEsrData['description'] ?? null) ? $rbEsrData['description'] : [];
$rbEsrPillars = is_array($rbEsrData['pillars'] ?? null) ? $rbEsrData['pillars'] : [];
$rbEsrSecondaryBadge = is_array($rbEsrData['secondary_badge'] ?? null) ? $rbEsrData['secondary_badge'] : [];
$rbEsrTrophy = is_array($rbEsrData['trophy'] ?? null) ? $rbEsrData['trophy'] : [];

$rbEsrResolveAsset = static function (string $rbEsrImage): array {
    $rbEsrImage = trim($rbEsrImage);
    if ($rbEsrImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbEsrRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbEsrImage);
    $rbEsrRelative = ltrim((string) $rbEsrRelative, '/');
    $rbEsrRelative = rawurldecode($rbEsrRelative);

    $rbEsrBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbEsrFilePath = $rbEsrBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbEsrRelative);

    if (!is_file($rbEsrFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbEsrImageInfo = @getimagesize($rbEsrFilePath) ?: [];

    return [
        'url' => $rbEsrImage,
        'width' => (int) ($rbEsrImageInfo[0] ?? 0),
        'height' => (int) ($rbEsrImageInfo[1] ?? 0),
    ];
};

$rbEsrSecondaryBadgeAsset = $rbEsrResolveAsset((string) ($rbEsrSecondaryBadge['image'] ?? ''));
$rbEsrTrophyAsset = $rbEsrResolveAsset((string) ($rbEsrTrophy['image'] ?? ''));
?>
<section class="rb-section rb-section--alt rb-esr" id="<?= htmlspecialchars($rbEsrSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-esr-title">
    <div class="rb-container">
        <div class="rb-esr__shell rb-card">
            <div class="rb-esr__copy">
                <header class="rb-esr__heading">
                    <?php if ($rbEsrEyebrow !== '' || $rbEsrEyebrowSuffix !== ''): ?>
                        <p class="rb-esr__anniversary">
                            <?php if ($rbEsrEyebrow !== ''): ?>
                                <span class="rb-esr__years"><?= htmlspecialchars($rbEsrEyebrow, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endif; ?>
                            <?php if ($rbEsrEyebrowSuffix !== ''): ?>
                                <span class="rb-esr__suffix"><?= htmlspecialchars($rbEsrEyebrowSuffix, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>

                    <?php if (!empty($rbEsrTitleLines)): ?>
                        <h2 class="rb-esr__title" id="rb-esr-title">
                            <?php foreach ($rbEsrTitleLines as $rbEsrTitleLine): ?>
                                <span class="rb-esr__title-line"><?= htmlspecialchars((string) $rbEsrTitleLine, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endforeach; ?>
                        </h2>
                    <?php endif; ?>
                </header>

                <?php if (!empty($rbEsrDescription)): ?>
                    <p class="rb-esr__description">
                        <?php if (!empty($rbEsrDescription['prefix'])): ?>
                            <span class="rb-esr__description-line"><?= htmlspecialchars((string) $rbEsrDescription['prefix'], ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endif; ?>
                        <?php if (!empty($rbEsrDescription['highlight'])): ?>
                            <span class="rb-esr__description-line">
                                <strong class="rb-esr__highlight"><?= htmlspecialchars((string) $rbEsrDescription['highlight'], ENT_QUOTES, 'UTF-8') ?></strong>
                                <?php if (!empty($rbEsrDescription['suffix'])): ?>
                                    <span class="rb-esr__description-suffix"> <?= htmlspecialchars((string) $rbEsrDescription['suffix'], ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </span>
                        <?php elseif (!empty($rbEsrDescription['suffix'])): ?>
                            <span class="rb-esr__description-line"><?= htmlspecialchars((string) $rbEsrDescription['suffix'], ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($rbEsrPillars)): ?>
                    <ul class="rb-esr__pillars" role="list" aria-label="Pilares de responsabilidad social">
                        <?php foreach ($rbEsrPillars as $rbEsrPillar): ?>
                            <?php
                            $rbEsrPillarIcon = (string) ($rbEsrPillar['icon'] ?? '');
                            $rbEsrPillarAlt = (string) ($rbEsrPillar['alt'] ?? '');
                            $rbEsrPillarLabel = (string) ($rbEsrPillar['label'] ?? '');
                            $rbEsrPillarAsset = $rbEsrResolveAsset($rbEsrPillarIcon);
                            ?>
                            <li class="rb-esr__pillar">
                                <?php if ($rbEsrPillarAsset['url'] !== ''): ?>
                                    <span class="rb-esr__pillar-icon">
                                        <img
                                            src="<?= htmlspecialchars($rbEsrPillarAsset['url'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="<?= htmlspecialchars($rbEsrPillarAlt, ENT_QUOTES, 'UTF-8') ?>"
                                            width="<?= $rbEsrPillarAsset['width'] > 0 ? $rbEsrPillarAsset['width'] : 128 ?>"
                                            height="<?= $rbEsrPillarAsset['height'] > 0 ? $rbEsrPillarAsset['height'] : 128 ?>"
                                            loading="eager"
                                            decoding="async"
                                        >
                                    </span>
                                <?php endif; ?>

                                <?php if ($rbEsrPillarLabel !== ''): ?>
                                    <span class="rb-esr__pillar-label"><?= htmlspecialchars($rbEsrPillarLabel, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if ($rbEsrSecondaryBadgeAsset['url'] !== ''): ?>
                    <figure class="rb-esr__secondary-badge">
                        <img
                            src="<?= htmlspecialchars($rbEsrSecondaryBadgeAsset['url'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars((string) ($rbEsrSecondaryBadge['alt'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                            width="<?= $rbEsrSecondaryBadgeAsset['width'] > 0 ? $rbEsrSecondaryBadgeAsset['width'] : 1086 ?>"
                            height="<?= $rbEsrSecondaryBadgeAsset['height'] > 0 ? $rbEsrSecondaryBadgeAsset['height'] : 1448 ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    </figure>
                <?php endif; ?>
            </div>

            <?php if ($rbEsrTrophyAsset['url'] !== ''): ?>
                <figure class="rb-esr__visual">
                    <img
                        class="rb-esr__trophy"
                        src="<?= htmlspecialchars($rbEsrTrophyAsset['url'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars((string) ($rbEsrTrophy['alt'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                        width="<?= $rbEsrTrophyAsset['width'] > 0 ? $rbEsrTrophyAsset['width'] : 1118 ?>"
                        height="<?= $rbEsrTrophyAsset['height'] > 0 ? $rbEsrTrophyAsset['height'] : 1402 ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </figure>
            <?php endif; ?>
        </div>
    </div>
</section>
