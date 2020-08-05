<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete<?php echo $categoria['id_categoria']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">¿Estás seguro que quieres borrar la categoría?</p>
      </div>

      <!--Body-->
      <div class="modal-body">
        <p>¡Esta acción es irreversible!</p>

        <i class="fa fa-times fa-4x animated rotateIn"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="consultas/borrar_categoria.php?id=<?php echo $categoria['id_categoria']; ?>" class="btn btn-outline-danger">Si</a>
        <a type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->