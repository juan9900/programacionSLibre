<?php include("includes/headerIndex.php");
require_once 'controllers/authController.php'; 
require_once 'controllers/searchController.php';


if(!$_SESSION['id']) {
    header('location:login.php');
    exit();
}
?>
<div class="container p-5">
    <div class="alert <?php echo $_SESSION['alert-class']; ?>">
        <?php echo $_SESSION['message']; ?>
    </div>
    <h2 class="busqueda"> Buscar Usuarios</h2>
    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">

                <form method="post" class="form-item" action="index.php">

                    <div class="form-group">
                        <fieldset>
                            <label for="item">Nombre de usuario</label>
                            <input type="text" required name="uUsuario" class="form-control">
                        </fieldset>
                        
                        <input type="submit" class="btn btn-success btn-block form-control btn-submit btn-buscar"
                        name="buscar-btn" value="Buscar" >
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8 table-responsive table-item">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cédula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //Solicitar a la base de datos la informacion del usuario que se busque 
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>