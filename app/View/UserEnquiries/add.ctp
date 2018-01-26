<div class="userEnquiries form">
<?php echo $this->Form->create('UserEnquiry'); ?>
	<fieldset>
		<legend><?php echo __('Add User Enquiry'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('product_type_id');
		echo $this->Form->input('product_variety_id');
		echo $this->Form->input('required_quantity');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('email');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Enquiries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('controller' => 'product_varieties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Variety'), array('controller' => 'product_varieties', 'action' => 'add')); ?> </li>
	</ul>
</div>
