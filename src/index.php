<?php
$servername = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<h1>Hola Mundo desde PHP con MySQL</h1>';
    echo '<p>Conexión a la base de datos exitosa ✅</p>';
} catch(PDOException $e) {
    echo '<h1>Hola Mundo desde PHP</h1>';
    echo '<p>Error al conectar a la base de datos ❌: ' . $e->getMessage() . '</p>';
}
?>
