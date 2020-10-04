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
                <a class="text-success m-4" data-toggle="modal" data-target="#modal_add_categoria_ajax"><i class="fa fa-2x fa-plus"></i></a>
              </div>

            </div>
            <div class="form-group col-md-6">
              <label for="marca">Material:</label>
              <br>
              <div class="d-flex align-items-center">
                <select class="form-control select2" name="material" id="material" selected="Seleccionar Material" required>
                  <option value="Mineral">Mineral</option>
                  <option value="Organico">Orgánico</option>
                  <option value="Policarbonato">Policarbonato</option>
                  <option value="Otros">Otros</option>
                </select>
                <a class="text-success m-4" style="visibility: hidden;" data-toggle="modal" data-target="#modal_add_marca_ajax"><i class="fa fa-2x fa-plus"></i></a>
              </div>
            </div>
          </div>
          <!-- row -->
          
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