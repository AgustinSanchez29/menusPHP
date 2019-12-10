<?php include("class/todo.php");?>
<?php include("include/header.php");?>
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
                        
  
        <a href="maintain.php">Mantenimiento</a>
<?php include("include/footer.php");?>





