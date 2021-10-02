<?php
session_start();
$con=mysqli_connect("localhost","root","","db_todofono");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/todofono/');
define('SITE_PATH','http://127.0.0.1/todofono/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'Views/media/productos/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'Views/media/productos/');
?>