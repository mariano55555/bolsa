<!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="<?php echo $this->webroot; ?>img/clickonfresh_logo.png" alt="" height="40px" width="40px"></a>
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
                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "users" || $this->request->controller == "Users")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/users"><i class="fa fa-user"></i> <span>Users</span></a>
                </li>
                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "Groups" || $this->request->controller == "groups")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/groups"><i class="fa fa-lock"></i> <span>Groups</span></a>
                </li>
                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "categories" || $this->request->controller == "Categories")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/categories"><i class="fa fa-group"></i> <span>Categories</span></a>
                </li>

                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "Products" || $this->request->controller == "products")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/products"><i class="fa fa-shopping-cart"></i> <span>Products</span></a>
                </li>

                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add") && ($this->request->controller == "ContactProductsUsers" || $this->request->controller == "contactproductsusers")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/usersactions"><i class="fa fa-bullhorn"></i> <span>Actions</span></a>
                </li>

                <li <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add" || $this->request->action == "admin_preferences") && ($this->request->controller == "productsusers" || $this->request->controller == "ProductsUsers")) { echo 'class="active"'; } ; ?>>
                    <a href="<?php echo $this->webroot; ?>admin/preferences"><i class="fa fa-list-alt"></i> <span>Preferences</span></a>
                </li>
                 <li class="menu-list <?php if (($this->request->action == "admin_index" || $this->request->action == "admin_view" || $this->request->action == "admin_edit" || $this->request->action == "admin_add" || $this->request->action == "admin_preferences") && ($this->request->controller == "pyagmarknetprices" || $this->request->controller == "PyAgmarknetPrices" || $this->request->controller == "pyusdaprices" || $this->request->controller == "PyUSDAPrices")) { echo 'nav-active'; } ; ?>">
                    <a href=""><i class="fa fa-file-text"></i> <span>Market Prices</span></a>
                    <ul class="sub-menu-list">
                        <li <?php echo ($this->request->controller == "PyAgmarknetPrices") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/PyAgmarknetPrices"> Agmarket Prices</a></li>
                        <li <?php echo ($this->request->controller == "PyUSDAPrices") ? 'class="active"' : ''; ?>><a href="<?php echo $this->webroot; ?>admin/PyUSDAPrices"> USDA Prices </a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $this->webroot; ?>admin/users/logout"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->