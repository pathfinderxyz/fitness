<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM planes");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Planes de entrenamiento</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Planes</a>
                                </li>
                                <li class="breadcrumb-item active">Listado</li>
                            </ol>
                            <a href="?page=regplan"><button type="button" class="btn btn-cyan d-none d-lg-block m-l-15">
                                <i class="icon-plus"></i> Añadir plan</button></a>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Planes</h4>
                                <h6 class="card-subtitle">Estos son nuestros planes de entrenamiento</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                
                                                <th>Tipo de plan</th>
                                                <th>duracion</th>
                                                <th>Caracteristicas</th>
                                                 <th>Accion</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                                
                                                <td>'.$info['plan'].'</td>
                                                <td>'.$info['duracion'].'</td>
                                                <td>'.$info['caracteristicas'].'</td>
                                                <td><a class="btn btn-danger" href="javascript:void(0)" role="button" data-toggle="modal"  aria-haspopup="true" onClick="cargamodaldelete ('.$info['id'].')" ><i class="icon-close"></i> Eliminar</a></td>
                                                
                                                </tr>
                                                 <div>
                                                     <div class="modal" id="modaleliminar" tabindex="-1" role="">
                                                     <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                     <div class="modal-header">
                                                          <h4 class="modal-title" >Eliminar plan</h4>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div id="conte-modalplan"></div>
                                                     </div>
                                                     </div>
                                                     </div>
                                                 <div>

                                                ';
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
      <script>

    function cargamodaldelete(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modalplan').load('app/modales/eliminar_plan.php?id='+modal, function() {
        $('#modaleliminar').modal({show:true});
    });    
    } 
    
</script> 
           
 