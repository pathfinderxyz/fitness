<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpersonaplan = $_GET['id'];

$sql2 = pg_query("SELECT * from persona where id ='$idpersonaplan'");
$row2 = pg_fetch_assoc($sql2);

  echo '<form action="app/registrar/eliminar.php" method="post">
      
        <div class="form-group">
         <label for="recipient-name" class="control-label">¿Esta seguro que desea eliminar a <strong>'.$row2["nombre"].' '.$row2["apellido"].'</strong>? </label>
       </div>
       
             <input type="hidden" name="idpersona" value="'.$idpersonaplan.'">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>    '
          ?>                                            