<?php include("includes/header.php")?>

<div class="container p-5">
    <h2 class="busqueda"> Buscar Usuarios</h2>
    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">

                <form method="post" class="form-item">

                    <div class="form-group">
                        <fieldset>
                            <label for="item">Nombre de usuario</label>
                            <input type="text" required name="item" class="form-control">
                        </fieldset>
                        
                        <input type="submit" class="btn btn-success btn-block form-control btn-submit btn-buscar"
                        name="save_task" value="Buscar" >
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
                
            </table>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>