<?php
$conectar = new mysqli("localhost","web","12345","formulario");
if (!$conectar) {
	echo "Error al conectar a la base de datos";
}else{
	echo "conectado";
}
?>
