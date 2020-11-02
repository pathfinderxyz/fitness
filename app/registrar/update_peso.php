<?php  
	include '../../coneccion/coneccion.php';


    $peso = $_POST['peso'];
    $idpersona = $_POST['idpersona'];

	
  
	
	$sql = pg_query("UPDATE persona Set peso='$peso' Where id='$idpersona'");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=listadorefer');//Se guardo
	}

 
?>    