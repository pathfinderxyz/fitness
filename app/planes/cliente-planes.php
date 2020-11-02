<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM persona");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">


    <div class="modal" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel1">Agregar Plan de entrenamiento</h4>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                            <div class="modal-body">

                                                   <p>Esta seguro que desea Eliminar este cliente ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                                                   <button type="submit" class="btn btn-success">Guardar</button>
                                             </div>

                                           
                                         </div>
                                    </div>
      </div>
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Clientes</h4>
                    </div>
                 
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clientes-Planes</h4>
                                <h6 class="card-subtitle">En esta seccion puede ver los planes de los clientes</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                <th>Nombre y apellido</th>
                                                <th>Peso</th>
                                                <th>Meta</th>
                                                <th>Plan de entrenamiento</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                            
                                                <td>'.$info['nombre'].' '.$info['apellido'].'</td>
                                                <td>'.$info['peso'].'</td>
                                                <td>'.$info['meta'].'</td>
                                                <td>'.$info['planp'].'</td>
                                                
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
                
     </div>
           
 