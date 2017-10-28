<?php 
require_once('encabezado.php');
?>
<div class="container">
    <div class="row">
        <form action="listar_usuarios.php" method="POST" class="text-center col-md-12">
            <h1>Iniciar Sesión</h1>
            <div class="col-md-6">
                <label for=""><h2>Usuario</h2></label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese correo elctronico" required="">	
            </div>
            <div class="col-md-6">
                <label for=""><h2>Contraseña</h2></label>
                <input type="password" name="contrasena" class="form-control" placeholder="Ingrese contraseña" required="">
            </div>
        
            <div class="boton">
            <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>	
    </div>	
</div>

<?php 
require_once('pieDePagina.php');
?>    

