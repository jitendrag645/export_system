<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('registrationid'); ?></th>
			<th><?php echo $this->Paginator->sort('address1'); ?></th>
			<th><?php echo $this->Paginator->sort('address2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('pincode'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('adhar_no'); ?></th>
			<th><?php echo $this->Paginator->sort('adhar_copy'); ?></th>
			<th><?php echo $this->Paginator->sort('pancard_no'); ?></th>
			<th><?php echo $this->Paginator->sort('pancard_copy'); ?></th>
			<th><?php echo $this->Paginator->sort('plot_certificate_copy'); ?></th>
			<th><?php echo $this->Paginator->sort('plot_certificate_no'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['registrationid']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['address1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['address2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['pincode']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['adhar_no']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['adhar_copy']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['pancard_no']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['pancard_copy']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['plot_certificate_copy']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['plot_certificate_no']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Labs'), array('controller' => 'labs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab'), array('controller' => 'labs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
	</ul>
</div>
