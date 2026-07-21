<?php
$rbTestimonialsData = $rbTestimonialsData ?? [];

$rbTestimonialsSectionId = (string) ($rbTestimonialsData['section_id'] ?? 'testimonios');
$rbTestimonialsTitle = (string) ($rbTestimonialsData['title'] ?? 'Testimonios');
$rbTestimonialsItems = is_array($rbTestimonialsData['items'] ?? null) ? $rbTestimonialsData['items'] : [];

$rbTestimonialsResolveAsset = static function (string $rbTestimonialsImage): array {
    $rbTestimonialsImage = trim($rbTestimonialsImage);
    if ($rbTestimonialsImage === '') {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbTestimonialsRelative = preg_replace('#^' . preg_quote(SITE_BASE_URL, '#') . '#', '', $rbTestimonialsImage);
    $rbTestimonialsRelative = ltrim((string) $rbTestimonialsRelative, '/');
    $rbTestimonialsRelative = rawurldecode($rbTestimonialsRelative);

    $rbTestimonialsBasePath = rtrim(
        str_replace('/', DIRECTORY_SEPARATOR, (($_SERVER['DOCUMENT_ROOT'] ?? '') . SITE_BASE_URL)),
        DIRECTORY_SEPARATOR
    );
    $rbTestimonialsFilePath = $rbTestimonialsBasePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rbTestimonialsRelative);

    if (!is_file($rbTestimonialsFilePath)) {
        return [
            'url' => '',
            'width' => 0,
            'height' => 0,
        ];
    }

    $rbTestimonialsImageInfo = @getimagesize($rbTestimonialsFilePath) ?: [];

    return [
        'url' => $rbTestimonialsImage,
        'width' => (int) ($rbTestimonialsImageInfo[0] ?? 0),
        'height' => (int) ($rbTestimonialsImageInfo[1] ?? 0),
    ];
};

$rbTestimonialsNormalizeRating = static function ($rbTestimonialsRating): int {
    if (!is_numeric($rbTestimonialsRating)) {
        return 0;
    }

    $rbTestimonialsRating = (int) round((float) $rbTestimonialsRating);

    if ($rbTestimonialsRating < 0) {
        return 0;
    }

    if ($rbTestimonialsRating > 5) {
        return 5;
    }

    return $rbTestimonialsRating;
};

$rbTestimonialsItemsToRender = [];

foreach ($rbTestimonialsItems as $rbTestimonialsItem) {
    if (!is_array($rbTestimonialsItem)) {
        continue;
    }

    $rbTestimonialsName = trim((string) ($rbTestimonialsItem['name'] ?? ''));
    $rbTestimonialsRole = trim((string) ($rbTestimonialsItem['role'] ?? ''));
    $rbTestimonialsCompany = trim((string) ($rbTestimonialsItem['company'] ?? ''));
    $rbTestimonialsQuote = trim((string) ($rbTestimonialsItem['quote'] ?? ''));
    $rbTestimonialsRating = $rbTestimonialsNormalizeRating($rbTestimonialsItem['rating'] ?? 0);
    $rbTestimonialsAvatar = trim((string) ($rbTestimonialsItem['avatar'] ?? ''));
    $rbTestimonialsAvatarPlaceholder = trim((string) ($rbTestimonialsItem['avatar_placeholder'] ?? SITE_BASE_URL . '/assets/img/' . rawurlencode('persona.png')));
    $rbTestimonialsAvatarAlt = trim((string) ($rbTestimonialsItem['avatar_alt'] ?? ''));
    $rbTestimonialsProvisional = (bool) ($rbTestimonialsItem['provisional'] ?? false);

    if ($rbTestimonialsName === '' || $rbTestimonialsRole === '' || $rbTestimonialsCompany === '' || $rbTestimonialsQuote === '') {
        continue;
    }

    $rbTestimonialsAvatarAsset = $rbTestimonialsResolveAsset($rbTestimonialsAvatar);
    $rbTestimonialsAvatarIsPlaceholder = false;

    if ($rbTestimonialsAvatarAsset['url'] === '') {
        $rbTestimonialsAvatarAsset = $rbTestimonialsResolveAsset($rbTestimonialsAvatarPlaceholder);
        $rbTestimonialsAvatarIsPlaceholder = true;
    }

    $rbTestimonialsAvatarInitials = trim((string) ($rbTestimonialsItem['avatar_initials'] ?? ''));
    if ($rbTestimonialsAvatarInitials === '') {
        $rbTestimonialsNameSeed = preg_replace('/[^a-z0-9]/i', '', $rbTestimonialsName);
        $rbTestimonialsAvatarInitials = strtoupper(substr((string) $rbTestimonialsNameSeed, 0, 2));
    }
    if ($rbTestimonialsAvatarInitials === '') {
        $rbTestimonialsAvatarInitials = 'RB';
    }

    $rbTestimonialsItemsToRender[] = [
        'name' => $rbTestimonialsName,
        'role' => $rbTestimonialsRole,
        'company' => $rbTestimonialsCompany,
        'quote' => $rbTestimonialsQuote,
        'rating' => $rbTestimonialsRating,
        'avatar' => $rbTestimonialsAvatarAsset,
        'avatar_alt' => $rbTestimonialsAvatarAlt !== '' ? $rbTestimonialsAvatarAlt : 'Avatar provisional de ' . $rbTestimonialsName,
        'avatar_has_image' => $rbTestimonialsAvatarAsset['url'] !== '',
        'avatar_is_placeholder' => $rbTestimonialsAvatarIsPlaceholder,
        'avatar_initials' => $rbTestimonialsAvatarInitials,
        'provisional' => $rbTestimonialsProvisional,
    ];
}

if ($rbTestimonialsSectionId === '' || $rbTestimonialsTitle === '' || $rbTestimonialsItemsToRender === []) {
    return;
}
?>
<section class="rb-section rb-testimonials" id="<?= htmlspecialchars($rbTestimonialsSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-testimonials-title" data-rb-testimonials>
    <div class="rb-container">
        <header class="rb-testimonials__header">
            <h2 class="rb-section-title rb-testimonials__title" id="rb-testimonials-title"><?= htmlspecialchars($rbTestimonialsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        </header>

        <ul class="rb-testimonials__grid" role="list">
            <?php foreach ($rbTestimonialsItemsToRender as $rbTestimonialsItem): ?>
                <li class="rb-testimonials__item">
                    <article class="rb-card rb-testimonials__card"<?= $rbTestimonialsItem['provisional'] ? ' data-rb-provisional="true"' : '' ?>>
                        <div class="rb-testimonials__card-header">
                            <div class="rb-testimonials__avatar<?= $rbTestimonialsItem['avatar_is_placeholder'] ? ' rb-testimonials__avatar--placeholder' : '' ?>"<?= $rbTestimonialsItem['avatar_has_image'] ? '' : ' role="img" aria-label="' . htmlspecialchars($rbTestimonialsItem['avatar_alt'], ENT_QUOTES, 'UTF-8') . '"' ?>>
                                <?php if ($rbTestimonialsItem['avatar']['url'] !== ''): ?>
                                    <img
                                        class="rb-testimonials__avatar-image"
                                        src="<?= htmlspecialchars($rbTestimonialsItem['avatar']['url'], ENT_QUOTES, 'UTF-8') ?>"
                                        alt="<?= htmlspecialchars($rbTestimonialsItem['avatar_alt'], ENT_QUOTES, 'UTF-8') ?>"
                                        width="<?= $rbTestimonialsItem['avatar']['width'] > 0 ? $rbTestimonialsItem['avatar']['width'] : 256 ?>"
                                        height="<?= $rbTestimonialsItem['avatar']['height'] > 0 ? $rbTestimonialsItem['avatar']['height'] : 256 ?>"
                                        loading="lazy"
                                        decoding="async"
                                    >
                                <?php else: ?>
                                    <span class="rb-testimonials__avatar-fallback" aria-hidden="true"><?= htmlspecialchars($rbTestimonialsItem['avatar_initials'], ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="rb-testimonials__identity">
                                <p class="rb-testimonials__name"><?= htmlspecialchars($rbTestimonialsItem['name'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p class="rb-testimonials__role"><?= htmlspecialchars($rbTestimonialsItem['role'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p class="rb-testimonials__company"><?= htmlspecialchars($rbTestimonialsItem['company'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                        </div>

                        <div class="rb-testimonials__rating" aria-label="<?= htmlspecialchars((string) $rbTestimonialsItem['rating'], ENT_QUOTES, 'UTF-8') ?> de 5 estrellas">
                            <?php for ($rbTestimonialsStar = 1; $rbTestimonialsStar <= 5; $rbTestimonialsStar++): ?>
                                <span class="rb-testimonials__star <?= $rbTestimonialsStar <= $rbTestimonialsItem['rating'] ? 'rb-testimonials__star--filled' : 'rb-testimonials__star--empty' ?>" aria-hidden="true"><?= $rbTestimonialsStar <= $rbTestimonialsItem['rating'] ? '&#9733;' : '&#9734;' ?></span>
                            <?php endfor; ?>
                        </div>

                        <p class="rb-testimonials__quote"><?= htmlspecialchars($rbTestimonialsItem['quote'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
