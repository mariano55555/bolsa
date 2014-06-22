<style type="text/css" media="screen">
  .mensaje{
   color: #4F8A10;
   background-color:#EDFCED;
   padding:10px;
  } 
</style>
<script>
$(".mensaje").show();
  setTimeout( " $('.mensaje').hide();",3000);
</script>

<?php
$menu = array('Inicio'=>'Inicio','Empleos'=>'Empleos','Empresas'=>'Empresas','Contáctanos'=>'#');
echo $this->Elements->Menu($menu, 'Contáctanos'); 
?> 

<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner title-2">Contactanos
      <ul class="breadcrumb-inner">
        <li> <a href="<?php echo $this->webroot; ?>Inicio">Inicio</a></li>
        <li> <a href="#">Contactanos</a></li>
      </ul>
    </h1>
  </div>




  <div class="inner"> 
    
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Center -->
      <div class="content-center">
             <div id="map-container">
         <?php
              // Override any of the following default options to customize your map
              $map_options123 = array('id' => 'map_canvas', 
                'width' => '605px',
                'height' => '320px',
                //'class'=>"map box-1",
                'style' => '',
                'zoom' => 15,
                'type' => 'ROADMAP',
                'custom' => null,
                'localize' => false,
                'latitude' => 13.655337,
                'longitude' => -89.286099,
                'marker' => true,
                'markerTitle' => 'This is my position',
                'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
                'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
                'infoWindow' => true,
                'windowText' => 'My Position'
              );
            echo $this->GoogleMap->map($map_options123); 
             ?>
        </div>
        <div id="contacts" class="block post-box box-1 contact-address">
          <div class="block-content">
            <div >
              <h3 class="title-3">ESEN</h3>
              <div class="contact-field"><span class="label">Address:</span><span id="first-address" class="count" style="width:70%">Km.12 ½ carretera al Puerto de La Libertad, calle nueva a Comasagua, Santa Tecla La Libertad, El Salvador</span></div>
              <div class="contact-field"><span class="label">Phone:</span><span class="count" style="width:70%">(503) 2234-9292 / 2234-927 </span></div>
              <div class="contact-field"><span class="label">E-mail:</span><span class="count"><a>email@example.com</a></span></div>
              <div class="contact-field"><span class="label">Website:</span><span class="count"><a href="http://www.esen.edu.sv" target ="_blank">www.esen.edu.sv</a></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Content Center --> 
      
      <!-- Content Right -->
      <div class="content-right">
        <div class="block background">
          <h2 class="title-1">Contactanos</h2>
          <div class = "block-content">
            <form id = "contact" action="<?php echo $this->webroot; ?>Jobs/contactanos" method="POST">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
              <?php 
              if (isset($sent)) {
              ?>
              <div class="mensaje">Tu mensaje ha sido enviado. Pronto recibiras asistencia a tu consulta.</div>
              <?php
              }
              ?>
              <div id = "mess">
                <textarea title="Your Message" name="message" cols="30" rows="6" class="textarea" onclick="this.value='';" onfocus="$(this).addClass('active');" onblur="$(this).removeClass('active');" required>¿C&oacute;mo podemos ayudarte?</textarea>
              </div>
              <div id = "send">
                <button class="btn blue">Enviar mensaje</button>
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