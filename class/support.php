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
 

if(isset($_POST['enviarUsuario'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $salt= substr($user,0,2);
    $passCrypt=crypt($pass,$salt);
    $obj= new todo();
    $obj->crearUsuario($user,$passCrypt);
    header("Location:../maintain.php");
}


if(isset($_POST['validar'])){
    session_start();
    $usser=$_POST['user'];
    $pass=$_POST['pass'];
    $salt= substr($usser,0,2);
    $passCrypt=crypt($pass,$salt);
    $obj= new todo();
    $res=$obj->validarUsuario($usser,$passCrypt);
    $resp= (int)$res;
    if($resp>0){
        $_SESSION['usuario']=$usser;
        header("Location:../maintain.php");
    }
    else{
        echo"<h3>Usuario Invalido</h3>";
        header( "refresh:5;url=../createFactura.php" );
    }

}






