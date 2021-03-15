<?php 
require_once('conex.php');
if($_GET['id']){
$id=$_GET['id'];
//var_dump($_GET['id']);
$query='DELETE FROM users WHERE id=?';
$delete=$conex->prepare($query);
$delete->execute(array($id));
header('location:usuario.php');
}
 ?>
