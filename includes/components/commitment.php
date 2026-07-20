<?php
$rbCommitmentData = $rbCommitmentData ?? [];

$rbCommitmentSectionId = (string) ($rbCommitmentData['section_id'] ?? 'compromiso');
$rbCommitmentTextLines = is_array($rbCommitmentData['text_lines'] ?? null) ? $rbCommitmentData['text_lines'] : [];
$rbCommitmentImage = is_array($rbCommitmentData['image'] ?? null) ? $rbCommitmentData['image'] : [];

$rbCommitmentResolveAsset = static function (string $rbCommitmentImage): array {
    $rbCommitmentImage = trim($rbCommitmentImage);
    if ($rbCommitmentImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbCommitmentRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbCommitmentImage);
    $rbCommitmentRelative = ltrim((string) $rbCommitmentRelative, '/');
    $rbCommitmentRelative = rawurldecode($rbCommitmentRelative);

    $rbCommitmentBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbCommitmentFilePath = $rbCommitmentBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbCommitmentRelative);

    if (!is_file($rbCommitmentFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbCommitmentImageInfo = @getimagesize($rbCommitmentFilePath) ?: [];

    return [
        'url' => $rbCommitmentImage,
        'width' => (int) ($rbCommitmentImageInfo[0] ?? 0),
        'height' => (int) ($rbCommitmentImageInfo[1] ?? 0),
    ];
};

$rbCommitmentImageAsset = $rbCommitmentResolveAsset((string) ($rbCommitmentImage['src'] ?? ''));
?>
<section class="rb-section rb-commitment" id="<?= htmlspecialchars($rbCommitmentSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-commitment-title">
    <div class="rb-container">
        <div class="rb-commitment__inner">
            <div class="rb-commitment__copy">
                <h2 class="rb-commitment__text" id="rb-commitment-title">
                    <?php foreach ($rbCommitmentTextLines as $rbCommitmentLineIndex => $rbCommitmentLine): ?>
                        <?php if (!is_array($rbCommitmentLine)): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                        <span class="rb-commitment__text-line">
                            <?php foreach ($rbCommitmentLine as $rbCommitmentSegment): ?>
                                <?php
                                $rbCommitmentSegmentText = (string) ($rbCommitmentSegment['text'] ?? '');
                                $rbCommitmentSegmentHighlight = (bool) ($rbCommitmentSegment['highlight'] ?? false);
                                $rbCommitmentSegmentClass = $rbCommitmentSegmentHighlight ? 'rb-commitment__highlight' : 'rb-commitment__segment';
                                ?>
                                <?php if ($rbCommitmentSegmentText !== ''): ?>
                                    <span class="<?= htmlspecialchars($rbCommitmentSegmentClass, ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($rbCommitmentSegmentText, ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </span>
                    <?php endforeach; ?>
                </h2>
            </div>

            <?php if ($rbCommitmentImageAsset['url'] !== ''): ?>
                <figure class="rb-commitment__visual">
                    <span class="rb-commitment__media">
                        <img
                            class="rb-commitment__image"
                            src="<?= htmlspecialchars($rbCommitmentImageAsset['url'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars((string) ($rbCommitmentImage['alt'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                            width="<?= $rbCommitmentImageAsset['width'] > 0 ? $rbCommitmentImageAsset['width'] : 3931 ?>"
                            height="<?= $rbCommitmentImageAsset['height'] > 0 ? $rbCommitmentImageAsset['height'] : 2675 ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    </span>
                </figure>
            <?php endif; ?>
        </div>
    </div>
</section>
