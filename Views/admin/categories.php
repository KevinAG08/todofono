<?php require ('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1'; 
		}else{
			$status='0';
		}
		$update_status_sql="update categoria set categoria_estado='$status' where id_categoria='$id'";
		mysqli_query($con,$update_status_sql);
	}
    if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from categoria where id_categoria='$id'";
		mysqli_query($con,$delete_sql);
	}
}
// agregar categorias
if(isset($_POST['submit_add'])){
    $categories=get_safe_value($con,$_POST['categories']);
	mysqli_query($con,"insert into categoria(categoria_nombre,categoria_estado) values('$categories','1')");
	header('location:categories.php');
	die();	
}

$sql="select * from categoria order by id_categoria asc";
$res=mysqli_query($con,$sql);
?>
        <aside class="sidebar">
            <div class="sidebar__backdrop"></div>
            <div class="sidebar__container">
                <div class="sidebar__top">
                    <div class="container container--sm">
                        <a class="sidebar__logo" href="index.html">
                            <div class="sidebar__logo-text">TodoFono</div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__content" data-simplebar="data-simplebar">
                    <nav class="sidebar__nav">
                        <ul class="sidebar__menu">
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="index.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-dashboard">
                        <use xlink:href="#icon-dashboard"></use>
                      </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link active" href="products.html" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="true"><span class="sidebar__link-icon">
                      <svg class="icon-icon-cart">
                        <use xlink:href="#icon-cart"></use>
                      </svg></span><span class="sidebar__link-text">E-Commerce</span><span class="sidebar__link-arrow">
                      <svg class="icon-icon-keyboard-down">
                        <use xlink:href="#icon-keyboard-down"></use>
                      </svg></span></a>
                                <div class="collapse show" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link active" href="categories.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Marcas de Celular</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="products.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Productos</span></a>
                                        </li> 
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="product-add.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Agregar Producto</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="orders.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Orders</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-details.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Details</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-invoice.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Invoice</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-status.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Status</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-notes.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Notes</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customers.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Customers</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-wishlist.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Wish List</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="reviews.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Reviews</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="calendar.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-calendar">
                        <use xlink:href="#icon-calendar"></use>
                      </svg></span><span class="sidebar__link-text">Calendar</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="mail.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-email">
                        <use xlink:href="#icon-email"></use>
                      </svg></span><span class="sidebar__link-text">Mail</span><span class="badge badge--red">20</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="chat.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-chat">
                        <use xlink:href="#icon-chat"></use>
                      </svg></span><span class="sidebar__link-text">Chat</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="contacts.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-contacts">
                        <use xlink:href="#icon-contacts"></use>
                      </svg></span><span class="sidebar__link-text">Contacts</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="todo.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-todo">
                        <use xlink:href="#icon-todo"></use>
                      </svg></span><span class="sidebar__link-text">ToDo</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="file-manager.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-folder">
                        <use xlink:href="#icon-folder"></use>
                      </svg></span><span class="sidebar__link-text">File Manager</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="timeline.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-clock">
                        <use xlink:href="#icon-clock"></use>
                      </svg></span><span class="sidebar__link-text">Timeline</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#Auth" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-password">
                        <use xlink:href="#icon-password"></use>
                      </svg></span><span class="sidebar__link-text">Authentication</span><span class="sidebar__link-arrow">
                      <svg class="icon-icon-keyboard-down">
                        <use xlink:href="#icon-keyboard-down"></use>
                      </svg></span></a>
                                <div class="collapse" id="Auth">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.3</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="404.html" aria-expanded="false"><span class="sidebar__link-icon"></span><span class="sidebar__link-text">404</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="ui-kit.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-settings">
                        <use xlink:href="#icon-settings"></use>
                      </svg></span><span class="sidebar__link-text">UI Kit</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Marcas de Celular</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.html">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled">
                                        <a class="breadcrumbs__link" href="#"><span>E-commerce</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Categorias</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-import">
                        <use xlink:href="#icon-import"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox">
                    <div class="toolbox__row row gutter-bottom-xs">
                        <div class="toolbox__left col-12 col-lg">
                            <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                                <div class="form-group form-group--inline col-12 col-sm-auto">
                                    <label class="form-label">Mostrar</label>
                                    <div class="input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="10" size="1" data-toggle="dropdown" readonly>
                                        <span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                            <a
                                            class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group--inline col col-sm-auto">
                                    <div class="input-group input-group--white input-group--append">
                                        <select class="input js-input-select" data-placeholder="">
                                            <option value="1" selected="selected">All Categories
                                            </option>
                                            <option value="2">MacBook
                                            </option>
                                            <option value="3">Apple Watch
                                            </option>
                                            <option value="4">AirPods
                                            </option>
                                            <option value="5">iPhone
                                            </option>
                                            <option value="6">IPad
                                            </option>
                                        </select>
                                        <span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                            <use xlink:href="#icon-keyboard-down"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
                                    <div class="toolbox__status input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="All status" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                            <use xlink:href="#icon-keyboard-down"></use>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="All status"><span class="marker-item"></span> All status</a>
                                            <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Published"><span class="marker-item color-green"></span> Published</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Deleted"><span class="marker-item color-red"></span> Deleted</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toolbox__right col-12 col-lg-auto">
                            <div class="toolbox__right-row row row--xs flex-nowrap">
                                <div class="col col-lg-auto">
                                    <form class="toolbox__search" method="GET">
                                        <div class="input-group input-group--white input-group--prepend">
                                            <div class="input-group__prepend">
                                                <svg class="icon-icon-search">
                                                    <use xlink:href="#icon-search"></use>
                                                </svg>
                                            </div>
                                            <input class="input" type="text" placeholder="Search product">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <button class="button-add button-add--blue" data-modal="#addProduct">
                                        <span class="button-add__icon">
                                        <svg class="icon-icon-plus">
                                        <use xlink:href="#icon-plus"></use>
                                        </svg>
                                        </span>
                                    <span class="button-add__text"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                        <table class="table table--lines">
                            <colgroup>
                                <col width="90px">
                                    <col width="100px">
                                        <col width="350px">
                                            <col>
                                                <col>
                                                    <col>
                                                        <col>
                                                            <col>
                            </colgroup>
                            <thead class="table__header">
                                <tr class="table__header-row">
                                    <th>
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th class="d-none d-lg-table-cell"><span>#</span>
                                    </th>
                                    <th class="d-none d-lg-table-cell"><span>ID</span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Nombre de Categoria</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i=1;
                                while($row=mysqli_fetch_assoc($res)){?>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product">
                                                <span class="checkbox__marker">
                                                    <span class="checkbox__marker-icon">
                                                        <svg class="icon-icon-checked">
                                                            <use xlink:href="#icon-checked"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#<?php echo $i?></span></td>
                                    <td class="table__td"><?php echo $row['id_categoria']?></td>
                                    <td class="table__td"><span class="text-grey"><?php echo $row['categoria_nombre']?></span></td>
                                    <td class="d-none d-sm-table-cell table__td">
                                        <?php
                                        if ($row['categoria_estado']==1){
                                        echo "<div class='table__status'>
                                        <span class='table__status-icon'><a href='?type=status&operation=deactive&id=".$row['id_categoria']."'>Activado</a></span>";
                                        } else {    
                                            echo "<div class='table__status'><span class='table__status-icon'><a href='?type=status&operation=active&id=".$row['id_categoria']."'>Desactivado</a></span>&nbsp;";
                                            } ?>                  
                                    </td>
                                    
                                    
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    
                                                    <ul class="dropdown-items__list">
                                                    <?php
                                                        echo 
                                                        "<li class='dropdown-items__item'><a class='dropdown-items__link'><span class='dropdown-items__link-icon'>
                                                        <svg class='icon-icon-view'>
                                                        <use xlink:href='#icon-view'></use>
                                                        </svg></span>Editar</a>
                                                        </li>";
                                                        echo "<li class='dropdown-items__item'><a href='?type=delete&id=".$row['id_categoria']."' class='dropdown-items__link'><span class='dropdown-items__link-icon'>
                                                            <svg class='icon-icon-trash'>
                                                            <use xlink:href='#icon-trash'></use>
                                                            </svg></span>Eliminar</a>
                                                        </li>";
                                                    } ?> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-wrapper__footer">
                        <div class="row">
                            <div class="table-wrapper__show-result col text-grey"><span class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span class="d-none d-sm-inline-block">of 50 items</span>
                            </div>
                            <div class="table-wrapper__pagination col-auto">
                                <ol class="pagination">
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--prev" href="#">
                                            <svg class="icon-icon-keyboard-left">
                                                <use xlink:href="#icon-keyboard-left"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="pagination__item active"><a class="pagination__link" href="#">1</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                                    </li>
                                    <li class="pagination__item pagination__item--dots">...</li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--next" href="#">
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal modal--panel modal--right" id="addProduct">
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window scrollbar-thin" data-simplebar>
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">Agregar Marcas de Celulares</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">
                            <form method="POST">
                                <div class="row row--md">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Nombre de la Marca de Celular</label>
                                        <div class="input-group">
                                            <input class="input" type="text" placeholder="Insertar marcas de celular" name="categories" value="Apple Watch Series 4" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal__footer">
                                    <div class="modal__container">
                                        <div class="modal__footer-buttons">
                                            <div class="modal__footer-button">
                                                <button class="button button--primary button--block" name="submit" type="submit" data-dismiss="modal" data-modal="#addProductSuccess"><span class="button__text">Crear</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button">
                                                <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Cancelar</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <div class="modal__container">
                            <div class="modal__footer-buttons">
                                <div class="modal__footer-button">
                                    <button class="button button--primary button--block" name="submit" type="submit" data-dismiss="modal" data-modal="#addProductSuccess"><span class="button__text">Crear</span>
                                    </button>
                                </div>
                                <div class="modal__footer-button">
                                    <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Cancelar</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-compact modal-success scrollbar-thin" id="addProductSuccess" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                            <h4 class="modal-success__title">Product was added</h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" name="submit_add" type="submit" data-dismiss="modal" data-modal="#addProduct"><span class="button__text">Add new product</span>
                            </button>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php require ('footer.inc.php'); ?>
    