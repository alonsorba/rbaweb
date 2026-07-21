<?php
$rbInstitutionalIntroData = is_array($rbInstitutionalIntroData ?? null) ? $rbInstitutionalIntroData : [];

$rbInstitutionalIntroSectionId = trim((string) ($rbInstitutionalIntroData['section_id'] ?? 'rb-about-intro'));
$rbInstitutionalIntroEyebrow = trim((string) ($rbInstitutionalIntroData['eyebrow'] ?? ''));
$rbInstitutionalIntroTitle = trim((string) ($rbInstitutionalIntroData['title'] ?? ''));
$rbInstitutionalIntroParagraphs = is_array($rbInstitutionalIntroData['paragraphs'] ?? null) ? $rbInstitutionalIntroData['paragraphs'] : [];
$rbInstitutionalIntroNote = is_array($rbInstitutionalIntroData['note'] ?? null) ? $rbInstitutionalIntroData['note'] : [];

if ($rbInstitutionalIntroSectionId === '' || $rbInstitutionalIntroTitle === '' || $rbInstitutionalIntroParagraphs === []) {
    return;
}
?>
<section class="rb-section rb-about-intro" id="<?= htmlspecialchars($rbInstitutionalIntroSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-about-intro-title">
    <div class="rb-container">
        <div class="rb-about-intro__inner">
            <div class="rb-about-intro__content">
                <?php if ($rbInstitutionalIntroEyebrow !== ''): ?>
                    <p class="rb-section-label"><?= htmlspecialchars($rbInstitutionalIntroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <h2 class="rb-section-title rb-about-intro__title" id="rb-about-intro-title"><?= htmlspecialchars($rbInstitutionalIntroTitle, ENT_QUOTES, 'UTF-8') ?></h2>

                <div class="rb-about-intro__body">
                    <?php foreach ($rbInstitutionalIntroParagraphs as $rbInstitutionalIntroParagraph): ?>
                        <?php if (trim((string) $rbInstitutionalIntroParagraph) !== ''): ?>
                            <p><?= htmlspecialchars((string) $rbInstitutionalIntroParagraph, ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php if ($rbInstitutionalIntroNote !== []): ?>
                <aside class="rb-about-intro__note rb-card rb-card--elevated" aria-label="Enfoque de trabajo">
                    <?php if (trim((string) ($rbInstitutionalIntroNote['title'] ?? '')) !== ''): ?>
                        <p class="rb-about-intro__note-title"><?= htmlspecialchars((string) $rbInstitutionalIntroNote['title'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <?php if (is_array($rbInstitutionalIntroNote['items'] ?? null) && $rbInstitutionalIntroNote['items'] !== []): ?>
                        <ul class="rb-about-intro__list" role="list">
                            <?php foreach ($rbInstitutionalIntroNote['items'] as $rbInstitutionalIntroNoteItem): ?>
                                <?php if (trim((string) $rbInstitutionalIntroNoteItem) !== ''): ?>
                                    <li><?= htmlspecialchars((string) $rbInstitutionalIntroNoteItem, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </aside>
            <?php endif; ?>
        </div>
    </div>
</section>
