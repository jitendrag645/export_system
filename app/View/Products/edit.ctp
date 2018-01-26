<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name');
		echo $this->Form->input('description');
		echo $this->Form->input('minimum_order');
		echo $this->Form->input('unit_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('controller' => 'product_varieties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Variety'), array('controller' => 'product_varieties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Enquiries'), array('controller' => 'user_enquiries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('controller' => 'user_enquiries', 'action' => 'add')); ?> </li>
	</ul>
</div>
