<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minimum Order'); ?></dt>
		<dd>
			<?php echo h($product['Product']['minimum_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Unit']['id'], array('controller' => 'units', 'action' => 'view', $product['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Product Types'); ?></h3>
	<?php if (!empty($product['ProductType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Type Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['ProductType'] as $productType): ?>
		<tr>
			<td><?php echo $productType['id']; ?></td>
			<td><?php echo $productType['product_id']; ?></td>
			<td><?php echo $productType['type_name']; ?></td>
			<td><?php echo $productType['created']; ?></td>
			<td><?php echo $productType['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_types', 'action' => 'view', $productType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_types', 'action' => 'edit', $productType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_types', 'action' => 'delete', $productType['id']), array(), __('Are you sure you want to delete # %s?', $productType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Varieties'); ?></h3>
	<?php if (!empty($product['ProductVariety'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Variety Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['ProductVariety'] as $productVariety): ?>
		<tr>
			<td><?php echo $productVariety['id']; ?></td>
			<td><?php echo $productVariety['product_id']; ?></td>
			<td><?php echo $productVariety['variety_name']; ?></td>
			<td><?php echo $productVariety['created']; ?></td>
			<td><?php echo $productVariety['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_varieties', 'action' => 'view', $productVariety['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_varieties', 'action' => 'edit', $productVariety['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_varieties', 'action' => 'delete', $productVariety['id']), array(), __('Are you sure you want to delete # %s?', $productVariety['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Variety'), array('controller' => 'product_varieties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Season Crops'); ?></h3>
	<?php if (!empty($product['SeasonCrop'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Plot Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Available From'); ?></th>
		<th><?php echo __('Available Till'); ?></th>
		<th><?php echo __('Approximate Price'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['SeasonCrop'] as $seasonCrop): ?>
		<tr>
			<td><?php echo $seasonCrop['id']; ?></td>
			<td><?php echo $seasonCrop['plot_id']; ?></td>
			<td><?php echo $seasonCrop['user_id']; ?></td>
			<td><?php echo $seasonCrop['product_id']; ?></td>
			<td><?php echo $seasonCrop['available_from']; ?></td>
			<td><?php echo $seasonCrop['available_till']; ?></td>
			<td><?php echo $seasonCrop['approximate_price']; ?></td>
			<td><?php echo $seasonCrop['is_active']; ?></td>
			<td><?php echo $seasonCrop['created']; ?></td>
			<td><?php echo $seasonCrop['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'season_crops', 'action' => 'view', $seasonCrop['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'season_crops', 'action' => 'edit', $seasonCrop['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'season_crops', 'action' => 'delete', $seasonCrop['id']), array(), __('Are you sure you want to delete # %s?', $seasonCrop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Enquiries'); ?></h3>
	<?php if (!empty($product['UserEnquiry'])): ?>
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
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['UserEnquiry'] as $userEnquiry): ?>
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
			<td><?php echo $userEnquiry['email']; ?></td>
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
