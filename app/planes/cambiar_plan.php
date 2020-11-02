<?php  
	include '../../coneccion/coneccion.php';


    $plan = $_POST['plan'];
    $idpersona = $_POST['idpersona'];

	
  
	
	$sql = pg_query("UPDATE persona Set planp='$plan' Where id='$idpersona'");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=listadorefer');//Se guardo
	}

 
?>    