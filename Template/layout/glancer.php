<div class="white-bar-margin"></div>

<div id="GlancerBar" class="glancer-bar">
	<div class="glancer-view">
			<?= $this->url->link('
				<svg width="26" height="26" fill="currentColor" class="bi bi-person-workspace glancer-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
					<path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
					<path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
				</svg>', 'ConfigController', 'application', array(), false, 'glancer-logo', t('Settings'), false, 'GlancerSettings') ?>
		<time id="jsdate" class="glancer-date"></time>
		<?= $this->url->link('
                <svg width="26" height="26" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                	<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                	<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg>', 'DashboardController', 'tasks', array('pagination' => 'tasks','direction' => 'DESC'), false, 'glancer-dashboard', t('View Dashboard (Tasks)'), false, '') ?>
        <?php if (!empty($this->task->configModel->get('website_url'))): ?>
			<a
			href="<?= $this->task->configModel->get('website_url', '') ?>"
			class="glancer-extra"
			rel="<?php if ($this->task->configModel->get('link_privacy', '') == 'not_allowed_tracking'): ?>noreferrer noopener<?php endif ?>"
			title="<?= $this->task->configModel->get('tooltip_title', '') ?>"
			target="<?php if ($this->task->configModel->get('link_opening', '') == 'new_window'): ?>_blank<?php else: ?>_self<?php endif ?>">
				<?php if (($this->task->configModel->get('shortcut_icon', '') == 'other_icon') && (!empty($this->task->configModel->get('shortcut_other_icon')))): ?>
					<i class="fa <?= $this->task->configModel->get('shortcut_other_icon', '') ?>" aria-hidden="true"></i>
				<?php else: ?>
					<svg width="26" height="26" fill="currentColor" class="extra-icon" version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.204 482.204" style="" xml:space="preserve"><g><g><path style="fill:currentColor;" d="M83.127,344.477c54.602,1.063,101.919,9.228,136.837,23.613c0.596,0.244,1.227,0.366,1.852,0.366c0.95,0,1.895-0.279,2.706-0.822c1.349-0.902,2.158-2.418,2.158-4.041l0.019-261.017c0-1.992-1.215-3.783-3.066-4.519L85.019,42.899c-1.496-0.596-3.193-0.411-4.527,0.494c-1.334,0.906-2.133,2.413-2.133,4.025v292.197C78.359,342.264,80.479,344.425,83.127,344.477z"/><path style="fill:currentColor;" d="M480.244,89.256c-1.231-0.917-2.824-1.198-4.297-0.759l-49.025,14.657c-2.06,0.616-3.471,2.51-3.471,4.659v252.151c0,0,0.218,3.978-3.97,3.978c-4.796,0-7.946,0-7.946,0c-39.549,0-113.045,4.105-160.93,31.6l-9.504,5.442l-9.503-5.442c-47.886-27.494-121.381-31.6-160.93-31.6c0,0-8.099,0-10.142,0c-1.891,0-1.775-2.272-1.775-2.271V107.813c0-2.149-1.411-4.043-3.47-4.659L6.256,88.497c-1.473-0.439-3.066-0.158-4.298,0.759S0,91.619,0,93.155v305.069c0,1.372,0.581,2.681,1.597,3.604c1.017,0.921,2.375,1.372,3.741,1.236c14.571-1.429,37.351-3.131,63.124-3.131c56.606,0,102.097,8.266,131.576,23.913c4.331,2.272,29.441,15.803,41.065,15.803c11.624,0,36.733-13.53,41.063-15.803c29.48-15.647,74.971-23.913,131.577-23.913c25.771,0,48.553,1.702,63.123,3.131c1.367,0.136,2.725-0.315,3.742-1.236c1.016-0.923,1.596-2.231,1.596-3.604V93.155C482.203,91.619,481.476,90.173,480.244,89.256z"/><path style="fill:currentColor;" d="M257.679,367.634c0.812,0.543,1.757,0.822,2.706,0.822c0.626,0,1.256-0.122,1.853-0.366c34.917-14.386,82.235-22.551,136.837-23.613c2.648-0.052,4.769-2.213,4.769-4.861V47.418c0-1.613-0.799-3.12-2.133-4.025c-1.334-0.904-3.031-1.09-4.528-0.494L258.569,98.057c-1.851,0.736-3.065,2.527-3.065,4.519l0.019,261.017C255.521,365.216,256.331,366.732,257.679,367.634z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
					</svg>
				<?php endif ?>
			</a>
		<?php endif ?>
	</div>
	<div class="glancer-search">
		<div id="SearchTaskID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<label for="form-taskid">
				<i class="fa fa-sticky-note i-fw" aria-hidden="true"></i><?= t('Task ID') ?>
			</label>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByTaskId', array('plugin' => 'Glancer')) ?>" class="search" autocomplete="off">
            <div class="glancer-bar-input">
                <?= $this->form->number('taskid', array(), array(), array('placeholder="&#8285;&nbsp;&#8285;&nbsp;&#8285;"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Task ID').'"'.'aria-label="'.t('Enter Task ID').'"'.'style=""'), '') ?>
            	<button type="submit" class="glancer-bar-button" title="<?= t('Search') ?>">
            		<i class="fa fa-search i-fw" aria-hidden="true"></i>
            	</button>
            </div>
        	</form>
        </div>
		</div>
		<div id="SearchCommentID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<label for="form-commentid">
				<i class="fa fa-comment i-fw" aria-hidden="true"></i><?= t('Comment ID') ?>
			</label>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByCommentId', array('plugin' => 'Glancer')) ?>" class="search" autocomplete="off">
            <div class="glancer-bar-input">
                <?= $this->form->number('commentid', array(), array(), array('placeholder="&#8285;&nbsp;&#8285;&nbsp;&#8285;"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Comment ID').'"'.'aria-label="'.t('Enter Comment ID').'"'.'style=""'), '') ?>
                <button type="submit" class="glancer-bar-button" title="<?= t('Search') ?>">
            		<i class="fa fa-search i-fw" aria-hidden="true"></i>
            	</button>
            </div>
        	</form>
		</div>
		</div>
		<div id="SearchProjectID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<label for="form-projectid">
				<i class="fa fa-folder i-fw" aria-hidden="true"></i><?= t('Project ID') ?>
			</label>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByProjectId', array('plugin' => 'Glancer')) ?>" class="search" autocomplete="off">
            <div class="glancer-bar-input">
                <?= $this->form->number('projectid', array(), array(), array('placeholder="&#8285;&nbsp;&#8285;&nbsp;&#8285;"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Project ID').'"'.'aria-label="'.t('Enter Project ID').'"'.'style=""'), '') ?>
                <button type="submit" class="glancer-bar-button" title="<?= t('Search') ?>">
            		<i class="fa fa-search i-fw" aria-hidden="true"></i>
            	</button>
            </div>
        	</form>
		</div>
		</div>
	</div>
</div>
