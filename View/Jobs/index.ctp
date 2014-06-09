<?php 
//debug($jobs);
?>
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

<!-- Header -->
<div id="header">
  <div class="inner"> 
    <!-- Logo -->
    <div id="logo"> <a href="index.html"><img src="<?php echo $this->webroot; ?>img/esen_header.png"   alt="logo"/></a><a class="menu-hider"></a></div>
    <!-- /Logo -->
    <ul id="navigation">
      <li> <a href="index.html">Home</a></li>
      <li class="first expanded current"><a href="jobs.html">Jobs</a>
        <ul class="submenu">
          <li><a href="jobs.html">Job listing</a></li>
          <li><a href="job.html">Job Details</a></li>
        </ul>
      </li>
      <li class="first expanded"><a href="candidates-listing.html">Candidates</a>
        <ul class="submenu">
          <li><a href="candidates-listing.html">Candidate Listing (with sidebar)</a></li>
          <li><a href="candidates-listing-no-sidebar.html">Candidate listing (without)</a></li>
          <li><a href="candidate.html">Candidate</a></li>
        </ul>
      </li>
      <li><a href="partners.html">Partners</a></li>
      <li><a href="about-us.html">About Us</a></li>
      <li><a href="contacts.html">Contact</a></li>
    </ul>
  </div>
</div>
<!-- /Header --> 


<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner">Ofertas de empleo<span id="jobs-counter">(<?php echo $totaltrabajos; ?>)</span>
      <ul class="breadcrumb-inner">
        <li> <a href="index.html">Home</a></li>
        <li> <a href="job.html">Job</a></li>
      </ul>
    </h1>
  </div>
  <div class="inner"> 
    
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Left -->
      <div class="content-left">
        <div id="search-filter" class="block background">
          <h2 class="title-1">Buscar:</h2>
          <div class="block-content">
            <form id="search-job-page" action="http://uouapps.com/careers/post">
              <label>I am looking for a</label>
              <select id="search-select" class="select">
                <option selected="selected" value="Job">Job</option>
                <option value="Something Else 1">Something Else 1</option>
                <option value="Something Else 2">Something Else 2</option>
                <option value="Something Else 3">Something Else 3</option>
              </select>
              <label>in</label>
              <input type="text" placeholder="Location" class="textfield-with-callback"/>
              <input type="text" placeholder="Industry / Role" class="textfield-with-callback"/>
              <input type="submit" value="Search" id="search-job-page-submit"/>
            </form>
          </div>
          <h2 class="title-1">Results Filtering</h2>
          <div class="block-content">
            <div class="filter-category">
              <h3>Por ciudad</h3>
              <div class="filter-content show">
                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <?php
                      foreach ($ciudades as $ciudad) { ?>
                        <li><a href="#"><?php echo $ciudad['nombre']; ?><span>(<?php echo $ciudad['cantidad']; ?>)</span></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                  <div class="minor hide">
                    <ul>
                      <li><a href="#">South America<span>(5834)</span></a></li>
                      <li><a href="#">Oceania<span>(6020)</span></a></li>
                    </ul>
                    <div class="minor-label">See More</div>
                  </div>
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
                      <li><a href="#">Administration<span>(34)</span></a></li>
                      <li><a href="#">Manufacturing<span>(142)</span></a></li>
                      <li><a href="#">Healthcare &amp; Science<span>(67)</span></a></li>
                      <li><a href="#">Media &amp; Creative<span>(24)</span></a></li>
                      <li><a href="#">Transportation<span>(113)</span></a></li>
                    </ul>
                  </div>
                  <div class="minor hide">
                    <ul>
                      <li><a href="#">Administration<span>(34)</span></a></li>
                      <li><a href="#">Manufacturing<span>(142)</span></a></li>
                    </ul>
                    <div class="minor-label">See More</div>
                  </div>
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
                      <li><a href="#">Banking/Finance Jobs<span>(581)</span></a></li>
                      <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                      <li><a href="#">Art/Design/Creative Jobs<span>(176)</span></a></li>
                      <li><a href="#">Customer Service Jobs<span>(334)</span></a></li>
                      <li><a href="#">Education/Training Jobs<span>(180)</span></a></li>
                    </ul>
                  </div>
                  <div class="minor hide">
                    <ul>
                      <li><a href="#">Banking/Finance Jobs<span>(581)</span></a></li>
                      <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                    </ul>
                    <div class="minor-label">See More</div>
                  </div>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>
            <form id="filter-job-page" action="http://uouapps.com/careers/post">
              <div class="filter-category">
                <h3>Tipo de contrato</h3>
                <div class="filter-content">
                  <div class="checkbox-field">
                    <input id="contact_type_choice_1" type="checkbox" value="1"/>
                    <label for="contact_type_choice_1">Full-Time</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="contact_type_choice_2" type="checkbox" value="2"/>
                    <label for="contact_type_choice_2">Part-Time</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="contact_type_choice_3" type="checkbox" value="3"/>
                    <label for="contact_type_choice_3">Freelance</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="contact_type_choice_4" type="checkbox" value="4"/>
                    <label for="contact_type_choice_4">Internship</label>
                  </div>
                </div>
              </div>
              <div class="filter-category">
                <h3>Experiencia laboral</h3>
                <div class="filter-content">
                  <div class="checkbox-field">
                    <input id="experience_choice_1" type="checkbox" value="1"/>
                    <label for="experience_choice_1">All</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_2" type="checkbox" value="2"/>
                    <label for="experience_choice_2">Not Applicable</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_3" type="checkbox" value="3"/>
                    <label for="experience_choice_3">Mid-Senior Level</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_4" type="checkbox" value="4"/>
                    <label for="experience_choice_4">Entry Level</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_5" type="checkbox" value="5"/>
                    <label for="experience_choice_5">Associate</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_6" type="checkbox" value="6"/>
                    <label for="experience_choice_6">Director</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_7" type="checkbox" value="7"/>
                    <label for="experience_choice_7">Internship</label>
                  </div>
                  <div class="checkbox-field">
                    <input id="experience_choice_8" type="checkbox" value="8"/>
                    <label for="experience_choice_8">Executive</label>
                  </div>
                </div>
              </div>
              <div class="filter-category">
                <h3>D&iacute;s publicados</h3>
                <div class="filter-content">
                  <div class="dayprogressbar-mover">
                    <div class="bar"></div>
                    <div class="clear"></div>
                    <div class="begin"> <span class="count">0</span> <span class="label">Days</span> </div>
                    <div class="end"> <span class="count">90</span> <span class="label">Days</span> </div>
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
                    <div class="sepor">to</div>
                    <div class="end">
                      <input class="count" type="text" count="5000" onblur="$(this).removeClass('active')" onfocus="$(this).addClass('active')"/>
                    </div>
                  </div>
                  <div class="clear"></div>
                  <div id="saved-search-select">
                    <select class="select">
                      <option selected="selected" value="No Searches Saved Yet">No Searches Saved Yet</option>
                    </select>
                    <a href="#">Save My Search</a> </div>
                </div>
              </div>
              <input type="submit" value="Search" id="filter-job-page-submit"/>
            </form>
          </div>
        </div>
        <div id="advertising" class="block border">
          <div class="block-content"> <img src="images/sb-ad.jpg"  alt="banner ad"/> 
            <!--<div class="advertising-test">300x250<br/>
              Ad Banner</div>--> 
          </div>
        </div>
      </div>
      <!-- /Content Left --> 
      
      <!-- Content Center -->
      <div class="content-center">
        <div id="map-container">
          <div id="job-page-map" class="map"></div>
          <div class="hide-map-button"><span>Hide Map</span></div>
          <div class="show-map-button"><span>Show Map</span></div>
          <ul class="map-markers">
            <li class="marker1">New York City, United States</li>
            <li class="marker2">Brooklyn, United States</li>
            <li class="marker3">Newark, United States</li>
            <li class="marker4">Queens, United States</li>
            <li class="marker5">Bayonne, United States</li>
            <li class="marker6">Mineola, United States</li>
            <li class="marker7">Kearny, United States</li>
            <li class="marker8">Secaucus, United States</li>
            <li class="marker9">Bronx, United States</li>
            <li class="marker10">Linden, United States</li>
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
                <option selected="selected" value="Sort By">- Sort By -</option>
                <option value="Sort Criterion 1">Sort Criterion 1</option>
                <option value="Sort Criterion 2">Sort Criterion 2</option>
                <option value="Sort Criterion 3">Sort Criterion 3</option>
              </select>
            </div>
          </div>
          <div class="pager">
            <ul>
              <li class="prev noactive"><a></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li class="next"><a href="#"></a></li>
            </ul>
          </div>
          <div class="pager">
          <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('>'), array(), null, array('class' => 'next disabled'));
          ?>
          </div>
        </div>
        <div class="clear"></div>
        <div id="job-content-fields">
          <div id="list" class="view_mode">
            <?php
            for ($i=0; $i < count($jobs) ; $i++) { 
            ?>
            <div class="field-container odd box-1">
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
                  <div class="apply"><a href="#">Aplicar</a></div>
                  <div class="full"><a href="#">Aplicar</a></div>
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
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
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
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
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
          'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
          ));
          ?>  </p>
          <div class="pager">
          <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('>'), array(), null, array('class' => 'next disabled'));
          ?>
          </div>
          <div class="pager">
            <ul>
              <li class="prev noactive"><a></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li class="next"><a href="#"></a></li>
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