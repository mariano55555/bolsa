<div class="experiencesJobs view">
<h2><?php  echo __('Experiences Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experiencesJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $experiencesJob['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experiencesJob['Experience']['name'], array('controller' => 'experiences', 'action' => 'view', $experiencesJob['Experience']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($experiencesJob['ExperiencesJob']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Experiences Job'), array('action' => 'edit', $experiencesJob['ExperiencesJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Experiences Job'), array('action' => 'delete', $experiencesJob['ExperiencesJob']['id']), null, __('Are you sure you want to delete # %s?', $experiencesJob['ExperiencesJob']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experiences Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
