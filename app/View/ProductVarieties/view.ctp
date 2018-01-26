<div class="productVarieties view">
<h2><?php echo __('Product Variety'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productVariety['ProductVariety']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productVariety['Product']['id'], array('controller' => 'products', 'action' => 'view', $productVariety['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variety Name'); ?></dt>
		<dd>
			<?php echo h($productVariety['ProductVariety']['variety_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productVariety['ProductVariety']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productVariety['ProductVariety']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Variety'), array('action' => 'edit', $productVariety['ProductVariety']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Variety'), array('action' => 'delete', $productVariety['ProductVariety']['id']), array(), __('Are you sure you want to delete # %s?', $productVariety['ProductVariety']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Variety'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Enquiries'), array('controller' => 'user_enquiries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('controller' => 'user_enquiries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Enquiries'); ?></h3>
	<?php if (!empty($productVariety['UserEnquiry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Product Type Id'); ?></th>
		<th><?php echo __('Product Variety Id'); ?></th>
		<th><?php echo __('Required Quantity'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Middlename'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Contact Number'); ?></th>
		<th><?php echo __('Email Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productVariety['UserEnquiry'] as $userEnquiry): ?>
		<tr>
			<td><?php echo $userEnquiry['id']; ?></td>
			<td><?php echo $userEnquiry['product_id']; ?></td>
			<td><?php echo $userEnquiry['product_type_id']; ?></td>
			<td><?php echo $userEnquiry['product_variety_id']; ?></td>
			<td><?php echo $userEnquiry['required_quantity']; ?></td>
			<td><?php echo $userEnquiry['firstname']; ?></td>
			<td><?php echo $userEnquiry['middlename']; ?></td>
			<td><?php echo $userEnquiry['lastname']; ?></td>
			<td><?php echo $userEnquiry['contact_number']; ?></td>
			<td><?php echo $userEnquiry['email_id']; ?></td>
			<td><?php echo $userEnquiry['description']; ?></td>
			<td><?php echo $userEnquiry['created']; ?></td>
			<td><?php echo $userEnquiry['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_enquiries', 'action' => 'view', $userEnquiry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_enquiries', 'action' => 'edit', $userEnquiry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_enquiries', 'action' => 'delete', $userEnquiry['id']), array(), __('Are you sure you want to delete # %s?', $userEnquiry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Enquiry'), array('controller' => 'user_enquiries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
