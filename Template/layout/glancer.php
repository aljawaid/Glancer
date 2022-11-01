<div class="white-bar-margin"></div>

<div id="GlancerBar" class="glancer-bar">
	<div class="glancer-view">
		<?= $this->url->icon('dashboard', '', 'DashboardController', 'tasks', array('pagination' => 'tasks','direction' => 'DESC'), false, 'glancer-dashboard', t('View Tasks in Dashboard'), false, '') ?>
		<i class="fa fa-search i-fw" aria-hidden="true"></i><?= t('Glancer') ?>
	</div>
	<div id="SearchTaskID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<i class="fa fa-sticky-note i-fw" aria-hidden="true"></i><?= t('Task ID') ?>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByTaskId', array('plugin' => 'Glancer')) ?>" class="search">
            <div class="glancer-bar-input">
                <?= $this->form->number('taskid', array(), array(), array('placeholder="'.t('Enter Task ID').'"', 'onclick="myFunction()" pattern="[0-9.]+" title="'.t('Enter Task ID').'"'.'aria-label="'.t('Enter Task ID').'"'.'style=""'), 'input-addon-field border-radius') ?>
                <p id="reveal" style="display:none">Checkbox is CHECKED!</p>
            </div>
        	</form>
        </div>
	</div>
	<div id="SearchCommentID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<i class="fa fa-comment i-fw" aria-hidden="true"></i><?= t('Comment ID') ?>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByCommentId', array('plugin' => 'Glancer')) ?>" class="search">
            <div class="glancer-bar-input">
                <?= $this->form->number('commentid', array(), array(), array('placeholder="'.t('Enter Comment ID').'"', 'pattern="[0-9.]+" title="'.t('Enter Comment ID').'"'.'aria-label="'.t('Enter Comment ID').'"'.'style=""'), 'input-addon-field border-radius') ?>
            </div>
        	</form>
		</div>
	</div>
	<div id="SearchProjectID" class="glancer-bar-item">
			<div class="glancer-bar-title">
			<i class="fa fa-folder i-fw" aria-hidden="true"></i><?= t('Project ID') ?>
		</div>
		<div class="glancer-bar-input">
			<form method="post" action="<?= $this->url->to('TaskCommentViewController', 'getTaskIdByProjectId', array('plugin' => 'Glancer')) ?>" class="search">
            <div class="glancer-bar-input">
                <?= $this->form->number('projectid', array(), array(), array('placeholder="'.t('Enter Project ID').'"', 'pattern="[0-9.]+" title="'.t('Enter Project ID').'"'.'aria-label="'.t('Enter Project ID').'"'.'style=""'), 'input-addon-field border-radius') ?>
            </div>
        	</form>
		</div>
	</div>
</div>
