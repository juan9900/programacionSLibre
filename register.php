
<?php include("includes/header.php")?>
<?php require_once 'controllers/authController.php'; ?>
<div class="container">
    <div class="row d-flex justify-content-center main-form">
        <div class="card col-lg-4">
            <article class="card-body">
            
                <a href="login.php" class="float-right btn btn-outline-primary">Entrar</a>
                <h4 class="card-title mb-4 mt-1">Registrarse</h4>
                <form action="register.php"method="post">

                    <?php if(count($errores) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errores as $error): ?>
                            <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="uNombre">Nombre</label>
                        <input name="uNombre" class="form-control" value="<?php echo $nombre?>" placeholder="Nombre" type="text">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Apellido</label>
                        <input name="uApellido" class="form-control" value="<?php echo $apellido?>" placeholder="Apellido" type="text">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Cédula</label>
                        <input name="uCedula" class="form-control" value="<?php echo $cedula?>" placeholder="12345678" type="number" max-length="10">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Usuario</label>
                        <input name="uUsuario" class="form-control" value="<?php echo $usuario?>" placeholder="Usuario" type="text" maxlength="12">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Correo</label>
                        <input name="uCorreo" class="form-control" value="<?php echo $correo?>" placeholder="ejemplo@gmail.com" type="email" maxlength="30">
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input name="uContrasena" class="form-control" value="<?php echo $contrasena?>" maxlength="15">
                    </div> <!-- form-group// --> 

                    <div class="form-group">
                        <button type="submit" name="registrar-btn" class="btn btn-primary btn-block"> Sign-Up  </button>
                    </div> <!-- form-group// -->                                                           
                </form>
            </article>
        </div>
    </div> <!-- card.// -->
</div>
<?php include("includes/footer.php")?>
