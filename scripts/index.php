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
        "bFilter": true,
        "bLengthChange": false,
        "order": [[ 2, "asc" ]],
        autoFill: true,
        "ajax": "consultas/ordenes_indexjson.php",
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
            var formattedDate = new Date(aData[2]);
            var d = formattedDate.getDate();
            var m =  formattedDate.getMonth();
            m += 1;  // JavaScript months are 0-11
            var y = formattedDate.getFullYear();
        $('td:eq(2)', nRow).html(d + "-" + m + "-" + y);

        $('td:eq(3)', nRow).addClass('text-center estado').html(
            aData[3]);

        //$('td:eq(4)', nRow).addClass('text-center estado').html("<a class='estado_orden' onclick='cambiaIdModal(" + aData[0] + ',' + '"' + aData[3] + '"' + ")'  href='#'" + aData[0] + '">' +
            //'<span class="boton-ver text-center"> Ver Orden' + '</a>');

        $('td:eq(4)', nRow).addClass('text-center estado').html("<a class='estado_orden' onclick='cambiaIdModal(" + aData[0] + ',' + '"' + aData[3] + '"' + ")' data-toggle='modal' data-target='" + '#modal_edit_estado' + aData[0] + "'" + "href='#'" + '>' +
            '<span class="boton-ver text-center"> Ver Orden' + '</a>');    
            
        return nRow;
        },
        "language": {
          "url": "assets/js/addons/datatablesspanish.json"
        },
        // Si hay menos del stock minimo cambio el fondo a rojo
        // aData[5] es el stock y aData[10] es el alerta de stock mínimo
        "createdRow": function( row, aData, dataIndex ) {
            
            if ( aData[3] == "Entregado" ) {   
                $(row).hide();  
                
            };
            if ( aData[3] == "Reservado" ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');    
                $(row).addClass('reservado');
            };
            if ( aData[3] == "En taller" ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).addClass("en_taller");
            };
            if ( aData[3] == "Esperando cristales" ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).addClass("esperando_cristales");
            };
            if ( aData[3] == "Esperando armazon" ) {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).addClass("esperando_armazon");
            };
            if ( aData[3] == "Para entregar (Avisar)") {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).addClass("para_entregar");
            };

            if ( aData[3] == "Para entregar (Avisado)") {   
                $(row).removeClass('odd');  
                $(row).removeClass('even');
                $(row).addClass("para_entregar_avisado");
            };
        },
      });
         
    });

    // Al clickear el estado voy a colocar los datos en el modal de editar estado
    // y mostrar el modal

    function cambiaIdModal(id,estado){
        
        $('input[name="id_orden"]').val(id);
        idfinal= '#estado' + id;
        $(idfinal).val(estado);
    }

    // Si está seleccionamos el select de "para entregar" voy a poner visible el segundo select

    function checkEstado(){
        if ($('#estado').val() === "Para entregar") {
            $('.entregar_container').removeClass('hidden');
            console.log('funciona');
        }
    }
   
</script>