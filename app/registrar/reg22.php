<?php  
	include '../../coneccion/coneccion.php';


    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$sexo = $_POST['sexo'];
	$direccion = $_POST['direccion'];
	$fecha = $_POST['fecha'];
	$tel = $_POST['telefono'];
	$peso = $_POST['peso'];
	$trabajo = $_POST['trabajo'];
	$finalidad = $_POST['finalidad'];
	$meta = $_POST['meta'];
	date_default_timezone_set('America/Asuncion');
	$date = date ("Y-m-d");
	$hacedeporte = $_POST['hacedeporte'];
	$deporte = $_POST['deporte'];
    $dieta = $_POST['dieta'];
    $motivo = $_POST['motivo'];
	$plan = 'ninguno';
  
	
	$sql = pg_query("INSERT INTO persona(nombre,apellido,sexo,direccion,fecha,telefono,peso,trabajo,finalidad,meta,hacedeporte,deporte,dieta,motivo,planp) 
		VALUES ('$nombre','$apellido','$sexo','$direccion','$fecha','$tel','$peso','$trabajo','$finalidad','$meta','$hacedeporte','$deporte','$dieta','$motivo','$plan')");

	
 if ($sql) {
        
        $sql2 = pg_query("SELECT MAX(id) AS id FROM persona");
        $row2 = pg_fetch_assoc($sql2);
        $idpersonapeso = $row2['id'];
        $mes = date("M");
        $agregapeso = pg_query("INSERT INTO pesos(id_personas,pesos,mes) VALUES ('$idpersonapeso','$peso','$mes')");
 
		header('Location: ../../dashboard.php?page=reg2&registro=exitoso');//Se guardo
	}else {
		header('Location: ../../dashboard.php?page=reg2&errorusuario=si');//No se guardo el correo o el pasaporte ya existe !
	}

 
?>          
