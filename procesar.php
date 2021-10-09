<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$apellido = $_POST['apellido'];
$mensaje = $_POST['mensaje'];


echo "<h2>el nombre recibido es:</h2>" . $nombre . "</br>";
echo "<h2>el apellido recibido es:</h2>" . $apellido . "</br>";
echo "<h2>el email recibido es:</h2>" . $email . "</br>";
echo "<h2>el mensaje recibido es:</h2>" . $mensaje . "</br>";

?>