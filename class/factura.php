<?php
include("todo.php");
include("../include/header.php");

    if(isset($_POST['enviarCompra'])){
        $obj= new Todo();
        $obj2= new Todo();
        $obj3= new Todo();
        $total=0;
        $arrayID=$_POST['id'];
        //var_dump($arrayID);
        $idF=$obj->ultimaFactura();
        //echo"desde factura= ";
        //var_dump($idF);
        $id= (int)$idF[0];
        $cliente= $idF[1];
        $correo= $idF[2];
        //var_dump($idF[0]);//solo para validacion
        foreach($arrayID as $idM)
        {   
            $idM= (int)$idM;
            $obj2->insertarVenta($id,$idM);
        }
        $total=$obj3->calcularTotal($id);?>
        <div class="card bg-dark" style="width: 18rem;">
            <div class="card-header text-white">
                    Factura
            </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $cliente;?></li>
            <li class="list-group-item"><?php echo $correo;?></li>
            <li class="list-group-item"><?php echo $total;?></li>
        </ul>
        </div>
        <?php
        header( "refresh:10;url=../createFactura.php" );

    }    

    include("../include/footer.php");
?>