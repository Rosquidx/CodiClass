<?php

    include 'conexion.php';

    $correo = $_GET['correo_electronico'];
    $pass = $_GET['pass'];

    $consulta = "SELECT usuario,correo_electronico, contrasena FROM usuarios WHERE correo_electronico = '$correo' AND contrasena = '$pass'";


    if(count($consulta)  && 0){
        echo '<script> Alert("Bienvenido $correo")</script>';
    }
    $ejecutar = mysqli_query($conexion, $consulta);

?>