<div class="white-bar-margin"></div>

<div id="GlancerBar" class="glancer-bar">
	<div class="glancer-view">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace glancer-icon" viewBox="0 0 16 16">
			<path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
			<path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
		</svg>
		<?= t('Glancer') ?>
	</div>
	<?= $this->url->icon('dashboard', '', 'DashboardController', 'tasks', array('pagination' => 'tasks','direction' => 'DESC'), false, 'glancer-dashboard', t('View Tasks in Dashboard'), false, '') ?>
	<div id="SearchTaskID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<label for="form-taskid">
				<i class="fa fa-sticky-note i-fw" aria-hidden="true"></i><?= t('Task ID') ?>
			</label>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByTaskId', array('plugin' => 'Glancer')) ?>" class="search" autocomplete="off">
            <div class="glancer-bar-input">
                <?= $this->form->number('taskid', array(), array(), array('placeholder="'.t('Enter Task ID').'"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Task ID').'"'.'aria-label="'.t('Enter Task ID').'"'.'style=""'), '') ?>
            	<button type="submit" class="glancer-bar-button" title="Click the button or press Enter on your keyboard">
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
                <?= $this->form->number('commentid', array(), array(), array('placeholder="'.t('Enter Comment ID').'"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Comment ID').'"'.'aria-label="'.t('Enter Comment ID').'"'.'style=""'), '') ?>
                <button type="submit" class="glancer-bar-button" title="Click the button or press Enter on your keyboard">
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
                <?= $this->form->number('projectid', array(), array(), array('placeholder="'.t('Enter Project ID').'"', 'onfocus="this.value=\' \'" pattern="[0-9.]+" title="'.t('Enter Project ID').'"'.'aria-label="'.t('Enter Project ID').'"'.'style=""'), '') ?>
                <button type="submit" class="glancer-bar-button" title="Click the button or press Enter on your keyboard">
            		<i class="fa fa-search i-fw" aria-hidden="true"></i>
            	</button>
            </div>
        	</form>
		</div>
	</div>
</div>
