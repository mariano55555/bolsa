<?php
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_page', null, array('inline' => false));
  echo $this->Html->css('/js/admin/advanced-datatable/css/demo_table', null, array('inline' => false));
  echo $this->Html->css('/js/admin/data-tables/DT_bootstrap', null, array('inline' => false));
  echo $this->Html->css('admin/style_for_default', null, array('inline' => false));
  echo $this->Html->script('admin/advanced-datatable/js/jquery.dataTables', array('block' => 'script'));
  echo $this->Html->script('admin/data-tables/DT_bootstrap', array('block' => 'script'));
  echo $this->Html->script('admin/dynamic_table_init', array('block' => 'script'));
  ?>
<?php
$menu = array('Inicio'=>'Inicio','Empleos'=>'Empleos','Empresas'=>'#','Contáctanos'=>'#');
echo $this->Elements->Menu($menu, 'Empresas'); 
?> 

<style>
.dataTables_length{
 width:50%;
}
</style>


<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner title-2">Empresas
      <ul class="breadcrumb-inner">
        <li> <a href="<?php echo $this->webroot; ?>Inicio">Inicio</a></li>
        <li> <a href="#">Empresas</a></li>
      </ul>
    </h1>
  </div>


<div class="inner">
  <div class="content-inner">
  
    <!--<div id="search-and-sort" class="box-1 search-bar-partner">
      <div id="search-partner">
        <form id="search-partner-form" action="http://uouapps.com/careers/post">
          <input type="text" placeholder="Search for Partners" class="textfield-with-callback"/>
          <div id="sort-partner" class="sort-Industry">
            <select class="select">
              <option selected="selected" value="nothing">- Select Industry-</option>
              <option value="sorting criteria 1">Sorting Criteria 1</option>
              <option value="sorting criteria 2">Sorting Criteria 2</option>
              <option value="sorting criteria 3">Sorting Criteria 3</option>
              <option value="sorting criteria 4">Sorting Criteria 4</option>
              <option value="sorting criteria 5">Sorting Criteria 5</option>
            </select>
          </div>
          <input id="search-submit" type="submit" value="Search">
          
           <div id="page-partners">
	        <select class="select">
	          <option selected="selected" value="1">1</option>
	          <option value="2">2</option>
	          <option value="3">3</option>
	          <option value="4">4</option>
	          <option value="5">5</option>
	          <option value="6">6</option>
	        </select>
     	 </div>
	      <div id="sort-partner">
	        <select class="select">
	          <option selected="selected" value="nothing">- Sort By -</option>
	          <option value="sorting criteria 1">Sorting Criteria 1</option>
	          <option value="sorting criteria 2">Sorting Criteria 2</option>
	          <option value="sorting criteria 3">Sorting Criteria 3</option>
	          <option value="sorting criteria 4">Sorting Criteria 4</option>
	          <option value="sorting criteria 5">Sorting Criteria 5</option>
	        </select>
	      </div>
        </form>
      </div>
     
    </div>-->
    
    <!-- Content Inner -->

      <div id="our-partners">
				<div class="row">
				    <div class="col-sm-12">
				        <section class="panel">
				        <div class="panel-body">
				            <div class="adv-table">
				                <table  class="display table table-bordered table-striped" id="dynamic-table">
				                    <thead>
				                        <tr>
				                            <td>Empresa</td>
				                            <td>Direcci&oacute;n</td>
				                            <th>Tel&eacute;fono</th>
				                            <th class="hidden-phone">Ver Perfil</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				      				<?php foreach ($companies as $company): ?>
									<tr>
										<td style="vertical-align:middle;"><?php echo h($company['Company']['name']); ?>&nbsp;</td>
										<td style="vertical-align:middle;"><?php echo h($company['Company']['address']); ?>&nbsp;</td>
										<td style="vertical-align:middle;"><?php echo h($company['Company']['phone']); ?>&nbsp;</td>
										<td class="actions" style="vertical-align:middle; text-align:center">
											<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> View'), 
								                '/Empresas/perfil/'.$company['Company']['id'], 
								                array('escape' => false, "class"=>"btn btn-success")
								                );
								            ?>
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
        </div>
        </div>      
    </div>

