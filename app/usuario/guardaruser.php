<?php  
	include '../../coneccion/coneccion.php';
 include '../../Errores/mostrar_errores.php';

    $nombre= $_POST['nombre'];
	$pass = $_POST['pass'];
	$rol="admin";
	
	
	
  
	
	$sql = pg_query("INSERT INTO usuarios (usuario,password,rol) VALUES ('$nombre','$pass','$rol')");

  if ($sql) {
		header('Location: ../../dashboard.php?page=usuario&registro=exitoso');//Se guardo
	}else {
		header('Location: ../../dashboard.php?page=usuario&errorusuario=si');//No se guardo el correo o el pasaporte ya existe !
	}


 
?>  