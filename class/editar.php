<?php include("../include/header.php");?>
<?php include("todo.php");
if(isset($_POST['editar'])){
    $obj= new todo();
    $id=(int)$_POST['clave'];
    $mennu=$_POST['menu'];
    $price=(int)$_POST['precio'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
    $obj->editarMenu($id,$mennu,$price,$imagen);
    header("Location:../maintain.php");
}
else{
$idd=$_REQUEST['id'];    
?>


<div class="col-md-6 mt-5 mb-5">
<div class="card border-secondary">
<div class="card-header bg-secondary text-white">Editar menu</div>
<div class="card-body">
<form action="editar.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <input type="num"  class="form-control" value="<?php echo $idd?>" name="clave" readonly>
            </div>
            <div class="form-group">
            <input type="text"  class="form-control" placeholder="Descripcion del menu" name="menu">
            </div>
            <div class="form-group">
            <input type="num" class="form-control" placeholder="Precio" name="precio">
            </div>
            <div class="form-group">
            <input type="file" name="imagen">
            </div>
            <input type="submit" class="form-control btn btn-outline-secondary" value="Editar" name="editar">
</form>
</div>
</div>
<small id="emailHelp" class="form-text text-muted">Edita un elemento de menu.</small>
</div>


<?php }?>
<?php include("../include/footer.php")?>