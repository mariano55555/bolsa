$(document).ready(function() {
	
	// VALIDAR FORMULARIO DE REGISTRO

	var app = $('#content1').attr('url');
	$('#registrocarnet').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'carnet', value: $(this).val() },
			handleTitleValidation
		);
	});
	$('#registropassword').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'password', value: $(this).val() },
			handlePassworRegistrodValidation
		);
	});
	$('#registrorepasswordconfirmacion').blur(function() {
		/* Act on the event */
		console.log($('#password').val());
		$.post(
			app +'Users/validate_pass', 
			{password_confirmation: $(this).val(),  password: $('#registropassword').val() },
			handleRepasswordValidation
		);
	});
	$('#registrophone').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'phone', value: $(this).val() },
			handlePhoneValidation
		);
	});


	function handleTitleValidation(error) {
		if (error.length > 0) {
			if ($('#registrocarnet-notEmpty').length == 0) 
			{
				$('#registrocarnet').after('<div id="registrocarnet-notEmpty">' + error + '</div>');
			}else{
				$('#registrocarnet-notEmpty').remove();	
				$('#registrocarnet').after('<div id="registrocarnet-notEmpty">' + error + '</div>');
			}
		} else{
			$('#registrocarnet-notEmpty').remove();
		}
	}
	function handlePassworRegistrodValidation(error) {
		if (error.length > 0) {
			if ($('#registopassword-notEmpty').length == 0) 
			{
				$('#registropassword').after('<div id="registropassword-notEmpty">' + error + '</div>');
			}else{
				$('#registropassword-notEmpty').remove();	
				$('#registropassword').after('<div id="registropassword-notEmpty">' + error + '</div>');
			}
		} else{
			$('#registropassword-notEmpty').remove();
		}
	}
	function handleRepasswordValidation(error) {
		if (error.length > 0) {
			if ($('#registrorepasswordconfirmacion-notEmpty').length == 0) 
			{
				$('#registrorepasswordconfirmacion').after('<div id="registrorepasswordconfirmacion-notEmpty">' + error + '</div>');
			}else{
				$('#registrorepasswordconfirmacion-notEmpty').remove();	
				$('#registrorepasswordconfirmacion').after('<div id="registrorepasswordconfirmacion-notEmpty">' + error + '</div>');
			}
		} else{
			$('#registrorepasswordconfirmacion-notEmpty').remove();
		}
	}

	function handlePhoneValidation(error) {
		if (error.length > 0) {
			if ($('#registrophone-notEmpty').length == 0) 
			{
				$('#registrophone').after('<div id="registrophone-notEmpty">' + error + '</div>');
			}else{
				$('#registrophone-notEmpty').remove();	
				$('#registrophone').after('<div id="registrophone-notEmpty">' + error + '</div>');
			}
		} else{
			$('#registrophone-notEmpty').remove();
		}
	}






	// VALIDAR FORMULARIO DE LOGIN
	$('#carnet').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'carnet', value: $(this).val() },
			handleCarnetValidation
		);
	});
	$('#password').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'password', value: $(this).val() },
			handlePasswordValidation
		);
	});
	function handleCarnetValidation(error) {
		if (error.length > 0 && error !== 'El carnet ya se encuentra registrado.') {
			if ($('#carnet-notEmpty').length == 0) 
			{
				$('#carnet').after('<div id="carnet-notEmpty">' + error + '</div>');
			}else{
				$('#carnet-notEmpty').remove();	
				$('#carnet').after('<div id="carnet-notEmpty">' + error + '</div>');
			}
		} else{
			$('#carnet-notEmpty').remove();
		}
	}
	function handlePasswordValidation(error) {
		if (error.length > 0) {
			if ($('#password-notEmpty').length == 0) 
			{
				$('#password').after('<div id="password-notEmpty">' + error + '</div>');
			}else{
				$('#password-notEmpty').remove();	
				$('#password').after('<div id="password-notEmpty">' + error + '</div>');
			}
		} else{
			$('#password-notEmpty').remove();
		}
	}



});