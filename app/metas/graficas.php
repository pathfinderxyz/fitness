<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpesop = $_GET['idpp'];

$sql3 = pg_query("SELECT * from persona where id ='$idpesop'");
$row3 = pg_fetch_assoc($sql3);
                               
?>



<div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Metas 
                        </h4>
                    </div>
                 
                </div>
               
                
                    
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafica de <?php echo $row3['nombre'] ?> <?php echo $row3['apellido'] ?></h4>
                                <div>
                                    <canvas id="graficapeso" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
</div>
                
<script type="text/javascript">
           
 $(function() {
    
    /*<!-- ============================================================== -->*/
    /*<!-- Line Chart -->*/
    /*<!-- ============================================================== -->*/
    new Chart(document.getElementById("graficapeso"),
        {
            "type":"line",
            "data":{"labels":[
                              <?php 
                        $sql2 = pg_query("SELECT * from pesos where id_personas ='$idpesop'");
                           while($row2 = pg_fetch_assoc($sql2)){
                                echo '"'.$row2['mes'].'"';
                                echo ',';
                            }
                          
                         ?>"Proximo",

                            ],
            "datasets":[{
                            "label":"Evolucion de peso",
                            "data":[
                             <?php 
                               $sql = pg_query("SELECT * from pesos where id_personas ='$idpesop'");
                                while($row = pg_fetch_assoc($sql)){
                                echo $row['pesos'];
                                echo ',';
                               }
                          
                             ?>
                            ],
                            "fill":false,
                            "borderColor":"rgb(75, 192, 192)",
                            "lineTension":0.1
                        }]
        },"options":{}});
    
    
        });
    

</script>