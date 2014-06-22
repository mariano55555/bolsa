
<!-- Bar -->
<div id="bar">
  <div class="inner"> 
    
    <!-- Language Menu -->
    <ul id="lang-menu">
      <li id="en" class="current" style="color:white;">Bienvenid@ <?php echo $current_user['name']; ?></li>
    </ul>
    <!-- /Language Menu --> 
    
    <!-- User Menu -->
    <ul id="user-menu">
      <li id="login" class="first"><a href="#">Mi cuenta</a></li>
      <li id="bookmarks" class="last"><a href="<?php echo $this->webroot; ?>Users/logout">Salir</a></li>
    </ul>
    <!-- /User Menu --> 
    
  </div>
</div>
<!-- /Bar --> 