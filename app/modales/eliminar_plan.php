<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idplan = $_GET['id'];

$sql2 = pg_query("SELECT * from planes where id ='$idplan'");
$row2 = pg_fetch_assoc($sql2);

  echo '<form action="app/planes/eliminarplan.php" method="post">
      
        <div class="form-group">
         <label for="recipient-name" class="control-label">¿Esta seguro que desea eliminar el plan <strong> '.$row2["plan"].'</strong>  ? </label>
       </div>
       
             <input type="hidden" name="idplan" value="'.$idplan.'">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>    '
          ?>          