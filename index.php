<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESION</title>
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" 
     integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <form action="login.php" method="POST">

        <h1>INICIAR SESION</h1>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario:</label>
        <input type="text" name="Usuario" placeholder="Nombre De Usuario">
        <br>
        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña:</label>
        <input type="password" name="Contraseña" placeholder="Contraseña">
        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="">Crear Cuenta</a>
    </form>


</body>
</html>