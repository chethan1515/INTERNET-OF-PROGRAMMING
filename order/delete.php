<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ecom/";

require_once($path . 'connect.php');
$id = $_GET['id'];
$DelSql = "DELETE FROM `orders` WHERE id=$id";
$res = mysqli_query($connection, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
?>