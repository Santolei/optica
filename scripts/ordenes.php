<script>

	// Select 2 para agregar buscador a los input select
    $('#add_patologia').select2({
        dropdownParent: $('#modal_new_order2')
    });

    // Agrego los option de las vendedores y de los pacientes
    $("#vendedor").load('consultas/pacientes_ajax.php');
    $("#add_patologia").load('consultas/patologias_ajax.php');

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

    // Al clickear el nombre del paciente voy a colocar los datos en el form

    $( '#mostrar' ).on( 'click', 'a', function () {
        id_paciente = $(this).attr('data-id');
        nombre = $(this).attr('data-nombre');
        tel_cel = $(this).attr('data-tel_cel');
        dni = $(this).attr('data-dni');
        obra_social = $(this).attr('data-obra_social');

        // Inserto datos en el form

        $('input[name="buscar"]').val('');
        $('input[name="id_paciente"]').val(id_paciente);
        $('input[name="nombre"]').val(nombre);
        $('input[name="telefono"]').val(tel_cel);
        $('input[name="dni"]').val(dni);
        $('input[name="obra_social"]').val(obra_social);

        $('#mostrar').html("<div class='m-0 animated slower delay-2s fadeOut'>Paciente agregado</div>");
        $('#datos_paciente').removeClass('btn-outline-info').addClass('btn-success');
        $("#datos_paciente").attr("disabled", false);
    });

    // Avanzo al segundo modal luego de que el usuario clickee el boton de continuar

    $('#datos_paciente').on('click', function(){
        $('#modal_new_order').modal('hide');
        $('#modal_new_order2').modal('show');
        
    });

    // Select 2 para agregar buscador a los input select
    $('#add_tipo_lente').select2({
        dropdownParent: $('#modal_new_order3')
    });
    $('#add_producto').select2({
        dropdownParent: $('#modal_new_order3')
    });
    $('#add_tratamiento').select2({
        dropdownParent: $('#modal_new_order3')
    });

    $('#datos_receta').on('click', function(){
        // Inserto datos en el form

        // FECHA ELEGIDA

        var date = new Date($('#add_fecha_receta').val());
        day = date.getDate();
        month = date.getMonth() + 1;
        year = date.getFullYear();
        var fecha_receta = day + "-" + month + "-" + year;
        nombre_doctor = $('#nombre_doctor').val();
        patologia = $('#add_patologia').val();
        graduacion = $('#add_graduacion').val();
        $('input[name="doctor"]').val(nombre_doctor);
        $('input[name="fecha_receta"]').val(fecha_receta);
        $('input[name="patologia"]').val(patologia);
        $('input[name="graduacion"]').val(graduacion);

        $('#modal_new_order2').modal('hide');
        $('#modal_new_order3').modal('show');
    });

    // Avanzo al tercer modal 


    $("#add_tratamiento").load('consultas/tratamientos_ajax.php');


</script>