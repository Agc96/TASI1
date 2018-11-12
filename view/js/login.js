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

/*
 * Inicio de sesion temporal
 */

$('.login-box').on('submit', function (event) {
	event.preventDefault();
	var username = $('#login-username').val();
	switch (username) {
		case 'admin':
			window.location.href = 'admin-curso.html'; break;
		case 'profesor':
			window.location.href = 'profesor-solicitud.html'; break;
	}
});

