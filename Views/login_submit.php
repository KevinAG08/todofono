<?php
require('connection.inc.php');
require('functions.inc.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);

$res=mysqli_query($con,"select * from usuario where usuario_email='$email' and usuario_password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['USER_LOGIN']='yes';
	$_SESSION['USER_ID']=$row['id_usuario'];
	$_SESSION['USER_NAME']=$row['usuario_nombre'];
	echo "valid";
}else{
	echo "wrong";
}
?>