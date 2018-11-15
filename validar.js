function validar(){
	var nombre, correo, contra, expresion;

	nombre = document.getElementById("name").value;
	correo = document.getElementById("email").value;
	contra = document.getElementById("pass").value;

	expresion = /\w+@\w+\.+[a-z]/;
	//Expresion para el correo:  ejemplo1@hotmail.com

	if (nombre === "" || correo === "" || contra === "") {
		alert("Los datos debes ser llenados correctamente");
		return false;
	}

	if (nombre.length>30) {
		alert("El nombre es muy largo");
		return false;
	}
	else if (correo.length>100) {
		alert("El nombre es muy largo");
		return false;
	}
	else if (!expresion.test(correo)) {
		alert("El formato de correo no es correcto");
		return false;
	}
	else if (contra.length>30) {
		alert("El nombre es muy largo");
		return false;
	}

}