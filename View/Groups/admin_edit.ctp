  <?php
  echo $this->Html->css('/js/admin/ios-switch/switchery', null, array('inline' => false));
  echo $this->Html->css('admin/bootstrap-fileupload.min', null, array('inline' => false));
  echo $this->Html->css('/js/admin/jquery-multi-select/css/multi-select', null, array('inline' => false));
  echo $this->Html->script('admin/ios-switch/switchery', array('block' => 'script'));
  echo $this->Html->script('admin/ios-switch/ios-init', array('block' => 'script'));
  echo $this->Html->script('admin/bootstrap-fileupload.min', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.multi-select', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.quicksearch', array('block' => 'script'));
  echo $this->Html->script('admin/multi-select-init', array('block' => 'script'));
  echo $this->BreadCrumb->trail('Grupos', array('Dashboard' => 'Dashboard', '../groups' => 'Grupos'), 'Editar grupo'); 
  ?>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editar grupo
                    </header>
                    <div class="panel-body">
                    	<?php echo $this->Form->create('Group', array('type' => 'file', "class" => "form-horizontal", "role" => "form", 'inputDefaults' => array('label' => false, 'div'=>false))); 
                    		  echo $this->Form->input("id");
                    	?>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Grupo</label>
                                <?php echo $this->Form->input('name', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                            	<label for="CategoryName" class="col-lg-2 col-sm-2 control-label">Activo</label>
                            	<?php echo $this->Form->input('active', array("class"=>"js-switch")); ?>
                        	</div>
							<?php
							$options = array(
							    'label' => 'Editar',
							    'class' => 'btn btn-primary',
							    'div' => array(
							        'class' => 'col-lg-offset-2 col-lg-10',
							    )
							);
							echo $this->Form->end($options); 
							?>
							</div>
                    </div>
                </section>
            </div>
        <!-- page heading end-->