<!--  Modal de agregar producto --> 
<div class="modal fade" id="modal_add_producto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left">Agregar nuevo producto</h4>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text fa-2x">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <form action="consultas/add_producto.php" method="POST">
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="codigo">Código:</label>
              <input autofocus class="form-control" type="number" name="codigo" id="codigo" autocomplete="off" value="<?php echo $siguiente_codigo ?>">
            </div>
            <div class="col-md-6">
              <div id="mostrar_codigo" class="d-flex flex-column justify-content-center"></div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-12">
              <label for="nombre">Nombre del producto:</label>
              <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="categoria">Categoría:</label>
              <br>
              <div class="d-flex align-items-center">
                <select class="form-control select2" name="categoria" id="categoria" selected="Seleccionar Categoría" required>
                  <option value="">Seleccionar categoría</option>
                </select>
                <a class="text-success" data-toggle="modal" data-target="#modal_add_categoria_ajax"><i class="fa fa-plus"></i></a>
              </div>

            </div>
            <div class="form-group col-md-6">
              <label for="marca">Marca:</label>
              <br>
              <div class="d-flex align-items-center">
                <select class="form-control select2" name="marca" id="marca" selected="Seleccionar Marca" required>
                  <option value="">Seleccionar marca</option>
                </select>
                <a class="text-success" data-toggle="modal" data-target="#modal_add_marca_ajax"><i class="fa fa-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="form-group col-md-6">
              <label for="stock">Stock:</label>
              <input class="form-control" type="number" name="stock" id="stock" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="stock_minimo">Alerta Stock mínimo:</label>
              <input class="form-control" type="number" name="stock_minimo" id="stock_minimo" autocomplete="off" value="1">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-md-12">
              <label>¿Precio en dólares?</label>
              <div class="onoffswitch">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch">
              <label class="onoffswitch-label" for="switch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row" id="row_dolares">
            <div class="form-group col-md-4 row_dolares hidden">
              <label for="costo_usd">Costo USD:</label>
              <input class="form-control multiplicacion" step="any" type="number" name="costo_usd" id="costo_usd" autocomplete="off">
              <input type="hidden" name="valor_dolar" value="<?php echo $valor_dolar ?>">
            </div>
            <div class="form-group col-md-4 row_dolares hidden">
              <label for="ganancia">Ganancia (%):</label>
              <input class="form-control multiplicacion2" step="any" type="number" name="ganancia" id="ganancia" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
              <label for="precio">Precio Cliente:</label>
              <input class="form-control" name="precio" id="precio" autocomplete="off" required>
            </div>
          </div>
          
          
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn info-color-dark" type="submit">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Salir</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal Agregar producto