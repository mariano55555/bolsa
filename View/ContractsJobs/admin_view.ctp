<div class="contractsJobs view">
<h2><?php  echo __('Contracts Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contractsJob['ContractsJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contractsJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $contractsJob['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contractsJob['Contract']['name'], array('controller' => 'contracts', 'action' => 'view', $contractsJob['Contract']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contractsJob['ContractsJob']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contractsJob['ContractsJob']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($contractsJob['ContractsJob']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($contractsJob['ContractsJob']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contracts Job'), array('action' => 'edit', $contractsJob['ContractsJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contracts Job'), array('action' => 'delete', $contractsJob['ContractsJob']['id']), null, __('Are you sure you want to delete # %s?', $contractsJob['ContractsJob']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contracts Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contracts Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contracts'), array('controller' => 'contracts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contract'), array('controller' => 'contracts', 'action' => 'add')); ?> </li>
	</ul>
</div>
