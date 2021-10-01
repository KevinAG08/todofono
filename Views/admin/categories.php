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
		$update_status_sql="update categoria set categoria_estado='$status' where id_categoria='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from categoria where id_categoria='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from categoria order by id_categoria asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Marcas de Celular </h4>
				   <h4 class="box-link"><a href="manage_categories.php">Agregar Marcas de Celular</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Categorias</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id_categoria']?></td>
							   <td><?php echo $row['categoria_nombre']?></td>
							   <td>
								<?php
								if($row['categoria_estado']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id_categoria']."'>Activado</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id_categoria']."'>Desactivado</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['id_categoria']."'>Editar</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id_categoria']."'>Eliminar</a></span>";
								
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