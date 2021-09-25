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
            <div class="form-group col-sm-12 col-md-3">
                <label for="add_tipo_lente">Tipo de lente:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control" name="add_tipo_lente" id="add_tipo_lente" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Monofocal">Monofocal</option>
                    <option value="Bifocal">Bifocal</option>
                    <option value="Multifocal">Multifocal</option>
                    <!--<option value="Contacto">Contacto</option> -->
                  </select>
                </div>

            </div>

            <!-- // ---------------------------- -->
            <!-- // MONOFOCAL ------------------ -->
            <div class="col-md-9 hidden" id="add_monofocal">
              <!-- // ---------------------------- -->
              <!-- Contenedor de los checckbox con los que vamos a
                   Ocultar o mostrar las distintas graduaciones -->
              <!-- // ---------------------------- -->
              <div class="d-flex justify-content-end align-items-center">
                <div class="checkbox mt-0">
                  <input type="checkbox" id="add_checkbox_lejos" name="add_checkbox_lejos" value="0">
                  <label for="add_checkbox_lejos" class="checkbox-label">Lejos</label>
                </div>
                <div class="checkbox mt-0 ml-2 mr-2">
                  <input type="checkbox" id="add_checkbox_intermedia" name="add_checkbox_intermedia" value="0">
                  <label for="add_checkbox_intermedia" class="checkbox-label">Intermedia</label>
                </div>
                <div class="checkbox mt-0">
                  <input type="checkbox" id="add_checkbox_cerca" name="add_checkbox_cerca" value="0">
                  <label for="add_checkbox_cerca" class="checkbox-label">Cerca</label>
                </div>
              </div>

              <!-- Lejos -->
              <div class="justify-content-center hidden mb-3" id="lejos">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Lejos:</strong></h5>
                </div>
                <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_lejos_der_esf">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_esf" id="add_monofocal_lejos_der_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_lejos_der_cil">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_cil" id="add_monofocal_lejos_der_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_lejos_der_eje">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_lejos_der_eje" id="add_monofocal_lejos_der_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_lejos_der_add">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_add" id="add_monofocal_lejos_der_add">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_esf" id="add_monofocal_lejos_izq_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_cil" id="add_monofocal_lejos_izq_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_lejos_izq_eje" id="add_monofocal_lejos_izq_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_add" id="add_monofocal_lejos_izq_add">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Intermedia -->
              <div class="justify-content-center hidden mb-3" id="intermedia">
                <hr>
                <div class="form-group col-md-2 mb-0">
                  <h5 style="margin-left: -38px"><strong>Intermedia:</strong></h5>
                </div>
                <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_intermedia_der_esf">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_esf" id="add_monofocal_intermedia_der_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_intermedia_der_cil">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_cil" id="add_monofocal_intermedia_der_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_intermedia_der_eje">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_intermedia_der_eje" id="add_monofocal_intermedia_der_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_intermedia_der_add">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_add" id="add_monofocal_intermedia_der_add">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_esf" id="add_monofocal_intermedia_izq_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_cil" id="add_monofocal_intermedia_izq_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_intermedia_izq_eje" id="add_monofocal_intermedia_izq_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_add" id="add_monofocal_intermedia_izq_add">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Cerca -->
              <div class="justify-content-center hidden" id="cerca">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Cerca:</strong></h5>
                </div>
                <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_cerca_der_esf">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_esf" id="add_monofocal_cerca_der_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_cerca_der_cil">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_cil" id="add_monofocal_cerca_der_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_cerca_der_eje">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_cerca_der_eje" id="add_monofocal_cerca_der_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_cerca_der_add">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_add" id="add_monofocal_cerca_der_add">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_esf" id="add_monofocal_cerca_izq_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_cil" id="add_monofocal_cerca_izq_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_cerca_izq_eje" id="add_monofocal_cerca_izq_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_add" id="add_monofocal_cerca_izq_add">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // BIFOCAL ------------------ -->
            <div class="col-md-7 hidden" id="add_bifocal">
              <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_bifocal_der_esf">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_esf" id="add_bifocal_der_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_bifocal_der_cil">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_cil" id="add_bifocal_der_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_bifocal_der_eje">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_bifocal_der_eje" id="add_bifocal_der_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_bifocal_der_add">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_add" id="add_bifocal_der_add">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_esf" id="add_bifocal_izq_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_cil" id="add_bifocal_izq_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_bifocal_izq_eje" id="add_bifocal_izq_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_add" id="add_bifocal_izq_add">
                    </div>
                  </div>
                </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // MULTIFOCAL ----------------- -->
            <div class="col-md-7 hidden" id="add_multifocal">
              <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_multifocal_der_esf">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_esf" id="add_multifocal_der_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_multifocal_der_cil">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_cil" id="add_multifocal_der_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_multifocal_der_eje">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_multifocal_der_eje" id="add_multifocal_der_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_multifocal_der_add">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_add" id="add_multifocal_der_add">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_esf" id="add_multifocal_izq_esf">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_cil" id="add_multifocal_izq_cil">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_multifocal_izq_eje" id="add_multifocal_izq_eje">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_add" id="add_multifocal_izq_add">
                    </div>
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