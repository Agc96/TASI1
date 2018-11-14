jQuery(document).ready(function ($) {

	/* Abrir el modal al hacer clic en "Evaluar instalación" */
	$('#instalacion-lista-pendientes').on('click', '.instalacion-evaluar', function () {
		$('#modal-instalacion-evaluar').modal('show');
	});

	/* Si se desplegó correctamente, activar checkbox de funcionalidad */
	$('#instalacion-desplegado').on('change', function () {
		if (this.checked) {
			$('#instalacion-funciona').prop('disabled', false);
		} else {
			$('#instalacion-funciona').prop('disabled', true).prop('checked', false);
			$('#instalacion-fecha-nueva, #instalacion-fecha-verificacion').prop('disabled', false);
		}
	});

	/* Si funciona correctamente, no será necesario reprogramar */
	$('#instalacion-funciona').on('change', function () {
		$('#instalacion-fecha-nueva, #instalacion-fecha-verificacion').prop('disabled', this.checked);
	});

});
