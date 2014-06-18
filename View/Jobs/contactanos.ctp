<!-- Header -->
<div id="header">
  <div class="inner"> 
    <!-- Logo -->
    <div id="logo"> <a href="index.html"><img src="<?php echo $this->webroot; ?>img/esen_header.png"   alt="logo"/></a><a class="menu-hider"></a></div>
    <!-- /Logo -->
    <ul id="navigation">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="jobs.html">Empleos</a></li>
      <li><a href="candidates-listing.html">Candidatos</a></li>
      <li class="current"><a href="#">Contactanos</a></li>
    </ul>
  </div>
</div>
<!-- /Header --> 

<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner title-2">Contact Us
      <ul class="breadcrumb-inner">
        <li> <a href="index.html">Home</a></li>
        <li> <a href="contacts.html">Contact Us</a></li>
      </ul>
    </h1>
  </div>
  <div class="inner"> 
    
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Center -->
      <div class="content-center">
        <div id="map-container">
          <div id="contact-map" class="map box-1"></div>
        </div>
        <div id="contacts" class="block post-box box-1 contact-address">
          <div class="block-content">
            <div class="left">
              <h3 class="title-3">Headquarters</h3>
              <div class="contact-field"><span class="label">Address:</span><span id="first-address" class="count">New York City, United States</span></div>
              <div class="contact-field"><span class="label">Phone:</span><span class="count">+1 123-456-7890</span></div>
              <div class="contact-field"><span class="label">E-mail:</span><span class="count"><a>email@example.com</a></span></div>
              <div class="contact-field"><span class="label">Website:</span><span class="count"><a>www.example.com</a></span></div>
            </div>
            <div class="right">
              <h3 class="title-3">Secondary Office</h3>
              <div class="contact-field"><span class="label">Address:</span><span id="second-address" class="count">Brooklyn, United States</span></div>
              <div class="contact-field"><span class="label">Phone:</span><span class="count">+1 123-456-7890</span></div>
              <div class="contact-field"><span class="label">E-mail:</span><span class="count"><a>email@example.com</a></span></div>
              <div class="contact-field"><span class="label">Website:</span><span class="count"><a>www.example.com</a></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Content Center --> 
      
      <!-- Content Right -->
      <div class="content-right">
        <div class="block background">
          <h2 class="title-1">Send Us a Message</h2>
          <div class = "block-content">
            <form id = "contact" action="http://uouapps.com/careers/post">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
              <div id = "about">
                <input title="Your Name" type="text" name="name" class="textfield" placeholder="Name"/>
                <input title="Your E-Mail" type="text" name="email" class="textfield" placeholder="E-mail"/>
                <input title="Your WebSite" type="text" name="website" class="textfield" placeholder="WebSite"/>
              </div>
              <div id = "mess">
                <textarea title="Your Message" name="message" cols="30" rows="6" class="textarea" onclick="this.value='';" onfocus="$(this).addClass('active');" onblur="$(this).removeClass('active');">How can I help you?</textarea>
              </div>
              <div id = "send">
                <button class="btn blue">Send Message</button>
              </div>
            </form>
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