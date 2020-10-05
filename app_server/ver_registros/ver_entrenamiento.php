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
                                    <div class="title">Planes de entrenamiento de los clientes</div>
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
                                                    <th>Codigo del cliente</th>
                                                    <th>Nombre y Apellido</th>
                                                    <th>Plan de entrenamiento</th>
                                                    <th>Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                  <tr>
                                                     <td>5533</td>
                                                     <td>Jose Carvajal</td>
                                                     <td></td>
                                                     <td>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-info ">Asignar Entrenamiento</button>
                                                          
                                                          
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