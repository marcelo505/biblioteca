<?php
$conectar =mysqli_connect("localhost","web","12345","formulario");
if (!$conectar) {
	echo "Error al conectar a la base de datos";
}else{
	echo "conectado";
}
?>
