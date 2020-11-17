    <br>  <br><div class="row">
                    <div class="col-sm-3 col-xs-12">
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="card card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Registrar un nuevo usuario</h4><br>
                            
                             <?php
                                 if ($_GET["errorusuario"]=="si"){
                             ?>
                                 <div class="alert"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> Ha ocurrido en error</strong></div>
                           <?php  
                               }elseif ($_GET["registro"]=="exitoso") {
                                ?>
                                  <div class="success"><strong style="color: #ffffff;background-color: #5baf30;padding: 8px;border-radius: 3px;">Registro exitoso</strong></div> <br>
                            <?php 
                                 }  
                             ?>
                            <h5 class="card-subtitle"> Introduzca los datos del usuario</h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/usuario/guardaruser.php" method="post">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputName2"> Nombre de usuario</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputName2"> Contraseña</label>
                                            <input type="text" class="form-control" name="pass" id="pass" required>
                                        </div>
                                           
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        
                                    </form>

                                </div>
                                 
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                    </div>
                     
                </div>
       
