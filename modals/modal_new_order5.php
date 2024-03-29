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
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Cristales:</label>
                  <input maxlength="100" class="form-control" type="number" step="any" autocomplete="off" id="add_cristales_precio" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Descuento %:</label>
                  <input maxlength="100" class="form-control" type="number" step="any" autocomplete="off" id="add_cristales_descuento_porcentaje" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Descuento monto:</label>
                  <input maxlength="100" class="form-control" type="number" step="any" autocomplete="off" id="add_cristales_descuento_monto" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_total">Total:</label>
                  <input maxlength="100" class="form-control monto" type="number" step="any" autocomplete="off" id="add_cristales_total" required>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-12 col-md-3">
              
              <div class="form-group">
                  <label for="add_armazon_precio">Armazón:</label>
                  <input maxlength="100" class="form-control" type="text" step="any" autocomplete="off" id="add_armazon_precio" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_armazon_precio">Descuento %:</label>
                  <input maxlength="100" class="form-control" type="text" step="any" autocomplete="off" id="add_armazon_descuento_porcentaje" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_armazon_precio">Descuento monto:</label>
                  <input maxlength="100" class="form-control" type="text" step="any" autocomplete="off" id="add_armazon_descuento_monto" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_armazon_total">Total:</label>
                  <input maxlength="100" class="form-control monto" type="number" step="any" autocomplete="off" id="add_armazon_total" required>
              </div>
            </div>

          </div>

          <hr class="mt-0 mb-3">

          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_otros_precio">Otros:</label>
                  <input maxlength="100" class="form-control monto" type="text" step="any" autocomplete="off" id="add_otros_precio">
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_total">Total:</label>
                  <input maxlength="100" class="form-control" type="number" step="any" autocomplete="off" id="add_total" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_senia">Seña:</label>
                  <input maxlength="100" class="form-control" type="text" step="any" autocomplete="off" id="add_senia" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_saldo">Saldo:</label>
                  <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_saldo" required>
              </div>
            </div>
          </div>

          <hr>

          <!--<div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Cristales:</label>
                  <input maxlength="100" class="form-control monto" type="number" autocomplete="off" id="add_cristales_precio" required>
              </div>
              <div class="form-group">
                  <label for="add_armazon_precio">Armazón:</label>
                  <input maxlength="100" class="form-control monto" type="text" autocomplete="off" id="add_armazon_precio" required>
              </div>
              <div class="form-group">
                  <label for="add_otros_precio">Otros:</label>
                  <input maxlength="100" class="form-control monto" type="text" autocomplete="off" id="add_otros_precio">
              </div>
            </div>

            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Descuento %:</label>
                  <input maxlength="100" class="form-control monto" type="number" autocomplete="off" id="add_cristales_descuento_porcentaje" required>
              </div>
              <div class="form-group">
                  <label for="add_armazon_precio">Descuento %:</label>
                  <input maxlength="100" class="form-control monto" type="text" autocomplete="off" id="add_armazon_descuento_porcentaje" required>
              </div>
              
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_cristales_precio">Descuento monto:</label>
                  <input maxlength="100" class="form-control monto" type="number" autocomplete="off" id="add_cristales_descuento_monto" required>
              </div>
              <div class="form-group">
                  <label for="add_armazon_precio">Descuento monto:</label>
                  <input maxlength="100" class="form-control monto" type="text" autocomplete="off" id="add_armazon_descuento_monto" required>
              </div>
              
            </div>

            <div class="col-sm-12 col-md-3">
              <div class="form-group">
                  <label for="add_total">Total:</label>
                  <input maxlength="100" class="form-control" type="number" autocomplete="off" id="add_total" required>
              </div>
              <div class="form-group">
                  <label for="add_senia">Seña:</label>
                  <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_senia" required>
              </div>
              <div class="form-group">
                  <label for="add_saldo">Saldo:</label>
                  <input maxlength="100" class="form-control" type="text" autocomplete="off" id="add_saldo" required>
              </div>
            </div>
          </div> -->
          <div class="row"> 
            <div class="col-sm-12">  
                <div class="form-group">  
                  <label for="add_metodo_pago">Método de pago</label>
                  <select name="add_metodo_pago" class="form-control" id="add_metodo_pago">
                    <option value="Efectivo">Efectivo</option>
                    <option value="Tarj Debito">Tarj Débito</option>
                    <option value="Tarj Credito">Tarj Crédito</option>
                    <option value="Obra social">Obra Social</option>
                  </select>
              </div>
            </div>
          </div>  

          <div class="row"> 
            <div class="col-sm-12">  
                <div class="form-group">  
                  <label for="add_estado_trabajo">Estado del trabajo</label>
                  <select name="add_estado_trabajo" class="form-control" id="add_estado_trabajo">
                    <option value="Reservado">Reservado</option>
                    <option value="Esperando seña">Esperando seña</option>
                    <option value="Esperando cristales">Esperando cristales</option>
                    <option value="Esperando armazón">Esperando armazón</option>
                    <option value="En taller">En taller</option>
                    <option value="Para entregar">Para entregar</option>
                  </select>
              </div>
            </div>
          </div>

          <div class="row"> 
            <div class="col-sm-12">  
              <div class="form-group">  
                <label for="add_fecha_entrega">Fecha de entrega:</label>
              <input maxlength="100" class="form-control" type="date" id="add_fecha_entrega" autocomplete="off">
              </div>
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