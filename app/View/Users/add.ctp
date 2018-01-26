<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('password');
		echo $this->Form->input('mobile');
		echo $this->Form->input('gender');
		echo $this->Form->input('role');
		echo $this->Form->input('registrationid');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('pincode');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('adhar_no');
		echo $this->Form->input('adhar_copy');
		echo $this->Form->input('pancard_no');
		echo $this->Form->input('pancard_copy');
		echo $this->Form->input('plot_certificate_copy');
		echo $this->Form->input('plot_certificate_no');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Labs'), array('controller' => 'labs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab'), array('controller' => 'labs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
	</ul>
</div>
