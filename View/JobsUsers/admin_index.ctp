<div class="jobsUsers index">
	<h2><?php echo __('Jobs Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobsUsers as $jobsUser): ?>
	<tr>
		<td><?php echo h($jobsUser['JobsUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $jobsUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobsUser['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $jobsUser['Job']['id'])); ?>
		</td>
		<td><?php echo h($jobsUser['JobsUser']['active']); ?>&nbsp;</td>
		<td><?php echo h($jobsUser['JobsUser']['created']); ?>&nbsp;</td>
		<td><?php echo h($jobsUser['JobsUser']['modified']); ?>&nbsp;</td>
		<td><?php echo h($jobsUser['JobsUser']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($jobsUser['JobsUser']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobsUser['JobsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobsUser['JobsUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobsUser['JobsUser']['id']), null, __('Are you sure you want to delete # %s?', $jobsUser['JobsUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Jobs User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>