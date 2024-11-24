<?php

include 'conexion.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $name = trim($_POST['name']); 
    $phone = trim($_POST['phone']); 
    $date = $_POST['date']; 
    $time = $_POST['time']; 

   
    if (empty($name) || empty($phone) || empty($date) || empty($time)) {
        die("Por favor, completa todos los campos.");
    }

   
    $sql_cliente = "SELECT id FROM clientes WHERE usuario = ?";
    $stmt_cliente = $conexion->prepare($sql_cliente);
    $stmt_cliente->bind_param("s", $name);
    $stmt_cliente->execute();
    $result_cliente = $stmt_cliente->get_result();

    if ($result_cliente->num_rows > 0) {
        $row = $result_cliente->fetch_assoc();
        $id_cliente = $row['id'];
    } else {
       
        $sql_insert_cliente = "INSERT INTO clientes (usuario, correo, clave) VALUES (?, ?, '')";
        $stmt_insert = $conexion->prepare($sql_insert_cliente);
        $correo = $name . "@example.com"; 
        $stmt_insert->bind_param("ss", $name, $correo);
        if ($stmt_insert->execute()) {
            $id_cliente = $stmt_insert->insert_id; 
        } else {
            die("Error al registrar el cliente: " . $stmt_insert->error);
        }
    }

    
    $sql_reserva = "INSERT INTO reservas (id_cliente, fecha, hora, telefono) VALUES (?, ?, ?, ?)";
    $stmt_reserva = $conexion->prepare($sql_reserva);
    $stmt_reserva->bind_param("isss", $id_cliente, $date, $time, $phone);

    if ($stmt_reserva->execute()) {
        echo "
        <script>
            alert('Reserva realizada exitosamente.'); window.location.href='../home.php';
        </script>";
    } else {
        echo "Error al realizar la reserva: " . $stmt_reserva->error;
    }
}
?>