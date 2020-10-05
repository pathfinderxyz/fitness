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
                                    <div class="title">Peso por semana</div>
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
                                                    <th>Semana 1</th>
                                                    <th>Semana 2</th>
                                                    <th>Semana 3</th>
                                                    <th>Semana 4</th>
                                                    <th>Semana 5</th>
                                                    <th>Semana 6</th>
                                                    <th>Actualizar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                  <tr>
                                                     <td>Jose Carvajal</td>
                                                     <td>85 </td>
                                                     <td>0</td>
                                                     <td>0</td>
                                                     <td>0</td>
                                                     <td>0</td>
                                                     <td>0</td>
                                                     <td>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-warning ">Actualizar Peso</button>
                                                          <button style="margin-bottom: 2px;" type="button"  class="btn btn-danger ">Ver Grafica</button>
                                                          
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