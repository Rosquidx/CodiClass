<?php
    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo_electronico'];
    $usuario = $_POST['user'];
    $pass = $_POST['pass'];

    //Encriptamiento de contrasena
    $pass = hash('sha512', $pass);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$pass')";
    
    $consulta_correo = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $consulta_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

    
    $verificar_correo = mysqli_query($conexion, $consulta_correo);
    $verificar_usuario = mysqli_query($conexion, $consulta_usuario);

    if((mysqli_num_rows($verificar_correo) > 0) && (mysqli_num_rows($verificar_usuario)) > 0){
        echo '<script> 
        alert("El correo y usuario existen.");
        window.location = "../index.php"
     </script>';
        exit();
        mysqli_close($conexion);
    }else if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script> 
            alert("El correo ya existe.");
            window.location = "../index.php"
        </script>';
        exit();
        mysqli_close($conexion);
    }else if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script> 
            alert("El usuario ya existe.");
            window.location = "../index.php"
        </script>';
        exit();
        mysqli_close($conexion);
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado.);
            window.location = "../index.php"
        </script> ';
    }else{
        echo '
        <script> 
            alert("Error al registrar al usuario.")
            window.location = "../index.php"
        </script>';
    }

    mysqli_close($conexion);

?>