<div class="experiencesJobs index">
	<h2><?php echo __('Experiences Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('experience_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($experiencesJobs as $experiencesJob): ?>
	<tr>
		<td><?php echo h($experiencesJob['ExperiencesJob']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($experiencesJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $experiencesJob['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($experiencesJob['Experience']['name'], array('controller' => 'experiences', 'action' => 'view', $experiencesJob['Experience']['id'])); ?>
		</td>
		<td><?php echo h($experiencesJob['ExperiencesJob']['active']); ?>&nbsp;</td>
		<td><?php echo h($experiencesJob['ExperiencesJob']['created']); ?>&nbsp;</td>
		<td><?php echo h($experiencesJob['ExperiencesJob']['modified']); ?>&nbsp;</td>
		<td><?php echo h($experiencesJob['ExperiencesJob']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($experiencesJob['ExperiencesJob']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $experiencesJob['ExperiencesJob']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $experiencesJob['ExperiencesJob']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $experiencesJob['ExperiencesJob']['id']), null, __('Are you sure you want to delete # %s?', $experiencesJob['ExperiencesJob']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Experiences Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
