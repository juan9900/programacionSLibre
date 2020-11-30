<?php include("includes/headerIndex.php");
require_once 'controllers/authController.php'; 
require_once 'controllers/searchController.php';


if(!$_SESSION['id']) {
    header('location:login.php');
    exit();
}

?>

<div class="container p-5">
    
    <h2 class="busqueda"> Bienvenido <?php echo $_SESSION['usuario']?></h2>
    <?php if(isset($_SESSION['resultado'])){ ?>
        <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show " id="bootstrap-overrides" role="alert">
            <?= $_SESSION['resultado']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php session_unset();}?>
    <div class="row">

        <div class="col-md-4">
                
            <div class="card card-body">

                <form method="post" class="form-item" action="index.php?id=<?php echo $_SESSION['id']?>">

                    <div class="form-group">
                        <fieldset>
                            <label for="item">Usuario a buscar</label>
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
                    <tr>
                        <td>
                            <?php if(isset($_SESSION['usuarioB'])){
                                        if(!empty($_SESSION['usuarioB'])){
                                            echo $_SESSION['usuarioB'];
                                        }else{
                                            echo "No encontrado";
                                        }
                                    }?>
                        </td>
                        <td>
                            <?php if(isset($_SESSION['nombreB'])){
                                        if(!empty($_SESSION['nombreB'])){
                                            echo $_SESSION['nombreB'];
                                        }else{
                                            echo "------";
                                        }
                                    }?>
                        </td>
                        <td>
                            <?php if(isset($_SESSION['apellidoB'])){
                                        if(!empty($_SESSION['apellidoB'])){
                                            echo $_SESSION['apellidoB'];
                                        }else{
                                            echo "------";
                                        }
                                    }?>
                        </td>
                        <td>
                            <?php if(isset($_SESSION['cedulaB'])){
                                        if(!empty($_SESSION['cedulaB'])){
                                            echo $_SESSION['cedulaB'];
                                        }else{
                                            echo "------";
                                        }
                                    }?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>