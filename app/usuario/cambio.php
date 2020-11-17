
<br>  <br><div class="row">
                    <div class="col-sm-3 col-xs-12">
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="card card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Cambio de contraseña</h4><br>
                            
                             <?php
                                 if ($_GET["errorusuario"]=="si"){
                             ?>
                                 <div class="alert"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> Ha ocurrido en error</strong></div>
                           <?php  
                               }elseif ($_GET["registro"]=="exitoso") {
                                ?>
                                  <div class="success"><strong style="color: #ffffff;background-color: #5baf30;padding: 8px;border-radius: 3px;">Cambio exitoso</strong></div> <br>
                            <?php 
                                 }  
                             ?>
                          
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                  <form name="formulario" action="app/usuario/cambiofunc.php" method="post">

                     
                        
                        <div class="form-group">
                            <label for="cedula">Ingrese Contrasena anterior</label>
                            <input type="text" class="form-control" name="password" id="cedula" placeholder="Contrasena anterior" required="">
                        </div>

                      

                        <div class="form-group">
                            <label for="p1">Ingrese contrasena nueva</label>
                            <input type="password" class="form-control" name="p1" placeholder="Contraseña" required=""><div id="mensaje"></div>
                        </div>

                        <div class="form-group">
                            <label for="nombre">confirme contrasena nueva</label>
                        <input type="password" class="form-control" name="p2" placeholder="Repita Contraseña" required="" onkeyup="comprobar();">
                        </div>

                     

                       <br>
                        <button type="submit" class="btn btn-info" >Cambiar</button>
                       
                </form>

                                </div>
                                 
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                    </div>
                     
                </div>
        <script type="text/javascript" >
                        function comprobar() {
                                var p1 = document.formulario.p1.value;
                                var p2 = document.formulario.p2.value;
                               
                                if (p1 != p2) {
                                        document.getElementById("mensaje").innerHTML = "<h5>Las Contraseña no coinciden</h5>";
                                } else {
                                        document.getElementById("mensaje").innerHTML = "<h5>coinciden</h5>";
                                }
                        }
                </script>
