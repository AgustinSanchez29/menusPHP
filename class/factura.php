<?php
include("todo.php");

    if(isset($_POST['enviarCompra'])){
        $obj= new Todo();
        $obj2= new Todo();
        $obj3= new Todo();
        $total=0;
        $arrayID=$_POST['id'];
        var_dump($arrayID);
        $idF=$obj->ultimaFactura();
        echo"desde factura= ";
        var_dump($idF);
        $id= (int)$idF[0];
        $cliente= $idF[1];
        $correo= $idF[2];
        var_dump($idF[0]);//solo para validacion
        foreach($arrayID as $idM)
        {   
            $idM= (int)$idM;
            $obj2->insertarVenta($id,$idM);
        }
        $total=$obj3->calcularTotal($id);
        echo "<h1>Cliente: ".$cliente."</h1><br>";
        echo "<h1>Correo: ".$correo."</h1><br>";        
        echo "<h1>Su total a pagar es de: ".$total."$</h1><br>";
        header( "refresh:5;url=../createFactura.php" );

    }    


?>