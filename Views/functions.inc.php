<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_product($con,$limit='',$cat_id='',$product_id=''){
	$sql="select producto.*,categoria.categoria_nombre from producto,categoria where producto.producto_estado=1 ";
	if($cat_id!=''){
		$sql.=" and producto.id_categoria=$cat_id ";
	}
	if($product_id!=''){
		$sql.=" and producto.id_producto=$product_id ";
	}
	$sql.=" and producto.id_categoria=categoria.id_categoria ";
	$sql.=" order by producto.id_producto desc";
	if($limit!=''){
		$sql.=" limit $limit";
	}
	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
?>