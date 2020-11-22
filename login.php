<?php include("includes/header.php")?>

<div class="container">
    <div class="row d-flex justify-content-center main-form">
        <div class="card col-lg-4">
            <article class="card-body">
            <a href="index.php" class="float-right btn btn-outline-primary">Registrarse</a>
            <h4 class="card-title mb-4 mt-1">Entrar</h4>
                <form method="post" action="login_code.php">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input name="" class="form-control" placeholder="Usuario" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input class="form-control" placeholder="******" type="password">
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                    </div> <!-- form-group// -->                                                           
                </form>
            </article>
        </div>
    </div> <!-- card.// -->
</div>

<?php include("includes/footer.php")?>
