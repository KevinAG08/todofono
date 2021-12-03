<?php 
require('top.php');
if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
	?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}

$cart_total=0;

if(isset($_POST['submit'])){
	$address=get_safe_value($con,$_POST['address']);
	$city=get_safe_value($con,$_POST['city']);
	$pincode=get_safe_value($con,$_POST['pincode']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
	$user_id=$_SESSION['USER_ID'];
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['producto_precio'];
		$qty=$val['qty'];
		$cart_total=$cart_total+($price*$qty);
		
	}
	$total_price=$cart_total;
	$payment_status='pendiente';
	if($payment_type=='Recojo / Tienda'){
		$payment_status='Success';
	}
	$order_status='pendiente';
	$added_on=date('Y-m-d h:i:s');
	
	
	mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price')");
	
	$order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['producto_precio'];
		$qty=$val['qty'];
		
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");
	}
	
	unset($_SESSION['cart'])
	?>
	<script>
		window.location.href='thank-you-page.php';
	</script>
	<?php
	
	
	
	
}
?>
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Checkout</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- checkout area start -->
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>Detalles de facturación</h3>
                            <?php 
								$accordion_class='checkout-toggle2';
								if(!isset($_SESSION['USER_LOGIN'])){
								$accordion_class='checkout-toggle2';
							?>
                            <div class="row"> 
                                <form id="login-form" method="post">
                                    <h5>Inicia sesión para proceder su compra</h5>
                                    <div class="checkout-account mb-30px">
                                        <input class="checkout-toggle2 w-auto h-auto" type="checkbox" />
                                        <label>Inicio de sesión / Registrarse</label>
                                    </div>
                                    <div class="checkout-account-toggle open-toggle2 mb-30">
                                        <input name="login_email" id="login_email" placeholder="Email" type="email" />
                                        <p style="color: red;" class="form-messege" id="login_email_error"></p>
                                        <input type="password" name="login_password" id="login_password" placeholder="Password" />
                                        <p style="color: red;" class="form-messege" id="login_password_error"></p>
                                        <button class="btn-hover checkout-btn" type="button" onclick="user_login()">Iniciar sesión</button>
                                    </div>
                                    <p class="form-messege-login"></p>
                                    <br>       
                                </form>
                                <form action="">
                                    <div class="checkout-account-toggle open-toggle2 mb-30">
                                        <input type="text" name="name" id="name" placeholder="Usuario" />
                                        <p class="form-messege" id="name_error"></p>
                                        <input name="email" id="email" placeholder="Email" type="email" />
                                        <p class="form-messege" id="email_error"></p>
                                        <input type="text" name="mobile" id="mobile" type="phone" placeholder="Teléfono" />
                                        <p class="form-messege" id="mobile_error"></p>
                                        <input type="password" name="password" id="password" placeholder="Contraseña" />
                                        <p class="form-messege" id="password_error"></p>
                                        <button class="btn-hover checkout-btn" type="button" onclick="user_register()">register</button>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                            <br>
                            <h5>Información de domicilio</h5>
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>Dirección</label>
                                            <input class="billing-address" placeholder="Número de casa y nombre de la calle" type="text" name="address" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>State / County</label>
                                            <input type="text" name="city" placeholder="State / County" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Postcode / ZIP</label>
                                            <input type="text" name="pincode" placeholder="Postcode / ZIP" required/>
                                        </div>
                                    </div>
                                </div>
                                <h5>Métodos de pago</h5>
                                <div class="input-radio">
                                    <span class="custom-radio"><input  type="radio" value="Pago / Domicilio" name="payment_type" required> Pago / domicilio</span>
                                    <span class="custom-radio"><input type="radio" value="Recojo / Tienda" name="payment_type" required> Recojo / tienda</span>
                                </div>
                                <div class="your-order-area">
                                    <div class="Place-order mt-25">
                                        <input type="submit" name="submit"/>
                                    </div>     
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>Product</li>
                                            <li>Total</li>
                                        </ul>
                                    </div>
                                    <?php
								    $cart_total=0;
										if(isset($_SESSION['cart'])){
										foreach($_SESSION['cart'] as $key=>$val){
											$productArr=get_product($con,'','',$key);
											$pname=$productArr[0]['producto_nombre'];
											$mrp=$productArr[0]['producto_mrp'];
											$price=$productArr[0]['producto_precio'];
											$image=$productArr[0]['producto_imagen'];
											$qty=$val['qty'];
                                            $cart_total=$cart_total+($price*$qty);
									?>
                                    <div class="your-order-middle">
                                        <ul>
                                            <li><span class="order-middle-left"><?php echo $pname?> (X <?php echo $qty?>)</span> <span
                                                class="order-price">S/.<?php echo $qty*$price?></span></li>
                                            
                                        </ul>
                                    </div>
                                    <?php } } ?>
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Shipping</li>
                                            <li>Free shipping</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Total</li>
                                            <li>S/. <?php echo $cart_total?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div id="faq" class="panel-group">
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true">Transferencia bancaria directa</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Envíe un cheque a Nombre de la tienda, Calle de la tienda, Ciudad de la tienda, Estado / condado de la tienda, Código postal de la tienda.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-2" aria-expanded="false" class="collapsed">Cheque pagos</a></h4>
                                                </div>
                                                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Envíe un cheque a Nombre de la tienda, Calle de la tienda, Ciudad de la tienda,
                                                            Estado / condado de la tienda, código postal de la tienda.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-3">Contra reembolso</a></h4>
                                                </div>
                                                <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town,
                                                            Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-25">
                                <a class="btn-hover" href="#">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->

<?php require('footer.php')?>   