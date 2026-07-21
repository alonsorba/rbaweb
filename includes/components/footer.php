<?php
$rbFooterData = is_array($rbFooterData ?? null) ? $rbFooterData : [];

$rbFooterCurrentScript = strtolower(basename((string) (parse_url($_SERVER['SCRIPT_NAME'] ?? '', PHP_URL_PATH) ?: '')));
$rbFooterHomePath = SITE_BASE_URL . '/index.php';

$rbFooterResolveHref = static function (string $rbFooterHref) use ($rbFooterCurrentScript, $rbFooterHomePath): string {
    $rbFooterHref = trim($rbFooterHref);

    if ($rbFooterHref === '') {
        return '#';
    }

    if (preg_match('/^(?:[a-z][a-z0-9+.-]*:|\/\/)/i', $rbFooterHref)) {
        return $rbFooterHref;
    }

    if ($rbFooterHref[0] === '#') {
        return $rbFooterCurrentScript === 'index.php' ? $rbFooterHref : $rbFooterHomePath . $rbFooterHref;
    }

    return SITE_BASE_URL . '/' . ltrim($rbFooterHref, '/');
};

$rbFooterSectionId = trim((string) ($rbFooterData['section_id'] ?? 'footer'));
$rbFooterBrand = is_array($rbFooterData['brand'] ?? null) ? $rbFooterData['brand'] : [];
$rbFooterBrandLabel = trim((string) ($rbFooterBrand['label'] ?? ''));
$rbFooterBrandEyebrow = trim((string) ($rbFooterBrand['eyebrow'] ?? ''));
$rbFooterBrandHref = $rbFooterResolveHref((string) ($rbFooterBrand['href'] ?? '#inicio'));
$rbFooterBrandLogo = trim((string) ($rbFooterBrand['logo'] ?? ''));
$rbFooterBrandLogoWidth = (int) ($rbFooterBrand['logo_width'] ?? 0);
$rbFooterBrandLogoHeight = (int) ($rbFooterBrand['logo_height'] ?? 0);
$rbFooterBrandDescription = trim((string) ($rbFooterBrand['description'] ?? ''));

$rbFooterNavigation = is_array($rbFooterData['navigation'] ?? null) ? $rbFooterData['navigation'] : [];
$rbFooterNavigationLabel = trim((string) ($rbFooterNavigation['label'] ?? ''));
$rbFooterNavigationItems = is_array($rbFooterNavigation['items'] ?? null) ? $rbFooterNavigation['items'] : [];

$rbFooterLegal = is_array($rbFooterData['legal'] ?? null) ? $rbFooterData['legal'] : [];
$rbFooterLegalLabel = trim((string) ($rbFooterLegal['label'] ?? ''));
$rbFooterLegalItems = is_array($rbFooterLegal['items'] ?? null) ? $rbFooterLegal['items'] : [];

$rbFooterMeta = is_array($rbFooterData['meta'] ?? null) ? $rbFooterData['meta'] : [];
$rbFooterMetaLabel = trim((string) ($rbFooterMeta['label'] ?? ''));
$rbFooterCopyright = trim((string) ($rbFooterMeta['copyright'] ?? ''));
$rbFooterYear = date('Y');

if ($rbFooterSectionId === '' || $rbFooterBrandLabel === '' || $rbFooterNavigationItems === [] || $rbFooterLegalItems === []) {
    return;
}
?>
<footer class="rb-footer" id="<?= htmlspecialchars($rbFooterSectionId, ENT_QUOTES, 'UTF-8') ?>" role="contentinfo" aria-labelledby="rb-footer-brand-title">
    <div class="rb-container">
        <div class="rb-footer__inner">
            <div class="rb-footer__grid">
                <section class="rb-footer__brand" aria-labelledby="rb-footer-brand-title">
                    <a class="rb-footer__brand-link" href="<?= htmlspecialchars($rbFooterBrandHref, ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($rbFooterBrandLabel, ENT_QUOTES, 'UTF-8') ?>">
                        <?php if ($rbFooterBrandLogo !== ''): ?>
                            <img
                                class="rb-footer__brand-logo"
                                src="<?= htmlspecialchars($rbFooterBrandLogo, ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($rbFooterBrandLabel, ENT_QUOTES, 'UTF-8') ?>"
                                <?= $rbFooterBrandLogoWidth > 0 ? 'width="' . (int) $rbFooterBrandLogoWidth . '"' : '' ?>
                                <?= $rbFooterBrandLogoHeight > 0 ? 'height="' . (int) $rbFooterBrandLogoHeight . '"' : '' ?>
                                loading="lazy"
                                decoding="async"
                            >
                        <?php endif; ?>
                    </a>

                    <div class="rb-footer__brand-copy">
                        <?php if ($rbFooterBrandEyebrow !== ''): ?>
                            <p class="rb-footer__eyebrow"><?= htmlspecialchars($rbFooterBrandEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                        <h2 class="rb-footer__brand-title" id="rb-footer-brand-title"><?= htmlspecialchars($rbFooterBrandLabel, ENT_QUOTES, 'UTF-8') ?></h2>

                        <?php if ($rbFooterBrandDescription !== ''): ?>
                            <p class="rb-footer__description"><?= htmlspecialchars($rbFooterBrandDescription, ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    </div>
                </section>

                <nav class="rb-footer__section" aria-labelledby="rb-footer-navigation-title">
                    <?php if ($rbFooterNavigationLabel !== ''): ?>
                        <p class="rb-footer__section-title" id="rb-footer-navigation-title"><?= htmlspecialchars($rbFooterNavigationLabel, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <ul class="rb-footer__list" role="list">
                        <?php foreach ($rbFooterNavigationItems as $rbFooterNavigationItem): ?>
                            <?php
                            if (!is_array($rbFooterNavigationItem)) {
                                continue;
                            }

                            $rbFooterNavigationItemLabel = trim((string) ($rbFooterNavigationItem['label'] ?? ''));
                            $rbFooterNavigationItemHref = $rbFooterResolveHref((string) ($rbFooterNavigationItem['href'] ?? ''));

                            if ($rbFooterNavigationItemLabel === '') {
                                continue;
                            }
                            ?>
                            <li>
                                <a class="rb-footer__link" href="<?= htmlspecialchars($rbFooterNavigationItemHref, ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars($rbFooterNavigationItemLabel, ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <nav class="rb-footer__section" aria-labelledby="rb-footer-legal-title">
                    <?php if ($rbFooterLegalLabel !== ''): ?>
                        <p class="rb-footer__section-title" id="rb-footer-legal-title"><?= htmlspecialchars($rbFooterLegalLabel, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <ul class="rb-footer__list" role="list">
                        <?php foreach ($rbFooterLegalItems as $rbFooterLegalItem): ?>
                            <?php
                            if (!is_array($rbFooterLegalItem)) {
                                continue;
                            }

                            $rbFooterLegalItemLabel = trim((string) ($rbFooterLegalItem['label'] ?? ''));
                            $rbFooterLegalItemHref = $rbFooterResolveHref((string) ($rbFooterLegalItem['href'] ?? ''));

                            if ($rbFooterLegalItemLabel === '') {
                                continue;
                            }
                            ?>
                            <li>
                                <a class="rb-footer__link" href="<?= htmlspecialchars($rbFooterLegalItemHref, ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars($rbFooterLegalItemLabel, ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <div class="rb-footer__meta" aria-label="<?= htmlspecialchars($rbFooterMetaLabel !== '' ? $rbFooterMetaLabel : 'Informacion legal', ENT_QUOTES, 'UTF-8') ?>">
                <?php if ($rbFooterCopyright !== ''): ?>
                    <p class="rb-footer__copyright">
                        <?= htmlspecialchars($rbFooterCopyright, ENT_QUOTES, 'UTF-8') ?>
                        <?= htmlspecialchars($rbFooterYear, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
