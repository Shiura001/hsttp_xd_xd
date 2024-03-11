<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "ideas_juegos_consolas";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// crea una coneccion en forma de funcio para llamarlo en el modelo
?>
