<fieldset id="GlancerSettings" class="panel glancer-settings">
    <h3 class="">
        <span class="pp-blue" title="">
            <svg width="26" height="26" fill="currentColor" class="bi bi-person-workspace glancer-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
            </svg>
        </span>
        <strong>Glancer <?= t('Settings') ?></strong>
    </h3>
    <fieldset class="glancer-options">
        <legend class=""><?= t('Global Shortcut Options') ?></legend>
        <p class="glancer-options-intro"><?= t('The Glancer bar can show a shortcut to a website which you may regularly need access to whilst using this application. The icon will only show if a website address is set below.') ?></p>
        <div class="glancer-options-section-area">
            <div class="glancer-options-section w-200">
                <?= $this->form->label(t('Reference Label'), 'ref_label', array('class="w-200"')) ?>
                <?= $this->form->text('ref_label', $values, $errors, array('placeholder="Google Search"')) ?>
                <p class="form-help w-200"><?= t('This label is not used on the icon') ?></p>
            </div>
            <div class="glancer-options-section">
                <?= $this->form->label(t('Tooltip Title'), 'tooltip_title') ?>
                <?= $this->form->text('tooltip_title', $values, $errors, array('placeholder="Use Google Search"')) ?>
                <p class="form-help"><?= t('This text displays in the tooltip') ?></p>
            </div>
            <div class="glancer-options-section w-600">
                <?= $this->form->label(t('Website URL'), 'website_url', array('class="w-600"')) ?>
                <?= $this->form->input('url', 'website_url', $values, $errors, array('placeholder="https://google.co.uk"'), 'w-600') ?>
                <p class="form-help w-600"><?= t('Enter the complete website URL') ?></p>
            </div>
        </div>
        <legend class="glancer-options-privacy">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
            </svg>
            <?= t('Privacy') ?>
        </legend>
        <div class="glancer-options-section-radios">
            <div class="glancer-radio-options">
                <?= $this->form->radio('link_privacy', t('Do not allow tracking'), 'not_allowed_tracking', true, isset($values['link_privacy']) && $values['link_privacy'] == 'not_allowed_tracking') ?>
                <?= $this->form->radio('link_privacy', t('Allow tracking'), 'allowed_tracking', isset($values['link_privacy']) && $values['link_privacy'] == 'allowed_tracking') ?>
            </div>
            <div class="glancer-radio-text">
                <p class="form-help"><code><small>rel="noreferrer noopener"</small></code><br>
                <?= t('These HTML attributes serve two purposes and should be declared to maintain data privacy. The former prevents the opening page to gain any kind of access to the original page. The latter blocks the other site to know that you have linked to their website.') ?></p>
            </div>
        </div>
        <legend class="glancer-options-link">
            <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                </g>
            </svg>
            <?= t('Link Opening') ?>
        </legend>
        <div class="glancer-options-section-radios">
            <div class="glancer-radio-options">
                <?= $this->form->radio('link_opening', t('Open the link in a new window'), 'new_window', true, '', isset($values['link_opening']) && $values['link_opening'] == 'new_window') ?>
                <?= $this->form->radio('link_opening', t('Open the link in the same window'), 'same_window', isset($values['link_opening']) && $values['link_opening'] == 'same_window') ?>
            </div>
            <div class="glancer-radio-text">
                <p class="form-help"><?= t('Opening the website in the same window may affect your browser session.') ?></p>
            </div>
        </div>
        <legend class="glancer-options-shortcut-icon">
            <svg width="20" height="20" fill="currentColor" class="extra-icon" version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.204 482.204" style="" xml:space="preserve">
                <title><?= t('Default Icon') ?></title>
                <g><g><path style="fill:currentColor;" d="M83.127,344.477c54.602,1.063,101.919,9.228,136.837,23.613c0.596,0.244,1.227,0.366,1.852,0.366c0.95,0,1.895-0.279,2.706-0.822c1.349-0.902,2.158-2.418,2.158-4.041l0.019-261.017c0-1.992-1.215-3.783-3.066-4.519L85.019,42.899c-1.496-0.596-3.193-0.411-4.527,0.494c-1.334,0.906-2.133,2.413-2.133,4.025v292.197C78.359,342.264,80.479,344.425,83.127,344.477z"/><path style="fill:currentColor;" d="M480.244,89.256c-1.231-0.917-2.824-1.198-4.297-0.759l-49.025,14.657c-2.06,0.616-3.471,2.51-3.471,4.659v252.151c0,0,0.218,3.978-3.97,3.978c-4.796,0-7.946,0-7.946,0c-39.549,0-113.045,4.105-160.93,31.6l-9.504,5.442l-9.503-5.442c-47.886-27.494-121.381-31.6-160.93-31.6c0,0-8.099,0-10.142,0c-1.891,0-1.775-2.272-1.775-2.271V107.813c0-2.149-1.411-4.043-3.47-4.659L6.256,88.497c-1.473-0.439-3.066-0.158-4.298,0.759S0,91.619,0,93.155v305.069c0,1.372,0.581,2.681,1.597,3.604c1.017,0.921,2.375,1.372,3.741,1.236c14.571-1.429,37.351-3.131,63.124-3.131c56.606,0,102.097,8.266,131.576,23.913c4.331,2.272,29.441,15.803,41.065,15.803c11.624,0,36.733-13.53,41.063-15.803c29.48-15.647,74.971-23.913,131.577-23.913c25.771,0,48.553,1.702,63.123,3.131c1.367,0.136,2.725-0.315,3.742-1.236c1.016-0.923,1.596-2.231,1.596-3.604V93.155C482.203,91.619,481.476,90.173,480.244,89.256z"/><path style="fill:currentColor;" d="M257.679,367.634c0.812,0.543,1.757,0.822,2.706,0.822c0.626,0,1.256-0.122,1.853-0.366c34.917-14.386,82.235-22.551,136.837-23.613c2.648-0.052,4.769-2.213,4.769-4.861V47.418c0-1.613-0.799-3.12-2.133-4.025c-1.334-0.904-3.031-1.09-4.528-0.494L258.569,98.057c-1.851,0.736-3.065,2.527-3.065,4.519l0.019,261.017C255.521,365.216,256.331,366.732,257.679,367.634z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
            </svg>
            <?= t('Shortcut Icon') ?>
        </legend>
        <div class="glancer-options-section-radios relative">
            <ul class="fa-btns">
                <li class="">
                    <a href="https://fontawesome.com/v4/icons/" class="btn" title="<?= t('Opens in a new window') ?>" rel="noreferrer noopener" target="_blank">
                        <i class="fa fa-font-awesome" aria-hidden="true"></i><?= t('View Collection') ?>
                    </a>
                </li>
                <li class="">
                    <a href="https://fontawesome.com/v4/cheatsheet/" class="btn" title="<?= t('Opens in a new window') ?>" rel="noreferrer noopener" target="_blank">
                        <i class="fa fa-fighter-jet" aria-hidden="true"></i><?= t('View Cheatsheet') ?>
                    </a>
                </li>
            </ul>
            <div class="glancer-radio-options">
                <?= $this->form->radio('shortcut_icon', t('Use default icon'), 'default_icon', true, 'default-icon-svg', isset($values['shortcut_icon']) && $values['shortcut_icon'] == 'default_icon') ?>
                <?= $this->form->radio('shortcut_icon', t('Use other icon'), 'other_icon', isset($values['shortcut_icon']) && $values['shortcut_icon'] == 'other_icon') ?>
                <?= $this->form->label(t('Other'), 'shortcut_other_icon', array('class="shortcut-other-icon"')) ?>
                <?= $this->form->text('shortcut_other_icon', $values, $errors, array('placeholder="fa-newspaper-o"'), 'w-auto shortcut-other-icon-class') ?>
            </div>
            <div class="glancer-radio-text">
                <p class="form-help"><?= t('The default icon is suitable for documentation-type websites as the icon itself is a book. To choose your own icon, select the \'Other icon\' options and enter the icon code from the FontAwesome website.') ?>
                </p>
                <p class="form-help"><?= t('Enter the icon class name') ?></p>
            </div>
        </div>
        <legend class="glancer-options-css">
            <svg width="20" height="20" fill="currentColor" class="bi bi-filetype-css" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.397 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495ZM6.78 15.29a1.176 1.176 0 0 1-.111-.449h.764a.578.578 0 0 0 .255.384c.07.049.154.087.25.114.095.028.201.041.319.041.164 0 .301-.023.413-.07a.559.559 0 0 0 .255-.193.507.507 0 0 0 .085-.29.387.387 0 0 0-.153-.326c-.101-.08-.256-.144-.463-.193l-.618-.143a1.72 1.72 0 0 1-.539-.214 1 1 0 0 1-.351-.367 1.068 1.068 0 0 1-.123-.524c0-.244.063-.457.19-.639.127-.181.303-.322.527-.422.225-.1.484-.149.777-.149.304 0 .564.05.779.152.217.102.384.239.5.41.12.17.187.359.2.566h-.75a.56.56 0 0 0-.12-.258.624.624 0 0 0-.246-.181.923.923 0 0 0-.37-.068c-.216 0-.387.05-.512.152a.472.472 0 0 0-.184.384c0 .121.047.22.143.3a.97.97 0 0 0 .404.175l.621.143c.217.05.406.12.566.211.16.09.285.21.375.358.09.148.135.335.135.56 0 .247-.063.466-.188.656a1.216 1.216 0 0 1-.539.439c-.234.105-.52.158-.858.158-.254 0-.476-.03-.665-.09a1.404 1.404 0 0 1-.478-.252 1.13 1.13 0 0 1-.29-.375Z"/>
            </svg>
            <?= t('CSS Styling') ?>
        </legend>
        <p class="css-classes">
            <?= t('The icon uses the following classes for styling. You can further customise the icon through your custom stylesheet.') ?> <br>
             <dl class="css-list">
                <dt><code><small>.glancer-extra</small></code></dt>
                <dd><?= t('Targets the link') ?></dd>
                <br>
                <dt><code><small>.glancer-extra .extra-icon</small></code></dt>
                <dd><?= t('Targets the default icon') ?></dd>
                <br>
                <dt><code><small>.glancer-extra i</small></code></dt>
                <dd><?= t('Targets the FontAwesome icon') ?></dd>
            </dl>
        </p>
    </fieldset>
    <div class="form-actions glancer-btn">
        <button type="submit" class="btn btn-blue" title="<?= t('Saves any changes made on this page') ?>"><?= t('Save Settings') ?></button>
    </div>
</fieldset>



