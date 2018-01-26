<div class="productVarieties form">
<?php echo $this->Form->create('ProductVariety'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Variety'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('variety_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductVariety.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductVariety.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Enquiries'), array('controller' => 'user_enquiries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('controller' => 'user_enquiries', 'action' => 'add')); ?> </li>
	</ul>
</div>
