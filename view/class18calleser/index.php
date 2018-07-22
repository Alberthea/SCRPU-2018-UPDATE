<?php $result = $this->class18calleser->listar(); ?>

    <center><h2>Listado Existencia de Calle en Servidumbre Frente a Ruta</h2>  </center> 
    <a href="?c=class18calleser&m=agregar" class="btn btn-primary" role="button">Registrar Existencia de Calle en Servidumbre Frente a Ruta</a>
    <br>
    <br>    
    <?php if ($result->num_rows): ?>
      <table class="display table table-bordered" cellpadding="0" cellspacing="0" border="0" width="100%" id="grilla-calleser">
        <thead>
          <tr>
            <th>Código Existencia de Calle en Servidumbre Frente a Ruta</th>
            <th>Descripción Existencia de Calle en Servidumbre Frente a Ruta</th>
            <th style="width: 120px;">Más</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($result)):?>
            <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
         
             <td><div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li>
                        <a href="?c=class18calleser&m=editar&id=<?php echo $row[0]; ?>">
                        <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                    </li>
                    <li>
                      <a href="?c=class18calleser&m=eliminar&id=<?php echo $row[0]; ?>">
                       <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                    </li>
                     <li>
                      <a href="?c=class18calleser&m=ver&id=<?php echo $row[0]; ?>">
                       <span class="glyphicon glyphicon-eye-open"></span> ver</a>
                    </li>
                  </ul>
                </div></td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <div style="background-color:#b2ff59" class="alert alert-info">
              <center>
               <strong>¡Información!</strong> No hay información registrada.
              </center>
            </div>
          <?php endif ?>
        </tbody>
      </table>
