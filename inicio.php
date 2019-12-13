<?php include("class/todo.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Proyecto</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="createFactura.php" class="navbar-brand text-center">FONDA LA TIA OLGA</a>
    </div>
</nav>
    <div class="container">
<br>


   <?php
    $obj2= new Todo(); ?>
    <br>
    <hr>
    <br>
 
                
                    <?php $res= $obj2->consultaMenus();?>
                    <form action="class/factura.php" method="POST">
                        <div class="row">
                        <?php foreach($res as $r){ ?>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="data:image/jgp;base64,<?php echo base64_encode($r['imagen']);?>" alt="comida" widht="100px" height="150px">
                            <div class="card-body">
                                <h5 class="card-title">Plato</h5>
                                <p class="card-text"><?php echo $r['descripcion']; ?></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Precio $</h5>
                                <p class="card-text"><?php echo $r['precio']; ?></p>
                            </div>
                            <div class="input-group-text">
                                <input type="checkbox" value="<?php echo $r['idMenu'];?>" name="id[]" aria-label="Checkbox for following text input">
                            </div>
                            </div>
                            <br><br>
                        </div>
                        <?php }?>
                        
                        </div>
                        <input type="submit" id="enviarCompra" class="btn btn-primary btn-lg" value="enviar" name="enviarCompra">
                    
                    </form>   
                            <br>
                        
  
       
<?php include("include/footer.php");?>





