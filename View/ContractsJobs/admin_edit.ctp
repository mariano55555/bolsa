<div class="contractsJobs form">
<?php echo $this->Form->create('ContractsJob'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contracts Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('contract_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContractsJob.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContractsJob.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contracts Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contracts'), array('controller' => 'contracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contract'), array('controller' => 'contracts', 'action' => 'add')); ?> </li>
	</ul>
</div>
