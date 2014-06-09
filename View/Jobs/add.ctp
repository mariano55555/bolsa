<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('company_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('content');
		echo $this->Form->input('skills');
		echo $this->Form->input('salary');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('tags');
		echo $this->Form->input('Area');
		echo $this->Form->input('Contract');
		echo $this->Form->input('Experience');
		echo $this->Form->input('Industry');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

