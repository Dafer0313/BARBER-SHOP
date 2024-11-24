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
    
        <main>

            <div class="contenedor__todo">

                <div class="caja__trasera">

                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia Sesion para entrar en la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                    </div>

                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p>Registrate para inicar sesion</p>
                        <button id="btn__registrarse">Registrate</button>
                    </div>

                </div>   

                <div class="contenedor__login-register">
                    
                    <form action="log/login_user.php" method="POST" class="formulario__login">

                        <h2>Iniciar Sesion</h2>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <br><br>
                        <i class="fa-solid fa-unlock"></i>
                        <input type="passsword" placeholder="Contraseña" name="Clave">
                        <button>Entrar</button>

                    </form>

                    <form action="log/registro_user.php" class="formulario__register" method="POST">

                        <h2>Registrarse</h2>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <br><br>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Correo" name="Correo">
                        <br><br>
                        <i class="fa-solid fa-unlock"></i>
                        <input type="password" placeholder="Contraseña" name="Clave">
                        <button type="submit">Registrarse</button>

                    </form>

                </div>

            </div>

        </main>

        <script src="js/index.js"></script>

</body>
</html>