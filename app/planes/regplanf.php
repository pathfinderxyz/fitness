<?php  
	include '../../coneccion/coneccion.php';
 include '../../Errores/mostrar_errores.php';

    $plan= $_POST['plan'];
	$caracteristicas = $_POST['caracteristicas'];
	$duracion = $_POST['duracion'];
	
	
  
	
	$sql = pg_query("INSERT INTO planes(plan,duracion,caracteristicas) VALUES ('$plan','$duracion','$caracteristicas')");

    if ($sql) {
		header('Location: ../../dashboard.php?page=planes');//Se guardo
	}

 
?>   