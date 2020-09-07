<!-- Esto viene de inc/sessions.php -->
<?php if($exibirModal === true) : 
// Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. ?>
<script>
$(document).ready(function()
{
  $("#modalBackup").modal("show");
});
</script>
<?php endif; ?>

<!-- Datatables  -->
<script type="text/javascript" src="assets/js/addons/datatables.min.js"></script>

<script>

    $(document).on("focus", ".select2", function (e) {
      if (e.originalEvent) {
        var s2element = $(this).siblings("select:enabled");
        s2element.select2("open");
        // Set focus back to select2 element on closing.
        s2element.on("select2:closing", function () {
          if (s2element.val()) s2element.select2("focus");
        });
      }
    });
        
    $(document).ready(function () {
      $('#tabla_productos').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 350,
        autoFill: true,
        "ajax": "consultas/productosjson.php",
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
        stock = aData[5];
        // Este es el costo en dólares
        costo_usd = aData[7]; 
        // Ganancia 
        ganancia = aData[8];
        ganancia = ganancia/100;

        // Genero el boton de editar producto
        $('td:eq(6)', nRow).html('<a href="editar_producto.php?id=' + aData[6] + '">' +
            '<i class="fa fa-pencil text-center"></i>' + '</a>');

        // if (costo_usd != 0) {
        //     // Si el costo en dólares no está vacío significa que el precio del producto está en dólares, entonces paso el costo a Pesos
        //     costo_pesos = costo_usd * valor_dolar; 
        //      // Muestro el valor final del producto en pesos
        //     $('td:eq(2)', nRow).html('<span>$' + Math.round(costo_pesos + (costo_pesos * ganancia)) + '</span>');
        // } else{
        //     // Si el costo en dólares está vacío o es 0 entonces ponemos el valor fijo del producto en pesos
        //     precio_fijo = aData[9];
        //     $('td:eq(2)', nRow).html('<span>$' + Math.round(precio_fijo) + '</span>');
        // }
        

        
       
        return nRow;
        },
        "language": {
          "url": "assets/js/addons/datatablesspanish.json"
        },
        // Si hay menos del stock minimo cambio el fondo a rojo
        // aData[5] es el stock y aData[10] es el alerta de stock mínimo
        "createdRow": function( row, aData, dataIndex ) {
            
            if ( aData[5] <= aData[10] ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');    
                $(row).addClass('stock_minimo');
            };
            if ( aData[5] <= 0 ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).attr("class", "sin_stock");
            };
        },
      });
      $('.dataTables_length').addClass('bs-select');
    

        // Autofocus al abrir modal
        $('.modal').on('shown.bs.modal', function() {
                $(this).find('[autofocus]').focus();
        });

        // Select 2 para agregar buscador a los input select
        $('.select2').select2({
            dropdownParent: $('#modal_add_producto')
        });

        // Agrego los option de las marcas y categorias
        $("#marca").load('consultas/marcas_ajax.php');
        $("#categoria").load('consultas/categorias_ajax.php');
        

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

        $('#codigo').on('focus', function(){
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


        // Agregando categorías por ajax desde el modal de agregar producto

        $('#add_categoria_ajax').on('submit',function(){
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(){
                    $('#modal_add_categoria_ajax').modal('hide');
                    $("#categoria").load('consultas/categorias_ajax.php');
                    $('#categoria').select2().trigger('change');
                    var nueva_cat = $('#nombre_categoria').val();
                    $("#categoria > option[value="+ nueva_cat +"]").attr("selected",true);
                    $('#categoria').val(nueva_cat).trigger('change.select2');
                }
            });
             
            // Prevents default submission of the form after clicking on the submit button. 
            return false;   
        });

        // Agregando marca por ajax desde el modal de agregar producto

        $('#add_marca_form').on('submit',function(){
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(){
                    $('#modal_add_marca_ajax').modal('hide');
                    $("#marca").load('consultas/marcas_ajax.php');
                }
            });
             
            // Prevents default submission of the form after clicking on the submit button. 
            return false;   
        });
        
    });
</script>