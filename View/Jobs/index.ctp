<?php 
debug($cities);
?>

<!-- Header -->
<div id="header">
  <div class="inner"> 
    <!-- Logo -->
    <div id="logo"> <a href="index.html"><img src="images/Logo.png" width="205" height="50"  alt="logo"/></a><a class="menu-hider"></a></div>
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
    <h1 class="inner">Available Jobs<span id="jobs-counter">(350)</span>
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
                      <li class="expanded"> <a>Asia<span>(3218)</span></a>
                        <ul>
                          <li><a href="#">Iraq<span>(834)</span></a></li>
                          <li class="expanded"> <a>Jordan<span>(15218)</span></a>
                            <ul>
                              <li><a href="#">Ajloun<span>(834)</span></a></li>
                              <li><a href="#">Irbid<span>(15218)</span></a></li>
                              <li><a href="#">Jerash<span>(834)</span></a></li>
                            </ul>
                          </li>
                          <li><a href="#">Saudi Arabia<span>(14902)</span></a></li>
                        </ul>
                      </li>
                      <li><a href="#">Africa<span>(834)</span></a></li>
                      <li><a href="#">Europe<span>(15218)</span></a></li>
                      <li><a href="#">North America<span>(14902)</span></a></li>
                      <li><a href="#">Central America<span>(1347)</span></a></li>
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
          <h2> Available Jobs </h2>
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
        </div>
        <div class="clear"></div>
        <div id="job-content-fields">
          <div id="list" class="view_mode">
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
          </div>
          <div id="cells" class="view_mode" style="display: none;">
            <div class="field-container odd box-1">
              <div class="nav-buttons">
                <ul>
                  <li class="show-hide"><a></a></li>
                  <li class="favorite"><a href="#"></a></li>
                  <li class="link"><a href="job.html"></a></li>
                </ul>
              </div>
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
              <div class="header-fields">
                <div class="date">27<span>Jun</span></div>
                <div class="title-company">
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="field-container odd box-1">
              <div class="cells-job-thumb"> <img src="images/job-thumb.jpg"  alt=""/> </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
          </div>
          <div id="table" class="view_mode"  style="display: none;">
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
            <div class="jab-ad-banner"> <img src="images/banner-ad.png"  alt="ad banner"/> </div>
            <div class="clear"></div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
            <div class="jab-ad-banner"> <img src="images/banner-ad.png"  alt="ad banner"/> </div>
            <div class="clear"></div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
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
                  <div class="title"><a href="job.html">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block-fields">
                  <div class="block skills">
                    <h4>Required Skills</h4>
                    <div class="block-content">
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">5 Years of Experience</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description hide">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">Perfect Written &amp; Spoken English</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                          <div class = "description">...</div>
                        </div>
                      </div>
                      <div class = "field roll-with-description show">
                        <div class = "roll-button"><span></span></div>
                        <div class = "roll-field">
                          <div class = "label">3 Foreign Languages</div>
                          <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                          <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                        </div>
                      </div>
                      <!-- Cleaner -->
                      <div class="clear"></div>
                      <!-- /Cleaner --> 
                    </div>
                  </div>
                  <div class="block">
                    <h4>Additional Requirements</h4>
                    <div class="block-content">
                      <div class = "tag-field">Work Permit</div>
                      <div class = "tag-field">5 Years Experience</div>
                      <div class = "tag-field">MBA</div>
                      <div class = "tag-field">Magento Certified</div>
                      <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="buttons-field applybtns">
                  <div class="apply"><a href="#">Apply for This Job</a></div>
                  <div class="full"><a href="#">Apply On MotibU</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="job-page-bot-nav-bar">
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