<?php  
  include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';
?>


                   <div class="row">
                    <div class="col-sm-3">
                    </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Registre un nuevo cliente</div>
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
                                        

                                        <div class="sub-title">Datos Personales</div>
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Apellido</label>
                                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Sexo</label>
                                            <input type="number" class="form-control" name="cedula" id="cedula" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Direccion</label>
                                            <input type="number" class="form-control" name="carga" id="carga" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Fecha de nacimiento</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha">
                                        </div>
                                   
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Telefono</label>
                                            <input type="number" class="form-control" name="telefono" id="telefono" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Peso (Kg)</label>
                                            <input type="number" class="form-control" name="telefono" id="telefono" required>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;En que trabaja ?</label>
                                            <input type="text" class="form-control" name="trabajo" id="trabajo" required>
                                        </div>
                                        
                                        
<!-- --------------------------------------------Datos para el entrenamiento---------------------------------- -->

                                        <div class="sub-title">Datos para el entrenamiento</div>

                                        <div class="form-group">
                                        <label for="rol">¿Que quiere o que busca?</label>
                                        <select  name="rol" id="rol" required="">
                                                
                                               <option value=""></option>
                                               <option value="Bienes">Reducir peso</option>
                                               <option value="Especialista">Mantener el peso</option>
                                               <option value="Informatica">Aumentar el peso</option> 
                                               <option value="Estadistica">Buscar mejor calidad de vida</option>
                                               <option value="Administracion">Reduccion de dolores</option>
                                                <option value="Contaduria">Otros</option>
                                               
                                        </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="rol">¿Hace deporte?</label>
                                        <select  name="rol" id="rol" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               </option>
                                               <option value="Bienes">Si</option>
                                               <option value="Especialista">No</option>
                                            
                                               
                                        </select>
                                        </div>

                                         <div class="form-group">
                                        <label for="rol">Indique que deporte hace</label>
                                        <select  name="rol" id="rol" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                               <option value="Bienes">Ninguno</option>
                                               <option value="Especialista">Futboll</option>
                                               <option value="Bienes">Basquet</option>
                                               <option value="Especialista">Tennis</option>
                                               <option value="Bienes">Natacion</option>
                                               <option value="Especialista">Voleibol</option>
                                               <option value="Bienes">Beisbol</option>
                                               <option value="Especialista">Carreras</option>
                                               <option value="Especialista">Ciclismo</option>
                                            
                                               
                                        </select>
                                        </div>

                                         <div class="form-group">
                                        <label for="rol">¿Hace dieta?</label>
                                        <select  name="rol" id="rol" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                               <option value="Bienes">Si</option>
                                               <option value="Especialista">No</option>
                                            
                                               
                                        </select>
                                        </div>
                                      
                                         <div class="form-group">
                                            <label for="exampleInputEmail2">Indique que tipo de dieta hace:</label><br>
                                            <textarea class="form-control" name="motivo" rows="2" cold="20"></textarea>
                                        </div>                
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                         <div class="col-sm-3">
                    </div>
                    </div>

                    