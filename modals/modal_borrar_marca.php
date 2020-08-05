<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDeleteMarca<?php echo $marca['id_marca']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading"><strong>¿Estás seguro que quieres borrar la marca <?php echo $marca['nombre']; ?>?</strong></p>
      </div>

      <!--Body-->
      <div class="modal-body">
        <p>¡Esta acción es irreversible!</p>

        <div class="text-center">
          <i class="fa fa-times fa-4x danger-color"></i>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer d-flex ">
        <a href="consultas/borrar_marca.php?id=<?php echo $marca['id_marca']; ?>" class="btn btn-outline-danger w-50">Si</a>
        <a type="button" class="btn btn-danger w-50" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->