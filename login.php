<?php include("include/header.php");?>




<div class="col-md-4 mt-5 mb-5">
<div class="card border-success">
<div class="card-header bg-success text-white">Log in</div>
<div class="card-body">
<form action="class/support.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="user" placeholder="usuario" REQUIRED>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="contraseña" REQUIRED>
            </div>
                <input type="submit" class="btn btn-success" name="validar" value="Ingresar">
</form>
</div>
</div>
<small id="emailHelp" class="form-text text-muted">Ingresa tu usuario de administrador.</small>
</div>

<?php include("include/footer.php");?>