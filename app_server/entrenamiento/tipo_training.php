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
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Planes de entrenamiento</div>
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
                                        <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tipo de plan</th>
                                                        <th>Duracion</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>liviano (baja intensidad)</td>
                                                        <td>2 semanas</td>
                                                        <td><button style="margin-bottom: 2px;" type="button"  class="btn btn-info btn-sm">Asignar a cliente</button>
                                                          </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Moderado (baja intensidad)</td>
                                                        <td>4 semanas</td>
                                                        <td><button style="margin-bottom: 2px;" type="button"  class="btn btn-info btn-sm">Asignar a cliente</button></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Alta intensidad</td>
                                                        <td>6 semanas</td>
                                                        <td><button style="margin-bottom: 2px;" type="button"  class="btn btn-info btn-sm">Asignar a cliente</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>