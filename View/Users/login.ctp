<!-- Logo -->
    <div class="logo">
        <img src="<?php echo $this->webroot; ?>img/esen_header.png" alt="logo" />
        <strong>BOLSA DE
        <strong>TRA</strong>BAJO
    </div>
    <!-- /Logo -->

    <!-- Login Box -->
    <div class="box">
        <div class="content">
            <!-- Login Formular -->
            <form class="form-vertical login-form" action="/jobsearch/users/login" method="post">
                <!-- Title -->
                <h3 class="form-title">Ingresa a tu cuenta</h3>

                <!-- Error Message -->
                <div class="alert fade in alert-danger" style="display: none;">
                    <i class="icon-remove close" data-dismiss="alert"></i>
                    Enter any username and password.
                </div>

                <!-- Input Fields -->
                <div class="form-group">
                    <!--<label for="username">Username:</label>-->
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="data[User][carnet]" class="form-control" placeholder="Carnet" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="password">Password:</label>-->
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="data[User][password]" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
                    </div>
                </div>
                <!-- /Input Fields -->

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Ingresar <i class="icon-angle-right"></i>
                    </button>
                </div>
            </form>
            <!-- /Login Formular -->

            <!-- Register Formular (hidden by default) -->
            <form class="form-vertical register-form" action="index.html" method="post" style="display: none;">
                <!-- Title -->
                <h3 class="form-title">Sign Up for Free</h3>

                <!-- Input Fields -->
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="register_password" data-rule-required="true" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-ok"></i>
                        <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" data-rule-required="true" data-rule-equalTo="#register_password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-envelope"></i>
                        <input type="text" name="Email" class="form-control" placeholder="Email address" data-rule-required="true" data-rule-email="true" />
                    </div>
                </div>
                <div class="form-group spacing-top">
                    <label class="checkbox"><input type="checkbox" class="uniform" name="remember" data-rule-required="true" data-msg-required="Please accept ToS first."> I agree to the <a href="javascript:void(0);">Terms of Service</a></label>
                    <label for="remember" class="has-error help-block" generated="true" style="display:none;"></label>
                </div>
                <!-- /Input Fields -->

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="back btn btn-default pull-left">
                        <i class="icon-angle-left"></i> Back</i>
                    </button>
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Sign Up <i class="icon-angle-right"></i>
                    </button>
                </div>
            </form>
            <!-- /Register Formular -->
        </div> <!-- /.content -->

        <!-- Forgot Password Form -->
        <div class="inner-box">
            <div class="content">
                <!-- Close Button -->
                <i class="icon-remove close hide-default"></i>

                <!-- Link as Toggle Button -->
                <a href="#" class="forgot-password-link">Restablecer contrase&ntilde;a</a>

                <!-- Forgot Password Formular -->
                <form class="form-vertical forgot-password-form hide-default" action="/jobsearch/users/login" method="post">
                    <!-- Input Fields -->
                    <div class="form-group">
                        <!--<label for="email">Email:</label>-->
                        <div class="input-icon">
                            <i class="icon-envelope"></i>
                            <input type="text" name="email" class="form-control" placeholder="Ingresar correo electrónico" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
                        </div>
                    </div>
                    <!-- /Input Fields -->

                    <button type="submit" class="submit btn btn-default btn-block">
                        Restablecer contrase&ntilde;a
                    </button>
                </form>
                <!-- /Forgot Password Formular -->

                <!-- Shows up if reset-button was clicked -->
                <div class="forgot-password-done hide-default">
                    <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                    <span>Great. We have sent you an email.</span>
                </div>
            </div> <!-- /.content -->
        </div>
        <!-- /Forgot Password Form -->
    </div>
    <!-- /Login Box -->

    <!-- Footer -->
    <div class="footer">
        <a href="#" class="sign-up">Don't have an account yet? <strong>Sign Up</strong></a>
    </div>
    <!-- /Footer -->