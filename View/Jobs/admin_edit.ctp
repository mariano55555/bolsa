 <?php
  echo $this->Html->script('admin/chosen/chosen.jquery.min', array('block' => 'script'));
  echo $this->Html->css('admin/select2/select2', null, array('inline' => false));
  echo $this->Html->css('admin/select2/style3', null, array('inline' => false));
  echo $this->Html->script('admin/select2/select2.min', array('block' => 'script'));
  echo $this->Html->css('/js/admin/ios-switch/switchery', null, array('inline' => false));
  echo $this->Html->css('admin/bootstrap-fileupload.min', null, array('inline' => false));
  echo $this->Html->css('/js/admin/jquery-multi-select/css/multi-select', null, array('inline' => false));
  echo $this->Html->css('/js/admin/jquery-tags-input/jquery.tagsinput', null, array('inline' => false));
  echo $this->Html->script('admin/ios-switch/switchery', array('block' => 'script'));
  echo $this->Html->script('admin/ios-switch/ios-init', array('block' => 'script'));
  echo $this->Html->script('admin/bootstrap-fileupload.min', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.multi-select', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-multi-select/js/jquery.quicksearch', array('block' => 'script'));
  echo $this->Html->script('admin/bootstrap-inputmask/bootstrap-inputmask.min', array('block' => 'script'));
  echo $this->Html->script('admin/jquery-tags-input/jquery.tagsinput', array('block' => 'script'));
  echo $this->Html->script('ckeditor/ckeditor', array('block' => 'script'));
  echo $this->Html->script('admin/tagsinput-init', array('block' => 'script'));
  echo $this->Html->script('admin/multi-select-init', array('block' => 'script'));
  echo $this->Html->script('admin/customadmin', array('block' => 'customscript'));
  echo $this->BreadCrumb->trail('Trabajos', array('../dashboard' => 'Dashboard', '../../jobs' => 'Trabajos'), 'Nuevo trabajo'); 
  ?>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editar trabajo
                    </header>
                    <div class="panel-body">
                    	<?php echo $this->Form->create('Job', array('type' => 'file', "class" => "form-horizontal", "role" => "form", 'inputDefaults' => array('label' => false, 'div'=>false))); 
                            echo $this->Form->input("id");
                      ?>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Empresa</label>
                                <?php echo $this->Form->input('company_id', array("class"=>"select2-me form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Trabajo</label>
                                <?php echo $this->Form->input('name', array("class"=>"form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Ciudad</label>
                                <?php echo $this->Form->input('city_id', array("class"=>"select2-me form-control", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>

                            <div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Descripci&oacute;n</label>
                                <?php echo $this->Form->input('content', array("class"=>"form-control ckeditor", 'required' => 'true', 'div' => array('class' => 'col-lg-9'))); ?>
                            </div>

                            <div class="form-group">
                                    <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Salario</label>  
                                    <?php echo $this->Form->input('salary', array('data-mask'=>"$ 9,999.99", "class"=>"form-control", 'type' => 'text', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
							
							<div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Habilidades requeridas</label>
                                <?php echo $this->Form->input('skills', array("id"=>"tags_3", "class"=>"form-control tags", 'required' => 'true', 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>
							

							<div class="form-group">
                                <label for="ProductName" class="col-lg-2 col-sm-2 control-label">Palabras clave</label>
                                <?php echo $this->Form->input('tags', array("id"=>"tags_1","class"=>"form-control tags", 'div' => array('class' => 'col-lg-6'))); ?>
                            </div>


                            <div class="form-group">
                        		<label class="control-label col-md-2">Areas de desempe&ntilde;o</label>
                        		<div class="col-md-9">
                        			<?php echo $this->Form->input('Area', array('id' => 'my_multi_select3', 'class' => 'multi-select', 'multiple' => '')); ?>
                        		</div>
                        	</div>

                        	<div class="form-group">
                        		<label class="control-label col-md-2">Tipo de contrato</label>
                        		<div class="col-md-9">
                        			<?php echo $this->Form->input('Contract', array('id' => 'my_multi_select4', 'class' => 'multi-select', 'multiple' => '')); ?>
                        		</div>
                        	</div>

							
							<div class="form-group">
                        		<label class="control-label col-md-2">Industria</label>
                        		<div class="col-md-9">
                        			<?php echo $this->Form->input('Industry', array('id' => 'my_multi_select5', 'class' => 'multi-select', 'multiple' => '')); ?>
                        		</div>
                        	</div>

                        	<div class="form-group">
                        		<label class="control-label col-md-2">Experiencia requerida</label>
                        		<div class="col-md-9">
                        			<?php echo $this->Form->input('Experience', array('id' => 'my_multi_select6', 'class' => 'multi-select', 'multiple' => '')); ?>
                        		</div>
                        	</div>

                            <div class="form-group">
                            	<label for="CategoryName" class="col-lg-2 col-sm-2 control-label">Activo</label>
                            	<?php echo $this->Form->input('active', array("class"=>"js-switch")); ?>
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
