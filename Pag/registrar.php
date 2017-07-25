<?php
include 'cn.php';

mysqli_query($conectar, 'SET NAMES "utf8"');

  $nombres = @$_POST['name'];
	$apellidos = @$_POST['apellido'];
	$nombre_user = @$_POST['user_login'];
	$correo = @$_POST['user_email'];
	$clave = @$_POST['password'];

	$insertar = "INSERT INTO registro(Nombres,Apellidos,Nombre_usuario,Correo,Contraseña) VALUES('$nombres','$apellidos','$nombre_user','$correo','$clave')";

		if (!mysqli_query($conectar,$insertar)) {
    	echo "error";
    }else{
    	echo "datos guardados correctamente";
    }
		mysqli_close($conectar);
header('Location:vremail.html');
