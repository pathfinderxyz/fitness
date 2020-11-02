<HTML>

<HEAD>
<TITLE>Insertar.php</TITLE>
</HEAD>

<BODY>
<?php
     include ("../errores/mostrar_errores.php");
     include ("conexion.php");
     $nombre = $_POST['nombre'];
     $telefono = $_POST['telefono'];
     $cedula = $_POST['cedula'];

     pg_query("insert into usuario (nombre,telefono,cedula) values ('$nombre','$telefono','$cedula')");
     //header("location:insertar.html");
?>

<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="mostrar.php">Visualizar el contenido de la base</a></div>
</BODY>
</HTML>
