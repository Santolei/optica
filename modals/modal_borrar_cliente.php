<!--Modal: BORRAR PRODUCTO-->
<div class="modal fade" id="modalConfirmDelete<?php echo $paciente['id_paciente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="heading">¿Estás seguro que quieres borrar el paciente <br> <strong><?php echo $paciente['nombre']; ?></strong>?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">
        <p>¡Esta acción es irreversible!</p>

        <i class="mr-4 fa fa-times fa-4x animated rotateIn"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="consultas/borrar_paciente.php?id=<?php echo $paciente['id_paciente']; ?>" class="btn btn-outline-danger">Si</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Fin Modal: BORRAR PRODUCTO-->