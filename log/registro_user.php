<?php

    include 'conexion.php';

    $Usuario = $_POST['Usuario'];
    $Correo = $_POST['Correo'];
    $Clave = $_POST['Clave'];

    $query = "INSERT INTO clientes(Usuario, Correo, Clave)
              VALUES('$Usuario', '$Correo', '$Clave')";


    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("usuario registrado exitosamente");
            window.location = "../home.php";
        </script>
        ';

    }else {
        echo '
        <script>
            alert("usuario no registrado exitosamente, intentelo de nuevo");
            window.location = "../index.php";
        </script>
        ';
    }


    mysqli_close($conexion);

?>