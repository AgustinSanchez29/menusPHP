<?php include("class/todo.php");
include("include/header.php");
$obj2= new Todo();
session_start();
if(!isset($_SESSION['usuario'])){
    echo"<h2>Este usuario no es valido por favor iniciar sesion</h2>";
    header( "refresh:5;url=../login.php" );
}
else{
?>

<br>
  <div class="row">
<div class="col-md-6 mt-1">
<div class="card">
<div class="card-header">Agregar nuevo menu</div>
<div class="card-body">
<form action="class/support.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <input type="text" placeholder="Descripcion del menu" name="menu">
        </div>
        <div class="form-group">
        <input type="num" class="form-control" placeholder="Coste" name="precio">
        </div>
        <div class="form-group">
        <input type="file" name="imagen" REQUIRED>
        </div>
        <input type="submit" class="form-control btn btn-outline-primary" value="Send" name="enviar">
    </form>
</div>
</div>
</div>

<div class="col-md-6 mt-1">
<div class="card border-primary">
<div class="card-header bg-primary text-white">Nuevo usuario</div>
<div class="card-body">
<form action="class/support.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="user" placeholder="usuario" REQUIRED>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="contraseña" REQUIRED>
            </div>
                <input type="submit" class="btn btn-primary" name="enviarUsuario" value="enviar">
</form>
</div>
</div>
</div>
  </div> 

    <br>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Precio $</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $res= $obj2->consultaMenus();
                    foreach($res as $r){?>
                        <tr>
                            <td><?php echo $r['descripcion']; ?></td>
                            <td><?php echo $r['precio']; ?></td>
                            <td><img src="data:image/jgp;base64,<?php echo base64_encode($r['imagen']);?>" alt="comida"
                            width="70px" height="70px"></td>
                            <td>
                                <a href="class/editar.php?id=<?php echo $r['idMenu']?>" class="btn btn-outline-secondary">Editar</a>
                                <a href="class/eliminar.php?id=<?php echo $r['idMenu']?>" class="btn btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
        
<?php 
}
include("include/footer.php")?>