<div class="plots view">
<h2><?php echo __('Plot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plot['User']['id'], array('controller' => 'users', 'action' => 'view', $plot['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Survey No'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['survey_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Survey Copy'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['survey_copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plot['Plot']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plot'), array('action' => 'edit', $plot['Plot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plot'), array('action' => 'delete', $plot['Plot']['id']), array(), __('Are you sure you want to delete # %s?', $plot['Plot']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Season Crops'); ?></h3>
	<?php if (!empty($plot['SeasonCrop'])): ?>
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
	<?php foreach ($plot['SeasonCrop'] as $seasonCrop): ?>
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
