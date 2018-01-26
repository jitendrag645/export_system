<div class="seasonCrops index">
	<h2><?php echo __('Season Crops'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plot_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('available_from'); ?></th>
			<th><?php echo $this->Paginator->sort('available_till'); ?></th>
			<th><?php echo $this->Paginator->sort('approximate_price'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($seasonCrops as $seasonCrop): ?>
	<tr>
		<td><?php echo h($seasonCrop['SeasonCrop']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seasonCrop['Plot']['id'], array('controller' => 'plots', 'action' => 'view', $seasonCrop['Plot']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seasonCrop['User']['id'], array('controller' => 'users', 'action' => 'view', $seasonCrop['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seasonCrop['Product']['id'], array('controller' => 'products', 'action' => 'view', $seasonCrop['Product']['id'])); ?>
		</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['available_from']); ?>&nbsp;</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['available_till']); ?>&nbsp;</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['approximate_price']); ?>&nbsp;</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['created']); ?>&nbsp;</td>
		<td><?php echo h($seasonCrop['SeasonCrop']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seasonCrop['SeasonCrop']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seasonCrop['SeasonCrop']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seasonCrop['SeasonCrop']['id']), array(), __('Are you sure you want to delete # %s?', $seasonCrop['SeasonCrop']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Season Crop'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
