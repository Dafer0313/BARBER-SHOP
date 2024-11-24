<?php

    session_start();

    include 'conexion.php';

    $Usuario = $_POST['Usuario'];
    $Clave = $_POST['Clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM clientes WHERE Usuario = '$Usuario' AND Clave = '$Clave'");


    if (mysqli_num_rows($validar_login) >0 ) {
        $_SESSION['Usuario'] = $Usuario;
        header("location: ../home.php");
        exit();

    }else {
        echo '
        <script>
            alert("Usuario equivocado, por favor verifique los datos");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

?>

