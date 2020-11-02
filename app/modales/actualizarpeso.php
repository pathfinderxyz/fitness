<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpersonaplan = $_GET['id'];

$sql2 = pg_query("SELECT * from persona where id ='$idpersonaplan'");
$row2 = pg_fetch_assoc($sql2);

  echo '<form action="app/registrar/update_peso.php" method="post">
      
        <div class="form-group">
         <label for="recipient-name" class="control-label">Ultimo peso</label>
           <input type="text" class="form-control"  id="recipient-name" Placeholder="'.$row2["peso"].'">
       </div>
        <div class="form-group">
         <label for="recipient-name" class="control-label">Introduzca el nuevo peso (KG)</label>
           <input type="number" class="form-control" name="peso">
       </div>
       
             <input type="hidden" name="idpersona" value="'.$idpersonaplan.'">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>    '
          ?>                                            