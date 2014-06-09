
<!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="<?php echo $this->webroot; ?>img/esen_header.png" alt="" height="40px" width="40px"></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="<?php echo $this->webroot; ?>images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="<?php echo $this->webroot; ?>images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li <?php echo ($this->request->action == "admin_dashboard") ? 'class="active"' :''; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/users/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-list <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "Users" || $this->request->controller == "users" || $this->request->controller == "Accesses" || $this->request->controller == "accesses" || $this->request->controller == "Groups" || $this->request->controller == "groups")) { echo 'nav-active'; } ; ?>">
                    <a href=""><i class="fa fa-file-text"></i> <span>Administraci&oacute;n</span></a>
                    <ul class="sub-menu-list">
                        <li <?php echo ($this->request->controller == "Users" || $this->request->controller == "users") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/users"> Usuarios </a></li>
                        <li <?php echo ($this->request->controller == "Accesses" || $this->request->controller == "accesses") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/accesses"> Accesos </a></li>
                         <li <?php echo ($this->request->controller == "Groups" || $this->request->controller == "groups") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/groups"> Grupos </a></li>
                    </ul>
                </li>
                <li class="menu-list <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "areas" || $this->request->controller == "Areas" || $this->request->controller == "Cities" || $this->request->controller == "cities" || $this->request->controller == "Countries" || $this->request->controller == "countries" || $this->request->controller == "Industries" || $this->request->controller == "industries" || $this->request->controller == "Contracts" || $this->request->controller == "contracts" || $this->request->controller == "Experiences" || $this->request->controller == "experiences" || $this->request->controller == "Subscriptions" || $this->request->controller == "subscriptions" || $this->request->controller == "Tags" || $this->request->controller == "tags")) { echo 'nav-active'; } ; ?>">
                    <a href=""><i class="fa fa-cog"></i> <span>Configuraci&oacute;n</span></a>
                    <ul class="sub-menu-list">
                        <li <?php echo ($this->request->controller == "Areas" || $this->request->controller == "areas") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/areas"> Areas</a></li>
                        <li <?php echo ($this->request->controller == "Countries" ||  $this->request->controller == "countries") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/countries"> paises </a></li>
                        <li <?php echo ($this->request->controller == "Cities" || $this->request->controller == "cities") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/cities"> ciudades </a></li>
                        <li <?php echo ($this->request->controller == "Experiences" || $this->request->controller == "experiences") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/experiences"> Experiencia </a></li>
                        <li <?php echo ($this->request->controller == "Industries" || $this->request->controller == "industries") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/industries"> Industria </a></li>
                        <li <?php echo ($this->request->controller == "Contracts" || $this->request->controller == "contracts") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/contracts"> Contratos </a></li>
                        <li <?php echo ($this->request->controller == "Tags" || $this->request->controller == "tags") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/tags"> Palabras clave </a></li>
                        <li <?php echo ($this->request->controller == "Subscriptions" || $this->request->controller == "subscriptions") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/subscriptions"> Subscripciones </a></li>
                    </ul>
                </li>
                <li class="menu-list <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add" || $this->request->action == "admin_preferences") && ($this->request->controller == "Jobs" || $this->request->controller == "jobs" || $this->request->controller == "Companies" || $this->request->controller == "companies" || $this->request->controller == "Contacts" || $this->request->controller == "contacts")) { echo 'nav-active'; } ; ?>">
                    <a href=""><i class="fa fa-edit"></i> <span>Operaci&oacute;n</span></a>
                    <ul class="sub-menu-list">
                        <li <?php echo ($this->request->controller == "Jobs" || $this->request->controller == "jobs") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/jobs"> Trabajos</a></li>
                        <li <?php echo ($this->request->controller == "Companies" || $this->request->controller == "companies") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/companies"> Empresas </a></li>
                        <li <?php echo ($this->request->controller == "Contacts" || $this->request->controller == "contacts") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/contacts"> Contactos </a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $this->webroot; ?>admin/users/logout"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->