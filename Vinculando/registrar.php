<?php
include 'cn.php';
  $nombres = $_POST["name"];
	$apellidos = $_POST["apellido"];
	$nombre_user = $_POST["user_login"];
	$correo = $_POST["user_email"];
	$clave = $_POST["password"];
	$conf_clave = $_POST["verify_password"];
	$insertar = "INSERT INTO registro(Nombres,Apellidos,Nombre_usuario,Correo,Contraseña,Conf_contraseña) VALUES('$nombres','$apellidos','$nombre_user','$correo','$clave','$conf_clave')";
  $resultado = mysqli_query($conectar,$insertar);

		if (!$resultado) {
    	echo "error";
    }else{
    	echo "datos guardados correctamente";
    }
		mysqli_close($conectar);
