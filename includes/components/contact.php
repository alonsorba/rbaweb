<?php
$rbContactData = $rbContactData ?? [];
$rbContactSolutionsSource = is_array($rbSolutionsData['categories'] ?? null) ? $rbSolutionsData['categories'] : [];

$rbContactSectionId = trim((string) ($rbContactData['section_id'] ?? ''));
$rbContactTitle = trim((string) ($rbContactData['title'] ?? ''));
$rbContactDescription = trim((string) ($rbContactData['description'] ?? ''));
$rbContactIntro = trim((string) ($rbContactData['intro'] ?? ''));
$rbContactForm = is_array($rbContactData['form'] ?? null) ? $rbContactData['form'] : [];
$rbContactPrivacy = is_array($rbContactData['privacy'] ?? null) ? $rbContactData['privacy'] : [];
$rbContactItems = is_array($rbContactData['contact_items'] ?? null) ? $rbContactData['contact_items'] : [];
$rbContactProvisional = (bool) ($rbContactData['provisional'] ?? false);
$rbContactStatusMessage = trim((string) ($rbContactForm['status_message'] ?? 'El formulario está listo para integrarse con el servicio de envío. Actualmente no realiza envíos.'));

$rbContactAllowedTypes = ['text', 'email', 'tel', 'select', 'textarea', 'checkbox'];

$rbContactNormalizeOptions = static function (array $rbContactOptions): array {
    $rbContactNormalized = [];

    foreach ($rbContactOptions as $rbContactOption) {
        if (!is_array($rbContactOption)) {
            continue;
        }

        $rbContactLabel = trim((string) ($rbContactOption['label'] ?? ''));
        $rbContactValue = trim((string) ($rbContactOption['value'] ?? ''));

        if ($rbContactLabel === '') {
            continue;
        }

        $rbContactNormalized[] = [
            'label' => $rbContactLabel,
            'value' => $rbContactValue,
            'disabled' => (bool) ($rbContactOption['disabled'] ?? false),
            'selected' => (bool) ($rbContactOption['selected'] ?? false),
        ];
    }

    return $rbContactNormalized;
};

$rbContactSolutionOptions = [];
if ($rbContactSolutionsSource !== []) {
    foreach ($rbContactSolutionsSource as $rbContactSolutionCategory) {
        if (!is_array($rbContactSolutionCategory)) {
            continue;
        }

        $rbContactSolutionLabel = trim((string) ($rbContactSolutionCategory['label'] ?? ''));
        $rbContactSolutionValue = trim((string) ($rbContactSolutionCategory['id'] ?? ''));

        if ($rbContactSolutionLabel === '' || $rbContactSolutionValue === '') {
            continue;
        }

        $rbContactSolutionOptions[] = [
            'value' => $rbContactSolutionValue,
            'label' => $rbContactSolutionLabel,
        ];
    }
}

if ($rbContactSolutionOptions === []) {
    $rbContactSolutionOptions = [
        ['value' => 'empresas', 'label' => 'Empresas'],
        ['value' => 'personas', 'label' => 'Personas'],
        ['value' => 'gestion-integral', 'label' => 'Gestión Integral'],
    ];
}

$rbContactFieldsToRender = [];
$rbContactFields = is_array($rbContactForm['fields'] ?? null) ? $rbContactForm['fields'] : [];

foreach ($rbContactFields as $rbContactField) {
    if (!is_array($rbContactField)) {
        continue;
    }

    $rbContactFieldName = preg_replace('/[^a-z0-9_]/i', '', (string) ($rbContactField['name'] ?? ''));
    $rbContactFieldType = strtolower(trim((string) ($rbContactField['type'] ?? 'text')));
    $rbContactFieldLabel = trim((string) ($rbContactField['label'] ?? ''));

    if ($rbContactFieldName === '' || $rbContactFieldLabel === '' || !in_array($rbContactFieldType, $rbContactAllowedTypes, true)) {
        continue;
    }

    $rbContactFieldId = 'rb-contact-' . $rbContactFieldName;
    $rbContactFieldFullWidth = (bool) ($rbContactField['full_width'] ?? in_array($rbContactFieldType, ['textarea', 'checkbox'], true));
    $rbContactFieldRequired = (bool) ($rbContactField['required'] ?? false);
    $rbContactFieldPlaceholder = trim((string) ($rbContactField['placeholder'] ?? ''));
    $rbContactFieldAutocomplete = trim((string) ($rbContactField['autocomplete'] ?? ''));
    $rbContactFieldInputmode = trim((string) ($rbContactField['inputmode'] ?? ''));
    $rbContactFieldMinlength = isset($rbContactField['minlength']) && is_numeric($rbContactField['minlength']) ? max(0, (int) $rbContactField['minlength']) : null;
    $rbContactFieldMaxlength = isset($rbContactField['maxlength']) && is_numeric($rbContactField['maxlength']) ? max(0, (int) $rbContactField['maxlength']) : null;
    $rbContactFieldOptions = [];

    if ($rbContactFieldType === 'select') {
        if ($rbContactFieldName === 'client_type') {
            $rbContactFieldOptions = $rbContactNormalizeOptions([
                [
                    'value' => '',
                    'label' => 'Selecciona una opción',
                    'disabled' => true,
                    'selected' => true,
                ],
                [
                    'value' => 'persona',
                    'label' => 'Persona',
                ],
                [
                    'value' => 'empresa',
                    'label' => 'Empresa',
                ],
            ]);
        } elseif ($rbContactFieldName === 'solution_interest') {
            $rbContactFieldOptions = $rbContactNormalizeOptions(
                array_merge(
                    [
                        [
                            'value' => '',
                            'label' => 'Selecciona una opción',
                            'disabled' => true,
                            'selected' => true,
                        ],
                    ],
                    $rbContactSolutionOptions
                )
            );
        } else {
            $rbContactFieldOptions = $rbContactNormalizeOptions(is_array($rbContactField['options'] ?? null) ? $rbContactField['options'] : []);
        }
    }

    $rbContactFieldsToRender[] = [
        'id' => $rbContactFieldId,
        'name' => $rbContactFieldName,
        'type' => $rbContactFieldType,
        'label' => $rbContactFieldLabel,
        'required' => $rbContactFieldRequired,
        'placeholder' => $rbContactFieldPlaceholder,
        'autocomplete' => $rbContactFieldAutocomplete,
        'inputmode' => $rbContactFieldInputmode,
        'minlength' => $rbContactFieldMinlength,
        'maxlength' => $rbContactFieldMaxlength,
        'options' => $rbContactFieldOptions,
        'full_width' => $rbContactFieldFullWidth,
    ];
}

$rbContactItemsToRender = [];
foreach ($rbContactItems as $rbContactItem) {
    if (!is_array($rbContactItem)) {
        continue;
    }

    $rbContactItemLabel = trim((string) ($rbContactItem['label'] ?? ''));
    $rbContactItemValue = trim((string) ($rbContactItem['value'] ?? ''));
    $rbContactItemHref = trim((string) ($rbContactItem['href'] ?? ''));
    $rbContactItemType = trim((string) ($rbContactItem['type'] ?? ''));

    if ($rbContactItemLabel === '' || $rbContactItemValue === '') {
        continue;
    }

    $rbContactItemsToRender[] = [
        'label' => $rbContactItemLabel,
        'value' => $rbContactItemValue,
        'href' => $rbContactItemHref,
        'type' => $rbContactItemType,
    ];
}

if ($rbContactSectionId === '' || $rbContactTitle === '' || $rbContactDescription === '' || $rbContactFieldsToRender === []) {
    return;
}

$rbContactLayoutClass = $rbContactItemsToRender !== [] ? ' rb-contact__layout--split' : ' rb-contact__layout--single';
?>
<section class="rb-section rb-contact rb-section--alt" id="<?= htmlspecialchars($rbContactSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-labelledby="rb-contact-title"<?= $rbContactProvisional ? ' data-rb-provisional="true"' : '' ?>>
    <div class="rb-container">
        <div class="rb-contact__inner">
            <header class="rb-contact__header">
                <?php if ($rbContactProvisional): ?>
                    <p class="rb-pill rb-contact__eyebrow">Contenido provisional</p>
                <?php endif; ?>

                <h2 class="rb-section-title rb-contact__title" id="rb-contact-title"><?= htmlspecialchars($rbContactTitle, ENT_QUOTES, 'UTF-8') ?></h2>

                <p class="rb-contact__description"><?= htmlspecialchars($rbContactDescription, ENT_QUOTES, 'UTF-8') ?></p>

                <?php if ($rbContactIntro !== ''): ?>
                    <p class="rb-form-help rb-contact__intro">
                        <?= htmlspecialchars($rbContactIntro, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                <?php endif; ?>
            </header>

            <div class="rb-contact__layout<?= htmlspecialchars($rbContactLayoutClass, ENT_QUOTES, 'UTF-8') ?>">
                <?php if ($rbContactItemsToRender !== []): ?>
                    <aside class="rb-contact__details" aria-label="Datos corporativos">
                        <?php foreach ($rbContactItemsToRender as $rbContactItem): ?>
                            <address class="rb-contact__detail rb-card rb-card--flat">
                                <p class="rb-contact__detail-label"><?= htmlspecialchars($rbContactItem['label'], ENT_QUOTES, 'UTF-8') ?></p>
                                <?php if ($rbContactItem['href'] !== ''): ?>
                                    <a class="rb-contact__detail-link" href="<?= htmlspecialchars($rbContactItem['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($rbContactItem['value'], ENT_QUOTES, 'UTF-8') ?></a>
                                <?php else: ?>
                                    <span class="rb-contact__detail-value"><?= htmlspecialchars($rbContactItem['value'], ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </address>
                        <?php endforeach; ?>
                    </aside>
                <?php endif; ?>

                <div class="rb-contact__form-card rb-card rb-card--elevated">
                    <form
                        class="rb-contact__form rb-form"
                        action="<?= htmlspecialchars((string) ($rbContactForm['action'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                        method="<?= htmlspecialchars(strtolower((string) ($rbContactForm['method'] ?? 'post')), ENT_QUOTES, 'UTF-8') ?>"
                        autocomplete="on"
                        novalidate
                        data-rb-contact-form
                        data-rb-contact-status-message="<?= htmlspecialchars($rbContactStatusMessage, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <fieldset class="rb-contact__fieldset">
                            <legend class="visually-hidden">Formulario de contacto</legend>

                            <div class="rb-contact__grid">
                                <?php foreach ($rbContactFieldsToRender as $rbContactField): ?>
                                    <?php if ($rbContactField['type'] === 'checkbox'): ?>
                                        <div class="rb-contact__field rb-contact__field--checkbox rb-contact__field--full" data-rb-contact-field>
                                            <label class="rb-contact__checkbox-label" for="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>">
                                                <input
                                                    class="rb-contact__checkbox-input"
                                                    id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>"
                                                    name="<?= htmlspecialchars($rbContactField['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                    type="checkbox"
                                                    <?= $rbContactField['required'] ? 'required' : '' ?>
                                                    data-rb-contact-control
                                                    aria-describedby="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error"
                                                >
                                                <span class="rb-contact__checkbox-text">
                                                    <?= htmlspecialchars($rbContactField['label'], ENT_QUOTES, 'UTF-8') ?>
                                                    <?php if (!empty($rbContactPrivacy['url']) && !empty($rbContactPrivacy['link_label'])): ?>
                                                        <a class="rb-contact__privacy-link" href="<?= htmlspecialchars((string) $rbContactPrivacy['url'], ENT_QUOTES, 'UTF-8') ?>">
                                                            <?= htmlspecialchars((string) $rbContactPrivacy['link_label'], ENT_QUOTES, 'UTF-8') ?>
                                                        </a>
                                                    <?php else: ?>
                                                        <span><?= htmlspecialchars((string) ($rbContactPrivacy['link_label'] ?? 'Aviso de Privacidad'), ENT_QUOTES, 'UTF-8') ?></span>
                                                    <?php endif; ?>
                                                    <span><?= htmlspecialchars((string) ($rbContactPrivacy['suffix'] ?? '.'), ENT_QUOTES, 'UTF-8') ?></span>
                                                </span>
                                            </label>
                                            <p class="rb-contact__error" id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error" role="alert" hidden data-rb-contact-error></p>
                                        </div>
                                    <?php else: ?>
                                        <div class="rb-contact__field<?= $rbContactField['full_width'] ? ' rb-contact__field--full' : '' ?>" data-rb-contact-field>
                                            <label class="rb-contact__label" for="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>">
                                                <?= htmlspecialchars($rbContactField['label'], ENT_QUOTES, 'UTF-8') ?>
                                                <?php if ($rbContactField['required']): ?>
                                                    <span class="rb-contact__required" aria-hidden="true">*</span>
                                                <?php endif; ?>
                                            </label>

                                            <?php if ($rbContactField['type'] === 'select'): ?>
                                                <select
                                                    class="rb-select rb-contact__select"
                                                    id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>"
                                                    name="<?= htmlspecialchars($rbContactField['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                    <?= $rbContactField['required'] ? 'required' : '' ?>
                                                    <?= $rbContactField['autocomplete'] !== '' ? 'autocomplete="' . htmlspecialchars($rbContactField['autocomplete'], ENT_QUOTES, 'UTF-8') . '"' : '' ?>
                                                    data-rb-contact-control
                                                    aria-describedby="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error"
                                                >
                                                    <?php foreach ($rbContactField['options'] as $rbContactOption): ?>
                                                        <option
                                                            value="<?= htmlspecialchars($rbContactOption['value'], ENT_QUOTES, 'UTF-8') ?>"
                                                            <?= $rbContactOption['disabled'] ? 'disabled' : '' ?>
                                                            <?= $rbContactOption['selected'] ? 'selected' : '' ?>
                                                        >
                                                            <?= htmlspecialchars($rbContactOption['label'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            <?php elseif ($rbContactField['type'] === 'textarea'): ?>
                                                <textarea
                                                    class="rb-textarea rb-contact__textarea"
                                                    id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>"
                                                    name="<?= htmlspecialchars($rbContactField['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                    placeholder="<?= htmlspecialchars($rbContactField['placeholder'], ENT_QUOTES, 'UTF-8') ?>"
                                                    <?= $rbContactField['required'] ? 'required' : '' ?>
                                                    <?= $rbContactField['minlength'] !== null ? 'minlength="' . (int) $rbContactField['minlength'] . '"' : '' ?>
                                                    <?= $rbContactField['maxlength'] !== null ? 'maxlength="' . (int) $rbContactField['maxlength'] . '"' : '' ?>
                                                    data-rb-contact-control
                                                    aria-describedby="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error"
                                                ></textarea>
                                            <?php else: ?>
                                                <input
                                                    class="rb-input rb-contact__input"
                                                    id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>"
                                                    name="<?= htmlspecialchars($rbContactField['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                    type="<?= htmlspecialchars($rbContactField['type'], ENT_QUOTES, 'UTF-8') ?>"
                                                    placeholder="<?= htmlspecialchars($rbContactField['placeholder'], ENT_QUOTES, 'UTF-8') ?>"
                                                    <?= $rbContactField['required'] ? 'required' : '' ?>
                                                    <?= $rbContactField['autocomplete'] !== '' ? 'autocomplete="' . htmlspecialchars($rbContactField['autocomplete'], ENT_QUOTES, 'UTF-8') . '"' : '' ?>
                                                    <?= $rbContactField['inputmode'] !== '' ? 'inputmode="' . htmlspecialchars($rbContactField['inputmode'], ENT_QUOTES, 'UTF-8') . '"' : '' ?>
                                                    <?= $rbContactField['minlength'] !== null ? 'minlength="' . (int) $rbContactField['minlength'] . '"' : '' ?>
                                                    <?= $rbContactField['maxlength'] !== null ? 'maxlength="' . (int) $rbContactField['maxlength'] . '"' : '' ?>
                                                    data-rb-contact-control
                                                    aria-describedby="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error"
                                                >
                                            <?php endif; ?>

                                            <p class="rb-contact__error" id="<?= htmlspecialchars($rbContactField['id'], ENT_QUOTES, 'UTF-8') ?>-error" role="alert" hidden data-rb-contact-error></p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </fieldset>

                        <div class="rb-contact__actions">
                            <button class="rb-button rb-button--primary rb-contact__submit" type="submit">
                                <?= htmlspecialchars((string) ($rbContactForm['submit_label'] ?? 'ENVIAR SOLICITUD'), ENT_QUOTES, 'UTF-8') ?>
                            </button>
                        </div>

                        <p class="rb-contact__status" role="status" aria-live="polite" hidden data-rb-contact-status></p>
                    </form>
                </div>
            </div>

            <?php if ($rbContactPrivacy !== []): ?>
                <p class="rb-contact__privacy-note">
                    <?= htmlspecialchars((string) ($rbContactPrivacy['label'] ?? 'Acepto el tratamiento de mis datos conforme al'), ENT_QUOTES, 'UTF-8') ?>
                    <?php if (!empty($rbContactPrivacy['url']) && !empty($rbContactPrivacy['link_label'])): ?>
                        <a class="rb-contact__privacy-link" href="<?= htmlspecialchars((string) $rbContactPrivacy['url'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars((string) $rbContactPrivacy['link_label'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endif; ?>
                    <?= htmlspecialchars((string) ($rbContactPrivacy['suffix'] ?? '.'), ENT_QUOTES, 'UTF-8') ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
