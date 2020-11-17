<?php  
	include '../../coneccion/coneccion.php';


    $peso = $_POST['peso'];
    $idpersona = $_POST['idpersona'];
    $mes = date("M");


	
	$sql = pg_query("UPDATE persona Set peso='$peso' Where id='$idpersona'");

	$sql2 = pg_query("INSERT INTO pesos(id_personas,pesos,mes) VALUES ('$idpersona','$peso','$mes')");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=listadorefer');//Se guardo
	}

 
?>    