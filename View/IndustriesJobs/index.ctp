<div class="industriesJobs index">
	<h2><?php echo __('Industries Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('industry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($industriesJobs as $industriesJob): ?>
	<tr>
		<td><?php echo h($industriesJob['IndustriesJob']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($industriesJob['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $industriesJob['Industry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($industriesJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $industriesJob['Job']['id'])); ?>
		</td>
		<td><?php echo h($industriesJob['IndustriesJob']['active']); ?>&nbsp;</td>
		<td><?php echo h($industriesJob['IndustriesJob']['created']); ?>&nbsp;</td>
		<td><?php echo h($industriesJob['IndustriesJob']['modified']); ?>&nbsp;</td>
		<td><?php echo h($industriesJob['IndustriesJob']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($industriesJob['IndustriesJob']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $industriesJob['IndustriesJob']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $industriesJob['IndustriesJob']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $industriesJob['IndustriesJob']['id']), null, __('Are you sure you want to delete # %s?', $industriesJob['IndustriesJob']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Industries Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
