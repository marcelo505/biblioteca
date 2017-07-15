<?php
$conectar = mysqli_connect("localhost","root","","formulario");
if (!$conectar) {
	echo "Error al conectar a la base de datos";
}else{
	echo "conectado";
}
?>
