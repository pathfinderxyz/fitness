<?php

     include 'conexion.php';

     $accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
     switch ($accion) {
     	case 'agregar':
     		//introduccion agregar
     	     $id = $_POST['id'];
     	     $titulo = $_POST['title'];
	         $descripcion = $_POST['descripcion'];
	         $color = $_POST['color'];
	         $textcolor = $_POST['textcolor'];
	         $inicio = $_POST['start'];
	         $final = $_POST['end'];
              $hora = $_POST['hora'];
              $fecha= date ("Y-m-d");
	         
     	     $sql = pg_query("INSERT INTO eventos (title,descripcion,color,textcolor,start,final,hora,fecha) VALUES 
     	    	('$titulo','$descripcion','$color','$textcolor','$inicio','$final','$hora','$fecha')");

     	     if ($sql) {
		         $respuesta="true";
	         }else {
		         $respuesta="false";
	         }

	         echo json_encode($respuesta);
     		break;
     	case 'eliminar':
     		
     	    $respuesta=false;
     	    $id_delete = $_POST['id'];

     	    if (isset($_POST['id'])) {
     	    	$sql = pg_query("DELETE FROM eventos Where id='$id_delete'");
     	    }
     	     if ($sql) {
		         $respuesta="true";
	         }else {
		         $respuesta="false";
	         }

	         echo json_encode($respuesta);
     		break;
     	case 'modificar':
     		
     		 $id = $_POST['id'];
     	     $titulo = $_POST['title'];
	         $descripcion = $_POST['descripcion'];
	         $color = $_POST['color'];
	         $textcolor = $_POST['textcolor'];
	         $inicio = $_POST['start'];
	         $final = $_POST['end'];
	         
     	     $sql = pg_query("UPDATE eventos SET 
     	     	title='$titulo',
     	     	descripcion='$descripcion',
     	     	color='$color',
     	     	textcolor='$textcolor',
     	     	start='$inicio',
     	     	final='$final'
     	     	Where id='$id'");

     	     if ($sql) {
		         $respuesta="true";
	         }else {
		         $respuesta="false";
	         }

	         echo json_encode($respuesta);

     		break;		
     	default:
     		$sql = pg_query("SELECT * FROM eventos");
            $row = pg_fetch_all($sql);

             echo json_encode($row);
     		break;
     }
     

?>