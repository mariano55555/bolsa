<div class="jobsUsers view">
<h2><?php  echo __('Jobs User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $jobsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsUser['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $jobsUser['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($jobsUser['JobsUser']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs User'), array('action' => 'edit', $jobsUser['JobsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs User'), array('action' => 'delete', $jobsUser['JobsUser']['id']), null, __('Are you sure you want to delete # %s?', $jobsUser['JobsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
