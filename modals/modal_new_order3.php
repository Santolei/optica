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
            <div class="form-group col-sm-12 col-md-4">
                <label for="add_tipo_lente">Tipo de lente:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control" name="add_tipo_lente" id="add_tipo_lente" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Monofocal">Monofocal</option>
                    <option value="Bifocal">Bifocal</option>
                    <option value="Multifocal">Multifocal</option>
                  </select>
                </div>

            </div>

            <!-- // ---------------------------- -->
            <!-- // MONOFOCAL ------------------ -->
            <div class="col-md-8 hidden" id="add_monofocal">
              <!-- Lejos -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Lejos:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_monofocal_lejos_der" id="add_monofocal_lejos_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_monofocal_lejos_izq" id="add_monofocal_lejos_izq" autocomplete="off">
                </div>
              </div>
              <!-- Media -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2 mb-0">
                  <h5 style="margin-left: -38px"><strong>Intermedia:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_media_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_monofocal_media_der" id="add_monofocal_media_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_media_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_monofocal_media_izq" id="add_monofocal_media_izq" autocomplete="off">
                </div>
                
              </div>
              <!-- Cerca -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Cerca:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_cerca_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_monofocal_cerca_der" id="add_monofocal_cerca_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                  <label for="add_monofocal_cerca_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_monofocal_cerca_izq" id="add_monofocal_cerca_izq" autocomplete="off">
                </div>
              </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // BIFOCAL ------------------ -->
            <div class="col-md-8 hidden" id="add_bifocal">
              <!-- Lejos -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2">
                  <h5><strong>Lejos:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_bifocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_bifocal_lejos_der" id="add_bifocal_lejos_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_bifocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_bifocal_lejos_izq" id="add_bifocal_lejos_izq" autocomplete="off">
                </div>
              </div>
              <!-- Adicion -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2">
                  <h5 style="margin-left: -10px"><strong>Adición:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_bifocal_adicion_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_bifocal_adicion_der" id="add_bifocal_adicion_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_bifocal_adicion_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control adicion-izq" type="text" name="add_bifocal_adicion_izq" id="add_bifocal_adicion_izq" autocomplete="off">
                </div>
              </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // MULTIFOCAL ----------------- -->
            <div class="col-md-8 hidden" id="add_multifocal">
              <!-- Lejos -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2">
                  <h5><strong>Lejos:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_multifocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_multifocal_lejos_der" id="add_multifocal_lejos_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_multifocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_multifocal_lejos_izq" id="add_multifocal_lejos_izq" autocomplete="off">
                </div>
              </div>
              <!-- Adicion -->
              <div class="d-flex align-items-center">
                <div class="form-group col-md-2">
                  <h5 style="margin-left: -10px"><strong>Adición:</strong></h5>
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_multifocal_adicion_der" class="mb-0"><span class="mr-2">OD</span></label>
                  <input class="form-control" type="text" name="add_multifocal_adicion_der" id="add_multifocal_adicion_der" autocomplete="off">
                </div>
                <div class="form-group col-md-5 d-flex align-items-center">
                  <label for="add_multifocal_adicion_izq" class="mb-0"><span class="mr-2">OI</span></label>
                  <input class="form-control" type="text" name="add_multifocal_adicion_izq" id="add_multifocal_adicion_izq" autocomplete="off">
                </div>
              </div>
            </div>

        </div>

        <!-- Material -->

        <div class="row">
          <div class="form-group col-md-6">
                <label for="add_material">Material:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control" name="add_material" id="add_material" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Material</option>
                    <option value="Mineral">Mineral</option>
                    <option value="Organico">Orgánico</option>
                    <option value="Policarbonato">Policarbonato</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>
            </div>
        </div>

        <!-- Producto -->

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