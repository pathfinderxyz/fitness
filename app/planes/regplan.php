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
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Registrar nuevo plan</h4><br>
                    
                            <h5 class="card-subtitle"> Introduzca los datos del plan </h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/planes/regplanf.php" method="post">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputName2"> Nombre del plan</label>
                                            <input type="text" class="form-control" name="plan" id="plan" required>
                                        </div>
                                        <div class="form-group">
                                        <label for="rol">Duracion</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="duracion" id="duracion" required="">
                                                
                                               <option value=""></option>
                                               <option value="2 semanas">2 semanas</option>
                                               <option value="4 semanas">4 semanas</option>
                                               <option value="6 semanas">6 semanas</option> 
                                               
                                               
                                        </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail2">Caracteristicas</label><br>
                                            <textarea class="form-control" name="caracteristicas" id="caracteristicas" rows="2" cold="20"></textarea>
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