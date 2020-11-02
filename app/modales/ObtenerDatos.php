<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpersonaplan = $_GET['id'];

$sql2 = pg_query("SELECT * from persona where id ='$idpersonaplan'");
$row2 = pg_fetch_assoc($sql2);

  echo '<form action="app/planes/cambiar_plan.php" method="post">
      
        <div class="form-group">
         <label for="recipient-name" class="control-label">Plan Actual</label>
           <input type="text" class="form-control"  id="recipient-name" Placeholder="'.$row2["planp"].'">
       </div>
       <div class="form-group">
          <label or="message-text" class="control-label">Elija un plan</label>
             <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="plan">'; 
             ?> 
              <?php    
                      echo '<option value="ninguno"></option>'; 
                 $sql = pg_query("SELECT * from planes");
                     while($row = pg_fetch_assoc($sql)){
                       echo '<option>'.$row["plan"];
                       }
                ?>
          <?php       
              echo '</select>
             </div>
             <input type="hidden" name="idpersona" value="'.$idpersonaplan.'">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>    '
          ?>                                            