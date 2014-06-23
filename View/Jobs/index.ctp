<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.form.min.js"></script>
<?php 
$meses     = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Nov', 'Dic');
?>
<script>
$(document).ready(function() {
  $("li.active").wrapInner("<a href='#'></a>");
  $("li.active a").css( "text-decoration", "none" );
  $("li.active a").css( "cursor", "default" );
});

</script>
<style>
  span.next a{
    background: url("/images/pager-sprite.png") no-repeat scroll -19px 0px rgb(230, 230, 230);
    background: none repeat scroll 0 0 #E6E6E6;
    box-shadow: 0 3px 0 0 #CCCCCC;
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
  }
  span.next a:hover{
    background-color: rgb(0, 198, 255);
    background: none repeat scroll 0% 0% rgb(0, 198, 255);
    color: rgb(255, 255, 255);
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
  }

.infobox {
   color: #4F8A10 !important;
   background-color:#EDFCED !important;
   padding:10px !important;
  }
</style>

<?php
$menu = array('Inicio'=>'Inicio','Empleos'=>'#','Empresas'=>'Empresas','Contáctanos'=>'Contactanos');
echo $this->Elements->Menu($menu, 'Empleos'); 
?>


<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner">Ofertas de empleo<span id="jobs-counter">(<?php echo $totaltrabajos; ?>)</span>
      <ul class="breadcrumb-inner">
        <li> <a href="<?php echo $this->webroot; ?>Inicio">Inicio</a></li>
        <li> <a href="#">Empleos</a></li>
      </ul>
    </h1>
  </div>
  <div class="inner"> 
    
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Left -->
      <div class="content-left">
        <div id="search-filter" class="block background">
          <h2 class="title-1">Filtrar</h2>
          <div class="block-content">
            <div class="filter-category">
              <h3>Por ciudad</h3>
              <div class="filter-content show">
                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <?php
                      if (count($ciudades) <= 4) {
                          foreach ($ciudades as $ciudad) { ?>
                            <li><a href="<?php echo $this->webroot; ?>filtrar/ciudad/<?php echo $ciudad['id']; ?>"><?php echo $ciudad['nombre']; ?><span>(<?php echo $ciudad['cantidad']; ?>)</span></a></li>
                    <?php }
                       }else{
                          $i = 1;
                           foreach ($ciudades as $ciudad) { 
                                if ($i <= 4) { ?>
                                   <li><a href="<?php echo $this->webroot; ?>filtrar/ciudad/<?php echo $ciudad['id']; ?>"><?php echo $ciudad['nombre']; ?><span>(<?php echo $ciudad['cantidad']; ?>)</span></a></li>
                               <?php }
                            $i++;
                          }
                      } ?>
                    </ul>
                  </div>
                  <?php
                  if (count($ciudades) > 4) {
                  ?>
                    <div class="minor hide">
                      <ul>
                        <?php
                          for ($i=4; $i < count($ciudades); $i++) { ?>
                              <li><a href="<?php echo $this->webroot; ?>filtrar/ciudad/<?php echo $ciudades[$i]['id']; ?>"><?php echo $ciudades[$i]['nombre']; ?><span>(<?php echo $ciudades[$i]['cantidad']; ?>)</span></a></li>
                        <?php
                          }
                        ?>
                      </ul>
                      <div class="minor-label">Ver m&aacute;s</div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>
            <div class="filter-category">
              <h3>Por industria</h3>
             <div class="filter-content show">
                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <?php
                      if (count($industrias) <= 4) {
                          foreach ($industrias as $industria) { ?>
                            <li><a href="<?php echo $this->webroot; ?>Jobs/search/industria/<?php echo $industria['id']; ?>"><?php echo $industria['nombre']; ?><span>(<?php echo $industria['cantidad']; ?>)</span></a></li>
                    <?php }
                       }else{
                          $i = 1;
                           foreach ($industrias as $industria) { 
                                if ($i <= 4) { ?>
                                   <li><a href="<?php echo $this->webroot; ?>Jobs/search/industria/<?php echo $industria['id']; ?>"><?php echo $industria['nombre']; ?><span>(<?php echo $industria['cantidad']; ?>)</span></a></li>
                               <?php }
                            $i++;
                          }
                      } ?>
                    </ul>
                  </div>
                  <?php
                  if (count($industrias) > 4) {
                  ?>
                    <div class="minor hide">
                      <ul>
                        <?php
                          for ($i=4; $i < count($industrias); $i++) { ?>
                              <li><a href="<?php echo $this->webroot; ?>Jobs/search/industria/<?php echo $industrias[$i]['id']; ?>"><?php echo $industrias[$i]['nombre']; ?><span>(<?php echo $industrias[$i]['cantidad']; ?>)</span></a></li>
                        <?php
                          }
                        ?>
                      </ul>
                      <div class="minor-label">Ver m&aacute;s</div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>
            <div class="filter-category">
              <h3>Por tipo</h3>
              <div class="filter-content show">
                                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <?php
                      if (count($areas) <= 4) {
                          foreach ($areas as $area) { ?>
                            <li><a href="<?php echo $this->webroot; ?>Jobs/search/area/<?php echo $area['id']; ?>"><?php echo $area['nombre']; ?><span>(<?php echo $area['cantidad']; ?>)</span></a></li>
                    <?php }
                       }else{
                          $i = 1;
                           foreach ($areas as $area) { 
                                if ($i <= 4) { ?>
                                   <li><a href="<?php echo $this->webroot; ?>Jobs/search/area/<?php echo $area['id']; ?>"><?php echo $area['nombre']; ?><span>(<?php echo $area['cantidad']; ?>)</span></a></li>
                               <?php }
                            $i++;
                          }
                      } ?>
                    </ul>
                  </div>
                  <?php
                  if (count($areas) > 4) {
                  ?>
                    <div class="minor hide">
                      <ul>
                        <?php
                          for ($i=4; $i < count($areas); $i++) { ?>
                              <li><a href="<?php echo $this->webroot; ?>Jobs/search/area/<?php echo $areas[$i]['id']; ?>"><?php echo $areas[$i]['nombre']; ?><span>(<?php echo $areas[$i]['cantidad']; ?>)</span></a></li>
                        <?php
                          }
                        ?>
                      </ul>
                      <div class="minor-label">Ver m&aacute;s</div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>
          </div>
        </div>
        <div id="search-filter" class="block background">
          <h2 class="title-1">Buscar</h2>
           <form id="filter-job-page" action="#">
              <div class="filter-category">
                <h3>Tipo de contrato</h3>
                <div class="filter-content">
                  <?php foreach ($contratos as $key => $value) { ?>
                      <div class="checkbox-field">
                        <input id="contact_type_choice_<?php echo $key; ?>" type="checkbox" value="<?php echo $key; ?>"/>
                        <label for="contact_type_choice_<?php echo $key; ?>"><?php echo $value; ?></label>
                      </div>  
                  <?php } ?>
                </div>
              </div>
              <div class="filter-category">
                <h3>Experiencia laboral</h3>
                <div class="filter-content">
                  <div class="checkbox-field">
                    <input id="experience_choice_a" type="checkbox" value="1"/>
                    <label for="experience_choice_a">Todos</label>
                  </div>
                  <?php
                  foreach ($experiencias as $key => $value) { ?>
                    <div class="checkbox-field">
                      <input id="experience_choice_<?php echo $key; ?>" type="checkbox" value="<?php echo $key; ?>"/>
                      <label for="experience_choice_<?php echo $key; ?>"><?php echo $value; ?></label>
                    </div>
                  <?php }
                  ?>
                </div>
              </div>
              <div class="filter-category">
                <h3>D&iacute;as publicados</h3>
                <div class="filter-content">
                  <div class="dayprogressbar-mover">
                    <div class="bar"></div>
                    <div class="clear"></div>
                    <div class="begin"> <span class="count">0</span> <span class="label">d&iacute;as</span> </div>
                    <div class="end"> <span class="count">90</span> <span class="label">d&iacute;as</span> </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="filter-category">
                <h3>Rango de salario</h3>
                <div class="filter-content">
                  <div class="rangeprogressbar-mover">
                    <div class="bar"></div>
                    <div class="clear"></div>
                    <div class="begin">
                      <input class="count" type="text" count="300" onblur="$(this).removeClass('active')" onfocus="$(this).addClass('active')"/>
                    </div>
                    <div class="sepor">a</div>
                    <div class="end">
                      <input class="count" type="text" count="1000" onblur="$(this).removeClass('active')" onfocus="$(this).addClass('active')"/>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <input type="submit" value="Buscar" id="filter-job-page-submit"/>
            </form>
        </div>

        <!--COLOCAR UN BANNER ACA -->
      </div>
      <!-- /Content Left --> 
      
      <!-- Content Center -->
      <div class="content-center">
        <div id="map-container">
          <div id="job-page-map" class="map"></div>
          <div class="hide-map-button"><span>Hide Map</span></div>
          <div class="show-map-button"><span>Show Map</span></div>
          <ul class="map-markers">
            <li class ="marker1">San Salvador, El Salvador</li>
            <li class ="marker2">San Miguel, El Salvador</li>
            <li class ="marker3">Santa Ana, El Salvador</li>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="heading-l">
          <h2> Ofertas de empleo </h2>
        </div>
        <div class="clear"></div>
        <div class="page-top-nav-bar jobpage-nav">
          <div class="mode-panel"> <a class="mode theme_color active  item"><span class="list"></span></a> <a class="mode theme_color item"><span class="cells"></span></a> <a class="mode theme_color item"><span class="table"></span></a> </div>
          <div class="page-sorter">
            <div class="sorter-select">
              <select class="select">
                <option selected="selected" value="Sort By">- Odenar por -</option>
                <option value="Sort Criterion 1">M&aacute;s reciente</option>
                <option value="Sort Criterion 2">M&aacute;s antiguo</option>
                <option value="Sort Criterion 3">Mayor Salario</option>
                <option value="Sort Criterion 3">Menor Salario</option>
              </select>
            </div>
          </div>
          <div class="pager">
              <ul>
              <?php 
              echo $this->Paginator->prev('', array('tag'=>'li', 'escape' => false), null, array('class' => 'prev noactive','tag'=>'li','escape' => false));
              echo $this->Paginator->numbers(array(
                  'separator' => '',
                  'currentClass' => 'active',
                  'tag' => 'li',
              ));
              echo $this->Paginator->next('', array('tag'=>'li'), null, array('class' => 'next noactive','tag'=>'li'));  
              ?>
              </ul>
          </div>
        </div>
        <div class="clear"></div>
        <div id="job-content-fields">
          <div id="list" class="view_mode">
            <?php for ($i=0; $i < count($jobs); $i++) { ?>
            <div class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="link"><a href="<?php echo $this->webroot; ?>jobs/<?php echo $jobs[$i]['Job']['id']; ?>"></a></li>
                  <li class="favorite <?php echo($jobs[$i]['Job']['aplicado'] == 1) ? 'aplicado':'';?>"><a href="#" style="cursor:default !important"></a></li>
                </ul>
              </div>
              <div class="header-fields">
                <?php $timestamp = strtotime($jobs[$i]['Job']['created']); ?>
                <div class="date">
                  <?php  echo date("d", $timestamp); ?>
                  <span><?php echo $meses[date('n', $timestamp)-1]; ?> </span>
                </div>
                <div class="title-company">
                  <div class="title">
                    <a href="<?php echo $this->webroot; ?>Empleos/descripcion/<?php echo $jobs[$i]['Job']['id']; ?>">
                      <?php echo $jobs[$i]['Job']['name']; ?>
                    </a>
                  </div>
                  <div class="company">
                    <?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?>
                  </div>
                </div>
              </div>
              <div class="body-field">
                <div class="teaser">
                  <p>
                    <?php echo htmlspecialchars_decode($jobs[$i]['Job']['content']); ?>
                    <span class="read-more"><a>Leer m&aacute;s</a></span>
                  </p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Puesto: <span><?php echo $jobs[$i]['Job']['name']; ?></span></li>
                  <?php
                  if (isset($jobs[$i]['Industry'][0]['name'])) { ?>
                  <li class="pull-center">Industria: <span><?php echo $jobs[$i]['Industry'][0]['name']; ?></span></li>
                  <?php } 
                  if (isset($jobs[$i]['Experience'][0]['name'])) { ?>
                  <li class="pull-right">Experiencia: <span><?php echo $jobs[$i]['Experience'][0]['name']; ?></span></li>
                  <?php } ?>
                </ul>

                <?php
                
                if (isset($jobs[$i]['Job']['skills']) && strlen(trim($jobs[$i]['Job']['skills'])) > 0) {
                  $pieces = explode(",", $jobs[$i]['Job']['skills']);
                  $total  = count($pieces);
                ?>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Habilidades</h4>
                    <div class="block-content">
                      <?php if ($total <= 3){ ?>
                        <?php for ($z=0; $z < count($pieces); $z++) { ?>
                          <div class = "field roll-with-description hide">
                            <div class = "roll-button"><span></span></div>
                            <div class = "roll-field">
                              <div class = "label"><?php echo $pieces[$z]; ?></div>
                              <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                              <div class = "description">...</div>
                            </div>
                          </div>
                        <?php } ?>
                      <?php }else{ ?>
                        <?php for ($a=0; $a < 3; $a++) { ?>
                          <div class = "field roll-with-description hide">
                              <div class = "roll-button"><span></span></div>
                              <div class = "roll-field">
                                <div class = "label"><?php echo $pieces[$a]; ?></div>
                                <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                                <div class = "description">...</div>
                              </div>
                            </div>
                          <?php } ?>
                      <?php } ?>
                      
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <?php if($total > 3){ ?>
                        <div class="block">
                          <h4>Requerimientos Adicionales</h4>
                          <div class="block-content">
                                <?php for ($x=3; $x < count($pieces) ; $x++) { ?>
                                  <div class = "tag-field"><?php echo $pieces[$x]; ?></div>
                                <?php } ?>
                          </div>
                          <!-- Cleaner -->
                          <div class="clear"></div>
                          <!-- /Cleaner --> 
                        </div>
                  <?php } ?>
                </div>
                <?php } 
                //debug($jobs);
                ?>
                <h3>Subir CV</h3>
                <div class="infocontactolistesen<?php echo $jobs[$i]['Job']['id']; ?>" style="display:none">
                    <form action="<?php echo $this->webroot;?>Users/applyajax/<?php echo $jobs[$i]['Job']['id']; ?>" method="post" enctype="multipart/form-data" id="MyUploadFormList<?php echo $jobs[$i]['Job']['id']; ?>">
                        <input name="FileInput" id="FileInputList<?php echo $jobs[$i]['Job']['id']; ?>" type="file" />
                        <input type="hidden" name="job" value="<?php echo $jobs[$i]['Job']['id']; ?>">
                        <input type="submit"  id="submit-btn" value="Upload" class="submitform" formid ="#MyUploadFormList<?php echo $jobs[$i]['Job']['id']; ?> " target="#outputlist<?php echo $jobs[$i]['Job']['id']; ?>" input="#FileInputList<?php echo $jobs[$i]['Job']['id']; ?>"/>
                          <!--<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>-->
                    </form>
                        <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                        <div id="outputlist<?php echo $jobs[$i]['Job']['id']; ?>"></div>
                </div>
                <div class="infocontactolist<?php echo $jobs[$i]['Job']['id']; ?>"></div>
                <?php if ($jobs[$i]['Job']['aplicado'] == 1) { ?>
                  <div class="buttons-field applybtns infobox">
                    <p style="padding:10px" class="infobox">Ya has aplicado a &eacute;sta oferta de empleo.</p>
                  </div>  
                <?php }else{ ?>
                    <div class="buttons-field applybtns">
                      <div class="apply"><a style="cursor:pointer" class="esen" div="infocontactolistesen<?php echo $jobs[$i]['Job']['id']; ?>" job="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar con ESEN</a></div>
                      <div class="full"><a style="cursor:pointer" class="directamente" div="infocontactolist<?php echo $jobs[$i]['Job']['id']; ?>" job="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar directamente</a></div>
                    </div>
                <?php }  ?>
              </div>
            </div>
            <?php } ?>
          </div>
          <div id="cells" class="view_mode" style="display: none;">
            <?php for ($i=0; $i < count($jobs); $i++) { ?>
            <div class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="link"><a href="<?php echo $this->webroot; ?>jobs/<?php echo $jobs[$i]['Job']['id']; ?>"></a></li>
                  <li class="favorite <?php echo($jobs[$i]['Job']['aplicado'] == 1) ? 'aplicado':'';?>"><a href="#" style="cursor:default !important"></a></li>
                </ul>
              </div>
              <div class="cells-job-thumb"> <img src="<?php echo $this->webroot; ?>images/job-thumb.jpg"  alt=""/> </div>
              <div class="header-fields">
                <?php
                $timestamp = strtotime($jobs[$i]['Job']['created']);
                ?>
                <div class="date">
                  <?php  echo date("d", $timestamp); ?>
                  <span><?php echo $meses[date('n', $timestamp)-1]; ?> </span>
                </div>
                <div class="title-company">
                  <div class="title"><a href="job.html"><?php echo $jobs[$i]['Job']['name']; ?></a></div>
                  <div class="company"><?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?></div>
                </div>
              </div>
              <div class="body-field">
                <div class="teaser">
                 <p>
                    <?php echo htmlspecialchars_decode($jobs[$i]['Job']['content']); ?>
                    <span class="read-more"><a>Read More</a></span>
                  </p>
                </div>
               <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Puesto: <span><?php echo $jobs[$i]['Job']['name']; ?></span></li>
                  <?php
                  if (isset($jobs[$i]['Industry'][0]['name'])) { ?>
                  <li class="pull-center">Industria: <span><?php echo $jobs[$i]['Industry'][0]['name']; ?></span></li>
                  <?php } 
                  if (isset($jobs[$i]['Experience'][0]['name'])) { ?>
                  <li class="pull-right">Experiencia: <span><?php echo $jobs[$i]['Experience'][0]['name']; ?></span></li>
                  <?php } ?>
                </ul>
                 <?php
                if (isset($jobs[$i]['Job']['skills']) && strlen(trim($jobs[$i]['Job']['skills'])) > 0) {
                  $pieces = explode(",", $jobs[$i]['Job']['skills']);
                  $total  = count($pieces);
                ?>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Habilidades</h4>
                    <div class="block-content">
                      <?php if ($total <= 3){ ?>
                        <?php for ($a=0; $a < count($pieces); $a++) { ?>
                          <div class = "field roll-with-description hide">
                            <div class = "roll-button"><span></span></div>
                            <div class = "roll-field">
                              <div class = "label"><?php echo $pieces[$a]; ?></div>
                              <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                              <div class = "description">...</div>
                            </div>
                          </div>
                        <?php } ?>
                      <?php }else{ ?>
                        <?php for ($a=0; $a < 3; $a++) { ?>
                          <div class = "field roll-with-description hide">
                              <div class = "roll-button"><span></span></div>
                              <div class = "roll-field">
                                <div class = "label"><?php echo $pieces[$a]; ?></div>
                                <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                                <div class = "description">...</div>
                              </div>
                            </div>
                          <?php } ?>
                      <?php } ?>
                      
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                     <?php if($total > 3){ ?>
                        <div class="block">
                          <h4>Requerimientos Adicionales</h4>
                          <div class="block-content">
                                <?php for ($x=3; $x < count($pieces) ; $x++) { ?>
                                  <div class = "tag-field"><?php echo $pieces[$x]; ?></div>
                                <?php } ?>
                          </div>
                          <!-- Cleaner -->
                          <div class="clear"></div>
                          <!-- /Cleaner --> 
                        </div>
                  <?php } ?>
                </div>
                <div class="infocontactocell<?php echo $jobs[$i]['Job']['id']; ?>"></div>
                <?php } ?>
                <div class="infocontactocellesen<?php echo $jobs[$i]['Job']['id']; ?>" style="display:none">
                    <form action="<?php echo $this->webroot;?>Users/applyajax/<?php echo $jobs[$i]['Job']['id']; ?>" method="post" enctype="multipart/form-data" id="MyUploadFormCell<?php echo $jobs[$i]['Job']['id']; ?>">
                        <input name="FileInput" id="FileInputCell<?php echo $jobs[$i]['Job']['id']; ?>" type="file" />
                        <input type="hidden" name="job" value="<?php echo $jobs[$i]['Job']['id']; ?>">
                        <input type="submit"  id="submit-btn" value="Upload" class="submitform" formid ="#MyUploadFormCell<?php echo $jobs[$i]['Job']['id']; ?> " target="#outputcell<?php echo $jobs[$i]['Job']['id']; ?>" id="FileInputCell<?php echo $jobs[$i]['Job']['id']; ?>"/>
                          <!--<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>-->
                    </form>
                        <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                        <div id="outputcell<?php echo $jobs[$i]['Job']['id']; ?>"></div>
                </div>
                <?php if ($jobs[$i]['Job']['aplicado'] == 1) { ?>
                  <div class="buttons-field applybtns infobox">
                    <p style="padding:10px" class="infobox">Ya has aplicado a &eacute;sta oferta de empleo.</p>
                  </div>  
                <?php }else{ ?>
                    <div class="buttons-field applybtns">
                      <div class="apply"><a style="cursor:pointer" class="esen" job="<?php echo $jobs[$i]['Job']['id']; ?>" div="infocontactocellesen<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar con ESEN</a></div>
                       <div class="full"><a style="cursor:pointer" class="directamente" div="infocontactocell<?php echo $jobs[$i]['Job']['id']; ?>" job="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar directamente</a></div>
                    </div>
                <?php }  ?>
              </div>
            </div>
            <?php } ?>
          </div>
          <div id="table" class="view_mode"  style="display: none;">
            <?php for ($i=0; $i < count($jobs); $i++) { ?>
           <div  class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="link"><a href="<?php echo $this->webroot; ?>jobs/<?php echo $jobs[$i]['Job']['id']; ?>"></a></li>
                  <li class="favorite <?php echo($jobs[$i]['Job']['aplicado'] == 1) ? 'aplicado':'';?>"><a href="#" style="cursor:default !important"></a></li>
                </ul>
              </div>
              <div class="header-fields">
                <?php
                $timestamp = strtotime($jobs[$i]['Job']['created']);
                ?>
                <div class="date">
                  <?php  echo date("d", $timestamp); ?>
                  <span><?php echo $meses[date('n', $timestamp)-1]; ?> </span>
                </div>
                <div class="title-company">
                  <div class="title"><a href="job.html"><?php echo $jobs[$i]['Job']['name']; ?></a></div>
                  <div class="company"><?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?></div>
                </div>
              </div>
              <div class="body-field">
                <div class="teaser">
                 <p>
                    <?php echo htmlspecialchars_decode($jobs[$i]['Job']['content']); ?>
                    <span class="read-more"><a>Read More</a></span>
                  </p>
                </div>
                <div class="full-body">
                  <p><?php echo htmlspecialchars_decode($jobs[$i]['Job']['content']); ?></p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Puesto: <span><?php echo $jobs[$i]['Job']['name']; ?></span></li>
                  <?php
                  if (isset($jobs[$i]['Industry'][0]['name'])) { ?>
                  <li class="pull-center">Industria: <span><?php echo $jobs[$i]['Industry'][0]['name']; ?></span></li>
                  <?php } 
                  if (isset($jobs[$i]['Experience'][0]['name'])) { ?>
                  <li class="pull-right">Experiencia: <span><?php echo $jobs[$i]['Experience'][0]['name']; ?></span></li>
                  <?php } ?>
                </ul>
                 <?php
                if (isset($jobs[$i]['Job']['skills']) && strlen(trim($jobs[$i]['Job']['skills'])) > 0) {
                  $pieces = explode(",", $jobs[$i]['Job']['skills']);
                  $total  = count($pieces);
                ?>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Habilidades</h4>
                    <div class="block-content">
                      <?php if ($total <= 3){ ?>
                        <?php for ($h=0; $h < count($pieces); $h++) { ?>
                          <div class = "field roll-with-description hide">
                            <div class = "roll-button"><span></span></div>
                            <div class = "roll-field">
                              <div class = "label"><?php echo $pieces[$h]; ?></div>
                              <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                              <div class = "description">...</div>
                            </div>
                          </div>
                        <?php } ?>
                      <?php }else{ ?>
                        <?php for ($b=0; $b < 3; $b++) { ?>
                          <div class = "field roll-with-description hide">
                              <div class = "roll-button"><span></span></div>
                              <div class = "roll-field">
                                <div class = "label"><?php echo $pieces[$b]; ?></div>
                                <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                                <div class = "description">...</div>
                              </div>
                            </div>
                          <?php } ?>
                      <?php } ?>
                      
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <?php if($total > 3){ ?>
                        <div class="block">
                          <h4>Requerimientos Adicionales</h4>
                          <div class="block-content">
                                <?php for ($x=3; $x < count($pieces) ; $x++) { ?>
                                  <div class = "tag-field"><?php echo $pieces[$x]; ?></div>
                                <?php } ?>
                          </div>
                          <!-- Cleaner -->
                          <div class="clear"></div>
                          <!-- /Cleaner --> 
                        </div>
                  <?php } ?>
                </div>
                <?php } ?>
                <div class="infocontactotable<?php echo $jobs[$i]['Job']['id']; ?>"></div>


                 <div class="infocontactotableesen<?php echo $jobs[$i]['Job']['id']; ?>" style="display:none">
                    <form action="<?php echo $this->webroot;?>Users/applyajax/<?php echo $jobs[$i]['Job']['id']; ?>" method="post" enctype="multipart/form-data" id="MyUploadFormTable<?php echo $jobs[$i]['Job']['id']; ?>">
                        <input name="FileInput" id="FileInputTable<?php echo $jobs[$i]['Job']['id']; ?>" type="file" />
                        <input type="submit"  id="submit-btn" value="Upload" class="submitform" formid ="#MyUploadFormTable<?php echo $jobs[$i]['Job']['id']; ?> " target="#outputtable<?php echo $jobs[$i]['Job']['id']; ?>" input="FileInputTable<?php echo $jobs[$i]['Job']['id']; ?>"/>
                        <input type="hidden" name="job" value="<?php echo $jobs[$i]['Job']['id']; ?>">
                          <!--<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>-->
                    </form>
                        <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                        <div id="outputtable<?php echo $jobs[$i]['Job']['id']; ?>"></div>
                </div>

                <?php if ($jobs[$i]['Job']['aplicado'] == 1) { ?>
                  <div class="buttons-field applybtns infobox">
                    <p style="padding:10px" class="infobox">Ya has aplicado a &eacute;sta oferta de empleo.</p>
                  </div>  
                <?php }else{ ?>
                    <div class="buttons-field applybtns">
                      <div class="apply"><a class="esen" style="cursor:pointer" div="infocontactotableesen<?php echo $jobs[$i]['Job']['id']; ?>" job="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar con ESEN</a></div>
                      <div class="full"><a class="directamente" style="cursor:pointer" div="infocontactotable<?php echo $jobs[$i]['Job']['id']; ?>" job="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar directamente</a></div>
                    </div>
                <?php }  ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="clear"></div>
        <div class="job-page-bot-nav-bar">
          <p>
          <?php
          echo $this->Paginator->counter(array(
          'format' => __('Página {:page} de {:pages}, mostrando {:current} resultados de un total de {:count}, comenzando en {:start}, y terminando en {:end}')
          ));
          ?>  </p>
          <div class="pager">
            <ul>
            <?php 
            echo $this->Paginator->prev('', array('tag'=>'li', 'escape' => false), null, array('class' => 'prev noactive','tag'=>'li','escape' => false));
            echo $this->Paginator->numbers(array(
                'separator' => '',
                'currentClass' => 'active',
                'tag' => 'li',
            ));
            echo $this->Paginator->next('', array('tag'=>'li'), null, array('class' => 'next noactive','tag'=>'li')); 
            ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- /Content Center -->
      
      <div class="clear"></div>
      <!-- Clear Line --> 
      
    </div>
    <!-- /Content Inner --> 
    
  </div>
</div>
<!-- /Content --> 

<script>
$('.directamente').click(function(event) {
  /* Act on the event */
  var userid = '<?php echo $current_user["id"]; ?>';
  var jobid  = $(this).attr('job');
  var div    = $(this).attr('div');
  console.log(userid);
  $.ajax({
    url: '<?php echo $this->webroot; ?>Users/applydirectly',
    type: 'POST',
    data: {id: userid, job: jobid},
  })
  .done(function(response) {
    $('.'+div).html(response);
    //console.log(response);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});

</script>

<script>
$('.esen').click(function(event) {
  /* Act on the event */
  var userid = '<?php echo $current_user["id"]; ?>';
  var jobid  = $(this).attr('job');
  var div    = $(this).attr('div');
  $('.'+div).show();
});

</script>

<script>
$('.submitesen').click(function(event) {
  /* Act on the event */
  event.preventDefault();
  var idform = $(this).attr('formid');
  console.log($("form").serialize());
});

</script>

<script type="text/javascript">
$(document).ready(function() { 


$('.submitform').click(function(event) {
  //event.preventDefault();
  var form   = $(this).attr('formid');
  var target = $(this).attr('target');
  var input  = $(this).attr('input');

  var options = { 
      target:   target,   // target element(s) to be updated with server response 
      beforeSubmit:  beforeSubmit(target, input),  // pre-submit callback 
      success:       afterSuccess,  // post-submit callback 
      uploadProgress: OnProgress, //upload progress callback 
      resetForm: true        // reset the form after successful submit 
    }; 

  $(form).submit(function() { 
      $(this).ajaxSubmit(options);        
      // always return false to prevent standard browser submit and page navigation 
      return false; 
    }); 

});

 

//function after succesful file upload (when server response)
function afterSuccess()
{
  $('#submit-btn').show(); //hide submit button
  $('#loading-img').hide(); //hide submit button
  $('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

}

//function to check file size before uploading.
function beforeSubmit(target, input){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
  {
    
    if( !$(input).val()) //check empty input filed
    {
      $(target).html("Debes de ingresar tu CV para aplicar");
      return false
    }
    
    var fsize = $(input)[0].files[0].size; //get file size
    var ftype = $(input)[0].files[0].type; // get file type
    

    //allow file types 
    switch(ftype)
        {
      /*case 'image/png': 
      case 'image/gif': 
      case 'image/jpeg': 
      case 'image/pjpeg':
      case 'text/plain':
      case 'text/html':
      case 'application/x-zip-compressed':*/
      case 'application/pdf':
      case 'application/msword':
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
      /*case 'application/vnd.ms-excel':
      case 'video/mp4':*/
                break;
            default:
                $(target).html("<b>"+ftype+"</b> extensión no soportada!");
        return false
        }
    
    //Allowed file size is less than 5 MB (1048576)
    if(fsize>5242880) 
    {
      $(target).html("<b>"+bytesToSize(fsize) +"</b> Archivo demasiado grande! <br />Utilizar un archivo de menos de 5MB.");
      return false
    }
        
    $('#submit-btn').hide(); //hide submit button
    $('#loading-img').show(); //hide submit button
    $(target).html("");  
  }
  else
  {
    //Output error to older unsupported browsers that doesn't support HTML5 File API
    $(target).html("Please upgrade your browser, because your current browser lacks some new features we need!");
    return false;
  }
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
  $('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>