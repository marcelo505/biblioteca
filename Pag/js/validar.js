    function login () {

    var clave = document.getElementById("password").value;
		var verificar_clave = document.getElementById("verify_password").value;
    //var nombre = document.getElementById("name").value;

  /*  if (nombre) {

  }*/

		if (verificar_clave == clave){
		return true;
		} else {
			alert("Contrase\u00f1as err\u00f3neas\u0021 \nInt\u00e9ntalo de nuevo.");
			return false;
		}
	}
