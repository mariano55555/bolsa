$(document).ready(function() {
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
			handlePasswordValidation
		);
	});
	$('#registropasswordconfirmacion').blur(function() {
		/* Act on the event */
		$.post(
			app +'Users/validar_registro', 
			{field: 'password_confirmation', value: $(this).val() },
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
	function handlePasswordValidation(error) {
		if (error.length > 0) {
			if ($('#registopasswordt-notEmpty').length == 0) 
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
			if ($('#registropasswordconfirmacion-notEmpty').length == 0) 
			{
				$('#registropasswordconfirmacion').after('<div id="registropasswordconfirmacion-notEmpty">' + error + '</div>');
			}else{
				$('#registropasswordconfirmacion-notEmpty').remove();	
				$('#registropasswordconfirmacion').after('<div id="registropasswordconfirmacion-notEmpty">' + error + '</div>');
			}
		} else{
			$('#registropasswordconfirmacion-notEmpty').remove();
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
});