<div class="seasonCrops view">
<h2><?php echo __('Season Crop'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plot'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seasonCrop['Plot']['id'], array('controller' => 'plots', 'action' => 'view', $seasonCrop['Plot']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seasonCrop['User']['id'], array('controller' => 'users', 'action' => 'view', $seasonCrop['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seasonCrop['Product']['id'], array('controller' => 'products', 'action' => 'view', $seasonCrop['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Available From'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['available_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Available Till'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['available_till']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approximate Price'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['approximate_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($seasonCrop['SeasonCrop']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Season Crop'), array('action' => 'edit', $seasonCrop['SeasonCrop']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Season Crop'), array('action' => 'delete', $seasonCrop['SeasonCrop']['id']), array(), __('Are you sure you want to delete # %s?', $seasonCrop['SeasonCrop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
