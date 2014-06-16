


  <div class="directory-info-row">
              	<div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="panel">
                            <div class="panel-body">
                                <h4><?php echo h($user['User']['name']); ?> <span class="text-muted small"> - <?php echo h($user['User']['carnet']); ?></span></h4>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="thumb media-object" src="<?php echo $this->webroot; ?>images/photos/user3.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <address>
                                            <strong>ABCDE, Inc.</strong><br>
                                            ABC Ave, Suite 14<br>
                                            BucketLand, Australia <br>
                                            <abbr title="Phone">P:</abbr> <?php echo h($user['User']['phone']); ?>
                                        </address>
                                        <ul class="social-links">
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carnet'); ?></dt>
		<dd>
			<?php echo h($user['User']['carnet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
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
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($user['User']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses'), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access'), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription'), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accesses'); ?></h3>
	<?php if (!empty($user['Access'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Access'] as $access): ?>
		<tr>
			<td><?php echo $access['id']; ?></td>
			<td><?php echo $access['start']; ?></td>
			<td><?php echo $access['end']; ?></td>
			<td><?php echo $access['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accesses', 'action' => 'view', $access['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accesses', 'action' => 'edit', $access['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accesses', 'action' => 'delete', $access['id']), null, __('Are you sure you want to delete # %s?', $access['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Access'), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subscriptions'); ?></h3>
	<?php if (!empty($user['Subscription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Tag Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Subscription'] as $subscription): ?>
		<tr>
			<td><?php echo $subscription['id']; ?></td>
			<td><?php echo $subscription['user_id']; ?></td>
			<td><?php echo $subscription['tag_id']; ?></td>
			<td><?php echo $subscription['active']; ?></td>
			<td><?php echo $subscription['created']; ?></td>
			<td><?php echo $subscription['modified']; ?></td>
			<td><?php echo $subscription['created_by']; ?></td>
			<td><?php echo $subscription['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, __('Are you sure you want to delete # %s?', $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription'), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($user['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Skills'); ?></th>
		<th><?php echo __('Salary'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['name']; ?></td>
			<td><?php echo $job['company_id']; ?></td>
			<td><?php echo $job['content']; ?></td>
			<td><?php echo $job['skills']; ?></td>
			<td><?php echo $job['salary']; ?></td>
			<td><?php echo $job['created']; ?></td>
			<td><?php echo $job['modified']; ?></td>
			<td><?php echo $job['created_by']; ?></td>
			<td><?php echo $job['modified_by']; ?></td>
			<td><?php echo $job['tags']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), null, __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>


<ul class="directory-list">
                <li><a href="#">a</a></li>
                <li><a href="#">b</a></li>
                <li><a href="#">c</a></li>
                <li><a href="#">d</a></li>
                <li><a href="#">e</a></li>
                <li><a href="#">f</a></li>
                <li><a href="#">g</a></li>
                <li><a href="#">h</a></li>
                <li><a href="#">i</a></li>
                <li><a href="#">j</a></li>
                <li><a href="#">k</a></li>
                <li><a href="#">l</a></li>
                <li><a href="#">m</a></li>
                <li><a href="#">n</a></li>
                <li><a href="#">o</a></li>
                <li><a href="#">p</a></li>
                <li><a href="#">q</a></li>
                <li><a href="#">r</a></li>
                <li><a href="#">s</a></li>
                <li><a href="#">t</a></li>
                <li><a href="#">u</a></li>
                <li><a href="#">v</a></li>
                <li><a href="#">w</a></li>
                <li><a href="#">x</a></li>
                <li><a href="#">y</a></li>
                <li><a href="#">z</a></li>
            </ul>