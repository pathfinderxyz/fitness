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
                       <strong><h4 class="text-themecolor">Bienvenido <?php  echo $_SESSION['nombre'];?></h4></strong> 
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            
                            <?php  
                                  if ($_SESSION['rol'] == 'admin') {
                                     echo '<button type="button" class="btn btn-cyan d-none d-lg-block m-l-15"><i class="icon-plus"></i>Añadir cliente</button>';
                                         }
                                 ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <!-- Column -->
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tu Agenda</h5>
                                <div class="steamline m-t-40">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Entrenamiento <span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-dark"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Entrenamiento <span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Entrenamiento <span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Entrenamiento <span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-6">
                        <div class="card">
                         
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Noviembre 2020</h3>
                                        <h5 class="font-light m-t-0">Reporte del mes</h5></div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                        <h2 class="text-success"><?php echo $row;  ?> Clientes</h2></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center"># Codigo</th>
                                            <th>Cliente</th>
                                            <th>Plan de entrenamiento</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo 
                                        '<tr>
                                                <td>'.$info['id'].'</td>
                                                <td>'.$info['nombre'].'</td>
                                                <td>'.$info['planp'].'</td>
                                                
                                                
                                                </tr>  ';
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