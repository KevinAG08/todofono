<?php
require('top.inc.php');
$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$short_desc	='';
$description	='';
$meta_title	='';
$meta_description	='';
$meta_keyword='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from producto where id_producto='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['id_categoria'];
		$name=$row['producto_nombre'];
		$mrp=$row['producto_mrp'];
		$price=$row['producto_precio'];
		$qty=$row['producto_stock'];
		$short_desc=$row['producto_sdescuento'];
		$description=$row['producto_descripcion'];
		$meta_title=$row['producto_metatitle'];
		$meta_desc=$row['producto_metadescripcion'];
		$meta_keyword=$row['producto_keyword'];
	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$name=get_safe_value($con,$_POST['name']);
	$mrp=get_safe_value($con,$_POST['mrp']);
	$price=get_safe_value($con,$_POST['price']);
	$qty=get_safe_value($con,$_POST['qty']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$description=get_safe_value($con,$_POST['description']);
	$meta_title=get_safe_value($con,$_POST['meta_title']);
	$meta_desc=get_safe_value($con,$_POST['meta_desc']);
	$meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
	
	$res=mysqli_query($con,"select * from producto where producto_nombre='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id_producto']){
			
			}else{
				$msg="El producto ya existe";
			}
		}else{
			$msg="El producto ya existe";
		}
	}
	
	
	if($_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Seleccione solo formato de imagen png, jpg y jpeg";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Seleccione solo formato de imagen png, jpg y jpeg";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
				$update_sql="update producto set id_categoria='$categories_id',producto_nombre='$name',producto_mrp='$mrp',producto_precio='$price',producto_stock='$qty',producto_sdescuento='$short_desc',producto_descripcion='$description',producto_metatitle='$meta_title',producto_metadescripcion='$meta_desc',producto_keyword='$meta_keyword',producto_imagen='$image' where id_producto='$id'";
			}else{
				$update_sql="update producto set id_categoria='$categories_id',producto_nombre='$name',producto_mrp='$mrp',producto_precio='$price',producto_stock='$qty',producto_sdescuento='$short_desc',producto_descripcion='$description',producto_metatitle='$meta_title',producto_metadescripcion='$meta_desc',producto_keyword='$meta_keyword' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into producto(id_categoria,producto_nombre,producto_mrp,producto_precio,producto_stock,producto_sdescuento,producto_descripcion,producto_metatitle,producto_metadescripcion,producto_keyword,producto_estado,producto_imagen) values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image')");
		}
		header('location:product.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Celulares</strong><small> Formulario</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							    <div class="form-group">
									<label for="categories" class=" form-control-label">Marca de Celular</label>
									<select class="form-control" name="categories_id">
										<option>Selecciona Marca de Celular</option>
										<?php
										$res=mysqli_query($con,"select id_categoria,categoria_nombre from categoria order by categoria_nombre asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id_categoria']==$categories_id){
												echo "<option selected value=".$row['id_categoria'].">".$row['categoria_nombre']."</option>";
											}else{
												echo "<option value=".$row['id_categoria'].">".$row['categoria_nombre']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Nombre del Celular</label>
									<input type="text" name="name" placeholder="Ingrese el nombre del celular" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">MRP</label>
									<input type="text" name="mrp" placeholder="Ingrese MRP del celular" class="form-control" required value="<?php echo $mrp?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Precio</label>
									<input type="text" name="price" placeholder="Ingrese el precio del celular" class="form-control" required value="<?php echo $price?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Stock</label>
									<input type="text" name="qty" placeholder="Ingrese el stock del celular" class="form-control" required value="<?php echo $qty?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Imagen</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Breve Descripción</label>
									<textarea name="short_desc" placeholder="Ingrese una breve descripción del celular" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Descripción</label>
									<textarea name="description" placeholder="Ingrese la descripción del celular" class="form-control" required><?php echo $description?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<textarea name="meta_title" placeholder="Ingrese el meta title del celular" class="form-control"><?php echo $meta_title?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Descripción</label>
									<textarea name="meta_desc" placeholder="Ingrese la meta descripción del celular" class="form-control"><?php echo $meta_description?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keyword</label>
									<textarea name="meta_keyword" placeholder="Ingrese el meta keyword del celular" class="form-control"><?php echo $meta_keyword?></textarea>
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Enviar</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>