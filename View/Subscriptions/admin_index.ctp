  <?php
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_page', null, array('inline' => false));
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_table', null, array('inline' => false));
  echo $this->Html->css('/js/admin/data-tables/DT_bootstrap', null, array('inline' => false));
  echo $this->Html->script('admin/advanced-datatable/js/jquery.dataTables', array('block' => 'script'));
  echo $this->Html->script('admin/data-tables/DT_bootstrap', array('block' => 'script'));
  echo $this->Html->script('admin/dynamic_table_init', array('block' => 'script'));
  echo $this->BreadCrumb->trail('Subscripciones', array('dashboard' => 'Dashboard'), 'Subscripciones'); 
  ?>


<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                SUBSCRIPCIONES
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
        <div class="panel-body">
          <?php echo $this->Html->link(__('<i class="fa fa-shopping-cart"></i> Nueva subscripción'), 
                array('action' => 'add'), 
                array('escape' => false, "class"=>"btn btn-info")
                );
              ?>
            <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <td>Usuario</td>
                            <td>Tag</td>
                            <th class="hidden-phone">Creado</th>
                            <th class="hidden-phone">Estado</th>
                            <th class="hidden-phone">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
      				<?php foreach ($subscriptions as $subscription): ?>
					<tr>
						
						<td style="vertical-align:middle;"><?php echo $this->Html->link($subscription['User']['name'], array('controller' => 'users', 'action' => 'view', $subscription['User']['id'])); ?></td>
						<td style="vertical-align:middle;"><?php echo $this->Html->link($subscription['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $subscription['Tag']['id'])); ?></td>
						<td style="vertical-align:middle;"><?php echo h($subscription['Subscription']['created']); ?>&nbsp;</td>
						<td style="vertical-align:middle;"><?php echo h($subscription['Subscription']['modified']); ?>&nbsp;</td>
						<td style="vertical-align:middle; text-align:center"><?php echo h($subscription['Subscription']['active'] == 1) ? '<div class="alert alert-success fade in" style="margin-bottom:0px"><strong>Active</strong></div>' : '<div class="alert alert-block alert-danger fade in" style="margin-bottom:0px"><strong>Inactive</strong></div>'; ?>&nbsp;</td>
						<td class="actions" style="vertical-align:middle; text-align:center">
							<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> View'), 
				                array('action' => 'view', $subscription['Subscription']['id']), 
				                array('escape' => false, "class"=>"btn btn-success")
				                );
				            ?>
							<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), 
				                array('action' => 'edit', $subscription['Subscription']['id']), 
				                array('escape' => false, "class"=>"btn btn-warning")
				                );
				            ?>
							<?php echo $this->Form->postLink(__('<i class="fa fa-exclamation-triangle"></i> Delete'), 
				                array('action' => 'delete', $subscription['Subscription']['id']), 
				                array('escape' => false, "class"=>"btn btn-danger"), 
				                __('Are you sure you want to delete # %s?', $subscription['Subscription']['name'])
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