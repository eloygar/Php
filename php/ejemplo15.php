<?php
$conexion = new mysqli("localhost", "root", "1234", "prueba");
$conexion ->close();
$query = "SELECT * FROM chat ORDER BY id  DESC";
$ejecutar = $conexion->query($query);
while ($fila = $ejecutar->fetch_assoc()){
echo $row ["nombre"];
}