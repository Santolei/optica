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
        
    $(document).ready(function () {
      $('#tabla_ordenes').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 350,
        autoFill: true,
        "order": [[ 0, "desc" ]],
        "ajax": "consultas/ordenesjson.php",
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
        // Genero el boton de editar producto
        $('td:eq(4)', nRow).addClass('text-center').html('<a href="editar_orden.php?id=' + aData[4] + '">' +
            '<i class="fa fa-pencil text-center"></i>' + '</a>');
            $('td:eq(5)', nRow).addClass('text-center').html('<a href="comprobante.php?id_orden=' + aData[5] + '">' +
            '<span class="boton-historial text-center">Imprimir <i class="fa fa-print"></i></span>' + '</a>');
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
           
        });
</script>