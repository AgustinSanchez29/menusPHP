<?php include("include/header.php");?>
<div class="col-md-4 mt-5 mb-5">
<div class="card border-primary">
<div class="card-header bg-primary text-white">Formulario</div>
<div class="card-body">
<form action="class/support.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre" REQUIRED>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo" REQUIRED>
            </div>
                <input type="submit" class="btn btn-primary" id="factura" name="enviarFactura" value="Send">
</form>
</div>
</div>
<small id="emailHelp" class="form-text text-muted">Este formulario crea una nueva compra para usted.</small>
</div>

<a href="maintain.php">Mantenimiento</a>
<?php include("include/footer.php");?>