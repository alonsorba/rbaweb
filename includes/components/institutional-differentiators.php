<?php
$rbInstitutionalDifferentiatorsData = is_array($rbInstitutionalDifferentiatorsData ?? null) ? $rbInstitutionalDifferentiatorsData : [];

$rbInstitutionalDifferentiatorsSectionId = trim((string) ($rbInstitutionalDifferentiatorsData['section_id'] ?? 'rb-about-differentiators'));
$rbInstitutionalDifferentiatorsEyebrow = trim((string) ($rbInstitutionalDifferentiatorsData['eyebrow'] ?? ''));
$rbInstitutionalDifferentiatorsTitle = trim((string) ($rbInstitutionalDifferentiatorsData['title'] ?? ''));
$rbInstitutionalDifferentiatorsItems = is_array($rbInstitutionalDifferentiatorsData['items'] ?? null) ? $rbInstitutionalDifferentiatorsData['items'] : [];

if ($rbInstitutionalDifferentiatorsSectionId === '' || $rbInstitutionalDifferentiatorsTitle === '' || $rbInstitutionalDifferentiatorsItems === []) {
    return;
}
?>
<section class="rb-section rb-about-differentiators" id="<?= htmlspecialchars($rbInstitutionalDifferentiatorsSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-about-differentiators-title">
    <div class="rb-container">
        <header class="rb-section-header rb-about-differentiators__header">
            <?php if ($rbInstitutionalDifferentiatorsEyebrow !== ''): ?>
                <p class="rb-section-label"><?= htmlspecialchars($rbInstitutionalDifferentiatorsEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

            <h2 class="rb-section-title rb-about-differentiators__title" id="rb-about-differentiators-title"><?= htmlspecialchars($rbInstitutionalDifferentiatorsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        </header>

        <div class="rb-about-differentiators__grid">
            <?php foreach ($rbInstitutionalDifferentiatorsItems as $rbInstitutionalDifferentiatorsIndex => $rbInstitutionalDifferentiatorsItem): ?>
                <?php
                if (!is_array($rbInstitutionalDifferentiatorsItem)) {
                    continue;
                }

                $rbInstitutionalDifferentiatorsNumber = str_pad((string) ($rbInstitutionalDifferentiatorsIndex + 1), 2, '0', STR_PAD_LEFT);
                $rbInstitutionalDifferentiatorsItemTitle = trim((string) ($rbInstitutionalDifferentiatorsItem['title'] ?? ''));
                $rbInstitutionalDifferentiatorsItemDescription = trim((string) ($rbInstitutionalDifferentiatorsItem['description'] ?? ''));

                if ($rbInstitutionalDifferentiatorsItemTitle === '' || $rbInstitutionalDifferentiatorsItemDescription === '') {
                    continue;
                }
                ?>
                <article class="rb-about-differentiators__card rb-card rb-card--elevated">
                    <span class="rb-about-differentiators__marker rb-icon-circle" aria-hidden="true"><?= htmlspecialchars($rbInstitutionalDifferentiatorsNumber, ENT_QUOTES, 'UTF-8') ?></span>
                    <h3 class="rb-about-differentiators__card-title"><?= htmlspecialchars($rbInstitutionalDifferentiatorsItemTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                    <p class="rb-about-differentiators__card-description"><?= htmlspecialchars($rbInstitutionalDifferentiatorsItemDescription, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
