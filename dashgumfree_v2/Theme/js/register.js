function validarPass(formulario) {
	if (formulario.pass1.value != "" && (formulario.pass1.value == formulario.pass2.value)) {
		return true;
	}
	else {
		location.href = "register.php#myModal";
		return false;
	}
}