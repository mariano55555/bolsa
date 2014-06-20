<!-- Search -->
<div id="search">
  <div class="inner">
    <form id="search-form" action="http://uouapps.com/careers/index.html" class="search-bar-home">
      <div class="seach-head"><img src="<?php echo $this->webroot; ?>images/list-ico.png"  alt=""/><span> I am looking for a</span></div>
      <select id="search-select" class="select">
        <option selected="selected" value="Candidate">Candidate</option>
        <option value="Recruiter">Recruiter</option>
      </select>
      <label class="in">in</label>
      <input type="text" placeholder="Location" class="textfield-with-callback"/>
      <input type="text" placeholder="Industry / Role" class="textfield-with-callback"/>
      <input type="submit" value="Search" id="search-submit" class="pull-right"/>
    </form>
    <div id="more-options"></div>
    <div class="clear"></div>
    <!-- Clear Line -->
    
    <div id="options"></div>
  </div>
</div>
<!-- /Search --> 

<!-- Content -->
<div id="content"> 
  
  <!-- Banner Area -->
  <section class="header-banner"> 
    <div class="inner">
        <!-- Panel 3 -->
        <div id="login-panel">
          <div class="left" style ="width: 100%">
            <div class="first">
              <div class="counter">
                <ul id="counter">
                  <li class="unvis">0</li>
                  <li>7</li>
                  <li class="border"></li>
                  <li>9</li>
                  <li>4</li>
                  <li>5</li>
                </ul>
                <div class="counter-label">Jobs</div>
              </div>
              <div id="find-job-buttom"><a>Register Now</a></div>
            </div>
            <div class="second">
              <div class="form">
                <form id="login-1" action="http://uouapps.com/careers/index.html">
                  <input type="text" placeholder="Email" class="textfield"/>
                  <input type="password" placeholder="Password" class="textfield"/>
                  <input type="submit" value="Sign In" id="login-submit-1"/>
                </form>
                 </div>
              
            </div>
          </div>
          <!--<div class="right">
            <div class="first">
              <div class="badge"></div>
              <div id="post-job-buttom"><a>Post a Job</a></div>
            </div>
            <div class="second">
              <div class="form">
                <form id="login-2" action="http://uouapps.com/careers/index.html">
                  <input type="text" placeholder="Email" class="textfield"/>
                  <input type="password" placeholder="Password" class="textfield"/>
                  <input type="submit" value="Sign In" id="login-submit-2"/>
                </form>
                 </div>
            </div>
          </div>-->
        </div>
        <!-- /Panel 3 --> 
    </div>
    </section>
  <!-- /Banner Area -->  
  <div class="clear"></div>
  
  <div class="inner"> 
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Center -->
      <div class="content-center frontpage">
        <div class="heading-l">
          <h2> Encuentra un empleo </h2>
        </div>
        <div id="explore" class="non-title-border">
          <div class="block-content">
            <ul class="tabs">
              <li class="first"><a href="#map">Mapa</a></li>
              <li><a href="#industry">Industria</a></li>
              <li><a href="#type">Tipo</a></li>
              <li class="last"><a href="#country">Pa&iacute;s</a></li>
            </ul>
            <div id="map" class="box-1">
              <div class="map-wrapper">
              <!--<div class="map-container" id="centerMap"></div>-->
              <div id="container123" style="height: 400px; min-width: 310px; max-width: 800px; margin: 0 auto"></div>
              </div>
              <div class="clear"></div>
              <div class="region-menu">
                <div class="left">
                  <ul>
                    <li><a href="#">El Salvador<span class="count">(1347)</span></a></li>
                    <li><a href="#">Honduras<span class="count">(5834)</span></a></li>
                    <li><a href="#">Belice<span class="count">(14902)</span></a></li>
                    <li><a href="#">Panamá<span class="count">(14902)</span></a></li>
                  </ul>
                </div>
                <div class="left">
                  <ul>
                    <li><a href="#">Guatemala<span class="count">(14902)</span></a></li>
                    <li><a href="#">Nicaragua<span class="count">(14902)</span></a></li>
                    <li><a href="#">Costa Rica<span class="count">(14902)</span></a></li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div id="industry"  class="box-1">
              <div class="scroll-container">
                <div class="left">
                  <h4>Administrative and Support Services</h4>
                  <ul>
                    <li><a href="#">Support Services<span>(34)</span></a></li>
                    <li><a href="#">Consulting Services<span>(142)</span></a></li>
                    <li><a href="#">Customer Service<span>(67)</span></a></li>
                    <li><a href="#">Employment Placement<br/>
                      Agencies/Recruiting<span>(24)</span></a></li>
                    <li><a href="#">Human Resources<span>(113)</span></a></li>
                    <li><a href="#">Legal<span>(27)</span></a></li>
                    <li><a href="#">Administration<span>(57)</span></a></li>
                    <li><a href="#">Contracts/Purchasing<span>(29)</span></a></li>
                    <li><a href="#">Secretarial<span>(22)</span></a></li>
                    <li><a href="#">Security<span>(26)</span></a></li>
                    <li><a href="#">Telemarketing<span>(4)</span></a></li>
                    <li><a href="#">Translation<span>(12)</span></a></li>
                    <li><a href="#">Management<span>(70)</span></a></li>
                    <li><a href="#">Business Support <span>(29)</span></a></li>
                  </ul>
                  <h4>Healthcare and Science</h4>
                  <ul>
                    <li><a href="#">Pharmaceutical<span>(42)</span></a></li>
                    <li><a href="#">Manufacturing<span>(149)</span></a></li>
                    <li><a href="#">Mechanical<span>(28)</span></a></li>
                    <li><a href="#">Technical/Maintenance<span>(40)</span></a></li>
                    <li><a href="#">Lubricants/Greases Blending<span>(10)</span></a></li>
                    <li><a href="#">Textiles<span>(10)</span></a></li>
                    <li><a href="#">Aerospace and Defense<span>(14)</span></a></li>
                  </ul>
                </div>
                <div class="right">
                  <h4>Manufacturing and Industrial</h4>
                  <ul>
                    <li><a href="#">Agriculture/Forestry/Fishing<span>(42)</span></a></li>
                    <li><a href="#">Installation, Maintenance<span>(37)</span></a></li>
                    <li><a href="#">Manufacturing and Production<span>(96)</span></a></li>
                    <li><a href="#">Mining<span>(9)</span></a></li>
                    <li><a href="#">Safety/Environment<span>(21)</span></a></li>
                    <li><a href="#">Industrial<span>(184)</span></a></li>
                    <li><a href="#">Manufacturing<span>(149)</span></a></li>
                    <li><a href="#">Mechanical<span>(28)</span></a></li>
                    <li><a href="#">Technical/Maintenance<span>(40)</span></a></li>
                    <li><a href="#">Lubricants/Greases Blending<span>(10)</span></a></li>
                    <li><a href="#">Textiles<span>(10)</span></a></li>
                    <li><a href="#">Aerospace and Defense<span>(14)</span></a></li>
                  </ul>
                  <h4>Healthcare and Science</h4>
                  <ul>
                    <li><a href="#">Pharmaceutical<span>(42)</span></a></li>
                    <li><a href="#">Manufacturing<span>(149)</span></a></li>
                    <li><a href="#">Mechanical<span>(28)</span></a></li>
                    <li><a href="#">Technical/Maintenance<span>(40)</span></a></li>
                    <li><a href="#">Lubricants/Greases Blending<span>(10)</span></a></li>
                    <li><a href="#">Textiles<span>(10)</span></a></li>
                    <li><a href="#">Aerospace and Defense<span>(14)</span></a></li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
              <div class="external-scroll_y">
                <div class="scroll-element_outer">
                  <div class="scroll-element_size"></div>
                  <div class="scroll-element_inner"></div>
                  <div class="scroll-bar"></div>
                </div>
              </div>
            </div>
            <div id="type"  class="box-1">
              <div class="scroll-container">
                <div class="info">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</p>
                </div>
                <div class="left">
                  <ul>
                    <li><a href="#">Accounting/Banking/Finance Jobs<span>(581)</span></a></li>
                    <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                    <li><a href="#">Art/Design/Creative Jobs<span>(176)</span></a></li>
                    <li><a href="#">Customer Service Jobs<span>(334)</span></a></li>
                    <li><a href="#">Education/Training Jobs<span>(180)</span></a></li>
                    <li><a href="#">Engineering Jobs<span>(978)</span></a></li>
                    <li><a href="#">Healthcare/Medical Jobs<span>(131)</span></a></li>
                    <li><a href="#">Human Resources/Personnel Jobs<span>(318)</span></a></li>
                    <li><a href="#">Law/Legal Jobs<span>(61)</span></a></li>
                    <li><a href="#">Logistics Jobs<span>(144)</span></a></li>
                    <li><a href="#">Management Jobs<span>(743)</span></a></li>
                    <li><a href="#">Law/Legal Jobs<span>(61)</span></a></li>
                    <li><a href="#">Logistics Jobs<span>(144)</span></a></li>
                    <li><a href="#">Management Jobs<span>(743)</span></a></li>
                  </ul>
                </div>
                <div class="right">
                  <ul>
                    <li><a href="#">Marketing/PR Jobs<span>(329)</span></a></li>
                    <li><a href="#">Other Jobs<span>(326)</span></a></li>
                    <li><a href="#">Purchasing/Procurement Jobs<span>(130)</span></a></li>
                    <li><a href="#">Quality Control Jobs<span>(93)</span></a></li>
                    <li><a href="#">Research Jobs<span>(33)</span></a></li>
                    <li><a href="#">Safety Jobs<span>(72)</span></a></li>
                    <li><a href="#">Sales Jobs<span>(1061)</span></a></li>
                    <li><a href="#">Secretarial Jobs<span>(155)</span></a></li>
                    <li><a href="#">Support Services Jobs<span>(744)</span></a></li>
                    <li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
                    <li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
                    <li><a href="#">Support Services Jobs<span>(744)</span></a></li>
                    <li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
                    <li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
              <div class="external-scroll_y">
                <div class="scroll-element_outer">
                  <div class="scroll-element_size"></div>
                  <div class="scroll-element_inner"></div>
                  <div class="scroll-bar"></div>
                </div>
              </div>
            </div>
            <div id="country"  class="box-1">
              <div class="scroll-container">
                 <div class="left">
                     <ul>
                <?php if (isset($parte[0])) { 
                        for ($i=0; $i < count($parte[0]) ; $i++) {  ?>
                   <li>
                      <a href="#">
                        <img src="content/flag-icons/<?php echo $parte[0][$i]['nombre']; ?>.png" alt="Flag" height="24" width="24"/><?php echo $parte[0][$i]['nombre']; ?>
                        <span>(<?php echo $parte[0][$i]['cantidad']; ?>)</span>
                      </a>
                    </li>
                <?php }
                    } 
                  ?>
                   </ul>
                </div>
                <div class="right">
                  <ul>
                <?php if (isset($parte[1])) { 
                        for ($i=0; $i < count($parte[1]) ; $i++) {  ?>
                   <li>
                      <a href="#">
                        <img src="content/flag-icons/<?php echo $parte[1][$i]['nombre']; ?>.png" alt="Flag" height="24" width="24"/><?php echo $parte[1][$i]['nombre']; ?>
                        <span>(<?php echo $parte[1][$i]['cantidad']; ?>)</span>
                      </a>
                    </li>
                <?php }
                    } 
                  ?>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
              <div class="external-scroll_y">
                <div class="scroll-element_outer">
                  <div class="scroll-element_size"></div>
                  <div class="scroll-element_inner"></div>
                  <div class="scroll-bar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="clear"></div>
        <!--Latest Jobs Block-->
        <?php //debug($latest); ?>
        <div id="latest-job">
          <div class="heading-l">
            <h2> Ultimas ofertas de empleo </h2>
          </div>
          <div class="latest-job-wrapper">
            <div class="block-content dott-flexslider box-1">
              <ul class="slides">
                <?php foreach ($latest as $job) { ?>
                    <li>
                      <div class="company-logo">
                        <!--<a href="#"><img src="<?php echo $this->webroot; ?>images/job-thumb.jpg"  alt=""/></a>-->
                        <a href="#"><img src="<?php echo $this->webroot; ?>img/esen_header.png"  alt=""/></a>
                        <div class="nav-buttons">
                          <ul>
                            <li class="search"><a><i class="fa fa-search"></i></a></li>
                            <li class="link"><a href="job.html"><i class="fa fa-link"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="company-text">
                        <div class="title"><a href="#"><?php echo $job['Job']['name']; ?></a>
                          <div class="location"><?php echo $job['City']['name'].', '.$job['City']['country']; ?></div>
                        </div>
                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a href="#">Leer m&aacute;s</a></div>
                      </div>
                    </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <!--/Latest Jobs Block--> 
        <div class="clear"></div>
        <!--Partners Block-->
        <div id="partners">
          <div class="heading-l">
            <h2> Empresas </h2>
          </div>
          <div class="block-content box-1">
            <section class="row-fluid">
              <ul class="partner-list span4">
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
              </ul>
              <ul class="partner-list span4">
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
              </ul>
              <ul class="partner-list span4">
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot; ?>images/client-logo.png"  alt=""/></a></li>
              </ul>
            </section>
          </div>
        </div>
        <!--Partners Block--> 
        <div class="clear"></div>
        <!--Price Table Block-->
        <div class="heading-l">
          <h2> Our Prices </h2>
        </div>
        <div class="block-content ">
          <section class="row-fluid">
            <ul class="price-list span4 box-1">
              <li class="pgk-title title-1">Bronze</li>
              <li class="pgk-price title-2">$ 15</li>
              <li>1 Job Ad</li>
              <li>30 Days</li>
              <li>Standard Positioning</li>
              <li>1 Lorem Ipsum</li>
              <li><a class="btn blue" href="#">Choose</a></li>
            </ul>
            <ul class="price-list span4 box-1">
              <li class="pgk-title title-1">Silver</li>
              <li class="pgk-price title-2">$ 49</li>
              <li>5 Job Ad</li>
              <li>45 Days</li>
              <li>Extandad Positioning</li>
              <li>5 Lorem Ipsum</li>
              <li><a class="btn blue" href="#">Choose</a></li>
            </ul>
            <ul class="price-list span4 box-1">
              <li class="pgk-title title-1">Gold</li>
              <li class="pgk-price title-2">$ 99</li>
              <li>10 Job Ad</li>
              <li>60 Days</li>
              <li>Extra Positioning</li>
              <li>10 Lorem Ipsum</li>
              <li><a class="btn blue" href="#">Choose</a></li>
            </ul>
          </section>
        </div>
        
        <!--Price Table Block--> 
        
      </div>
      <!-- /Content Center --> 
      
      <!-- Content Right -->
      <div class="content-right">
        <div id="social-like" class="block background">
          <h2 class="title-1">Share Us With Your Friends</h2>
          <div class="block-content">
            <div class="social-like linkedin"><a class="like-button" href="#">LinkedIn</a><span class="count">500</span></div>
            <div class="social-like motibu"><a class="like-button" href="#">Motibu</a><span class="count">2.7K</span></div>
            <div class="social-like facebook"><a class="like-button" href="#">Facebook</a><span class="count">1.3K</span></div>
            <div class="social-like twitter"><a class="like-button" href="#">Twitter</a><span class="count">868</span></div>
          </div>
        </div>
        <div id="advertising" class="block border">
          <div class="block-content"> 
          <img src="<?php  echo $this->webroot; ?>images/sb-ad.jpg"  alt="sidebarad"/> 
            
          </div>
        
        </div>
        <div id="poll" class="block background">
          <h2 class="title-1">5 Tips to pass your interview!</h2>
          <!--<iframe width="260" height="150" src="https://www.youtube.com/watch?v=SpbMt7ehgeo" frameborder="0" allowfullscreen></iframe>-->
          <video width="280" height="190" controls>
            <source src="<?php echo $this->webroot; ?>video/intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <!--<div class="ad-wrapper"> <img src="<?php echo $this->webroot; ?>images/sb-video.jpg"  alt="sb-video"/> </div>-->
          <h2 class="title-1">The Poll</h2>
          <div class="block-content">
            <form id="poll-form" action="http://uouapps.com/careers/index.html">
              <ul id="radio-checkbox-list">
                <li>
                  <input id="poll_choice_1" type="radio" name="poll-choice" value="1" />
                  <label for="poll_choice_1" >Definitely Yes</label>
                </li>
                <li>
                  <input id="poll_choice_2" type="radio" name="poll-choice" value="2"/>
                  <label for="poll_choice_2">Rather Yes</label>
                </li>
                <li>
                  <input id="poll_choice_3" type="radio" name="poll-choice" value="3"/>
                  <label for="poll_choice_3">I’m Not Sure</label>
                </li>
                <li>
                  <input id="poll_choice_4" type="radio" name="poll-choice" value="4"/>
                  <label for="poll_choice_4">Rather Not</label>
                </li>
                <li>
                  <input id="poll_choice_5" type="radio" name="poll-choice" value="5" />
                  <label for="poll_choice_5">No Way!</label>
                </li>
              </ul>
              <button class="btn blue">Vote Now</button>
            </form>
          </div>
        </div>
        <div id="google" class="block">
          <div class="block_title"> Ads by Google </div>
          <div class="block_content">
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Content Right -->
      
      <div class="clear"></div>
      <!-- Clear Line --> 
      
    </div>
    <!-- /Content Inner --> 
    
  </div>
</div>
<!-- /Content --> 

<!-- Footer -->
<!--<div id="footer">-->
  <section class="row-fluid">
    <div id="stories" class="block border">
      <div class="inner">
        <section class="row-fluid">
          <section class="span12 storyblock">
            <h2>Historias de &eacute;xito</h2>
            <div class="block-content butt-flexslider">
              <ul class="slides">
                <li class="user-avatar"> <a href="#"><img src="content/users-avatar/user-1.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-4.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-5.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> </li>
                <li class="user-avatar"> <a href="#"><img src="content/users-avatar/user-5.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-4.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-1.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> </li>
                <li class="user-avatar"> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-5.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-4.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-1.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> </li>
                <li class="user-avatar"> <a href="#"> <img src="content/users-avatar/user-1.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-4.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-5.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-2.jpg" alt="User" height="114" width="113"/>
                  <div class="effect"></div>
                  </a> <a href="#"><img src="content/users-avatar/user-3.jpg" alt="User" height="114" width="114"/>
                  <div class="effect"></div>
                  </a> </li>
              </ul>
              <div class="story_block">
                <div class="before"></div>
                <div class="title">Jane’s Success Story</div>
                <div class="text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.
                  Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                  Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus. </div>
                <div class="link">Jane Smithson</div>
                <div class="info"> Company Name: UOU Apps<br/>
                  Job Role: Technology/IT<br/>
                  Date Posted: 17 June 2013 </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </div>
  </section>
<!---</div>-->
<!-- /Footer -->


  <script type="text/javascript">
$(function () {

    /*
    TODO:
    - Check data labels after drilling. Label rank? New positions?
    - Not US Mainland text
    - Separators
    */
//http://code.highcharts.com/mapdata/custom/central-america.js
    var data = Highcharts.geojson(Highcharts.maps['custom/central-america']);
    console.log(data);  
    // Set drilldown pointers
    $.each(data, function (i) {
        this.drilldown = this.properties['hc-key'];
        //this.value = i; // Non-random bogus data
        if (this.name === "El Salvador") {
            this.value = 2;          
        }else if (this.name === "Honduras") {
            this.value = 2;
        }else if (this.name === "Belize") {
            this.value = 2;
        }else if (this.name === "Guatemala") {
            this.value = 2;
        }else if (this.name === "Panama") {
            this.value = 2;
        }else if (this.name === "Nicaragua") {
            this.value = 2;
        }else{
          //Es Costa Rica
            this.value = 2;
        }
    });


    var data1 = [
        {
            "name": "El Salvador",
            "value": 7
        },
        {
            "name": "Belize",
            "value": 7
        },
        {
            "name": "Panama",
            "value": 9
        },
        {
            "name": "Nicaragua",
            "value": 5
        },
        {
            "name": "Honduras",
            "value": 6
        },
        {
            "name": "Costa Rica",
            "value": 8
        },
        {
            "name": "Guatemala",
            "value": 8
        }
    ];


    // Some responsiveness
    var small = $('#container123').width() < 400;

    // Instanciate the map
    $('#container123').highcharts('Map', {
        chart : {
            events: {
                drilldown: function (e) {
                    
                    if (!e.seriesOptions) {
                        var chart = this,
                            mapKey = 'countries/ca/' + e.point.drilldown + '-all';


                        // Show the spinner
                        chart.showLoading('<i class="icon-spinner icon-spin icon-3x"></i>'); // Font Awesome spinner

                        // Handle error, the timeout is cleared on success
                        var fail = setTimeout(function () {
                            if (!Highcharts.maps[mapKey]) {
                                chart.showLoading('<i class="icon-frown"></i> Failed loading ' + e.point.name);

                                fail = setTimeout(function () {
                                    chart.hideLoading();
                                }, 1000);
                            }
                        }, 3000);
                        // Load the drilldown map
                        $.getScript('<?php echo $this->webroot; ?>js/highmaps/maps/' + mapKey + '.js', function () {


                            var data = Highcharts.geojson(Highcharts.maps[mapKey]);
                            console.log(data);
                            // Set a non-random bogus value
                            $.each(data, function (i) {
                              <?php $name = "'La Unión'"; ?>
                              if (this.name === <?php echo $name; ?>) {
                              this.value = 21;
                              }else{
                              this.value = i; 
                              }
                                //this.value = i;
                                console.log(this.value);
                            });

                            // Hide loading and add series
                            chart.hideLoading();
                            clearTimeout(fail);
                            chart.addSeriesAsDrilldown(e.point, {
                                name: e.point.name,
                                data: data,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.name}'
                                }
                            });
                        })
                    }

                    
                    this.setTitle(null, { text: e.point.name });
                },
                drillup: function (e) {
                    this.setTitle(null, { text: 'Centro America' });
                }
            }
        },

        title : {
            text : 'Centro America'
        },

        subtitle: {
            text: 'Centro America',
            floating: true,
            align: 'right',
            y: 50,
            style: {
                fontSize: '16px'
            }
        },

        legend: small ? {} : {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        colorAxis: {
            min: 0,
            minColor: '#E6E7E8',
            maxColor: '#005645'
        },
        
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        plotOptions: {
            map: {
                states: {
                    hover: {
                        color: '#EEDD66'
                    }
                }
            }
        },
        
        series : [{
            data : data,
            name: 'Centro América',
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }], 

        drilldown: {
            //series: drilldownSeries,
            activeDataLabelStyle: {
                color: 'white',
                textDecoration: 'none'
            },
            drillUpButton: {
                relativeTo: 'spacingBox',
                position: {
                    x: 0,
                    y: 60
                }
            }
        }
    });
});
    </script>