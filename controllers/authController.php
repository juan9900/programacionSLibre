<?php 
    include("db.php");
    $errores = array();
    $nombre = "";
    $apellido = "";
    $cedula = "";
    $usuario = "";
    $correo = "";
    $contrasena = "";


//Si el boton de registrar se presiona
if(isset($_POST['registrar-btn'])){
    $nombre = $_POST['uNombre'];
    $apellido = $_POST['uApellido'];
    $cedula = $_POST['uCedula'];
    $usuario = $_POST['uUsuario'];
    $correo = $_POST['uCorreo'];
    $contrasena = $_POST['uContrasena'];

    //Asegurar que los cuadros del form se hayan rellenado
    if(empty($nombre)){
        $errores['nombre'] = "El nombre de usuario es obligatorio.";
    }

    if(empty($apellido)){
        $errores['apellido']  = "El apellido es obligatorio.";
    }

    if(empty($cedula)){
        $errores['cedula'] = "La cedula es requerida.";
    }

    if(empty($usuario)){
        $errores['username'] = "El nombre de usuario es requerido.";
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores['correo'] = "Correo inválido.";
    }  

    if(empty($correo)){
        $errores['correo'] = "El correo es requerido.";
    }

    if(empty($contrasena)){
        $errores['contrasena'] = "La contraseña es requerida.";
    }

    //Si no hay errores, se verifica que el correo no exista ya los datos en la base de datos 
    $emailQuery = "SELECT * FROM usuarios WHERE correo=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();
    if($userCount > 0){
         $errores['correo'] = "El correo ya existe.";
    }

    //Si no hay errores se verifica que el usuario no exista ya en los datos de la base de datos
    $usuarioQuery = "SELECT * FROM usuarios WHERE usuario=? LIMIT 1";
    $stmt = $conn->prepare($usuarioQuery);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();
    if($userCount > 0){
         $errores['usuario'] = "El nombre de usuario ya existe.";
    }




    //Si no hay errores, se suben los datos a la base de datos
    if(count($errores) === 0){
        $contrasena = md5($contrasena);

        $query = "INSERT INTO usuarios (nombre, apellido, cedula, usuario, correo, contrasena) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssisss", $nombre, $apellido, $cedula, $usuario, $correo, $contrasena);
        if ($stmt->execute()){
            //Login
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contrasena'] = $contrasena;
            $_SESSION['correo'] = $correo;
            //Mostrar un mensaje
            $_SESSION['message'] = "Te has logeado!";
            $_SESSION['alert-class'] = "alert-success";
            header("Location: index.php");
            exit();
        } else {
            $errores['db_error'] = "Error de Base de Datos: Error al registrar";
        }

    }

}

    //Si el usuario presiona el boton de login
    if(isset($_POST['login-btn'])){
        $usuario = $_POST['uUsuario'];
        $contrasena = $_POST['uContrasena'];

        //Asegurar que los cuadros del form se hayan rellenado
        if(empty($usuario)){
            $errores['username'] = "El nombre de usuario es requerido.";
        }

        if(empty($contrasena)){
            $errores['contrasena'] = "La contraseña es requerida.";
        }

        if(count($errores) === 0 ){
            $sql = "SELECT * FROM usuarios WHERE correo=? OR usuario=? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $usuario, $usuario);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

        
            if(isset($user)){
                if (md5($contrasena) == $user['contrasena']){
                    //El usuario ha proporcionado las credenciales correctas
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['usuario'] =$user['usuario'];
                    $_SESSION['contrasena'] = $user['contrasena'];
                    $_SESSION['correo'] = $user['correo'];
                    //Mostrar un mensaje
                    $_SESSION['message'] = "Te has logeado!";
                    $_SESSION['alert-class'] = "alert-success";
                    header("Location: index.php");
                } else {
                    $errores['Login_fail'] = "Error de credenciales";
                }
            } else {
                $errores['Login_fail'] = "Error de credenciales";
            }
            
        }

        
    }



//Logout usuario
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usuario']);
    unset($_SESSION['correo']);
    unset($_SESSION['contrasena']);
    header("location: login.php");
    exit();
}
?>