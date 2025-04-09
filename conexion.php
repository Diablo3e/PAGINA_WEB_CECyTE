<?php
$host = 'localhost'; // o la IP de tu servidor MySQL
$dbname = 'formulario'; // nombre de la base de datos que creaste
$username = 'root'; // tu usuario de MySQL (por defecto es 'root' en XAMPP)
$password = ''; // contraseña de MySQL (por defecto está vacía en XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
