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
            <form class="form-vertical login-form" action="<?php echo $this->webroot; ?>users/login" method="post">
                <!-- Title -->
                <h3 class="form-title">Ingresa a tu cuenta</h3>

                <!-- Input Fields -->
                <div class="form-group">
                    <!--<label for="username">Username:</label>-->
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="data[User][carnet]" class="form-control" id="carnet" placeholder="Carnet" autofocus="autofocus" required/>
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="password">Password:</label>-->
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="data[User][password]" class="form-control" id = "password" placeholder="Password" required />
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
            <form class="form-vertical register-form" action="<?php echo $this->webroot; ?>users/registro" method="post" style="display: none;">
                <!-- Title -->
                <h3 class="form-title">Registro</h3>

                <!-- Input Fields -->
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="data[User][carnet]" id="registrocarnet" class="form-control" placeholder="Carnet" autofocus="autofocus" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="data[User][password]" id="registropassword" class="form-control" placeholder="Password" id="register_password" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-ok"></i>
                        <input type="password" name="data[User][password_confirmation]" id="registrorepasswordconfirmacion" class="form-control" placeholder="Confirmar Password" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-phone"></i>
                        <input type="text" name="data[User][phone]" id="registrophone" class="form-control" placeholder="Teléfono"  required />
                    </div>
                </div>
                <!-- /Input Fields -->

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="back btn btn-default pull-left">
                        <i class="icon-angle-left"></i> Regresar</i>
                    </button>
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Registrar <i class="icon-angle-right"></i>
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
                <form class="form-vertical forgot-password-form hide-default" action="<?php echo $this->webroot; ?>users/restart" method="post">
                    <!-- Input Fields -->
                    <div class="form-group">
                        <!--<label for="email">Email:</label>-->
                        <div class="input-icon">
                            <i class="icon-user"></i>
                            <input type="text" name="data[User][carnet]" id="restartcarnet" class="form-control" placeholder="Ingresar carnet" required/>
                        </div>
                    </div>
                    <!-- /Input Fields -->

                    <button type="submit" class="submit btn btn-default btn-block">
                        Restablecer contrase&ntilde;a
                    </button>
                </form>
                <!-- /Forgot Password Formular -->

                <!-- Shows up if reset-button was clicked -->
                <div class="forgot-password-done">
                    <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                    <span>Felicidades. Tú cuenta ha sido creada</span>
                </div>
            </div> <!-- /.content -->
        </div>
        <!-- /Forgot Password Form -->
    </div>
    <!-- /Login Box -->

    <!-- Footer -->
    <div class="footer">
        <a href="#" class="sign-up">¿No has registrado tu cuenta? <strong>Registrate</strong></a>
    </div>
    <!-- /Footer -->