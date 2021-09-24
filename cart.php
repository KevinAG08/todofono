<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font.awesome.css" />
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/venobox.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
        
        <?php require ('header.php'); ?>

                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Carrito</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <h3 class="cart-page-title">Artículos de su Carrito</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Imagén</th>
                                            <th>Artículo</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Subtotal</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="assets/images/product-image/1.webp" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Modern Smart Phone</a></td>
                                            <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$70.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="assets/images/product-image/2.webp" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Bluetooth Headphone</a></td>
                                            <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$80.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="assets/images/product-image/3.webp" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Smart Music Box</a></td>
                                            <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$90.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continuar Comprando</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Actualizar Carrito</button>
                                            <a href="#">Limpiar Carrito de Compras</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" />
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name" />
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Resumen</h4>
                                    </div>
                                    <h5>Subtotal<span>$260.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                            <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Total del Pedido <span>$260.00</span></h4>
                                    <a href="checkout.html">Finalizar Compra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: Your Address Goes Here.</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                        <p class="mail"><a href="https://demo@example.com"> demo@example.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="payment-mth"><a href="#"><img class="img img-fluid" src="assets/images/icons/payment.png" alt="payment-image"></a></div>
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2021 <strong>Hmart</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
                                            <strong> Codecarnival </strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
</body>

</html>