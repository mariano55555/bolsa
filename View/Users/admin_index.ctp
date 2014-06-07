
  <?php
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_page', null, array('inline' => false));
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_table', null, array('inline' => false));
  echo $this->Html->css('/js/admin/data-tables/DT_bootstrap', null, array('inline' => false));
  echo $this->Html->script('admin/advanced-datatable/js/jquery.dataTables', array('block' => 'script'));
  echo $this->Html->script('admin/data-tables/DT_bootstrap', array('block' => 'script'));
  echo $this->Html->script('admin/dynamic_table_init', array('block' => 'script'));
  echo $this->BreadCrumb->trail('Industrias', array('dashboard' => 'Dashboard'), 'Industrias'); 
  ?>


<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                INDUSTRIAS
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
        <div class="panel-body">
          <?php echo $this->Html->link(__('<i class="fa fa-shopping-cart"></i> Nueva Industria'), 
                array('action' => 'add'), 
                array('escape' => false, "class"=>"btn btn-info")
                );
              ?>
            <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <td>Industria</td>
                            <th class="hidden-phone">Creado</th>
                            <th class="hidden-phone">Modificado</th>
                            <th class="hidden-phone">Estado</th>
                            <th class="hidden-phone">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
      				<?php foreach ($users as $user): ?>
					<tr>
						<td style="vertical-align:middle;"><?php echo h($industry['Industry']['name']); ?>&nbsp;</td>
						<td style="vertical-align:middle;"><?php echo h($industry['Industry']['created']); ?>&nbsp;</td>
						<td style="vertical-align:middle;"><?php echo h($industry['Industry']['modified']); ?>&nbsp;</td>
						<td style="vertical-align:middle; text-align:center"><?php echo h($industry['Industry']['active'] == 1) ? '<div class="alert alert-success fade in" style="margin-bottom:0px"><strong>Active</strong></div>' : '<div class="alert alert-block alert-danger fade in" style="margin-bottom:0px"><strong>Inactive</strong></div>'; ?>&nbsp;</td>
						<td class="actions" style="vertical-align:middle; text-align:center">
							<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> View'), 
				                array('action' => 'view', $industry['Industry']['id']), 
				                array('escape' => false, "class"=>"btn btn-success")
				                );
				            ?>
							<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), 
				                array('action' => 'edit', $industry['Industry']['id']), 
				                array('escape' => false, "class"=>"btn btn-warning")
				                );
				            ?>
							<?php echo $this->Form->postLink(__('<i class="fa fa-exclamation-triangle"></i> Delete'), 
				                array('action' => 'delete', $industry['Industry']['id']), 
				                array('escape' => false, "class"=>"btn btn-danger"), 
				                __('Are you sure you want to delete # %s?', $industry['Industry']['name'])
				            ); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				 </tbody>
                </table>
             </div>
            </div>
        </section>
    </div>
</div>




<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('name'); ?></th>
			<th><?php echo __('email'); ?></th>
			<th><?php echo __('password'); ?></th>
			<th><?php echo __('carnet'); ?></th>
			<th><?php echo __('phone'); ?></th>
			<th><?php echo __('active'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('modified'); ?></th>
			<th><?php echo __('created_by'); ?></th>
			<th><?php echo __('modified_by'); ?></th>
			<th><?php echo __('group_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['carnet']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified_by']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
