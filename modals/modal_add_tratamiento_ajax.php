<!-- Modal de Categoría -->
<div class="modal fade" id="modal_add_tratamiento_ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar tratamiento</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form id="add_tratamiento_ajax" action="consultas/add_tratamiento.php" method="POST">
          <div class="form-group">
            <label for="nombre_tratamiento">Nombre del tratamiento:</label>
            <input autofocus class="form-control" type="text" name="nombre_tratamiento" id="nombre_tratamiento" autocomplete="off" required>
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
<!-- Fin modal categoría -->