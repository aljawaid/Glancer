<div id="GlancerSettings" class="panel glancer-settings">
    <h3 class="">
        <?php $pluginVersion = Kanboard\Plugin\Glancer\Plugin::getPluginVersion($plugin); ?>
        <span class="pp-blue" title="Glancer v<?= $pluginVersion ?>">
            <svg width="26" height="26" fill="currentColor" class="bi bi-person-workspace glancer-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
            </svg>
        </span>
        <strong>Glancer <?= t('Settings') ?></strong> <i>- v<?= $pluginVersion ?></i>
    </h3>
    <fieldset class="glancer-options">
        <legend class=""><?= t('Global Shortcut Options') ?></legend>
        <p class=""><?= ('The glancer bar can show a shortcut to a website which you may regularly need access to whilst using this application. The icon will only show if a website address is set below.') ?></p>

        <?= $this->form->label(t('Reference Label'), 'ref_label') ?>
        <?= $this->form->text('ref_label', $values, $errors, array('placeholder="Google Search"')) ?>
        <p class="form-help"><?= t('This label is not used on the icon') ?></p>

        <?= $this->form->label(t('Tooltip Title'), 'tooltip_title') ?>
        <?= $this->form->text('tooltip_title', $values, $errors, array('placeholder="Use Google Search"')) ?>
        <p class="form-help"><?= t('This text shows up in the tooltip') ?></p>

        <?= $this->form->label(t('Website URL'), 'website_url') ?>
        <?= $this->form->input('url', 'website_url', $values, $errors, array('placeholder="https://google.co.uk"')) ?>
        <p class="form-help"><?= t('Enter the full URL of any website') ?></p>

        <legend><?= t('Privacy') ?></legend>
        <div class="glancer-options-section">
            <?= $this->form->radio('link_privacy', t('Do not allow tracking'), 'not_allowed_tracking', true, isset($values['link_privacy']) && $values['link_privacy'] == 'not_allowed_tracking') ?>
            <?= $this->form->radio('link_privacy', t('Allow tracking'), 'allowed_tracking', isset($values['link_privacy']) && $values['link_privacy'] == 'allowed_tracking') ?>
        </div>
        <p class="form-help"><code><small>rel="noreferrer noopener"</small></code>
        <?= t('These HTML attributes serve two purposes and should be declared. The former prevents the opening page to gain any kind of access to the original page. The latter blocks the other site to know that you have linked to their website.') ?></p>

        <legend><?= t('Link Opening') ?></legend>
        <div class="glancer-options-section">
            <?= $this->form->radio('link_opening', t('Open the link in a new window'), 'new_window', true, isset($values['link_opening']) && $values['link_opening'] == 'new_window') ?>
            <?= $this->form->radio('link_opening', t('Open the link in the same window'), 'same_window', isset($values['link_opening']) && $values['link_opening'] == 'same_window') ?>
        </div>
            <p class="form-help"><?= t('Keep this option checked for third party websites') ?></p>

        <legend><?= t('CSS Styling') ?></legend>
        <p class=""><?= t('The icon uses the') ?> <code><small>.glancer-extra</small></code> <?= t('class for styling.') ?></p>
    </fieldset>
    <div class="form-actions">
        <button type="submit" class="btn btn-blue" title="<?= t('Saves any changes made on this page') ?>"><?= t('Save') ?></button>
    </div>
</div>



