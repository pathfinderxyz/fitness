<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM persona");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">


                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Metas</h4>
                    </div>
                 
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Metas y graficas de los clientes</h4>
                                <h6 class="card-subtitle">Aqui puedes ver los avances de los clientes</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                <th>Nombre y apellido</th>
                                                <th>Peso</th>
                                                <th>Meta</th>
                                                <th>Graficos de avance</th>
                                                
                                                
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
                                                <td><a class="btn btn-dark" href="?page=grafica&idpp='.$info['id'].'" role="button"><span class="btn-label"><i class="icon-graph"></i></span> Ver Grafica</a></td>
                                                
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
           
 