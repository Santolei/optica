<script>
    $(document).ready(function(){
        // Si dan click en el boton de descuento mostramos el campo para poner el descuento
        $('#btn-descuentos').on('click', function(){

            if ($('#descuentos').val() > 0) {
                $('#descuentos').val(0);
                $('#descuento-efectivo').val(0);
                $('.descuento-efectivo').addClass('hidden');
                
            } else if ($('#descuento-efectivo').val() == 0){
                // Si está activo 
                $('#descuentos').val(1);
                $('.descuento-efectivo').removeClass('hidden').addClass('animated fadeIn');
            }
        });

        // Si dan click en el boton de precio en dólares activamos esa función
        if ($('#precio-dolares').val() == 0) {
            $('#precio-dolares').prop('checked', false);
        } else if ($('#precio-dolares').val() > 0){
            $('#precio-dolares').prop('checked', true);
        }
        $('#precio-dolares').on('click', function(){
            if($(this).is(":checked")){
                $('#precio-dolares').val(1);
            }
            else if($(this). is(":not(:checked)")){
                $('#precio-dolares').val(0);
            }
        });
    });
    
</script>