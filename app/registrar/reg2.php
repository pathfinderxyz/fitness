<?php 
     $miid=  $_SESSION['id'];
     $patro=  $_SESSION['usuario'];
     
    ?>
<style type="text/css">
    .card-subtitle{
       font-weight: 500 !important;
       color: #212529 !important;
    }
    .wrapper{ 
     
       width:600px; 
       overflow-y:scroll; 
       position:relative;
       height: 300px;
}
</style>
<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <br><section id="wrapper">
        
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="card card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Registrar nuevo cliente</h4><br>
                    
                             <?php
                                 if ($_GET["errorusuario"]=="si"){
                             ?>
                                 <div class="alert"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> ¡El correo ya esta siendo usado por otra persona!</strong></div>
                           <?php  
                               }elseif ($_GET["registro"]=="exitoso") {
                                ?>
                                  <div class="success"><strong style="color: #ffffff;background-color: #5baf30;padding: 8px;border-radius: 3px;">¡Registro exitoso!</strong></div> <br>
                            <?php 
                                 }  
                             ?>
                            <h5 class="card-subtitle"> Datos Personales </h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/registrar/reg22.php" method="post">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Apellido</label>
                                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                                        </div>
                                         <div class="form-group">
                                        <label for="rol">Sexo</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="sexo" id="sexo" required="">
                                                
                                               <option value=""></option>
                                               <option value="hombre">Hombre</option>
                                               <option value="mujer">Mujer</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Direccion</label>
                                            <input type="text" class="form-control" name="direccion" id="direccion" required>
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
                                            <input type="number" class="form-control" name="peso" id="peso" required>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;En que trabaja ?</label>
                                            <input type="text" class="form-control" name="trabajo" id="trabajo" required>
                                        </div>
                                        
                                        


                                        <h5 class="card-subtitle"> Datos para el entrenamiento </h5>

                                        

                                        <div class="form-group">
                                        <label for="rol">¿Que quiere o que busca?</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="finalidad" id="finalidad" required="">
                                                
                                               <option value=""></option>
                                               <option value="Reducir peso">Reducir peso</option>
                                               <option value="Mantener el peso">Mantener el peso</option>
                                               <option value="Aumentar el peso">Aumentar el peso</option> 
                                               <option value="Buscar mejor calidad de vida">Buscar mejor calidad de vida</option>
                                               <option value="Reduccion de dolores">Reduccion de dolores</option>
                                                <option value="Otros">Otros</option>
                                               
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Meta de Peso(Kg)</label>
                                            <input type="number" class="form-control" name="meta" id="meta" required>
                                        </div>

                                        <div class="form-group">
                                        <label for="rol">¿Hace deporte?</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="hacedeporte" id="hacedeporte" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               </option>
                                               <option value="Si">Si</option>
                                               <option value="No">No</option>
                                            
                                               
                                        </select>
                                        </div>

                                         <div class="form-group">
                                        <label for="rol">Indique que deporte hace</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="deporte" id="deporte" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                               <option value="Ninguno">Ninguno</option>
                                               <option value="Futboll">Futboll</option>
                                               <option value="Basquet">Basquet</option>
                                               <option value="Tennis">Tennis</option>
                                               <option value="Natacion">Natacion</option>
                                               <option value="Voleibol">Voleibol</option>
                                               <option value="Beisbol">Beisbol</option>
                                               <option value="Carreras">Carreras</option>
                                               <option value="Ciclismo">Ciclismo</option>
                                            
                                               
                                        </select>
                                        </div>

                                         <div class="form-group">
                                        <label for="rol">¿Hace dieta?</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="dieta" id="dieta" required="">
                                                
                                               <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                               <option value="Si">Si</option>
                                               <option value="No">No</option>
                                            
                                               
                                        </select>
                                        </div>
                                      
                                         <div class="form-group">
                                            <label for="exampleInputEmail2">Indique que tipo de dieta hace:</label><br>
                                            <textarea class="form-control" name="motivo" id="motivo" rows="2" cold="20"></textarea>
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
       

    </section>

</body>