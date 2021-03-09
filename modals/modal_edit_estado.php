<!-- Modal de editar producto -->
<div class="modal fade" id="modal_edit_estado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="p-4 info-color d-flex justify-content-between align-items-center">
        <p class="heading lead mb-0">Editar estado</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <div class="pl-4">
        <p class="mb-0">Orden N°: <span id="nroorden"></span></p>
      </div>

      <!--Body-->
      <div class="modal-body mt-0">

        <form action="consultas/editar_estado.php" id="form-add-producto" method="POST">
          <div class="form-group p-2">
            <label for="estado">Estado:</label>
            <div class="row">
              <div class="col-md-6">
                <select name="estado" onchange="checkEstado()" class="form-control mb-4" id="estado">
                  <option value="Reservado">Reservado</option>
                  <option value="Esperando seña">Esperando seña</option>
                  <option value="Esperando cristales">Esperando cristales</option>
                  <option value="Esperando armazón">Esperando armazón</option>
                  <option value="En taller">En taller</option>
                  <option value="Para entregar (Avisar)">Para entregar (Avisar)</option>
                  <option value="Para entregar (Avisado)">Para entregar (Avisado)</option>
                  <option value="Entregado">Entregado</option>
                </select>
              </div>
              <div class="col-md-6 hidden entregar_container">
                <select name="entregar" class="form-control" id="entregar">
                  <option value="Avisar">Avisar</option>
                  <option value="Avisado">Avisado</option>
                </select>
              </div>
            
            </div>
            <input type="hidden" name="id_orden" id="id_orden">
          </div>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn info-color white-text">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancelar</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Info-->