/* Funcion auxiliar para mostrar un mensaje */
function showMessage (message_class, message_text, message_icon, message_title) {
	iziToast.show({
		class: 'iziToast-' + message_class || '',
		title: message_title || '',
		message: message_text || '',
		animateInside: false,
		position: 'topRight',
		progressBar: false,
		icon: message_icon || '',
		timeout: 3200,
		transitionIn: 'fadeInLeft',
		transitionOut: 'fadeOut',
		transitionInMobile: 'fadeIn',
		transitionOutMobile: 'fadeOut'
	});
}

/* Funcion auxiliar para mostrar mensajes enviados desde el servidor */
function showServerMessage (mensaje, error) {
	// console.log(mensaje, error);
	if (error) showMessage('danger', mensaje, 'icon-ban', 'Error');
	else showMessage('success', mensaje, 'icon-check', 'Éxito');
}
