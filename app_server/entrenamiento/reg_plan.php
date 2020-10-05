<?php  
  include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';
?>


                   <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Registre un nuevo plan de entrenamiento</div>
                                    </div>
                                </div>
                                  
                                <div class="card-body">
                                   <?php  
                                     if (isset($_GET['mensaje'])) {
                                        if ($_GET['mensaje'] == 0) {
                                           echo '<div class="row">
                                            <div class="col-md-8">
                                               <div class="alert">
                                                   <strong><span style="margin-left:25px;color:#990000;">Error al guardar el registro Intentelo de nuevo !</span></strong>
                                              </div>
                                            </div>
                                            </div>';
                                         }
                                       }
                                   ?>
                                    <form  action="#" method="post">
                                        

                                       
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                      


                                        <div class="form-group">
                                        <label for="exampleInputEmail2"> &nbsp;&nbsp;Duracion</label><br>
                                        <select  name="rol" id="rol" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                               <option value="Bienes">1 semana</option>
                                                <option value="Bienes">2 semanas</option>
                                                 <option value="Bienes">3 semanas</option>
                                                  <option value="Bienes">4 semanas</option>
                                               
                                        </select>
                                        </div>

                                        
                                      
                                         <div class="form-group">
                                            <label for="exampleInputEmail2">Caracteristicas del plan</label><br>
                                            <textarea class="form-control" name="motivo" rows="2" cold="20"></textarea>
                                        </div>                
                                        <button type="submit" class="btn btn-danger">Guardar Plan</button>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    