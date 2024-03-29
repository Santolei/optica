<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header d-flex justify-content-between">
                                <h4 class="title"><strong>Editar producto: <?php echo $producto['nombre']; ?></strong></h4>
                                <a class="btn btn-danger d-block d-sm-flex align-items-center" data-toggle="modal" data-target="#modalConfirmDelete<?php echo $producto['id_producto']; ?>" style="cursor:pointer"><h6 class="mr-2">Eliminar</h6><i class="fa fa-trash fa-2x"></i></a>
                            </div>
                            <div class="content">
                                <form action="consultas/editar_producto.php" method="POST">
                                  <!-- row -->
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="codigo">Código:</label>
                                      <input autofocus class="form-control" type="number" name="codigo" id="codigo" value="<?php echo $producto['codigo']; ?>" autocomplete="off">
                                      <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <div id="mostrar_codigo" class="d-flex flex-column justify-content-center"></div>
                                    </div>
                                  </div>
                                  <!-- row -->
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <label for="nombre">Nombre del producto:</label>
                                      <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" value="<?php echo $producto['nombre']; ?>" required>
                                    </div>
                                  </div>
                                  <!-- row -->
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="categoria">Categoría:</label>
                                      <br>
                                      <select class="form-control select2" name="categoria" id="categoria" selected="Seleccionar Categoría" required>
                                        <option value="<?php echo $producto['categoria']; ?>"><?php echo $producto['categoria']; ?></option>
                                        <?php foreach ($lista_categorias as $categoria): ?>
                                          <option value="<?php echo $categoria['nombre'] ?>"><?php echo $categoria['nombre'] ?></option>
                                        <?php endforeach ?>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="material">Material:</label>
                                      <br>
                                      <select class="form-control select2" name="material" id="material" selected="Seleccionar Material" required>
                                        <option value="<?php echo $producto['material']; ?>"><?php echo $producto['material']; ?></option>
                                          <option value="Mineral">Mineral</option>
                                          <option value="Organico">Orgánico</option>
                                          <option value="Policarbonato">Policarbonato</option>
                                          <option value="Otros">Otros</option>
                                      </select>
                                    </div>
                                  </div>
                                  
                                      <!--Footer-->
                                    <div class="modal-footer justify-content-center">
                                      <button class="btn info-color-dark white-text" type="submit">Guardar</button>
                                      <a class="btn btn-outline-info waves-effect" href="inventario">Salir</a>
                                    </div>
                                </form>
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: <?php echo $producto['modificado'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                
        </div>


<?php include 'views/footer.php' ?>

<script type="text/javascript">
    // Busco que no haya ningún código similar
    $('#codigo').on('keyup', function(){
        cadena = $('#codigo').val();

        $.ajax({
        type: 'POST',
        url: 'consultas/search_codigo.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
            // Retraso 1,5s la ejecución de ajax
            setTimeout(function(){ 
                //Copiamos el resultado en #mostrar
                $('#codigo').html(respuesta);
                if($('#mostrar_codigo').html("")) {
                    $('#mostrar_codigo').html(respuesta);
                } else {  
                    $('#mostrar_codigo').html("<strong class='mt-4 pt-4'>Perfecto! Ese código está disponible</strong>");
                }
            }, 1500);
            // Fin setTimeOut
           }
        });
    });
    function precioFinal() {
        var costo_usd = $('#costo_usd').val();
        var ganancia = $('#ganancia').val();
        var precio = (costo_usd * ganancia);
        var total = 0;
        if (costo_usd = 0) {

        }
        else {
            $(".multiplicacion").each(function () {
            var valor = $(this).val();
            valor = valor.replace(',', '.');
            total = parseFloat(valor);
            });
           
            var valor2 =  $(".multiplicacion2").val();
            valor2 = valor2.replace(',', '.');
            valor2 = (valor2 /100) + 1;

            total2 = parseFloat(valor2);

            totalFinal = total * total2 * <?php echo $valor_dolar ?>;
            total_fixed = totalFinal.toFixed(2);
            total_fixed = parseFloat(total_fixed + 0);
           $('#precio').val(total_fixed);
        }
    }

    $('#ganancia').on('keyup',function(){
      precioFinal();
    });
    $('#costo_usd').on('keyup',function(){
      precioFinal();
    });

    // Muestro los valores en dólares si está activo el switch

     $('#switch').on('click', function(){
        if ($('#switch').is(':checked')) {
           $('.row_dolares').removeClass('hidden'); 
        } else {
            $('.row_dolares').addClass('hidden'); 
            $('#costo_usd').val(0);
            $('#ganancia').val(0);
        }
        
      });
</script>

<!-- Modal borrar producto -->

<?php include 'modals/modal_borrar_producto.php' ?>