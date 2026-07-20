<?php
$rbNavbarData = $rbNavbarData ?? [];

$rbNavbarBrandHref = $rbNavbarData['brandHref'] ?? '#inicio';
$rbNavbarBrandSrc = $rbNavbarData['brandSrc'] ?? '';
$rbNavbarBrandAlt = $rbNavbarData['brandAlt'] ?? 'R. Baidón';
$rbNavbarLabel = $rbNavbarData['label'] ?? 'Navegación principal';
$rbNavbarToggleLabel = $rbNavbarData['toggleLabel'] ?? 'Abrir navegación principal';
$rbNavbarToggleTarget = $rbNavbarData['toggleTarget'] ?? 'rbNavbarMenu';
$rbNavbarLinks = $rbNavbarData['links'] ?? [];
$rbNavbarActions = $rbNavbarData['actions'] ?? [];
?>
<nav class="rb-navbar navbar navbar-expand-lg" aria-label="<?= htmlspecialchars($rbNavbarLabel, ENT_QUOTES, 'UTF-8') ?>">
    <div class="rb-container rb-navbar__inner">
        <a class="rb-navbar__brand" href="<?= htmlspecialchars($rbNavbarBrandHref, ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($rbNavbarBrandAlt, ENT_QUOTES, 'UTF-8') ?>">
            <?php if ($rbNavbarBrandSrc !== ''): ?>
                <img
                    class="rb-brand-logo"
                    src="<?= htmlspecialchars($rbNavbarBrandSrc, ENT_QUOTES, 'UTF-8') ?>"
                    alt="<?= htmlspecialchars($rbNavbarBrandAlt, ENT_QUOTES, 'UTF-8') ?>"
                    loading="eager"
                    decoding="async"
                >
            <?php endif; ?>
        </a>

        <button
            class="rb-navbar__toggle"
            type="button"
            aria-controls="<?= htmlspecialchars($rbNavbarToggleTarget, ENT_QUOTES, 'UTF-8') ?>"
            aria-expanded="false"
            aria-label="<?= htmlspecialchars($rbNavbarToggleLabel, ENT_QUOTES, 'UTF-8') ?>"
            data-rb-navbar-toggle
        >
            <span class="rb-navbar__toggle-lines" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="rb-navbar__collapse" id="<?= htmlspecialchars($rbNavbarToggleTarget, ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
            <div class="rb-navbar__menu">
                <ul class="rb-navbar__nav" role="list">
                    <?php foreach ($rbNavbarLinks as $rbNavbarLink): ?>
                        <?php
                        $rbNavbarLinkHref = $rbNavbarLink['href'] ?? '#';
                        $rbNavbarLinkLabel = $rbNavbarLink['label'] ?? '';
                        ?>
                        <li class="rb-navbar__nav-item">
                            <a class="rb-navbar__link" href="<?= htmlspecialchars($rbNavbarLinkHref, ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($rbNavbarLinkLabel, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="rb-navbar__actions">
                    <?php foreach ($rbNavbarActions as $rbNavbarAction): ?>
                        <?php
                        $rbNavbarActionHref = $rbNavbarAction['href'] ?? '#';
                        $rbNavbarActionLabel = $rbNavbarAction['label'] ?? '';
                        $rbNavbarActionVariant = $rbNavbarAction['variant'] ?? 'outline';
                        $rbNavbarActionClass = $rbNavbarActionVariant === 'accent' ? 'rb-button--nav-accent' : 'rb-button--nav';
                        ?>
                        <a class="rb-button <?= $rbNavbarActionClass ?>" href="<?= htmlspecialchars($rbNavbarActionHref, ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($rbNavbarActionLabel, ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</nav>
