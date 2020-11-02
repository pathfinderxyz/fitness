<?php  
	include '../../coneccion/coneccion.php';


   
    $idplan = $_POST['idplan'];

	
  
	
	$sql = pg_query("DELETE FROM planes Where id='$idplan'");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=planes');//Se guardo
	}

 
?>    