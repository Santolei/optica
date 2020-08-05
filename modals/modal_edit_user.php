<!-- Modal edit User -->
<div class="modal fade" id="modal_edit_user<?php echo $usuario['id_usuario']; ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Editar Usuario <?php echo $usuario['nombre']; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x pull-right">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/edit_user.php" id="form-edit-user<?php echo $usuario['id_usuario']; ?>" method="POST">
          <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
          <div class="form-group">
            <label for="nombre">Nombre del usuario:</label>
            <input class="form-control" type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="rol">Rol:</label>
            <select class="form-control" name="rol" selected="Seleccionar Rol" required>
              <option value="">Seleccionar rol</option>
              <?php foreach ($roles as $rol): ?>
                <option value="<?php echo $rol['id'] ?>"><?php echo $rol['rol'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
              <input class="form-control" type="password" name="password">
          </div>

          <div class="form-group">
            <label for="password2">Repetir contraseña:</label>
            <input class="form-control" type="password" name="password2" placeholder="Repetir contraseña">
          </div>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark white-text" type="submit">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Edit User -->