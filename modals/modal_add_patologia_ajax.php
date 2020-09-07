<!-- Modal de Categoría -->
<div class="modal fade" id="modal_add_patologia_ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar patología</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form id="add_patologia_ajax" action="consultas/add_patologia.php" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre de la patología:</label>
            <input autofocus class="form-control" type="text" name="nombre_patologia" id="nombre_patologia" autocomplete="off" required>
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