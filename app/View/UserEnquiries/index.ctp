<div class="userEnquiries index">
	<h2><?php echo __('User Enquiries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_variety_id'); ?></th>
			<th><?php echo $this->Paginator->sort('required_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('middlename'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_number'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userEnquiries as $userEnquiry): ?>
	<tr>
		<td><?php echo h($userEnquiry['UserEnquiry']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userEnquiry['Product']['id'], array('controller' => 'products', 'action' => 'view', $userEnquiry['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userEnquiry['ProductType']['id'], array('controller' => 'product_types', 'action' => 'view', $userEnquiry['ProductType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userEnquiry['ProductVariety']['id'], array('controller' => 'product_varieties', 'action' => 'view', $userEnquiry['ProductVariety']['id'])); ?>
		</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['required_quantity']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['middlename']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['contact_number']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['email']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['description']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['created']); ?>&nbsp;</td>
		<td><?php echo h($userEnquiry['UserEnquiry']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userEnquiry['UserEnquiry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userEnquiry['UserEnquiry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userEnquiry['UserEnquiry']['id']), array(), __('Are you sure you want to delete # %s?', $userEnquiry['UserEnquiry']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Varieties'), array('controller' => 'product_varieties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Variety'), array('controller' => 'product_varieties', 'action' => 'add')); ?> </li>
	</ul>
</div>
