<div class="tags form">
<?php echo $this->Form->create('Tag'); ?>
	<fieldset>
		<legend><?php echo __('Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?></li>
	</ul>
</div>