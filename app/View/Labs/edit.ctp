<div class="labs form">
<?php echo $this->Form->create('Lab'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lab'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('mobile');
		echo $this->Form->input('landline');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lab.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Lab.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Labs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
