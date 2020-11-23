
<?php include("includes/header.php")?>
<div class="container">
    <div class="row d-flex justify-content-center main-form">
        <div class="card col-lg-4">
            <article class="card-body">
            
                <a href="login.php" class="float-right btn btn-outline-primary">Entrar</a>
                <h4 class="card-title mb-4 mt-1">Registrarse</h4>
                <form action="register_code.php"method="post">

                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="uNombre" class="form-control" placeholder="Nombre" type="text" required>
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Apellido</label>
                        <input name="uApellido" class="form-control" placeholder="Apellido" type="text" required>
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Cédula</label>
                        <input name="uCedula" class="form-control" placeholder="12345678" type="number" required>
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Usuario</label>
                        <input name="uUsuario" class="form-control" placeholder="Usuario" type="text" maxlength="12" required>
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Correo</label>
                        <input name="uCorreo" class="form-control" placeholder="ejemplo@gmail.com" type="email" maxlength="30" required>
                    </div> <!-- form-group// -->

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input name="uContrasena" class="form-control" placeholder="******" type="password" maxlength="15" required>
                    </div> <!-- form-group// --> 

                    <div class="form-group">
                        <label>Confirmar Contraseña</label>
                        <input name="uContrasenaC" class="form-control" placeholder="******" type="password" maxlength="15" required>
                    </div> <!-- form-group// --> 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Sign-Up  </button>
                    </div> <!-- form-group// -->                                                           
                </form>
            </article>
        </div>
    </div> <!-- card.// -->
</div>
<?php include("includes/footer.php")?>
