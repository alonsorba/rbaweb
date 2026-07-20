<?php
$rbWhyData = $rbWhyData ?? [];

$rbWhySectionId = (string) ($rbWhyData['section_id'] ?? 'por-que-nosotros');
$rbWhyTitle = (string) ($rbWhyData['title'] ?? '¿Por qué nosotros?');
$rbWhyItems = is_array($rbWhyData['items'] ?? null) ? $rbWhyData['items'] : [];

$rbWhyResolveAsset = static function (string $rbWhyImage): array {
    $rbWhyImage = trim($rbWhyImage);
    if ($rbWhyImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbWhyRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbWhyImage);
    $rbWhyRelative = ltrim((string) $rbWhyRelative, '/');
    $rbWhyRelative = rawurldecode($rbWhyRelative);

    $rbWhyBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbWhyFilePath = $rbWhyBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbWhyRelative);

    if (!is_file($rbWhyFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbWhyImageInfo = @getimagesize($rbWhyFilePath) ?: [];

    return [
        'url' => $rbWhyImage,
        'width' => (int) ($rbWhyImageInfo[0] ?? 0),
        'height' => (int) ($rbWhyImageInfo[1] ?? 0),
    ];
};

$rbWhyItemsToRender = [];

foreach ($rbWhyItems as $rbWhyItem) {
    if (!is_array($rbWhyItem)) {
        continue;
    }

    $rbWhyTitleLines = array_values(array_filter(array_map(
        static fn ($rbWhyLine) => trim((string) $rbWhyLine),
        is_array($rbWhyItem['title_lines'] ?? null) ? $rbWhyItem['title_lines'] : []
    ), static fn (string $rbWhyLine): bool => $rbWhyLine !== ''));

    $rbWhyImage = (string) ($rbWhyItem['image'] ?? '');
    $rbWhyImageAlt = (string) ($rbWhyItem['image_alt'] ?? '');
    $rbWhyImageScale = (float) ($rbWhyItem['image_scale'] ?? 1);
    if ($rbWhyImageScale <= 0) {
        $rbWhyImageScale = 1;
    }

    if ($rbWhyTitleLines === []) {
        continue;
    }

    $rbWhyImageAsset = $rbWhyResolveAsset($rbWhyImage);
    if ($rbWhyImageAsset['url'] === '') {
        continue;
    }

    $rbWhyItemsToRender[] = [
        'title_lines' => $rbWhyTitleLines,
        'image' => $rbWhyImageAsset,
        'image_alt' => $rbWhyImageAlt !== '' ? $rbWhyImageAlt : implode(' ', $rbWhyTitleLines),
        'image_scale' => number_format($rbWhyImageScale, 2, '.', ''),
    ];
}

if ($rbWhyTitle === '' || $rbWhyItemsToRender === []) {
    return;
}
?>
<section class="rb-section rb-why" id="<?= htmlspecialchars($rbWhySectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-why-title" data-rb-why>
    <div class="rb-container">
        <header class="rb-why__header">
            <h2 class="rb-section-title rb-why__title" id="rb-why-title"><?= htmlspecialchars($rbWhyTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        </header>

        <ul class="rb-why__grid" role="list">
            <?php foreach ($rbWhyItemsToRender as $rbWhyIndex => $rbWhyItem): ?>
                <li class="rb-why__item">
                    <article class="rb-why__article" style="--rb-why-image-scale: <?= htmlspecialchars($rbWhyItem['image_scale'], ENT_QUOTES, 'UTF-8') ?>;">
                        <figure class="rb-why__figure">
                            <div class="rb-why__visual">
                                <div class="rb-why__backdrop" aria-hidden="true"></div>
                                <img
                                    class="rb-why__image"
                                    src="<?= htmlspecialchars($rbWhyItem['image']['url'], ENT_QUOTES, 'UTF-8') ?>"
                                    alt="<?= htmlspecialchars($rbWhyItem['image_alt'], ENT_QUOTES, 'UTF-8') ?>"
                                    width="<?= $rbWhyItem['image']['width'] > 0 ? $rbWhyItem['image']['width'] : 512 ?>"
                                    height="<?= $rbWhyItem['image']['height'] > 0 ? $rbWhyItem['image']['height'] : 512 ?>"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </div>

                            <figcaption class="rb-why__caption">
                                <?php foreach ($rbWhyItem['title_lines'] as $rbWhyLine): ?>
                                    <span class="rb-why__caption-line"><?= htmlspecialchars($rbWhyLine, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endforeach; ?>
                            </figcaption>
                        </figure>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
