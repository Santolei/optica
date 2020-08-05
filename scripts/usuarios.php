<script type="text/javascript" src="assets/js/addons/jquery.validate.js"></script>

<script type="text/javascript">
	$( document ).ready( function () {
			$( "#form-add-user" ).validate( {
				rules: {
					nombre: {
						required: true,
						minlength: 5
					},
					password: {
						required: true,
						minlength: 5
					},
					password2: {
						required: true,
						equalTo: "#password"
					},
					rol: {
						required: true
					}
				},
				messages: {
					nombre: {
						required: "Por favor ingrese un nombre de usuario",
						minlength: "Tu usuario debe tener al menos 5 caracteres"
					},
					password: {
						required: "Por favor, ingrese una contraseña",
						minlength: "Tu contraseña debe tener al menos 5 caracteres"
					},
					password2: {
						required: "Por favor, ingrese una contraseña",
						minlength: "Tu contraseña debe tener al menos 5 caracteres",
						equalTo: "Las contraseñas deben ser iguales"
					},
					rol: {
						required: "Seleccione un rol"
					}
				}
			} );
		} );   
</script>