<?php
$conn = mysqli_connect("localhost", "host", "", "userdb");

if(!$conn){
    echo "Error al conectar a la base de datos.";
}