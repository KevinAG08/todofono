<?php require ('top.php'); ?>
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Login</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>login</h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4>register</h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form id="login-form" method="post">
                                                <input name="email" id="email" placeholder="Email" type="email" />
                                                <input type="password" name="password" id="password" placeholder="Password" />
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox" />
                                                        <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit"><span>Login</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form id="register-form" method="post">
                                                <input type="text" name="name" id="name" placeholder="Usuario" />
                                                <p class="form-messege" id="name_error"></p>
                                                <input name="email" id="email" placeholder="Email" type="email" />
                                                <p class="form-messege" id="email_error"></p>
                                                <input type="text" name="mobile" id="mobile" type="phone" placeholder="Teléfono" />
                                                <p class="form-messege" id="mobile_error"></p>
                                                <input type="password" name="password" id="password" placeholder="Contraseña" />
                                                <p class="form-messege" id="password_error"></p>
                                                <div class="button-box">
                                                    <button type="button" onclick="user_register()">Register</button>
                                                </div>
                                                <p class="form-messege-success"></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login area end -->

<?php require ('footer.php'); ?>
 