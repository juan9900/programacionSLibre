<?php include("includes/header.php")?>
<?php require_once 'controllers/authController.php'; ?>

<div class="container">
    <div class="row d-flex justify-content-center main-form">
        <div class="card col-lg-4">
            <article class="card-body">
            <a href="register.php" class="float-right btn btn-outline-primary">Registrarse</a>
            <h4 class="card-title mb-4 mt-1">Entrar</h4>
                <form method="post" action="login.php">
                    <?php if(count($errores) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errores as $error): ?>
                            <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label>Usuario o Correo</label>
                        <input name="uUsuario" class="form-control" placeholder="Usuario" maxlength="30">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input name="uContrasena" class="form-control" placeholder="******" maxlength="15">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block"> Login  </button>
                    </div> <!-- form-group// -->                                                           
                </form>
            </article>
        </div>
    </div> <!-- card.// -->
</div>

<?php include("includes/footer.php")?>
