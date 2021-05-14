<?php
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$email = $_POST['email'];
$fecha_nac = $_POST['fecha_nac'];
$provincia = $_POST['provincia'];
$donante = $_POST['radio'];


echo "<table>";
echo "<tr>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO</th>";
echo "<th>DNI</th>";
echo "<th>FECHA_NAC</th>";
echo "<th>EMAIL</th>";
echo "<th>PROVINCIA</th>";
echo "<th>DONANTE</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$nombre</td>";
echo "<td>$apellido</td>";
echo "<td>$dni</td>";
echo "<td>$fecha_nac</td>";
echo "<td>$email</td>";
echo "<td>$provincia</td>";
echo "<td>$donante</td>";
echo "</tr>";
echo "</table>";
?>