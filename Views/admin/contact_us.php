<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from contacto where id_contacto='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from contacto order by id_contacto desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Nuestros Contactos </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Nombre</th>
							   <th>Email</th>
							   <th>Asunto</th>
							   <th>Consulta</th>
							   <th>Fecha</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id_contacto']?></td>
							   <td><?php echo $row['contacto_nombre']?></td>
							   <td><?php echo $row['contacto_email']?></td>
							   <td><?php echo $row['contacto_phone']?></td>
							   <td><?php echo $row['contacto_comentario']?></td>
							   <td><?php echo $row['contacto_data']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id_contacto']."'>Eliminar</a></span>";
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