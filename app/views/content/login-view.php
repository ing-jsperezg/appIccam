<div class="authentication">
    <div class="container">
        <form action="<?php echo _appURL;?>home">
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <a href="<?php echo _appURL;?>login" class="login-logo">
                                <img src="<?php echo _appURL;?>app/views/img/logo.svg" alt="Bootstrap Gallery">
                            </a>
                            <h5>Bienvenido nuevamente,<br />Por favor ingresa los datos de acceso a tu cuenta.</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre de usuario" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" />
                            </div>
                            <div class="actions mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember_pwd">
                        <!--        <label class="custom-control-label" for="remember_pwd">Remember me</label> -->
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        <!-- 
                            <div class="forgot-pwd">
                                <a class="link" href="forgot-pwd.html">Forgot password?</a>
                            </div>
                            <hr>
                            <div class="actions align-left">
                                <a href="signup.html" class="btn btn-info ml-0">Create an Account</a>
                            </div>
                         -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container end -->
</div>