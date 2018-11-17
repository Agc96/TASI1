/*
 * Agregar los tooltips
 */

$('[data-toggle="tooltip"]').tooltip();

/*
 * Mostrar u ocultar el password dependiendo del estado actual
 */

$('#show-password').on('click', function () {
	var password = document.getElementById('login-password');
	if (password.type === 'password') {
		password.type = 'text';
		this.text = 'Ocultar';
	} else {
		password.type = 'password';
		this.text = 'Mostrar';
	}
});
