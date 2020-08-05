<!-- Modal Configuración de Pagos -->
<div class="modal fade" id="modal_config_pagos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header info-color">
        <p class="heading lead">Configuración de pagos</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/config_pagos.php" id="form_config_pagos" method="POST">
          <div class="form-group">
            <label>Precio en dólares</label>
            <div class="material-switch pull-right">
              <input id="precio-dolares" name="precio-dolares" value="<?php echo $precio_dolares ?>" type="checkbox" <?php if($precio_dolares == '1'): ?>checked="checked"<?php endif; ?> />
              <label for="precio-dolares" class="label-primary"></label>
            </div>
          </div>

          <div class="form-group">
            <label>Descuento en efectivo:</label>
            <div class="material-switch pull-right">
              <input id="descuentos" name="descuentos" value="<?php echo $descuento_efectivo ?>" type="checkbox" 
              <?php if($descuento_efectivo > 0): ?>
                checked="checked"
              <?php endif; ?> />
              <label for="descuentos" id="btn-descuentos" class="label-primary"></label>
            </div>
            <!-- Este campo está oculto si el check está desactivado -->
            <div class="descuento-efectivo 
              <?php if($descuento_efectivo == 0): ?>
               hidden 
              <?php endif; ?>  pt-2">
              <label for="descuento-efectivo">Ingresar % de descuento</label>
              <input type="number" class="form-control" placeholder="Ingresar descuento" name="descuento-efectivo" id="descuento-efectivo" value="<?php echo $descuento_efectivo ?>">
            </div>
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