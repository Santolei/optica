<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_edit_new_order4" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Datos de Armazón</h4>

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
                <label for="add_marca">Marca:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_marca">
            </div>

            <div class="form-group col-md-6">
                <label for="add_material_armazon">Material:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_material_armazon">
            </div>
          </div>

          <!-- row -->
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="add_tipo_armazon">Tipo de Armazón:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_tipo_armazon">
            </div>
            <div class="form-group col-sm-6 col-md-3">
                <label for="add_distancia_interpupilar">Dist Interpupilar:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_distancia_interpupilar">
            </div>

            <div class="form-group col-sm-6 col-md-3">
                <label for="add_altura">Altura:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_altura">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
                <label for="add_observaciones">Trabajo:</label>
                <select name="add_trabajo" class="form-control" id="add_trabajo">
                  <option value="Calib">Calib</option>
                  <option value="Rep">Rep</option>
                  <option value="Trat">Trat</option>
                </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
                <label for="add_observaciones">Observaciones:</label>
                <textarea maxlength="200" rows="5" class="form-control" autocomplete="off" id="add_observaciones"></textarea>
            </div>
          </div>
        </form>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit" id="datos_armazon">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto