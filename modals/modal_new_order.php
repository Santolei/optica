<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_new_order" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar nueva orden</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/add_order.php" method="POST">
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="vendedor">Seleccionar Vendedor:</label>
              <br>
              <div class="d-flex align-items-center">
                <select class="form-control select2" name="vendedor" id="vendedor" selected="Seleccionar Vendedor" required>
                  <option value="">Seleccionar Vendedor</option>
                </select>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-12">
              <label for="paciente">Seleccionar paciente</label>
              <div class="d-flex align-items-center">
                <select class="form-control select2" name="paciente" id="paciente" selected="Seleccionar Paciente" required>
                  <option value="">Seleccionar Paciente</option>
                </select>
                <a class="text-success m-4" data-toggle="modal" data-target="#modal_add_paciente_ajax"><i class="fa fa-2x fa-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- row -->

            <input type="text" class="form-control grey lighten-4 mt-2" name="buscar" autocomplete="off" autofocus onkeyup="buscar_ajax(this.value);" placeholder="Buscar por nombre de paciente o DNI">
            <div id="mostrar" class="mt-2 mb-2 d-flex flex-column justify-content-center mostrar_pacientes">
              
            </div>
          
          <!-- row -->
          
          <hr>
          
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit">Siguiente <i class="fa fa-arrow-right"></i></button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto