<div class="industriesJobs view">
<h2><?php  echo __('Industries Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($industriesJob['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $industriesJob['Industry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($industriesJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $industriesJob['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($industriesJob['IndustriesJob']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Industries Job'), array('action' => 'edit', $industriesJob['IndustriesJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Industries Job'), array('action' => 'delete', $industriesJob['IndustriesJob']['id']), null, __('Are you sure you want to delete # %s?', $industriesJob['IndustriesJob']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industries Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
