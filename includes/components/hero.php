<?php
$rbHeroData = $rbHeroData ?? [];

$rbHeroId = $rbHeroData['id'] ?? 'inicio';
$rbHeroBackgroundImage = $rbHeroData['backgroundImage'] ?? '';
$rbHeroEyebrow = $rbHeroData['eyebrow'] ?? '';
$rbHeroTitleLines = $rbHeroData['titleLines'] ?? [];
$rbHeroSubtitle = $rbHeroData['subtitle'] ?? '';
$rbHeroPrimaryAction = $rbHeroData['primaryAction'] ?? [];
$rbHeroSecondaryAction = $rbHeroData['secondaryAction'] ?? [];
$rbHeroFloatingBadge = $rbHeroData['floatingBadge'] ?? [];

$rbHeroStyle = '';
if ($rbHeroBackgroundImage !== '') {
    $rbHeroStyle = sprintf(
        " style=\"--rb-hero-bg-image: url('%s')\"",
        htmlspecialchars($rbHeroBackgroundImage, ENT_QUOTES, 'UTF-8')
    );
}
?>
<section class="rb-hero rb-section rb-section--tight" id="<?= htmlspecialchars($rbHeroId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-hero-title"<?= $rbHeroStyle ?>>
    <div class="rb-container">
        <div class="rb-hero__stage">
            <div class="rb-hero__content rb-glass-card rb-shadow-elevated">
                <?php if ($rbHeroEyebrow !== ''): ?>
                    <p class="rb-kicker rb-hero__eyebrow mb-2"><?= htmlspecialchars($rbHeroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <h1 class="rb-hero__title" id="rb-hero-title">
                    <?php foreach ($rbHeroTitleLines as $rbHeroTitleLine): ?>
                        <span class="rb-hero__title-line"><?= htmlspecialchars($rbHeroTitleLine, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </h1>

                <?php if ($rbHeroSubtitle !== ''): ?>
                    <p class="rb-hero__subtitle"><?= htmlspecialchars($rbHeroSubtitle, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <div class="rb-hero__actions">
                    <?php if (!empty($rbHeroPrimaryAction['href']) && !empty($rbHeroPrimaryAction['label'])): ?>
                        <a class="rb-button rb-button--primary" href="<?= htmlspecialchars($rbHeroPrimaryAction['href'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($rbHeroPrimaryAction['label'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($rbHeroSecondaryAction['href']) && !empty($rbHeroSecondaryAction['label'])): ?>
                        <a class="rb-button rb-button--outline" href="<?= htmlspecialchars($rbHeroSecondaryAction['href'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($rbHeroSecondaryAction['label'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($rbHeroFloatingBadge)): ?>
                <aside class="rb-hero__floating-card rb-floating-card rb-glass-card" aria-label="Mensaje destacado">
                    <?php if (!empty($rbHeroFloatingBadge['label'])): ?>
                        <p class="rb-badge rb-hero__floating-label mb-3"><?= htmlspecialchars($rbHeroFloatingBadge['label'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <?php if (!empty($rbHeroFloatingBadge['title'])): ?>
                        <p class="rb-hero__floating-title mb-2"><?= htmlspecialchars($rbHeroFloatingBadge['title'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <?php if (!empty($rbHeroFloatingBadge['text'])): ?>
                        <p class="rb-hero__floating-text mb-0"><?= htmlspecialchars($rbHeroFloatingBadge['text'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>
                </aside>
            <?php endif; ?>
        </div>
    </div>
</section>
