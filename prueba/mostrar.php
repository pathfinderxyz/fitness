<HTML>
<HEAD>
<TITLE>mostrar.php</TITLE>
</HEAD>
<BODY>
<h1><div align="center">Lectura de la tabla</div></h1>
<br>
<br>
<?php
     include ("../errores/mostrar_errores.php");
     include ("conexion.php");

     $result = pg_query("select * from usuario"); //se guarda la consulta en la variable $result
?>
     <table align="center"><!-- Creamos la tabla con los encabezados que mostraran los registros -->
         <tr>
             <th>Nombre</th>
             <th>Telefono</th>
             <th>cedula</th>
         </tr>
         <?php //Mostramos los registros
              while ($row = pg_fetch_assoc($result)) {
                 echo '<tr>
                         <td>'.$row["nombre"].'</td>
                         <td>'.$row["telefono"].'</td>
                         <td>'.$row["cedula"].'</td>
                 </tr>';
             }
             pg_free_result($result)
         ?>
     </table>
     <br> <br> <br>

       
</BODY>
</HTML>
