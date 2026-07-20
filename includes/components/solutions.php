<?php
$rbSolutionsData = $rbSolutionsData ?? [];

$rbSolutionsSectionId = (string) ($rbSolutionsData['section_id'] ?? 'soluciones');
$rbSolutionsTitle = (string) ($rbSolutionsData['title'] ?? 'Soluciones');
$rbSolutionsCategories = is_array($rbSolutionsData['categories'] ?? null) ? $rbSolutionsData['categories'] : [];

$rbSolutionsResolveAsset = static function (string $rbSolutionsImage): array {
    $rbSolutionsImage = trim($rbSolutionsImage);
    if ($rbSolutionsImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbSolutionsRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbSolutionsImage);
    $rbSolutionsRelative = ltrim((string) $rbSolutionsRelative, '/');
    $rbSolutionsRelative = rawurldecode($rbSolutionsRelative);

    $rbSolutionsBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbSolutionsFilePath = $rbSolutionsBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbSolutionsRelative);

    if (!is_file($rbSolutionsFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbSolutionsImageInfo = @getimagesize($rbSolutionsFilePath) ?: [];

    return [
        'url' => $rbSolutionsImage,
        'width' => (int) ($rbSolutionsImageInfo[0] ?? 0),
        'height' => (int) ($rbSolutionsImageInfo[1] ?? 0),
    ];
};
?>
<section class="rb-section rb-solutions" id="<?= htmlspecialchars($rbSolutionsSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-solutions-title" data-rb-solutions>
    <div class="rb-container">
        <header class="rb-solutions__header">
            <?php if ($rbSolutionsTitle !== ''): ?>
                <h2 class="rb-solutions__title" id="rb-solutions-title"><?= htmlspecialchars($rbSolutionsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
            <?php endif; ?>
        </header>

        <?php if (!empty($rbSolutionsCategories)): ?>
            <div class="rb-solutions__tabs" role="tablist" aria-label="Categorías de soluciones">
                <?php foreach ($rbSolutionsCategories as $rbSolutionsCategoryIndex => $rbSolutionsCategory): ?>
                    <?php
                    $rbSolutionsCategoryId = (string) ($rbSolutionsCategory['id'] ?? '');
                    $rbSolutionsCategoryLabel = (string) ($rbSolutionsCategory['label'] ?? '');
                    $rbSolutionsCategoryActive = (bool) ($rbSolutionsCategory['active'] ?? false);
                    $rbSolutionsTabId = 'rb-solutions-tab-' . $rbSolutionsCategoryId;
                    $rbSolutionsPanelId = 'rb-solutions-panel-' . $rbSolutionsCategoryId;
                    ?>
                    <button
                        class="rb-pill rb-solutions__tab<?= $rbSolutionsCategoryActive ? ' rb-solutions__tab--active' : '' ?>"
                        type="button"
                        id="<?= htmlspecialchars($rbSolutionsTabId, ENT_QUOTES, 'UTF-8') ?>"
                        role="tab"
                        aria-controls="<?= htmlspecialchars($rbSolutionsPanelId, ENT_QUOTES, 'UTF-8') ?>"
                        aria-selected="<?= $rbSolutionsCategoryActive ? 'true' : 'false' ?>"
                        tabindex="<?= $rbSolutionsCategoryActive ? '0' : '-1' ?>"
                        data-rb-solutions-tab
                        data-rb-solutions-target="<?= htmlspecialchars($rbSolutionsCategoryId, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <?= htmlspecialchars($rbSolutionsCategoryLabel, ENT_QUOTES, 'UTF-8') ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="rb-solutions__panels">
                <?php foreach ($rbSolutionsCategories as $rbSolutionsCategoryIndex => $rbSolutionsCategory): ?>
                    <?php
                    $rbSolutionsCategoryId = (string) ($rbSolutionsCategory['id'] ?? '');
                    $rbSolutionsCategoryActive = (bool) ($rbSolutionsCategory['active'] ?? false);
                    $rbSolutionsCategoryItems = is_array($rbSolutionsCategory['items'] ?? null) ? $rbSolutionsCategory['items'] : [];
                    $rbSolutionsTabId = 'rb-solutions-tab-' . $rbSolutionsCategoryId;
                    $rbSolutionsPanelId = 'rb-solutions-panel-' . $rbSolutionsCategoryId;
                    ?>
                    <section
                        class="rb-solutions__panel"
                        id="<?= htmlspecialchars($rbSolutionsPanelId, ENT_QUOTES, 'UTF-8') ?>"
                        role="tabpanel"
                        aria-labelledby="<?= htmlspecialchars($rbSolutionsTabId, ENT_QUOTES, 'UTF-8') ?>"
                        <?= $rbSolutionsCategoryActive ? '' : 'hidden' ?>
                        data-rb-solutions-panel
                        data-rb-solutions-category="<?= htmlspecialchars($rbSolutionsCategoryId, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <div class="rb-solutions__controls">
                            <div class="rb-carousel-nav rb-solutions__nav" aria-label="Navegación de tarjetas">
                                <button
                                    class="rb-carousel-button rb-solutions__nav-button"
                                    type="button"
                                    aria-label="Tarjetas anteriores"
                                    data-rb-solutions-prev
                                >
                                    <span aria-hidden="true">‹</span>
                                </button>
                                <button
                                    class="rb-carousel-button rb-solutions__nav-button"
                                    type="button"
                                    aria-label="Tarjetas siguientes"
                                    data-rb-solutions-next
                                >
                                    <span aria-hidden="true">›</span>
                                </button>
                            </div>
                        </div>

                        <div class="rb-solutions__viewport rb-carousel" data-rb-solutions-viewport>
                            <div class="rb-solutions__track rb-carousel__track">
                                <?php foreach ($rbSolutionsCategoryItems as $rbSolutionsItem): ?>
                                    <?php
                                    $rbSolutionsItemTitle = (string) ($rbSolutionsItem['title'] ?? '');
                                    $rbSolutionsItemDescription = (string) ($rbSolutionsItem['description'] ?? '');
                                    $rbSolutionsItemImage = (string) ($rbSolutionsItem['image'] ?? '');
                                    $rbSolutionsItemImageAlt = (string) ($rbSolutionsItem['image_alt'] ?? $rbSolutionsItemTitle);
                                    $rbSolutionsItemUrl = (string) ($rbSolutionsItem['url'] ?? '#');
                                    $rbSolutionsItemCta = (string) ($rbSolutionsItem['cta_label'] ?? 'VER COBERTURA');
                                    $rbSolutionsImageAsset = $rbSolutionsResolveAsset($rbSolutionsItemImage);
                                    ?>
                                    <article class="rb-carousel-card rb-solutions__card">
                                        <div class="rb-solutions__media">
                                            <?php if ($rbSolutionsImageAsset['url'] !== ''): ?>
                                                <img
                                                    class="rb-solutions__image"
                                                    src="<?= htmlspecialchars($rbSolutionsImageAsset['url'], ENT_QUOTES, 'UTF-8') ?>"
                                                    alt="<?= htmlspecialchars($rbSolutionsItemImageAlt, ENT_QUOTES, 'UTF-8') ?>"
                                                    width="<?= $rbSolutionsImageAsset['width'] > 0 ? $rbSolutionsImageAsset['width'] : 512 ?>"
                                                    height="<?= $rbSolutionsImageAsset['height'] > 0 ? $rbSolutionsImageAsset['height'] : 512 ?>"
                                                    loading="lazy"
                                                    decoding="async"
                                                >
                                            <?php endif; ?>
                                        </div>

                                        <div class="rb-solutions__card-body">
                                            <?php if ($rbSolutionsItemTitle !== ''): ?>
                                                <h3 class="rb-solutions__card-title"><?= htmlspecialchars($rbSolutionsItemTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                                            <?php endif; ?>

                                            <?php if ($rbSolutionsItemDescription !== ''): ?>
                                                <p class="rb-solutions__description mb-0"><?= htmlspecialchars($rbSolutionsItemDescription, ENT_QUOTES, 'UTF-8') ?></p>
                                            <?php endif; ?>

                                            <?php if ($rbSolutionsItemUrl !== '' && $rbSolutionsItemCta !== ''): ?>
                                                <a class="rb-button rb-button--primary rb-solutions__cta" href="<?= htmlspecialchars($rbSolutionsItemUrl, ENT_QUOTES, 'UTF-8') ?>">
                                                    <?= htmlspecialchars($rbSolutionsItemCta, ENT_QUOTES, 'UTF-8') ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
