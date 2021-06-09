<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if($usuario == '' || $contraseña == ''){
    echo json_encode('error');

}else {
    echo json_encode('OK <br> Usuario:'.$usuario.'<br>Contraseña:'.$contraseña);
}
?>