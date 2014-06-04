<div class="accesses view">
<h2><?php  echo __('Access'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($access['Access']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($access['Access']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($access['Access']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($access['User']['name'], array('controller' => 'users', 'action' => 'view', $access['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Access'), array('action' => 'edit', $access['Access']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Access'), array('action' => 'delete', $access['Access']['id']), null, __('Are you sure you want to delete # %s?', $access['Access']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
