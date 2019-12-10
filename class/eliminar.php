<?php
include('todo.php');
$obj= new Todo();
$id= (int)$_REQUEST['id'];
$obj->eliminarMenu($id);
header("Location:../maintain.php");
?>