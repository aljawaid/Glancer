<details class="accordion-section" <?= empty($task['description']) ? '' : 'open' ?>>
    <summary class="accordion-title"><?= t('Description') ?></summary>
    <div class="accordion-content">
        <?php if (! empty($task['description'])): ?>
            <span class="pp-green" title="<?= t('Complete') ?>"><i class="fa fa-check-circle"></i></span>
        <?php else: ?>
            <span class="pp-red" title="<?= t('Not complete') ?>"><i class="fa fa-times-circle"></i></span>
        <?php endif ?>
        <?php if (empty($task['description'])): ?>
            <div class="no-data"><?= t('No description') ?></div>
        <?php endif ?>
        <article class="markdown">
            <?= $this->text->markdown($task['description'], isset($is_public) && $is_public) ?>
        </article>
    </div>
</details>
