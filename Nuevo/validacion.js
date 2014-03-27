var datosContactos = 	["nombre",
						"nickname",
						"cargo",
						"direccion",
						"telefono",
						"email",
						"celular",
						"webpage",
						"facebook",
						"twitter",
						"linkedin",
						"contrasena"];
var datosEspeciales =	["email",
						"telefono",
						"celular",
						"webpage"];
var patronEspecial =	["/^[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}$/",
						"[0-9]",
						"/^[0-9]+$/",
						"/^(www\.)*[\w-]\.[\D-]{2,3}$/"];
var datosGrupos = 		["nombre"];

function validarFormularioContacto(numero){
	var datos = queDatos(numero); // obtiene la lista de datos a validar
	for(var i = 0; i < datos.length; i++){
		if($("#"+datos[i]).val() == ""){
			$("#error"+MaysPrimera(datos[i])).show();	
		}else if(validaEspecial($("#"+datos[i]).val()) == "E"){
			$("#errorE"+MaysPrimera(datos[i])).show();
		}else{
			$("#error"+MaysPrimera(datos[i])).hide();
		}
	}
}
function validaEspecial(datoC){
	for(var j = 0 ; j < datosEspeciales.length ; j++){
		if(datoC == datosEspeciales[j]){	
			//if(!datoC.value.match(patronEspecial[j])){
			var pat = new RegExp(patronEspecial[j]);
			//alert(pat);
			if(pat.test(datoC) != true){
				alert(pat.test(datoC)+" - "+datoC+" - "+pat);
				return "E";
			}
			return "";
		}
	}
}
function queDatos(numero){
	switch(numero){
		case 0:
			return datosContactos;
			break;
		case 1:
			return datosGrupos;
			break;
	}
}
function MaysPrimera(string){
  return string.charAt(0).toUpperCase() + string.slice(1);
}