<?php
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$dni= $_GET['dni'];

echo "<table class='default'>";
echo "<tr>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO</th>";
echo "<th>DNI</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$nombre</td>";
echo "<td>$apellido</td>";
echo "<td>$dni</td>";
echo "</tr>";
echo "</table>";
?>