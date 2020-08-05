<script>
	// Select 2 para agregar buscador a los input select
    $('.select2').select2({
        dropdownParent: $('#modal_new_order')
    });

    // Agrego los option de las vendedores y de los pacientes
    $("#vendedor").load('consultas/pacientes_ajax.php');
    $("#paciente").load('consultas/pacientes_ajax.php');

    // Agregando paciente por ajax desde el modal de agregar Orden

        $('#add_paciente_form').on('submit',function(){
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(){
                    $('#modal_add_paciente_ajax').modal('hide');
                    $("#paciente").load('consultas/pacientes_ajax.php');
                    $("#add_paciente_form")[0].reset();
                }
            });
             
            // Prevents default submission of the form after clicking on the submit button. 
            return false;   
        });

    // Busco el paciente en la BD
    function buscar_ajax(cadena){
        $.ajax({
        type: 'POST',
        url: 'consultas/search_pacientes.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
            //Copiamos el resultado en #mostrar
            $('#mostrar').html(respuesta);
            if($('#mostrar').html()) {
                
            } else {    
                $('#mostrar').html('<p>No hay ningún paciente registrado con esos datos</p>');
            }
            
           }
        });
    }
</script>