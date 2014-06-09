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
  echo $this->BreadCrumb->trail('Industrias', array('Dashboard' => 'Dashboard', '../industries' => 'Industrias'), 'Nueva industria'); 
  ?>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Nuevo contrato
                    </header>
                    <div class="panel-body">
                    	<?php echo $this->Form->create('Industry', array('type' => 'file', "class" => "form-horizontal", "role" => "form", 'inputDefaults' => array('label' => false, 'div'=>false))); ?>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Industria</label>
                                <?php echo $this->Form->input('name', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                        		<label class="control-label col-md-2">Trabajos</label>
                        		<div class="col-md-9">
                        			<?php echo $this->Form->input('Job', array('id' => 'my_multi_select3', 'class' => 'multi-select', 'multiple' => '')); ?>
                        		</div>
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

