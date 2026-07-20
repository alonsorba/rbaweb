<?php
$rbStatsData = $rbStatsData ?? [];

$rbStatsSectionId = $rbStatsData['id'] ?? 'estadisticas';
$rbStatsItems = $rbStatsData['items'] ?? [];
?>
<section class="rb-section rb-section--alt rb-stats" id="<?= htmlspecialchars($rbStatsSectionId, ENT_QUOTES, 'UTF-8') ?>" aria-label="Métricas institucionales">
    <div class="rb-container">
        <div class="rb-stats__panel rb-card">
            <div class="rb-stats__grid">
                <?php foreach ($rbStatsItems as $rbStatsItem): ?>
                    <?php
                    $rbStatsValue = $rbStatsItem['value'] ?? '';
                    $rbStatsLabel = $rbStatsItem['label'] ?? '';
                    ?>
                    <article class="rb-stats__item">
                        <p class="rb-stats__value mb-2"><?= htmlspecialchars($rbStatsValue, ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="rb-stats__label mb-0"><?= htmlspecialchars($rbStatsLabel, ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
