<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_edit_new_order2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Datos de receta</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form method="POST">
          <!-- row -->
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="nombre_doctor">Doctor:</label>
                <input maxlength="100" class="form-control" type="text" id="nombre_doctor" required>
            </div>

            <div class="form-group col-md-6">
                <label for="add_fecha_receta">Fecha de receta:</label>
                <input maxlength="100" class="form-control" type="date" id="add_fecha_receta" autocomplete="off" required>
            </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="add_patologias">Patología</label>
            <div class="d-flex align-items-center">
              <select class="form-control select2" name="add_patologia" id="add_patologia" selected="Seleccionar Patología">
                <option value="">Seleccionar Patología</option>
              </select>
            </div>
          </div>

          <div class="form-group col-sm-12 col-md-3">
              <label for="add_graduacion_od">Graduación OD:</label>
              <input maxlength="100" class="form-control" type="number" id="add_graduacion_od" step="any" autocomplete="off" required>
          </div>
          <div class="form-group col-sm-12 col-md-3">
              <label for="add_graduacion_oi">Graduación OI:</label>
              <input maxlength="100" class="form-control" type="number" id="add_graduacion_oi" step="any" autocomplete="off" required>
          </div>
        </div>
        
        </form>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit" id="datos_receta">Siguiente <i class="fa fa-arrow-right"></i></button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto