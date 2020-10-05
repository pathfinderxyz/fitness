<?php 
     
    include '../../coneccion/coneccion.php';
    /*$id = $_GET['id']; */

     
    $sql = pg_query("SELECT * FROM persona");
    $row1 = pg_fetch_assoc($sql2);
    $row = pg_num_rows($sql);
    
?>
            <form>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Clientes Registrados</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel">

                                        <!-- Default panel contents 
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Historial de Solicitudes</strong>

                                        </div>-->
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead color="#000000">
                                                <tr>
                                                    <th>Nombre y Apellido</th>
                                                    <th>Sexo</th>
                                                    <th>Fecha de nacimiento</th>
                                                    <th>Direccion</th>
                                                    <th>Deporte</th>
                                                    <th>Ver</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr>
                                                     <td>Jose Carvajal</td>
                                                     <td>Masculino</td>
                                                     <td>18/10/1991</td>
                                                     <td>Porlamar, Nueva Esparta</td>
                                                     <td>Beisbol</td> 
                                                     <td>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-warning ">Entrenamiento</button>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-success ">Graficas</button>
                                                          
                                                     </td>                                                   
                                                 </tr>
                                                  <tr>
                                                     <td>Michel Rodriguez</td>
                                                     <td>Femenino</td>
                                                     <td>28/11/1994</td>
                                                     <td>Caracas</td>
                                                     <td>Natacion</td> 
                                                     <td>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-warning ">Entrenamiento</button>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-success ">Graficas</button>
                                                          
                                                     </td>                                                   
                                                 </tr>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             <td>'.$info['cedula'].'</td>
                                                             <td>'.$info['nombre'].'</td>
                                                             <td>'.$info['apellido'].'</td>
                                                             <td>'.$info['municipio'].'</td>
                                                             <td>'.$info['solicitud'].'</td>
                                                             <td>'.$info['fecha'].'</td>                                                 
                                                          </tr>';
                                                         }
                                                     }else{

                                                       }
                                                 ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>