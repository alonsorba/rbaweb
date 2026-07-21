<?php
$rbInternalCtaData = is_array($rbInternalCtaData ?? null) ? $rbInternalCtaData : [];

$rbInternalCtaSectionId = trim((string) ($rbInternalCtaData['section_id'] ?? 'rb-internal-cta'));
$rbInternalCtaEyebrow = trim((string) ($rbInternalCtaData['eyebrow'] ?? ''));
$rbInternalCtaTitle = trim((string) ($rbInternalCtaData['title'] ?? ''));
$rbInternalCtaDescription = trim((string) ($rbInternalCtaData['description'] ?? ''));
$rbInternalCtaActions = is_array($rbInternalCtaData['actions'] ?? null) ? $rbInternalCtaData['actions'] : [];

if ($rbInternalCtaSectionId === '' || $rbInternalCtaTitle === '' || $rbInternalCtaDescription === '' || $rbInternalCtaActions === []) {
    return;
}
?>
<section class="rb-section rb-internal-cta" id="<?= htmlspecialchars($rbInternalCtaSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-internal-cta-title">
    <div class="rb-container">
        <div class="rb-internal-cta__shell">
            <div class="rb-internal-cta__content">
                <?php if ($rbInternalCtaEyebrow !== ''): ?>
                    <p class="rb-internal-cta__eyebrow"><?= htmlspecialchars($rbInternalCtaEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <h2 class="rb-section-title rb-internal-cta__title" id="rb-internal-cta-title"><?= htmlspecialchars($rbInternalCtaTitle, ENT_QUOTES, 'UTF-8') ?></h2>

                <p class="rb-internal-cta__description"><?= htmlspecialchars($rbInternalCtaDescription, ENT_QUOTES, 'UTF-8') ?></p>
            </div>

            <div class="rb-internal-cta__actions">
                <?php foreach ($rbInternalCtaActions as $rbInternalCtaAction): ?>
                    <?php
                    if (!is_array($rbInternalCtaAction)) {
                        continue;
                    }

                    $rbInternalCtaActionHref = trim((string) ($rbInternalCtaAction['href'] ?? '#'));
                    $rbInternalCtaActionLabel = trim((string) ($rbInternalCtaAction['label'] ?? ''));
                    $rbInternalCtaActionVariant = strtolower(trim((string) ($rbInternalCtaAction['variant'] ?? 'outline')));
                    $rbInternalCtaActionClass = $rbInternalCtaActionVariant === 'primary' ? 'rb-button--primary' : 'rb-button--outline';

                    if ($rbInternalCtaActionHref === '' || $rbInternalCtaActionLabel === '') {
                        continue;
                    }
                    ?>
                    <a class="rb-button <?= htmlspecialchars($rbInternalCtaActionClass, ENT_QUOTES, 'UTF-8') ?> rb-internal-cta__action" href="<?= htmlspecialchars($rbInternalCtaActionHref, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($rbInternalCtaActionLabel, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
