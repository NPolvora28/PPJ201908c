//Pedimos al usuario que indique si es cierto quiere mostrar o no mensajes
var usuario = prompt("&iquest;Es cierto que usted quiere mostrar mensajes? Indique si esto es verdadero o falso");

switch(usuario){
	case "verdadero": //En caso de ser verdadero
	var mostrado = prompt("Ingrese un valor para la variable Mostrado, el valor debe ser verdadero o falso");//Creamos la variable Mostrado solicitando su valor al usuario
	if(mostrado == "verdadero") {
		alert("Es la primera vez que se muestra el mensaje");//Si ambas variables son verdaderas
	}else{
		alert("Usted permitio mostrar mensajes pero el valor de la varaible Mostrado es falso u otro valor");//Si Mostrado no es verdadero
	}
	break;
	case "falso"://En caso de ser falso
	document.write("Usted no permitio que se mostraran mensajes en modo de alerta, ya que indico que esto era falso");
	break;
	default:
	document.write("Usted no ingreso ni verdadero ni falso");//En caso de no ingresar ni verdadero ni falso
	
}
