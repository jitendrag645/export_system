<div class="plots form">
<?php echo $this->Form->create('Plot'); ?>
	<fieldset>
		<legend><?php echo __('Add Plot'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('survey_no');
		echo $this->Form->input('survey_copy');
		echo $this->Form->input('area');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
	</ul>
</div>
