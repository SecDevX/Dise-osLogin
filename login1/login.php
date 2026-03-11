<?php
    $usuario = "idat";
    $clave = "12345";

    $usu = $_POST['user_name'];
    $cla = $_POST['user_password'];

    if ($usuario == $usu && $clave == $cla) {
        echo "Bienvenido al sistema";
    } else {
        header('location: index.php');
    }
?>