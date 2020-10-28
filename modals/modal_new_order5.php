<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_new_order5" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Total, seña y saldo</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form id="form-total-senia">
          <!-- row -->
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="add_total">Total:</label>
                <input maxlength="100" class="form-control" type="number" autocomplete="off" id="add_total" required>
            </div>

            <div class="form-group col-md-6">
                <label for="add_senia">Seña:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_senia" required>
            </div>
          </div>

          <!-- row -->
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="add_saldo">Saldo:</label>
                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_saldo" required>
            </div>
          </div>

          <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit" id="total_saldo">Guardar <i class="fa fa-arrow-right"></i></button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
          <!--Footer-->
        
        
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto