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
</script>