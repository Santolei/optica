<!-- Modal de Categoría -->
<div class="modal fade" id="modal_add_vendedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar Vendedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x pull-right">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/add_vendedor.php" id="form-add-vendedor" method="POST">
          <div class="form-group">
            <label for="nombre_vendedor">Nombre del vendedor:</label>
            <input class="form-control" type="text" name="nombre_vendedor" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="password_vendedor">Contraseña:</label>
              <input class="form-control" type="password" name="password_vendedor" id="password_vendedor">
          </div>

          <div class="form-group">
            <label for="password2_vendedor">Repetir contraseña:</label>
            <input class="form-control" type="password" name="password2_vendedor" id="password2_vendedor" placeholder="Repetir contraseña">
          </div>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark white-text" type="submit">Crear</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal categoría -->