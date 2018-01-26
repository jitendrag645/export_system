<div class="seasonCrops form">
<?php echo $this->Form->create('SeasonCrop'); ?>
	<fieldset>
		<legend><?php echo __('Edit Season Crop'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plot_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('available_from');
		echo $this->Form->input('available_till');
		echo $this->Form->input('approximate_price');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SeasonCrop.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SeasonCrop.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
