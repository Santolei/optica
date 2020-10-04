<script>

	// Select 2 para agregar buscador a los input select
    $('#add_patologia').select2({
        dropdownParent: $('#modal_new_order2')
    });

    // Agrego los option de las vendedores y de los pacientes
    $("#vendedor").load('consultas/vendedores_ajax.php');
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
    // $('#add_tipo_lente').select2({
    //     dropdownParent: $('#modal_new_order3')
    // });
    
    $('#add_tratamiento').select2({
        dropdownParent: $('#modal_new_order3')
    });
    $('#add_producto').select2({
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
        graduacion_od = $('#add_graduacion_od').val();
        graduacion_oi = $('#add_graduacion_oi').val();
        $('input[name="doctor"]').val(nombre_doctor);
        $('input[name="fecha_receta"]').val(fecha_receta);
        $('input[name="patologia"]').val(patologia);
        $('input[name="graduacion_od"]').val(graduacion_od);
        $('input[name="graduacion_oi"]').val(graduacion_oi);

        $('#modal_new_order2').modal('hide');
        $('#modal_new_order3').modal('show');
    });

    // Avanzo al tercer modal 

    $("#add_tratamiento").load('consultas/tratamientos_ajax.php');

    // Función para mostrar y ocultar datos de los cristales dependiendo
    // si es monofocal, bifocal o multifocal

    function tipoLente(){
        if ($('#add_tipo_lente').val() === "Monofocal") {
            $('#monofocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#multifocal').addClass('hidden').fadeOut("slow", "linear");

            $('#add_monofocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#add_bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_multifocal').addClass('hidden').fadeOut("slow", "linear");
        }
        else if ($('#add_tipo_lente').val() === "Bifocal") {
            $('#monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#bifocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#multifocal').addClass('hidden').fadeOut("slow", "linear");

            $('#add_monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_bifocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#add_multifocal').addClass('hidden').fadeOut("slow", "linear");
        }
        else if ($('#add_tipo_lente').val() === "Multifocal") {
            $('#monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#multifocal').fadeIn("slow", "linear").removeClass('hidden');

            $('#add_monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_multifocal').fadeIn("slow", "linear").removeClass('hidden');
        }
    }

    $('#add_tipo_lente').on('change',function(){
        tipoLente();
    });

    // Funcion para copiar adición derecha a izquierda
  
    function copiarAdicionBifocal() {
            var adicion1 = $('#bifocal_adicion_der');
            var adicion2 = $('#bifocal_adicion_izq');
            adicion2.val(adicion1.val());
        }
    $('#bifocal_adicion_der').on('change', copiarAdicionBifocal);

    function copiarAdicionMultifocal() {
            var adicion1 = $('#multifocal_adicion_der');
            var adicion2 = $('#multifocal_adicion_izq');
            adicion2.val(adicion1.val());
        }
    $('#multifocal_adicion_der').on('change', copiarAdicionMultifocal);

    // Cargo los productos dependiendo del material 

    function checkMaterial(){
       var material = $('#add_material').val();
       // $("#add_producto").select2("open");
       if (material === 'Mineral') {
            $("#add_producto").load('consultas/productos_minerales.php');  

       }else if(material === 'Organico'){
            $("#add_producto").load('consultas/productos_organicos.php');
       }else if(material === 'Policarbonato'){
            $("#add_producto").load('consultas/productos_policarbonato.php');
       }else if(material === 'Otros'){
            $("#add_producto").load('consultas/productos_otros.php');
       }

    }

    $('#add_material').on('change', checkMaterial);

    // Guardo tercer form

    $('#datos_cristales').on('click', function(){
        // Selecciono datos del tercer modal

        tipo_lente = $('#add_tipo_lente').val();

        add_monofocal_lejos_der = $('#add_monofocal_lejos_der').val();
        add_monofocal_lejos_izq = $('#add_monofocal_lejos_izq').val();
        add_monofocal_media_der = $('#add_monofocal_media_der').val();
        add_monofocal_media_izq = $('#add_monofocal_media_izq').val();
        add_monofocal_cerca_der = $('#add_monofocal_cerca_der').val();
        add_monofocal_cerca_izq = $('#add_monofocal_cerca_izq').val();
        add_bifocal_lejos_der = $('#add_bifocal_lejos_der').val();
        add_bifocal_lejos_izq = $('#add_bifocal_lejos_izq').val();
        add_bifocal_adicion_der = $('#add_bifocal_adicion_der').val();
        add_bifocal_adicion_izq = $('#add_bifocal_adicion_izq').val();
        add_multifocal_lejos_der = $('#add_multifocal_lejos_der').val();
        add_multifocal_lejos_izq = $('#add_multifocal_lejos_izq').val();
        add_multifocal_adicion_der = $('#add_multifocal_adicion_der').val();
        add_multifocal_adicion_izq = $('#add_multifocal_adicion_izq').val();

        material = $('#add_material').val();
        producto = $('#add_producto').val();
        tratamiento = $('#add_tratamiento').val();

        $('input[name="tipo_lente"]').val(tipo_lente);
        $('input[name="material"]').val(material);
        $('input[name="producto"]').val(producto);
        $('input[name="tratamiento"]').val(tratamiento);

        $('input[name="monofocal_lejos_der"]').val(add_monofocal_lejos_der); 
        $('input[name="monofocal_lejos_izq"]').val(add_monofocal_lejos_izq);
        $('input[name="monofocal_media_der"]').val(add_monofocal_media_der); 
        $('input[name="monofocal_media_izq"]').val(add_monofocal_media_izq); 
        $('input[name="monofocal_cerca_der"]').val(add_monofocal_cerca_der); 
        $('input[name="monofocal_cerca_izq"]').val(add_monofocal_cerca_izq); 
        $('input[name="bifocal_lejos_der"]').val(add_bifocal_lejos_der);
        $('input[name="bifocal_lejos_izq"]').val(add_bifocal_lejos_izq); 
        $('input[name="bifocal_adicion_der"]').val(add_bifocal_adicion_der); 
        $('input[name="bifocal_adicion_izq"]').val(add_bifocal_adicion_izq); 
        $('input[name="multifocal_lejos_der"]').val(add_multifocal_lejos_der);
        $('input[name="multifocal_lejos_izq"]').val(add_multifocal_lejos_izq);
        $('input[name="multifocal_adicion_der"]').val(add_multifocal_adicion_der); 
        $('input[name="multifocal_adicion_izq"]').val(add_multifocal_adicion_izq);
        
        $('#modal_new_order3').modal('hide');
        $('#modal_new_order4').modal('show');
    });




</script>