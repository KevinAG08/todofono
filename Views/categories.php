<?php require('top.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_product=get_product($con,'',$cat_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
        <!-- OffCanvas Menu End -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Tienda</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="V_index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Tienda</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                <?php if(count($get_product)>0){?>
                    <div class="col-md-12">
                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar d-flex">
                            <p class="compare-product"> <span>12</span> Productos Encontrados de <span>30</span></p>
                            <!-- Left Side End -->
                            <div class="shop-tab nav">
                                <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </button>
                                <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Ordenar:</p>
                                </div>
                                <!-- Single Wedge End -->
                                <div class="header-bottom-set dropdown">
                                    <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Defecto <i class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                        <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                        <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                        <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                    </ul>
                                </div>
                                <!-- Single Wedge Start -->
                            </div>
                            <!-- Right Side End -->
                        </div>
                        <!-- Shop Top Area End -->
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="shop-grid">
                                            <div class="row mb-n-30px">
                                                <?php
										        foreach($get_product as $list){
										        ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        
                                                        <div class="thumb">
                                                            <a href="single-product.php?id=<?php echo $list['id_producto']?>" class="image">
                                                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['producto_imagen']?>" alt="Product" />
                                                                <img class="hover-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['producto_imagen']?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#"><?php echo $list['id_categoria']?></a></span>
                                                            <h5 class="title"><a href="single-product.php?id=<?php echo $list['id_producto']?>"><?php echo $list['producto_nombre']?>
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="old"><?php echo $list['producto_mrp']?></span>
                                                            <span class="new"><?php echo $list['producto_precio']?></span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade mb-n-30px" id="shop-list">
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone </a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">Sale</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Music Box</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/4.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/5.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Hand Watch</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/7.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/7.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Table Camera</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/8.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Round Pocket Router</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$58.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">Sale</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone </a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/6.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/7.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Music Box</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Añadir al Carrito" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    <ul>
                                        <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="li"><a class="page-link" href="#">1</a></li>
                                        <li class="li"><a class="page-link active" href="#">2</a></li>
                                        <li class="li"><a class="page-link" href="#">3</a></li>
                                        <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Shop Bottom Area End -->
                    </div>
                <?php } else { 
					echo "No se encontraron resultados";
				} ?>
                </div>
            </div>
        </div>
        <!-- Shop Page End  -->
    

<?php require('footer.php')?>   


