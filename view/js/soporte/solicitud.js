jQuery(document).ready(function ($) {

	/* Abrir el modal al hacer clic en "Evaluar solicitud" */
	$('#solicitud-lista-pendientes').on('click', '.solicitud-evaluar', function () {
		$('#modal-solicitud').modal('show');
	});

	/* Activar o desactivar inputs dependiendo si se va a aprobar o rechazar la solicitud */
	$('#solicitud-aprobar, #solicitud-rechazar').change(function () {
		var rechazar = 'solicitud-rechazar' === this.id;
		$('#solicitud-fecha-instalacion, #solicitud-fecha-verificacion').prop('disabled', rechazar);
		$('#solicitud-observaciones').prop('required', rechazar);
	});

});
