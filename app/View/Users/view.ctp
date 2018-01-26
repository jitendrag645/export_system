<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registrationid'); ?></dt>
		<dd>
			<?php echo h($user['User']['registrationid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address1'); ?></dt>
		<dd>
			<?php echo h($user['User']['address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($user['User']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($user['User']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pincode'); ?></dt>
		<dd>
			<?php echo h($user['User']['pincode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adhar No'); ?></dt>
		<dd>
			<?php echo h($user['User']['adhar_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adhar Copy'); ?></dt>
		<dd>
			<?php echo h($user['User']['adhar_copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pancard No'); ?></dt>
		<dd>
			<?php echo h($user['User']['pancard_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pancard Copy'); ?></dt>
		<dd>
			<?php echo h($user['User']['pancard_copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plot Certificate Copy'); ?></dt>
		<dd>
			<?php echo h($user['User']['plot_certificate_copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plot Certificate No'); ?></dt>
		<dd>
			<?php echo h($user['User']['plot_certificate_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labs'), array('controller' => 'labs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab'), array('controller' => 'labs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plots'), array('controller' => 'plots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Season Crops'), array('controller' => 'season_crops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season Crop'), array('controller' => 'season_crops', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Labs'); ?></h3>
	<?php if (!empty($user['Lab'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Landline'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Lab'] as $lab): ?>
		<tr>
			<td><?php echo $lab['id']; ?></td>
			<td><?php echo $lab['name']; ?></td>
			<td><?php echo $lab['user_id']; ?></td>
			<td><?php echo $lab['mobile']; ?></td>
			<td><?php echo $lab['landline']; ?></td>
			<td><?php echo $lab['address']; ?></td>
			<td><?php echo $lab['created']; ?></td>
			<td><?php echo $lab['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'labs', 'action' => 'view', $lab['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'labs', 'action' => 'edit', $lab['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'labs', 'action' => 'delete', $lab['id']), array(), __('Are you sure you want to delete # %s?', $lab['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lab'), array('controller' => 'labs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Plots'); ?></h3>
	<?php if (!empty($user['Plot'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Survey No'); ?></th>
		<th><?php echo __('Survey Copy'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Plot'] as $plot): ?>
		<tr>
			<td><?php echo $plot['id']; ?></td>
			<td><?php echo $plot['user_id']; ?></td>
			<td><?php echo $plot['survey_no']; ?></td>
			<td><?php echo $plot['survey_copy']; ?></td>
			<td><?php echo $plot['area']; ?></td>
			<td><?php echo $plot['address']; ?></td>
			<td><?php echo $plot['created']; ?></td>
			<td><?php echo $plot['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plots', 'action' => 'view', $plot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plots', 'action' => 'edit', $plot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plots', 'action' => 'delete', $plot['id']), array(), __('Are you sure you want to delete # %s?', $plot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plot'), array('controller' => 'plots', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Season Crops'); ?></h3>
	<?php if (!empty($user['SeasonCrop'])): ?>
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
	<?php foreach ($user['SeasonCrop'] as $seasonCrop): ?>
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
