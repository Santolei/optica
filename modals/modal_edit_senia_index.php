<!-- Modal de editar producto -->
<div class="modal fade" id="modal_edit_senia_index<?php echo $orden['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header info-color">
        <p class="heading lead">Editar Seña</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/edit_senia_index.php" id="form-edit-senia<?php echo $orden['id'] ?>" data-form="<?php echo $orden['id'] ?>" class="form-senia" method="POST">
          <div class="form-group">
            <label for="nombre">Seña:</label>
            <input class="form-control" type="text" name="senia" id="senia" value="<?php echo $orden['senia']; ?>" autocomplete="off" required>
            <input type="hidden" name="id_orden" value="<?php echo $orden['id']; ?>">
            <input type="hidden" name="total" id="total" value="<?php echo $orden['total']; ?>">
          </div>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn info-color white-text guardarsenia">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancelar</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal editar seña-->