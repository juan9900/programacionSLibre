
<?php

    if(isset($_POST['buscar-btn'])){
        $_SESSION['nombreB'] = "";
        $_SESSION['apellidoB'] = "";
        $_SESSION['usuarioB'] = "";
        $_SESSION['cedulaB'] = "";
        $usuario = $_POST['uUsuario'];
        $sql = "SELECT usuario, nombre, apellido, cedula FROM usuarios WHERE usuario=? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $usuario);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if(isset($user)){
                $_SESSION['nombreB'] = $user['nombre'];
                $_SESSION['apellidoB'] = $user['apellido'];
                $_SESSION['usuarioB'] = $user['usuario'];
                $_SESSION['cedulaB'] = $user['cedula'];
            }
            
        
    }
?>