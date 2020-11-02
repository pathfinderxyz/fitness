<?php  
	include '../../coneccion/coneccion.php';


   
    $idpersona = $_POST['idpersona'];

	
  
	
	$sql = pg_query("DELETE FROM persona Where id='$idpersona'");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=listadorefer');//Se guardo
	}

 
?>    