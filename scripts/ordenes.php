<script>

	// Select 2 para agregar buscador a los input select
    $('#add_patologia').select2({
        dropdownParent: $('#modal_new_order2')
    });

    // Agrego los option de las vendedores y de los pacientes
    $("#add_vendedor").load('consultas/vendedores_ajax.php');
    $("#add_patologia").load('consultas/patologias_ajax.php');

    // Funcion para chequear que el vendedor haya sido seleccionado

    function checkVendedor(){
        if ($('#add_vendedor').val() != 0) {
            $('#datos_paciente').removeClass('btn-outline-info').addClass('btn-success');
            $("#datos_paciente").attr("disabled", false);
            $("#buscar_paciente").attr("readonly", false);
        }
    }

    $('#add_vendedor').on('change', function(){
         if ($('#add_vendedor').val() != 0) {
            $("#buscar_paciente").attr("readonly", false);
        } 
    });

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
        checkVendedor();
        id_paciente = $(this).attr('data-id');
        nombre = $(this).attr('data-nombre');
        tel_cel = $(this).attr('data-tel_cel');
        dni = $(this).attr('data-dni');
        obra_social = $(this).attr('data-obra_social');
        vendedor = $('#add_vendedor').val();
        sucursal = $('#add_sucursal').val();

        // Inserto datos en el form

        $('input[name="buscar"]').val('');
        $('input[name="id_paciente"]').val(id_paciente);
        $('input[name="nombre"]').val(nombre);
        $('input[name="telefono"]').val(tel_cel);
        $('input[name="dni"]').val(dni);
        $('input[name="obra_social"]').val(obra_social);
        $('input[name="vendedor"]').val(vendedor);
        $('input[name="sucursal"]').val(sucursal);

        $('#mostrar').html("<div class='m-0 animated slower delay-2s fadeOut'>Paciente agregado</div>");
        
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
        day = date.getDate() + 1;
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

            $("#add_monofocal :input").val('');
        }
        else if ($('#add_tipo_lente').val() === "Bifocal") {
            $('#monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#bifocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#multifocal').addClass('hidden').fadeOut("slow", "linear");

            $('#add_monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_bifocal').fadeIn("slow", "linear").removeClass('hidden');
            $('#add_multifocal').addClass('hidden').fadeOut("slow", "linear");

            $("#add_bifocal :input").val('');
        }
        else if ($('#add_tipo_lente').val() === "Multifocal") {
            $('#monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#multifocal').fadeIn("slow", "linear").removeClass('hidden');

            $('#add_monofocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_bifocal').addClass('hidden').fadeOut("slow", "linear");
            $('#add_multifocal').fadeIn("slow", "linear").removeClass('hidden');

            $("#add_multifocal :input").val('');
        }
    }

    $('#add_tipo_lente').on('change',function(){
        tipoLente();
    });

    // Muestro u oculto dependiendo de los checkbox 
    // de lejos cerca o intermedia " SOLO PARA MONOFOCAL "

    $('#add_checkbox_lejos').on('change',function(){
        if($('#add_checkbox_lejos').is(":checked")){
            $('#checkbox_lejos').val(1).prop( "checked", true );
            $('#lejos').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
            $('.monofocal_lejos').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
        }  
        else {
           $('#lejos').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('.monofocal_lejos').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('#checkbox_lejos').val(0).prop( "checked", false );
        }
    });

    $('#add_checkbox_intermedia').on('change',function(){
        if($('#add_checkbox_intermedia').is(":checked")){
            $('#intermedia').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
            $('.monofocal_intermedia').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
            $('#checkbox_intermedia').val(1).prop( "checked", true );
        }  
        else {
           $('#intermedia').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('.monofocal_intermedia').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('#checkbox_intermedia').val(0).prop( "checked", false );
        }
    });

    $('#add_checkbox_cerca').on('change',function(){
        if($('#add_checkbox_cerca').is(":checked")){
            $('#checkbox_cerca').val(1).prop( "checked", true );
            $('#cerca').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
            $('.monofocal_cerca').fadeIn("slow", "linear").addClass('d-flex').removeClass('hidden');
        }  
        else {
           $('#cerca').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('.monofocal_cerca').removeClass('d-flex').addClass('hidden').fadeOut("slow", "linear");
           $('#checkbox_cerca').val(0).prop( "checked", false );
        }
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

        // Checkbox 

        add_checkbox_lejos = $('#add_checkbox_lejos').val();

        // MONOFOCAL LEJOS ---------------------------------------------------
        // Ojo derecho
        add_monofocal_lejos_der_esf = $('#add_monofocal_lejos_der_esf').val();
        add_monofocal_lejos_der_cil = $('#add_monofocal_lejos_der_cil').val();
        add_monofocal_lejos_der_eje = $('#add_monofocal_lejos_der_eje').val();
        add_monofocal_lejos_der_add = $('#add_monofocal_lejos_der_add').val();
        // Ojo izquierdo
        add_monofocal_lejos_izq_esf = $('#add_monofocal_lejos_izq_esf').val();
        add_monofocal_lejos_izq_cil = $('#add_monofocal_lejos_izq_cil').val();
        add_monofocal_lejos_izq_eje = $('#add_monofocal_lejos_izq_eje').val();
        add_monofocal_lejos_izq_add = $('#add_monofocal_lejos_izq_add').val();

        // MONOFOCAL INTERMEDIA ----------------------------------------------
        // Ojo derecho
        add_monofocal_intermedia_der_esf = $('#add_monofocal_intermedia_der_esf').val();
        add_monofocal_intermedia_der_cil = $('#add_monofocal_intermedia_der_cil').val();
        add_monofocal_intermedia_der_eje = $('#add_monofocal_intermedia_der_eje').val();
        add_monofocal_intermedia_der_add = $('#add_monofocal_intermedia_der_add').val();
        // Ojo izquierdo
        add_monofocal_intermedia_izq_esf = $('#add_monofocal_intermedia_izq_esf').val();
        add_monofocal_intermedia_izq_cil = $('#add_monofocal_intermedia_izq_cil').val();
        add_monofocal_intermedia_izq_eje = $('#add_monofocal_intermedia_izq_eje').val();
        add_monofocal_intermedia_izq_add = $('#add_monofocal_intermedia_izq_add').val();

        // MONOFOCAL CERCA ---------------------------------------------------
        // Ojo derecho
        add_monofocal_cerca_der_esf = $('#add_monofocal_cerca_der_esf').val();
        add_monofocal_cerca_der_cil = $('#add_monofocal_cerca_der_cil').val();
        add_monofocal_cerca_der_eje = $('#add_monofocal_cerca_der_eje').val();
        add_monofocal_cerca_der_add = $('#add_monofocal_cerca_der_add').val();
        // Ojo izquierdo
        add_monofocal_cerca_izq_esf = $('#add_monofocal_cerca_izq_esf').val();
        add_monofocal_cerca_izq_cil = $('#add_monofocal_cerca_izq_cil').val();
        add_monofocal_cerca_izq_eje = $('#add_monofocal_cerca_izq_eje').val();
        add_monofocal_cerca_izq_add = $('#add_monofocal_cerca_izq_add').val();

        // BIFOCAL -----------------------------------------------------------
        // Ojo derecho
        add_bifocal_der_esf = $('#add_bifocal_der_esf').val();
        add_bifocal_der_cil = $('#add_bifocal_der_cil').val();
        add_bifocal_der_eje = $('#add_bifocal_der_eje').val();
        add_bifocal_der_add = $('#add_bifocal_der_add').val();
        // Ojo izquierdo
        add_bifocal_izq_esf = $('#add_bifocal_izq_esf').val();
        add_bifocal_izq_cil = $('#add_bifocal_izq_cil').val();
        add_bifocal_izq_eje = $('#add_bifocal_izq_eje').val();
        add_bifocal_izq_add = $('#add_bifocal_izq_add').val();

        // MULTIFOCAL -----------------------------------------------------------
        // Ojo derecho
        add_multifocal_der_esf = $('#add_multifocal_der_esf').val();
        add_multifocal_der_cil = $('#add_multifocal_der_cil').val();
        add_multifocal_der_eje = $('#add_multifocal_der_eje').val();
        add_multifocal_der_add = $('#add_multifocal_der_add').val();
        // Ojo izquierdo
        add_multifocal_izq_esf = $('#add_multifocal_izq_esf').val();
        add_multifocal_izq_cil = $('#add_multifocal_izq_cil').val();
        add_multifocal_izq_eje = $('#add_multifocal_izq_eje').val();
        add_multifocal_izq_add = $('#add_multifocal_izq_add').val();


        material = $('#add_material').val();
        producto = $('#add_producto').val();
        tratamiento = $('#add_tratamiento').val();

        $('input[name="tipo_lente"]').val(tipo_lente);
        $('input[name="material"]').val(material);
        $('input[name="producto"]').val(producto);
        $('input[name="tratamiento"]').val(tratamiento);

        // CHECKBOX 

        // COPIANDO DATOS DE LENTES ------------------------------------------------------------

        // MONOFOCAL LEJOS ---------------------------------------------------
        // Ojo derecho
        $('input[name="monofocal_lejos_der_esf"]').val(add_monofocal_lejos_der_esf); 
        $('input[name="monofocal_lejos_der_cil"]').val(add_monofocal_lejos_der_cil);
        $('input[name="monofocal_lejos_der_eje"]').val(add_monofocal_lejos_der_eje);
        $('input[name="monofocal_lejos_der_add"]').val(add_monofocal_lejos_der_add);
        // Ojo izquierdo
        $('input[name="monofocal_lejos_izq_esf"]').val(add_monofocal_lejos_izq_esf); 
        $('input[name="monofocal_lejos_izq_cil"]').val(add_monofocal_lejos_izq_cil);
        $('input[name="monofocal_lejos_izq_eje"]').val(add_monofocal_lejos_izq_eje);
        $('input[name="monofocal_lejos_izq_add"]').val(add_monofocal_lejos_izq_add);

        // MONOFOCAL INTERMEDIA ----------------------------------------------
        // Ojo derecho
        $('input[name="monofocal_intermedia_der_esf"]').val(add_monofocal_intermedia_der_esf); 
        $('input[name="monofocal_intermedia_der_cil"]').val(add_monofocal_intermedia_der_cil);
        $('input[name="monofocal_intermedia_der_eje"]').val(add_monofocal_intermedia_der_eje);
        $('input[name="monofocal_intermedia_der_add"]').val(add_monofocal_intermedia_der_add);
        // Ojo izquierdo
        $('input[name="monofocal_intermedia_izq_esf"]').val(add_monofocal_intermedia_izq_esf); 
        $('input[name="monofocal_intermedia_izq_cil"]').val(add_monofocal_intermedia_izq_cil);
        $('input[name="monofocal_intermedia_izq_eje"]').val(add_monofocal_intermedia_izq_eje);
        $('input[name="monofocal_intermedia_izq_add"]').val(add_monofocal_intermedia_izq_add);

        // MONOFOCAL CERCA ---------------------------------------------------
        // Ojo derecho
        $('input[name="monofocal_cerca_der_esf"]').val(add_monofocal_cerca_der_esf); 
        $('input[name="monofocal_cerca_der_cil"]').val(add_monofocal_cerca_der_cil);
        $('input[name="monofocal_cerca_der_eje"]').val(add_monofocal_cerca_der_eje);
        $('input[name="monofocal_cerca_der_add"]').val(add_monofocal_cerca_der_add);
        // Ojo izquierdo
        $('input[name="monofocal_cerca_izq_esf"]').val(add_monofocal_cerca_izq_esf); 
        $('input[name="monofocal_cerca_izq_cil"]').val(add_monofocal_cerca_izq_cil);
        $('input[name="monofocal_cerca_izq_eje"]').val(add_monofocal_cerca_izq_eje);
        $('input[name="monofocal_cerca_izq_add"]').val(add_monofocal_cerca_izq_add);

        // BIFOCAL -----------------------------------------------------------
        // Ojo derecho
        $('input[name="bifocal_der_esf"]').val(add_bifocal_der_esf); 
        $('input[name="bifocal_der_cil"]').val(add_bifocal_der_cil);
        $('input[name="bifocal_der_eje"]').val(add_bifocal_der_eje);
        $('input[name="bifocal_der_add"]').val(add_bifocal_der_add);
        // Ojo izquierdo
        $('input[name="bifocal_izq_esf"]').val(add_bifocal_izq_esf); 
        $('input[name="bifocal_izq_cil"]').val(add_bifocal_izq_cil);
        $('input[name="bifocal_izq_eje"]').val(add_bifocal_izq_eje);
        $('input[name="bifocal_izq_add"]').val(add_bifocal_izq_add);

        // MULTIFOCAL --------------------------------------------------------
        // Ojo derecho
        $('input[name="multifocal_der_esf"]').val(add_multifocal_der_esf); 
        $('input[name="multifocal_der_cil"]').val(add_multifocal_der_cil);
        $('input[name="multifocal_der_eje"]').val(add_multifocal_der_eje);
        $('input[name="multifocal_der_add"]').val(add_multifocal_der_add);
        // Ojo izquierdo
        $('input[name="multifocal_izq_esf"]').val(add_multifocal_izq_esf); 
        $('input[name="multifocal_izq_cil"]').val(add_multifocal_izq_cil);
        $('input[name="multifocal_izq_eje"]').val(add_multifocal_izq_eje);
        $('input[name="multifocal_izq_add"]').val(add_multifocal_izq_add);
        
        $('#modal_new_order3').modal('hide');
        $('#modal_new_order4').modal('show');
    });

    $('#datos_armazon').on('click', function(){
        marca = $('#add_marca').val();
        material_armazon = $('#add_material_armazon').val();
        tipo_armazon = $('#add_tipo_armazon').val();
        distancia = $('#add_distancia_interpupilar').val();
        altura = $('#add_altura').val();
        trabajo = $('#add_trabajo').val();
        observaciones = $('#add_observaciones').val();

        $('input[name="marca_armazon"]').val(marca);
        $('input[name="material_armazon"]').val(material_armazon);
        $('input[name="tipo_armazon"]').val(tipo_armazon);
        $('input[name="distancia"]').val(distancia);
        $('input[name="altura"]').val(altura);
        $('input[name="trabajo"]').val(trabajo);
        $('textarea#observaciones').html(observaciones);

        $('#modal_new_order4').modal('hide');
        $('#modal_new_order5').modal('show');
    });

    $('#form-total-senia').on('submit',function(){
        cristales_precio = $('#add_cristales_precio').val();
        armazon_precio = $('#add_armazon_precio').val();
        otros_precio = $('#add_otros_precio').val();
        total = $('#add_total').val();
        senia = $('#add_senia').val();
        saldo = $('#add_saldo').val();

        $('input[name="cristales_precio"]').val(cristales_precio);
        $('input[name="armazon_precio"]').val(armazon_precio);
        $('input[name="otros_precio"]').val(otros_precio);
        $('input[name="total"]').val(total);
        $('input[name="senia"]').val(senia);
        $('input[name="saldo"]').val(saldo);
        $('#modal_new_order5').modal('hide');
        // Prevents default submission of the form after clicking on the submit button. 
        return false;  


    });

    // Función para sumar el total de la orden

    function sumar() {
      var total = 0;
      $(".monto").each(function() {
        if (isNaN(parseFloat($(this).val()))) {
          total += 0;
        } else {
          total += parseFloat($(this).val());
        }
      });
      $('#add_total').val(total);
    }
    
    $('#add_cristales_precio').on('keyup',sumar);
    $('#add_armazon_precio').on('keyup',sumar);
    $('#add_otros_precio').on('keyup',sumar);
    
    // Función para restar la seña y mostrar el saldo

    function restar(){
        var total = $('#add_total').val();
        total = parseFloat(total);
        var senia = $('#add_senia').val();
        senia = parseFloat(senia);
        var saldo = total - senia;
        saldo = parseFloat(saldo);
       $('#add_saldo').val(saldo);
    }
    $('#add_total').on('keyup',restar);
    $('#add_senia').on('keyup',restar);

//     $('#signupform').submit(function() {
//     var errors = 0;
//     $("#signupform :input").map(function(){
//          if( !$(this).val() ) {
//               $(this).parents('td').addClass('warning');
//               errors++;
//         } else if ($(this).val()) {
//               $(this).parents('td').removeClass('warning');
//         }   
//     });
//     if(errors > 0){
//         $('#errorwarn').text("All fields are required");
//         return false;
//     }
//     // do the ajax..    
// });

    $('#new_order').on('submit', function(){
        form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            contentType: 'application/x-www-form-urlencoded',
            data: form.serialize(),
            success: function(data){
                // Paso el Id del la venta al href del modal post venta para imprimir comprobante
                var comprobante = "comprobante.php?id_orden=" + data;
                $('#btn_imprimir_2').attr("href", comprobante);
                console.log(data);
                // Muestro el modal post Orden
                $('#modalPostOrden').modal('show');
                // Reseteo el formulario de la orden
                $("#new_order")[0].reset();
            }
        });
        
        // Prevents default submission of the form after clicking on the submit button. 
        return false; 
    });

    
    



</script>