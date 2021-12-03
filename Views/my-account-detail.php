<?php require ('top.php'); 
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$order_id=get_safe_value($con,$_GET['id']);
?>
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Account</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Account</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- account area start -->
        <div class="account-dashboard pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                
                                <li><a href="#address" data-bs-toggle="tab" class="nav-link">Detalle del Pedido</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                            
                           
                            <div class="tab-pane fade show active" data-aos="fade-up" data-aos-delay="200" id="address">

                                <h5 class="billing-address">Detalle del Pedido</h5>
                                
                                <?php
									$uid=$_SESSION['USER_ID'];
									$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,producto.producto_nombre,producto.producto_imagen from order_detail,producto ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=producto.id_producto");
									$total_price=0;
									while($row=mysqli_fetch_assoc($res)){
									$total_price=$total_price+($row['qty']*$row['price']);
								?>
                                <p class="mb-2"><strong><?php echo $row['producto_nombre']?></strong></p>
                                <address>
                                    <span class="mb-1 d-inline-block"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['producto_imagen']?>"></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Cantidad:</strong> <?php echo $row['qty']?></span>,
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Precio Unitario:</strong> S/. <?php echo $row['price']?></span>,
                                    <br>
                                    <span><strong>Subtotal:</strong> S/. <?php echo $row['qty']*$row['price']?></span>
                                </address>
                                
                                <?php } ?>
                            </div>
                            <h3><strong>Precio Total del  Pedido:</strong> S/. <?php echo $total_price?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account area start -->


<?php require ('footer.php'); ?>