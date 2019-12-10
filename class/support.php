<?php
include("todo.php");
if(isset($_POST['enviar'])){
    $obj= new Todo();
    $menu=$_POST['menu'];
    $precio=$_POST['precio'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
    $obj->insertarMenu($menu,$precio,$imagen);
    header("Location:../maintain.php");
}

if(isset($_POST['enviarFactura']))
{
    echo"Entro a la factura";
    $obj= new todo();
    $nombre=$_POST['nombreUsuario'];
    $correo=$_POST['correo'];
    $obj->insertarFactura($nombre,$correo);
    header("Location:../inicio.php");
}






