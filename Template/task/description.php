<details class="accordion-section">
    <summary class="accordion-title acc-desc-title">
        <i class="fa fa-file-text-o"></i><?= t('Description') ?>
        <?php if (! empty($task['description'])): ?>
            <span class="pp-green" title="<?= t('Complete') ?>"><i class="fa fa-check-circle"></i></span>
        <?php else: ?>
            <span class="pp-red" title="<?= t('Not complete') ?>"><i class="fa fa-times-circle"></i></span>
        <?php endif ?>
    </summary>
        <?php if (empty($task['description'])): ?>
            <div class="no-data"><?= t('No description') ?></div>
        <?php endif ?>
        <article class="markdown">
            <?= $this->text->markdown($task['description'], isset($is_public) && $is_public) ?>
        </article>
    </div>
</details>
