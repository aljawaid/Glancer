<div class="white-bar-margin"></div>

<div id="GlancerBar" class="glancer-bar">
	<div class="glancer-view"><i class="fa fa-search i-fw" aria-hidden="true"></i>View:</div>
	<div id="SearchTaskID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<i class="fa fa-sticky-note i-fw" aria-hidden="true"></i>Task ID
		</div>
		<div class="glancer-bar-input">
			<form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'TaskViewController')) ?>
            <?= $this->form->hidden('action', array('action' => 'show')) ?>
            <div class="glancer-bar-input">
                <?= $this->form->text('task_id', array(), array(), array('placeholder="'.t('TEST OK').'"', 'pattern="[0-9.]+" title="'.t('Task number').'"'.'aria-label="'.t('Enter task id').'"'.'style=""'), 'input-addon-field border-radius') ?>
            </div>
        	</form>
        </div>
	</div>
	<div id="SearchCommentID" class="glancer-bar-item">
		<div class="glancer-bar-title">
			<i class="fa fa-comment i-fw" aria-hidden="true"></i>Comment ID
		</div>
		<div class="glancer-bar-input">
			<?php $commentID = $this->model->commentModel->getById($comment['id']); ?>
			<form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'TaskViewController')) ?>
            <?= $this->form->hidden('action', array('action' => 'show')) ?>
            <div class="glancer-bar-input">
                <?= $this->form->text($commentID, array(), array(), array('placeholder="'.t('TEST NOT OK').'"', 'pattern="[0-9.]+" title="'.t('Comment ID').'"'.'aria-label="'.t('Enter comment id').'"'.'style=""'), 'input-addon-field border-radius') ?>
            </div>
        	</form>
		</div>
	</div>
	<div id="SearchProjectID" class="glancer-bar-item">
			<div class="glancer-bar-title">
			<i class="fa fa-folder i-fw" aria-hidden="true"></i>Project ID
		</div>
		<div class="glancer-bar-input">
			<form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'BoardViewController')) ?>
            <?= $this->form->hidden('action', array('action' => 'show')) ?>
            <div class="glancer-bar-input">
                <?= $this->form->text('project_id', array(), array(), array('placeholder="'.t('TEST OK').'"', 'pattern="[0-9.]+" title="'.t('Project number').'"'.'aria-label="'.t('Enter project id').'"'.'style=""'), 'input-addon-field border-radius') ?>
            </div>
        	</form>
		</div>
	</div>
</div>
