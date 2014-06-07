<div class="accesses index">
	<h2><?php echo __('Accesses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accesses as $access): ?>
	<tr>
		<td><?php echo h($access['Access']['id']); ?>&nbsp;</td>
		<td><?php echo h($access['Access']['start']); ?>&nbsp;</td>
		<td><?php echo h($access['Access']['end']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($access['User']['name'], array('controller' => 'users', 'action' => 'view', $access['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $access['Access']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $access['Access']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $access['Access']['id']), null, __('Are you sure you want to delete # %s?', $access['Access']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Access'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
