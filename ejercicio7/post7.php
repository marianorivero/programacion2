<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

echo "<table>";
echo "<tr>";
echo "<th>NOMBRE</th>";
echo "<th>EMAIL</th>";
echo "<th>MENSAJE</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$nombre</th>";
echo "<td>$email</th>";
echo "<td>$mensaje</th>";
echo "</tr>";
echo "</table>";
?>