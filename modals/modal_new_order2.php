<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_new_order2" tabindex="-1" role="dialog">
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

        <!-- Modificacion graduaciones ------------------------------------------------------------------------------- -->

        <div class="row">
            <div class="form-group col-sm-12 col-md-4">
                <label for="add_tipo_lente_receta">Tipo de lente:</label>
                <div class="d-flex align-items-center">
                  <select class="form-control" name="add_tipo_lente_receta" id="add_tipo_lente_receta" selected="Seleccionar tipo de lente" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Monofocal">Monofocal</option>
                    <option value="Bifocal">Bifocal</option>
                    <option value="Multifocal">Multifocal</option>
                    <option value="Contacto">Contacto</option>
                  </select>
                </div>

            </div>

            <!-- // ---------------------------- -->
            <!-- // MONOFOCAL ------------------ -->
            <div class="col-md-8 hidden" id="add_monofocal_receta">
              <!-- // ---------------------------- -->
              <!-- Contenedor de los checckbox con los que vamos a
                   Ocultar o mostrar las distintas graduaciones -->
              <!-- // ---------------------------- -->
              <div class="d-flex justify-content-end align-items-center">
                <div class="checkbox mt-0">
                  <input type="checkbox" id="add_checkbox_lejos_receta" name="add_checkbox_lejos_receta" value="0">
                  <label for="add_checkbox_lejos_receta" class="checkbox-label">Lejos</label>
                </div>
                <div class="checkbox mt-0 ml-2 mr-2">
                  <input type="checkbox" id="add_checkbox_intermedia_receta" name="add_checkbox_intermedia_receta" value="0">
                  <label for="add_checkbox_intermedia_receta" class="checkbox-label">Intermedia</label>
                </div>
                <div class="checkbox mt-0">
                  <input type="checkbox" id="add_checkbox_cerca_receta" name="add_checkbox_cerca_receta" value="0">
                  <label for="add_checkbox_cerca_receta" class="checkbox-label">Cerca</label>
                </div>
              </div>

              <!-- Lejos -->
              <div class="justify-content-center hidden mb-3" id="lejos_receta">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Lejos:</strong></h5>
                </div>
                <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_lejos_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_esf_receta" id="add_monofocal_lejos_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_lejos_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_cil_receta" id="add_monofocal_lejos_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_lejos_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_lejos_der_eje_receta" id="add_monofocal_lejos_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_lejos_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_der_add_receta" id="add_monofocal_lejos_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_esf_receta" id="add_monofocal_lejos_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_cil_receta" id="add_monofocal_lejos_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_lejos_izq_eje_receta" id="add_monofocal_lejos_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_lejos_izq_add_receta" id="add_monofocal_lejos_izq_add_receta">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Intermedia -->
              <div class="justify-content-center hidden mb-3" id="intermedia_receta">
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
                      <label for="add_monofocal_intermedia_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_esf_receta" id="add_monofocal_intermedia_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_intermedia_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_cil_receta" id="add_monofocal_intermedia_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_intermedia_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_intermedia_der_eje_receta" id="add_monofocal_intermedia_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_intermedia_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_der_add_receta" id="add_monofocal_intermedia_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_esf_receta" id="add_monofocal_intermedia_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_cil_receta" id="add_monofocal_intermedia_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_intermedia_izq_eje_receta" id="add_monofocal_intermedia_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_intermedia_izq_add_receta" id="add_monofocal_intermedia_izq_add_receta">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Cerca -->
              <div class="justify-content-center hidden" id="cerca_receta">
                <div class="form-group col-md-2 mb-0">
                  <h5><strong>Cerca:</strong></h5>
                </div>
                <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_cerca_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_esf_receta" id="add_monofocal_cerca_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_monofocal_cerca_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_cil_receta" id="add_monofocal_cerca_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_monofocal_cerca_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_cerca_der_eje_receta" id="add_monofocal_cerca_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_monofocal_cerca_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_der_add_receta" id="add_monofocal_cerca_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_esf_receta" id="add_monofocal_cerca_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_cil_receta" id="add_monofocal_cerca_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_monofocal_cerca_izq_eje_receta" id="add_monofocal_cerca_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_monofocal_cerca_izq_add_receta" id="add_monofocal_cerca_izq_add_receta">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // BIFOCAL ------------------ -->
            <div class="col-md-8 hidden" id="add_bifocal_receta">
              <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_bifocal_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_esf_receta" id="add_bifocal_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_bifocal_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_cil_receta" id="add_bifocal_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_bifocal_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_bifocal_der_eje_receta" id="add_bifocal_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_bifocal_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_der_add_receta" id="add_bifocal_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_esf_receta" id="add_bifocal_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_cil_receta" id="add_bifocal_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_bifocal_izq_eje_receta" id="add_bifocal_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_bifocal_izq_add_receta" id="add_bifocal_izq_add_receta">
                    </div>
                  </div>
                </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // MULTIFOCAL ----------------- -->
            <div class="col-md-8 hidden" id="add_multifocal_receta">
              <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_multifocal_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_esf_receta" id="add_multifocal_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_multifocal_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_cil_receta" id="add_multifocal_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_multifocal_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_multifocal_der_eje_receta" id="add_multifocal_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_multifocal_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_der_add_receta" id="add_multifocal_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_esf_receta" id="add_multifocal_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_cil_receta" id="add_multifocal_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_multifocal_izq_eje_receta" id="add_multifocal_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_multifocal_izq_add_receta" id="add_multifocal_izq_add_receta">
                    </div>
                  </div>
                </div>
            </div>

            <!-- // ---------------------------- -->
            <!-- // CONTACTO ----------------- -->
            <div class="col-md-8 hidden" id="add_contacto_receta">
              <div class="d-flex flex-column">
                  <!-- OJO DERECHO -->
                  <div class="form-group d-flex align-items-end mb-2">
                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_contacto_der_esf_receta">ESF</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_der_esf_receta" id="add_contacto_der_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <label for="add_contacto_der_cil_receta">CIL</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_der_cil_receta" id="add_contacto_der_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <label for="add_contacto_der_eje_receta">EJE</label>
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_contacto_der_eje_receta" id="add_contacto_der_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <label for="add_contacto_der_add_receta">ADD</label>
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_der_add_receta" id="add_contacto_der_add_receta">
                    </div>
                  </div>

                  <!-- OJO IZQUIERDO -->
                  <div class="form-group d-flex align-items-end mb-0">
                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                    <!-- ESF -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_izq_esf_receta" id="add_contacto_izq_esf_receta">
                    </div>
                    <!-- CIL -->
                    <div class="text-center mr-3 quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_izq_cil_receta" id="add_contacto_izq_cil_receta">
                    </div>
                    <!-- EJE -->
                    <div class="text-center mr-3 quantity1">
                      <input class="form-control" type="number" min="-30" max="30" step="1" name="add_contacto_izq_eje_receta" id="add_contacto_izq_eje_receta">
                    </div>
                    <!-- ADICION -->
                    <div class="text-center quantity">
                      <input class="form-control" type="number" min="-30" max="30" step="0.25" name="add_contacto_izq_add_receta" id="add_contacto_izq_add_receta">
                    </div>
                  </div>
                </div>
            </div>

        </div>

        <!-- Fin Modificacion graduaciones --------------------------------------------------------------------------- -->


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