<!-- Datatables  -->
<script type="text/javascript" src="assets/js/addons/datatables.min.js"></script>

<script>
        
    $(document).ready(function () {
      $('#tabla_pacientes').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 350,
        "autoFill": true,
        "ajax": "consultas/pacientesjson.php",
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {

        // Genero el boton de editar producto
        $('td:eq(5)', nRow).html('<a href="editar_paciente.php?id=' + aData[5] + '">' +
            '<i class="fa fa-pencil text-center"></i>' + '</a>');
        return nRow;
        },
        "language": {
          "url": "assets/js/addons/datatablesspanish.json"
        },
      });
      $('.dataTables_length').addClass('bs-select');  
    });

    // ---------------------------------------
    // Busco que no haya ningún DNI similar
    $('#dni').on('keyup', function(){
        cadena = $('#dni').val();

        $.ajax({
        type: 'POST',
        url: 'consultas/search_dni.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
            // Retraso 1,5s la ejecución de ajax
            setTimeout(function(){ 
                //Copiamos el resultado en #mostrar
                $('#codigo').html(respuesta);
                if($('#mostrar_dni').html("")) {
                    $('#mostrar_dni').html(respuesta);
                } 
            }, 500);
            // Fin setTimeOut
           }
        });
    });

   
    // ---------------------------------------
    // Fin busqueda de DNI
</script>