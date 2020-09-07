<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_new_order3" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Datos Cristales</h4>

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
                <label for="add_tipo_lente">Tipo de lente:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control select2" name="add_tipo_lente" id="add_tipo_lente" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Monofocal">Monofocal</option>
                    <option value="Bifocal">Bifocal</option>
                    <option value="Multifocal">Multifocal</option>
                  </select>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="add_material">Material:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control" name="add_material" id="add_material" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Material</option>
                    <option value="Mineral">Mineral</option>
                    <option value="Organico">Organico</option>
                    <option value="Policarbonato">Policarbonato</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="add_producto">Producto</label>
            <div class="d-flex align-items-center">
              <select class="form-control select2" name="add_producto" id="add_producto" selected="Seleccionar Producto" required>
                <option value="">Seleccionar Producto</option>
              </select>
            </div>
          </div>

          <div class="form-group col-sm-12 col-md-6">
              <label for="add_tratamiento">Tratamiento:</label>
              <div class="d-flex align-items-center">
              <select class="form-control select2" name="add_tratamiento" id="add_tratamiento" selected="Seleccionar Tratamiento" required>
                <option value="">Seleccionar Tratamiento</option>
              </select>
            </div>
          </div>
        </div>
        
        </form>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit" id="datos_cristales">Siguiente <i class="fa fa-arrow-right"></i></button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto