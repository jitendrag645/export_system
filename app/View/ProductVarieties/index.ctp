<div class="productVarieties index">
	<h2><?php echo __('Product Varieties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('variety_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productVarieties as $productVariety): ?>
	<tr>
		<td><?php echo h($productVariety['ProductVariety']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productVariety['Product']['id'], array('controller' => 'products', 'action' => 'view', $productVariety['Product']['id'])); ?>
		</td>
		<td><?php echo h($productVariety['ProductVariety']['variety_name']); ?>&nbsp;</td>
		<td><?php echo h($productVariety['ProductVariety']['created']); ?>&nbsp;</td>
		<td><?php echo h($productVariety['ProductVariety']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productVariety['ProductVariety']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productVariety['ProductVariety']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productVariety['ProductVariety']['id']), array(), __('Are you sure you want to delete # %s?', $productVariety['ProductVariety']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Product Variety'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Enquiries'), array('controller' => 'user_enquiries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Enquiry'), array('controller' => 'user_enquiries', 'action' => 'add')); ?> </li>
	</ul>
</div>
