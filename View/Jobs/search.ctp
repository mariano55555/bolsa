<script>
$(document).ready(function() {
  $("li.active").wrapInner("<a href='#'></a>");
  $("li.active a").css( "text-decoration", "none" );
  $("li.active a").css( "cursor", "default" );
});

</script>
<style>
  span.next a{
    background: url("images/pager-sprite.png") no-repeat scroll -19px 0px rgb(230, 230, 230);
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


</style>

<?php
$menu = array('Inicio'=>'Inicio','Empleos'=>'Empleos','Empresas'=>'Empresas','Contáctanos'=>'Contactanos');
echo $this->Elements->Menu($menu, '#'); 
?>


<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner">Ofertas de empleo<span id="jobs-counter">(<?php echo $totaltrabajos; ?>)</span>
      <ul class="breadcrumb-inner">
        <li> <a href="<?php echo $this->webroot; ?>Inicio">Inicio</a></li>
        <li> <a href="<?php echo $this->webroot; ?>Empleos">Empleos</a></li>
        <li> <a href="#"><?php echo $seccion; ?></a></li>
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
                      if ($seccion == "ciudad") {
                      	
                      		if (count($ciudades) <= 4) {
		                          foreach ($ciudades as $ciudad) { ?>
		                            <li>
		                            	<a href="<?php echo $this->webroot; ?>Empleos"><?php echo $ciudad['nombre']; ?><span>(remover)</span></a></li>
		                    <?php }
		                       }else{
		                          $i = 1;
		                           foreach ($ciudades as $ciudad) { 
		                                if ($i <= 4) { ?>
		                                   <li><a href="<?php echo $this->webroot; ?>Empleos"><?php echo $ciudad['nombre']; ?><span>(remover)</span></a></li>
		                               <?php }
		                            $i++;
		                          }
		                      } 
                      }else{
                      		if (count($ciudades) <= 4) {
		                          foreach ($ciudades as $ciudad) { ?>
		                            <li>
		                            	<a href="<?php echo $this->webroot; ?>filtrar/ciudad/<?php echo $ciudad['id']; ?>"><?php echo $ciudad['nombre']; ?><span>(<?php echo $ciudad['cantidad']; ?>)</span></a></li>
		                    <?php }
		                       }else{
		                          $i = 1;
		                           foreach ($ciudades as $ciudad) { 
		                                if ($i <= 4) { ?>
		                                   <li><a href="<?php echo $this->webroot; ?>filtrar/ciudad/<?php echo $ciudad['id']; ?>"><?php echo $ciudad['nombre']; ?><span>(<?php echo $ciudad['cantidad']; ?>)</span></a></li>
		                               <?php }
		                            $i++;
		                          }
		                      } 
                      }
                      ?>
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
                  <!--<div id="saved-search-select">
                    <select class="select">
                      <option selected="selected" value="No Searches Saved Yet">No hay b&uacute;squedas guardadas</option>
                    </select>
                    <a href="#">Guardar mi b&uacute;squeda</a> </div>-->
                </div>
              </div>
              <input type="submit" value="Buscar" id="filter-job-page-submit"/>
            </form>
        </div>

        <!--COLOCAR UN BANNER ACA -->
        <!--<div id="advertising" class="block border">
          <div class="block-content"> <img src="images/sb-ad.jpg"  alt="banner ad"/> 
            <div class="advertising-test">300x250<br/>
              Ad Banner</div>
          </div>
        </div>-->
      </div>
      <!-- /Content Left --> 
      
      <!-- Content Center -->
      <div class="content-center">
        <div id="map-container">
          <div id="job-page-map" class="map"></div>
          <div class="hide-map-button"><span>Hide Map</span></div>
          <div class="show-map-button"><span>Show Map</span></div>
          <ul class="map-markers">
            <li class ="marker1">New York City, United States</li>
            <li class ="marker2">Brooklyn, United States</li>
            <li class ="marker3">Newark, United States</li>
            <li class ="marker4">Queens, United States</li>
            <li class ="marker5">Bayonne, United States</li>
            <li class ="marker6">Mineola, United States</li>
            <li class ="marker7">Kearny, United States</li>
            <li class ="marker8">Secaucus, United States</li>
            <li class ="marker9">Bronx, United States</li>
            <li class ="marker10">Linden, United States</li>
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
              echo $this->Paginator->prev('<a></a>', array('tag'=>'li', 'escape' => false), null, array('class' => 'prev noactive','tag'=>'li','escape' => false));
              echo $this->Paginator->numbers(array(
                  'separator' => '',
                  'currentClass' => 'active',
                  'tag' => 'li',
              ));
              echo $this->Paginator->next('', array('tag'=>'li'), null, array('class' => 'next disabled noactive','tag'=>'li'));  
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
                  <li class="favorite"><a href="#"></a></li>
                  <li class="link"><a href="<?php echo $this->webroot; ?>jobs/<?php echo $jobs[$i]['Job']['id']; ?>"></a></li>
                </ul>
              </div>
              <div class="header-fields">
                <div class="date">27<span>Jun</span></div>
                <div class="title-company">
                  <div class="title"><a href="job.html"><?php echo $jobs[$i]['Job']['name']; ?></a></div>
                  <div class="company"><?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?></div>
                </div>
                <ul class="social_media_icons job">
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin-square"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-pinterest"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                </ul>
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
                  <?php echo "aca la condicional"; ?>
                </div>
                <?php } 
                //debug($jobs);
                ?>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="<?php echo $this->webroot; ?>users/apply/<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar</a></div>
                  <div class="full"><a href="<?php echo $this->webroot; ?>users/apply/<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar</a></div>
                </div>
              </div>
            </div>
  
            <?php
            }
            ?>
          </div>
          <div id="cells" class="view_mode" style="display: none;">
            <?php for ($i=0; $i < count($jobs) ; $i++) { ?>
            <div class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="favorite"><a href="#"></a></li>
                  <li class="link"><a href="job.html"></a></li>
                </ul>
              </div>
              <div class="cells-job-thumb"> <img src="<?php echo $this->webroot; ?>images/job-thumb.jpg"  alt=""/> </div>
              <div class="header-fields">
                <div class="date">27<span>Jun</span></div>
                <div class="title-company">
                  <div class="title"><a href="job.html"><?php echo $jobs[$i]['Job']['name']; ?></a></div>
                  <div class="company"><?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?></div>
                </div>
                <ul class="social_media_icons job">
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin-square"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-pinterest"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                </ul>
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
                    <?php echo "aca la condicional 501"; ?>
                </div>
                <?php } ?>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="<?php echo $this->webroot; ?>users/apply/<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar</a></div>
                  <div class="full"><a href="<?php echo $this->webroot; ?>users/apply/<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar</a></div>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
          <div id="table" class="view_mode"  style="display: none;">
            <?php for ($i=0; $i < count($jobs) ; $i++) { ?>
            <div  class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="favorite"><a href="#"></a></li>
                  <li class="link"><a href="job.html"></a></li>
                </ul>
              </div>
              <div class="header-fields">
                <div class="date">27<span>Jun</span></div>
                <div class="title-company">
                   <div class="title"><a href="job.html"><?php echo $jobs[$i]['Job']['name']; ?></a></div>
                  <div class="company"><?php echo $jobs[$i]['Company']['name']; ?> - <?php echo $jobs[$i]['City']['name'].', '.$jobs[$i]['Country']['name']; ?></div>
                </div>
                <ul class="social_media_icons job">
                  <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin-square"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-pinterest"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                </ul>
              </div>
              <div class="body-field">
                <div class="teaser">
                 <?php echo htmlspecialchars_decode($jobs[$i]['Job']['content']); ?>
                    <span class="read-more"><a>Read More</a></span>
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
                        <?php for ($i=0; $i < count($pieces); $i++) { ?>
                          <div class = "field roll-with-description hide">
                            <div class = "roll-button"><span></span></div>
                            <div class = "roll-field">
                              <div class = "label"><?php echo $pieces[$i]; ?></div>
                              <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                              <div class = "description">...</div>
                            </div>
                          </div>
                        <?php } ?>
                      <?php }else{ ?>
                        <?php for ($i=0; $i < 3; $i++) { ?>
                          <div class = "field roll-with-description hide">
                              <div class = "roll-button"><span></span></div>
                              <div class = "roll-field">
                                <div class = "label"><?php echo $pieces[$i]; ?></div>
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
                          <h4>Additional Requirements</h4>
                          <div class="block-content">
                            <?php for ($i=3; $i < count($pieces) ; $i++) { ?>
                                <div class = "tag-field"><?php echo $pieces[$i]; ?></div>
                            <?php } ?>
                          </div>
                          <!-- Cleaner -->
                          <div class="clear"></div>
                          <!-- /Cleaner --> 
                        </div>
                  <?php } ?>
                </div>
                <?php } ?>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="<?php echo $jobs[$i]['Job']['id']; ?>">Aplicar</a></div>
                  <div class="full"><a href="#">Aplicar</a></div>
                </div>
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
            echo $this->Paginator->prev('<a></a>', array('tag'=>'li', 'escape' => false), null, array('class' => 'prev noactive','tag'=>'li','escape' => false));
            echo $this->Paginator->numbers(array(
                'separator' => '',
                'currentClass' => 'active',
                'tag' => 'li',
            ));
            echo $this->Paginator->next('', array('tag'=>'li'), null, array('class' => 'next disabled noactive','tag'=>'li')); 
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