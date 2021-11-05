<?php
require('connection.inc.php');
require('functions.inc.php');
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$comment=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contacto(contacto_nombre,contacto_email,contacto_phone,contacto_comentario,contacto_data) values('$name','$email','$mobile','$comment','$added_on')");
echo "Gracias";
?>