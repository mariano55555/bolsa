 <?php
  echo $this->Html->css('/js/admin/ios-switch/switchery', null, array('inline' => false));
  echo $this->Html->css('admin/bootstrap-fileupload.min', null, array('inline' => false));
  echo $this->Html->script('admin/chosen/chosen.jquery.min', array('block' => 'script'));
  echo $this->Html->css('admin/select2/select2', null, array('inline' => false));
  echo $this->Html->css('admin/select2/style3', null, array('inline' => false));
  echo $this->Html->script('admin/select2/select2.min', array('block' => 'script'));
  echo $this->Html->css('/js/admin/jquery-multi-select/css/multi-select', null, array('inline' => false));
  echo $this->Html->script('admin/ios-switch/switchery', array('block' => 'script'));
  echo $this->Html->script('admin/ios-switch/ios-init', array('block' => 'script'));
  echo $this->Html->script('admin/bootstrap-fileupload.min', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.multi-select', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.quicksearch', array('block' => 'script'));
  echo $this->Html->script('admin/multi-select-init', array('block' => 'script'));
  echo $this->Html->script('admin/customadmin', array('block' => 'customscript'));
  echo $this->BreadCrumb->trail('Empresas', array('Dashboard' => 'Dashboard', '../companies' => 'Empresas'), 'Nueva empresa'); 
  ?>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Nueva Empresa
                    </header>
                    <div class="panel-body">
                    	<?php echo $this->Form->create('Company', array('type' => 'file', "class" => "form-horizontal", "role" => "form", 'inputDefaults' => array('label' => false, 'div'=>false))); ?>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Empresa</label>
                                <?php echo $this->Form->input('name', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Direcci&oacute;n</label>
                                <?php echo $this->Form->input('address', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Tel&eacute;fono</label>
                                <?php echo $this->Form->input('phone', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                             <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <?php echo $this->Form->input('email', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                            	<label for="CategoryName" class="col-lg-2 col-sm-2 control-label">Activo</label>
                            	<?php echo $this->Form->input('active', array('checked' => true, "class"=>"js-switch")); ?>
                        	</div>
							<?php
							$options = array(
							    'label' => 'Crear',
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
