<?php
require('top.inc.php');

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
		$update_status_sql="update producto set producto_estado='$status' where id_producto='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from producto where id_producto='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select producto.*,categoria.categoria_nombre from producto,categoria where producto.id_categoria=categoria.id_categoria order by producto.id_producto desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card"> 
				<div class="card-body">
				   <h4 class="box-title">Celulares </h4>
				   <h4 class="box-link"><a href="manage_product.php">Agregar Celular</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Marca de Celular</th>
							   <th>Nombre</th>
							   <th>Imagen</th>
							   <th>MRP</th>
							   <th>Precio</th>
							   <th>Cantidad</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id_producto']?></td>
							   <td><?php echo $row['id_categoria']?></td>
							   <td><?php echo $row['producto_nombre']?></td>
							   <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['producto_imagen']?>"/></td>
							   <td><?php echo $row['producto_mrp']?></td>
							   <td><?php echo $row['producto_precio']?></td>
							   <td><?php echo $row['producto_stock']?></td>
							   <td>
								<?php
								if($row['producto_estado']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id_producto']."'>Activado</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id_producto']."'>Desactivado</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_product.php?id=".$row['id_producto']."'>Editar</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id_producto']."'>Eliminar</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>