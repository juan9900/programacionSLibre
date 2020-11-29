<?php   

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'bddusuarios'

);

if(!$conn){
    echo "Error al conectar a la base de datos.";
}