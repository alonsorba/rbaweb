<?php
$rbPartnersData = $rbPartnersData ?? [];

$rbPartnersSectionId = (string) ($rbPartnersData['section_id'] ?? 'aseguradoras');
$rbPartnersCounter = is_array($rbPartnersData['counter'] ?? null) ? $rbPartnersData['counter'] : [];
$rbPartnersMessageLines = is_array($rbPartnersData['message_lines'] ?? null) ? $rbPartnersData['message_lines'] : [];
$rbPartnersLogos = is_array($rbPartnersData['logos'] ?? null) ? $rbPartnersData['logos'] : [];

$rbPartnersResolveAsset = static function (string $rbPartnersImage): array {
    $rbPartnersImage = trim($rbPartnersImage);
    if ($rbPartnersImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbPartnersRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbPartnersImage);
    $rbPartnersRelative = ltrim((string) $rbPartnersRelative, '/');
    $rbPartnersRelative = rawurldecode($rbPartnersRelative);

    $rbPartnersBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbPartnersFilePath = $rbPartnersBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbPartnersRelative);

    if (!is_file($rbPartnersFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbPartnersImageInfo = @getimagesize($rbPartnersFilePath) ?: [];

    return [
        'url' => $rbPartnersImage,
        'width' => (int) ($rbPartnersImageInfo[0] ?? 0),
        'height' => (int) ($rbPartnersImageInfo[1] ?? 0),
    ];
};

$rbPartnersNormalizeOpacity = static function ($rbPartnersOpacity): float {
    if (!is_numeric($rbPartnersOpacity)) {
        return 0.72;
    }

    $rbPartnersOpacity = (float) $rbPartnersOpacity;
    if ($rbPartnersOpacity < 0.2) {
        return 0.2;
    }

    if ($rbPartnersOpacity > 1) {
        return 1.0;
    }

    return $rbPartnersOpacity;
};

$rbPartnersCounterEyebrow = (string) ($rbPartnersCounter['eyebrow'] ?? '');
$rbPartnersCounterValue = (string) ($rbPartnersCounter['value'] ?? '');
$rbPartnersCounterLabel = (string) ($rbPartnersCounter['label'] ?? '');

$rbPartnersMessageLinesToRender = array_values(array_filter(array_map(
    static fn ($rbPartnersLine) => trim((string) $rbPartnersLine),
    $rbPartnersMessageLines
), static fn (string $rbPartnersLine): bool => $rbPartnersLine !== ''));

$rbPartnersLogosToRender = [];

foreach ($rbPartnersLogos as $rbPartnersLogo) {
    if (!is_array($rbPartnersLogo)) {
        continue;
    }

    $rbPartnersName = trim((string) ($rbPartnersLogo['name'] ?? ''));
    $rbPartnersImage = (string) ($rbPartnersLogo['image'] ?? '');
    $rbPartnersAlt = trim((string) ($rbPartnersLogo['alt'] ?? $rbPartnersName));
    $rbPartnersPosition = preg_replace('/[^a-z0-9-]/', '', strtolower((string) ($rbPartnersLogo['position'] ?? '')));
    $rbPartnersOpacity = $rbPartnersNormalizeOpacity($rbPartnersLogo['opacity'] ?? 0.72);

    if ($rbPartnersName === '' || $rbPartnersPosition === '') {
        continue;
    }

    $rbPartnersImageAsset = $rbPartnersResolveAsset($rbPartnersImage);
    if ($rbPartnersImageAsset['url'] === '') {
        continue;
    }

    $rbPartnersLogosToRender[] = [
        'name' => $rbPartnersName,
        'image' => $rbPartnersImageAsset,
        'alt' => $rbPartnersAlt !== '' ? $rbPartnersAlt : $rbPartnersName,
        'position' => $rbPartnersPosition,
        'opacity' => $rbPartnersOpacity,
    ];
}

if (
    $rbPartnersSectionId === ''
    || $rbPartnersCounterEyebrow === ''
    || $rbPartnersCounterValue === ''
    || $rbPartnersCounterLabel === ''
    || $rbPartnersMessageLinesToRender === []
    || $rbPartnersLogosToRender === []
) {
    return;
}
?>
<section class="rb-section rb-partners" id="<?= htmlspecialchars($rbPartnersSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-partners-title" data-rb-partners>
    <div class="rb-container">
        <div class="rb-partners__inner">
            <div class="rb-partners__copy">
                <h2 class="rb-partners__counter" id="rb-partners-title">
                    <span class="rb-partners__eyebrow"><?= htmlspecialchars($rbPartnersCounterEyebrow, ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="rb-partners__value"><?= htmlspecialchars($rbPartnersCounterValue, ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="rb-partners__label"><?= htmlspecialchars($rbPartnersCounterLabel, ENT_QUOTES, 'UTF-8') ?></span>
                </h2>
            </div>

            <div class="rb-partners__message">
                <?php foreach ($rbPartnersMessageLinesToRender as $rbPartnersMessageLine): ?>
                    <span class="rb-partners__message-line"><?= htmlspecialchars($rbPartnersMessageLine, ENT_QUOTES, 'UTF-8') ?></span>
                <?php endforeach; ?>
            </div>

            <div class="rb-partners__logos" aria-label="Logotipos de aseguradoras aliadas">
                <?php foreach ($rbPartnersLogosToRender as $rbPartnersLogo): ?>
                    <div class="rb-partners__logo rb-partners__logo--<?= htmlspecialchars($rbPartnersLogo['position'], ENT_QUOTES, 'UTF-8') ?>" style="--rb-partners-logo-opacity: <?= htmlspecialchars(number_format($rbPartnersLogo['opacity'], 2, '.', ''), ENT_QUOTES, 'UTF-8') ?>;">
                        <img
                            class="rb-partners__logo-image"
                            src="<?= htmlspecialchars($rbPartnersLogo['image']['url'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($rbPartnersLogo['alt'], ENT_QUOTES, 'UTF-8') ?>"
                            width="<?= $rbPartnersLogo['image']['width'] > 0 ? $rbPartnersLogo['image']['width'] : 256 ?>"
                            height="<?= $rbPartnersLogo['image']['height'] > 0 ? $rbPartnersLogo['image']['height'] : 128 ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
