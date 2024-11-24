<?php

    session_start();

    if (!isset($_SESSION['Usuario'])) {
        echo '
        <script>
            alert("Inicia sesion antes de entrar a la pagina");
            window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" 
    integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    
<header>
        <div class="logo">
            <img src="img/images.jpg" alt="Logo Barbería Vallenata">
            <h1>Barbería Vallenata</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#reservas">Reservas</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <a href="log/cerrar_sesion.php" class="logout-btn">Cerrar Sesión</a>
        </nav>
    </header>


    <section id="inicio" class="hero">
        <h2>¡NO ERES FEO, SIMPLEMENTE TIENES UN MAL CORTE!</h2>
        <BR></BR>
        <a href="#reservas" class="btn">Haz tu reserva</a>
    </section>

    <br>

    <section id="galeria">
        <img src="img/diome.jpg" alt="">
        <img src="img/martin.jpg" alt="">
        <img src="img/binomio.jpg" alt="">
        <img src="img/inquietos.jpg" alt="">
        <img src="img/silvestre.jpg" alt="">
        <img src="img/kaleth.jpg" alt="">
    </section>


    <section id="servicios" class="services">

        <h2>SERVICIOS</h2>
        <BR></BR>
        <div class="service-list">
            <div class="service-item">
                <h3>Corte de Cabello</h3>
                <p>Consigue el corte ideal con la asesoría de nuestros barberos expertos.</p>
            </div>

            <div class="service-item">
                <h3>Afeitado Clásico</h3>
                <p>Disfruta de un afeitado tradicional con toallas calientes y productos de alta calidad.</p>
            </div>

            <div class="service-item">
                <h3>Arreglo de Barba</h3>
                <p>Mantén tu barba en perfecto estado con nuestros servicios especializados.</p>
            </div>

        </div>
    </section>

    <section id="reservas" class="reservations">

        <h2>HAZ TU RESERVA</h2>

        <form class="reservation-form" action="log/reserva.php" method="POST" >

            <label for="name">Nombre Completo</label>
            <input type="text" id="name" name="name" placeholder="Tu nombre" required>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="Tu teléfono" required>

            <label for="date">Fecha</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Hora</label>
            <input type="time" id="time" name="time" required>

            <br>
            <button type="submit">Reservar</button>
        </form>
    </section>

    <section id="contacto" class="contact">

        <h2>CONTACTO</h2>
        <br>
        <p>Visítanos en nuestra barbería o contáctanos a través de nuestras redes sociales.</p>
        <ul>
            <p>Dirección: Calle 123 #45-67, Barrancabermja, Colombia</p>
            <p>Teléfono: +57 123 456 7890</p>
            <p>Email: info@barberiavallenata.com</p>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Barbería Vallenata. Todos los derechos reservados.</p>
    </footer>





</body>
</html>