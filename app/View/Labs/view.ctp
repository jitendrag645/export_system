<div class="labs view">
<h2><?php echo __('Lab'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lab['User']['id'], array('controller' => 'users', 'action' => 'view', $lab['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landline'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['landline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lab['Lab']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lab'), array('action' => 'edit', $lab['Lab']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lab'), array('action' => 'delete', $lab['Lab']['id']), array(), __('Are you sure you want to delete # %s?', $lab['Lab']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Labs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
