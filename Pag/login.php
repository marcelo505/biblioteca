<?php
session_start();
?>
<?php
include 'cn.php';
@session_start();
mysqli_query($conectar, 'SET NAMES "utf8"');

$username = @$_POST['user_login'];
$password = @$_POST['password'];

if($username == null || $password == null){
	echo "datos invlidos";
} else {
	$result = $conectar->query("SELECT ID, Nombre_usuario, Contraseña from registro where Nombre_usuario = '".$username."' AND Contraseña = '".$password."'");

  if ($result->num_rows > 0){
    $_SESSION['user_login'] = $username;
		while($rows = $result->fetch_array(MYSQLI_ASSOC)){
			$id = $rows['ID'];
		}
		$_SESSION['id'] = $id;
  }	else {
      echo "Datos incorrectos.";
  }

  header('Location:pagina principal1.html');

	$conectar->close();
}

?>
