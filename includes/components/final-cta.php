<?php
$rbFinalCtaData = $rbFinalCtaData ?? [];

$rbFinalCtaSectionId = (string) ($rbFinalCtaData['section_id'] ?? '');
$rbFinalCtaEyebrow = trim((string) ($rbFinalCtaData['eyebrow'] ?? ''));
$rbFinalCtaTitle = trim((string) ($rbFinalCtaData['title'] ?? ''));
$rbFinalCtaDescription = trim((string) ($rbFinalCtaData['description'] ?? ''));
$rbFinalCtaPrimaryAction = is_array($rbFinalCtaData['primary_action'] ?? null) ? $rbFinalCtaData['primary_action'] : [];
$rbFinalCtaSecondaryAction = is_array($rbFinalCtaData['secondary_action'] ?? null) ? $rbFinalCtaData['secondary_action'] : [];

$rbFinalCtaNormalizeAction = static function (array $rbFinalCtaAction): ?array {
    $rbFinalCtaHref = trim((string) ($rbFinalCtaAction['href'] ?? ''));
    $rbFinalCtaLabel = trim((string) ($rbFinalCtaAction['label'] ?? ''));
    $rbFinalCtaVariant = strtolower(trim((string) ($rbFinalCtaAction['variant'] ?? 'outline')));

    if ($rbFinalCtaHref === '' || $rbFinalCtaLabel === '') {
        return null;
    }

    if (!in_array($rbFinalCtaVariant, ['primary', 'secondary', 'outline'], true)) {
        $rbFinalCtaVariant = 'outline';
    }

    if (!in_array($rbFinalCtaHref, ['#contacto', '#soluciones'], true)) {
        return null;
    }

    return [
        'href' => $rbFinalCtaHref,
        'label' => $rbFinalCtaLabel,
        'variant' => $rbFinalCtaVariant,
    ];
};

$rbFinalCtaActionsToRender = array_values(array_filter([
    $rbFinalCtaNormalizeAction($rbFinalCtaPrimaryAction),
    $rbFinalCtaNormalizeAction($rbFinalCtaSecondaryAction),
]));

if ($rbFinalCtaSectionId === '' || $rbFinalCtaTitle === '' || $rbFinalCtaDescription === '' || $rbFinalCtaActionsToRender === []) {
    return;
}
?>
<section class="rb-section rb-final-cta" id="<?= htmlspecialchars($rbFinalCtaSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-final-cta-title">
    <div class="rb-container">
        <div class="rb-final-cta__shell">
            <div class="rb-final-cta__inner">
                <div class="rb-final-cta__copy">
                    <?php if ($rbFinalCtaEyebrow !== ''): ?>
                        <p class="rb-final-cta__eyebrow"><?= htmlspecialchars($rbFinalCtaEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <h2 class="rb-section-title rb-final-cta__title" id="rb-final-cta-title"><?= htmlspecialchars($rbFinalCtaTitle, ENT_QUOTES, 'UTF-8') ?></h2>

                    <p class="rb-final-cta__description"><?= htmlspecialchars($rbFinalCtaDescription, ENT_QUOTES, 'UTF-8') ?></p>
                </div>

                <div class="rb-final-cta__actions rb-button-group" role="group" aria-label="Acciones principales">
                    <?php foreach ($rbFinalCtaActionsToRender as $rbFinalCtaAction): ?>
                        <a
                            class="rb-button rb-button--<?= htmlspecialchars($rbFinalCtaAction['variant'], ENT_QUOTES, 'UTF-8') ?> rb-final-cta__action"
                            href="<?= htmlspecialchars($rbFinalCtaAction['href'], ENT_QUOTES, 'UTF-8') ?>"
                        >
                            <?= htmlspecialchars($rbFinalCtaAction['label'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
