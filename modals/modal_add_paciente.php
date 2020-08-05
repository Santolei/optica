<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_add_paciente" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar nuevo paciente</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/add_paciente.php" method="POST">
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="nombre">Nombre:</label>
              <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required>
            </div>
            <div class="form-group col-md-6">
              <label for="dni">DNI:</label>
              <input maxlength="100" class="form-control" type="text" name="dni" id="dni" autocomplete="off">
            </div>
            
          </div>
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="tel_cel">Teléfono/Celular:</label>
              <input maxlength="100" class="form-control" type="text" name="tel_cel" id="tel_cel" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="obra_social">Obra Social:</label>
              <input maxlength="100" class="form-control" type="text" name="obra_social" id="obra_social" autocomplete="off">
            </div>
          </div>
          
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto