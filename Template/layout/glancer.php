<div class="white-bar-margin"></div>

<div id="GlancerBar" class="glancer-bar">
	<div class="glancer-view">
		<?php $pluginVersion = Kanboard\Plugin\Glancer\Plugin::getPluginVersion($plugin); ?>
		<span class="glancer-logo" title="Glancer v<?= $pluginVersion ?>">
			<svg width="26" height="26" fill="currentColor" class="bi bi-person-workspace glancer-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
				<path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
				<path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
			</svg>
		</span>
		<time id="jsdate" class="glancer-date"></time>
		<?= $this->url->link('
                <svg width="24" height="24" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                	<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                	<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg>', 'DashboardController', 'tasks', array('pagination' => 'tasks','direction' => 'DESC'), false, 'glancer-dashboard', t('View Dashboard (Tasks)'), false, '') ?>
	</div>
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
