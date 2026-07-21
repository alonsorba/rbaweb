<?php
$rbInternalHeroData = is_array($rbInternalHeroData ?? null) ? $rbInternalHeroData : [];

$rbInternalHeroSectionId = trim((string) ($rbInternalHeroData['section_id'] ?? 'rb-internal-hero'));
$rbInternalHeroEyebrow = trim((string) ($rbInternalHeroData['eyebrow'] ?? ''));
$rbInternalHeroTitle = trim((string) ($rbInternalHeroData['title'] ?? ''));
$rbInternalHeroDescription = trim((string) ($rbInternalHeroData['description'] ?? ''));
$rbInternalHeroImage = is_array($rbInternalHeroData['image'] ?? null) ? $rbInternalHeroData['image'] : [];
$rbInternalHeroImageSrc = trim((string) ($rbInternalHeroImage['src'] ?? ''));
$rbInternalHeroImageAlt = trim((string) ($rbInternalHeroImage['alt'] ?? ''));
$rbInternalHeroImageWidth = (int) ($rbInternalHeroImage['width'] ?? 0);
$rbInternalHeroImageHeight = (int) ($rbInternalHeroImage['height'] ?? 0);

if ($rbInternalHeroSectionId === '' || $rbInternalHeroTitle === '' || $rbInternalHeroDescription === '') {
    return;
}
?>
<section class="rb-section rb-internal-hero" id="<?= htmlspecialchars($rbInternalHeroSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-internal-hero-title">
    <div class="rb-container">
        <div class="rb-internal-hero__inner">
            <div class="rb-internal-hero__content">
                <?php if ($rbInternalHeroEyebrow !== ''): ?>
                    <p class="rb-internal-hero__eyebrow"><?= htmlspecialchars($rbInternalHeroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <h1 class="rb-internal-hero__title" id="rb-internal-hero-title"><?= htmlspecialchars($rbInternalHeroTitle, ENT_QUOTES, 'UTF-8') ?></h1>

                <p class="rb-internal-hero__description"><?= htmlspecialchars($rbInternalHeroDescription, ENT_QUOTES, 'UTF-8') ?></p>
            </div>

            <?php if ($rbInternalHeroImageSrc !== ''): ?>
                <figure class="rb-internal-hero__visual" style="background-image: url('<?= htmlspecialchars($rbInternalHeroImageSrc, ENT_QUOTES, 'UTF-8') ?>');">
                    <img
                        class="rb-internal-hero__image"
                        src="<?= htmlspecialchars($rbInternalHeroImageSrc, ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($rbInternalHeroImageAlt !== '' ? $rbInternalHeroImageAlt : $rbInternalHeroTitle, ENT_QUOTES, 'UTF-8') ?>"
                        <?= $rbInternalHeroImageWidth > 0 ? 'width="' . (int) $rbInternalHeroImageWidth . '"' : '' ?>
                        <?= $rbInternalHeroImageHeight > 0 ? 'height="' . (int) $rbInternalHeroImageHeight . '"' : '' ?>
                        loading="eager"
                        decoding="async"
                        fetchpriority="high"
                    >
                    <div class="rb-internal-hero__overlay" aria-hidden="true"></div>
                </figure>
            <?php endif; ?>
        </div>
    </div>
</section>
