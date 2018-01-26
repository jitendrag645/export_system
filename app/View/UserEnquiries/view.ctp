<div class="userEnquiries view">
<h2><?php echo __('User Enquiry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userEnquiry['Product']['id'], array('controller' => 'products', 'action' => 'view', $userEnquiry['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userEnquiry['ProductType']['id'], array('controller' => 'product_types', 'action' => 'view', $userEnquiry['ProductType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Variety'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userEnquiry['ProductVariety']['id'], array('controller' => 'product_varieties', 'action' => 'view', $userEnquiry['ProductVariety']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required Quantity'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['required_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middlename'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['middlename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userEnquiry['UserEnquiry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Enquiry'), array('action' => 'edit', $userEnquiry['UserEnquiry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Enquiry'), array('action' => 'delete', $userEnquiry['UserEnquiry']['id']), array(), __('Are you sure you want to delete # %s?', $userEnquiry['UserEnquiry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Enquiries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('controller' => 'product_varieties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Variety'), array('controller' => 'product_varieties', 'action' => 'add')); ?> </li>
	</ul>
</div>
