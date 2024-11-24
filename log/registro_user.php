<?php

    include 'conexion.php';

    $Usuario = $_POST['Usuario'];
    $Correo = $_POST['Correo'];
    $Clave = $_POST['Clave'];
    //clave encriptada
    $Clave = hash('sha512', $Clave);



    $query = "INSERT INTO clientes(Usuario, Correo, Clave)
              VALUES('$Usuario', '$Correo', '$Clave')";


    //verifiacion de correo
    $verficar_correo = mysqli_query($conexion, "SELECT * FROM clientes WHERE Correo='$Correo'");
    
    if (mysqli_num_rows($verficar_correo) >0 ) {
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro correo");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //verifiacion de usuario
    $verficar_usuario = mysqli_query($conexion, "SELECT * FROM clientes WHERE Usuario='$Usuario'");
    
    if (mysqli_num_rows($verficar_usuario) >0 ) {
        echo '
            <script>
                alert("Este  usuario ya esta registrado, intenta con otro nombre de usuario");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }



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