//practica Clase 2
/*
Corrija el codigo
*/
/*
var x = "La respuesta es " + 42;
var y = 42 + " es la respuesta";
var resta = "37"-7; //resultado deberia ser 30
var concatenacion = "37"+7; //resultado esperado 377

//Prueba de escritorio
console.log(x);
console.log(y);
console.log(resta);
console.log(concatenacion);
//Muestro en pantalla
document.write("Prueba de escritorio<br>");
document.write(x+"<br>");
document.write(y+"<br>");
document.write(resta+"<br>");
document.write(concatenacion+"<br>");
//Arreglos
document.write("<br>");
document.write("Prueba de Escritorio Arrelgo<br>");
var cafes =['Tostado','Colombiano','Kona'];
console.log(cafes);
document.write(cafes);

document.write("<br>")
document.write("<br>")
document.write("Prueba de Escritorio Arrelgo 2<br>");
var peces =["Dolie",,"Dorado"];
console.log(peces);
document.write(peces+"<br>");

//IF
document.write("<br>")
document.write("Estructura If/Else<br>");
var edad = 18;

if(edad >= 18){
	//verdadero
	document.write("Eres mayor de edad");
}else{
	//falso
	document.write("Eres menor de edad");
}

document.write("<br>")
document.write("Estructura If/Else 2<br>");
*/
var nombre = "";

if (nombre == ""){
	alert("Aun no has dicho tu nombre");
	nombre =  prompt("Ingrese su nombre por favor");
	console.log("Gracias "+nombre+" hemos guardado tu nombre");
	document.write("Su nombre es: <b>"+nombre+"<br>");
}else{
	alert("Hemos guardado tu nombre");
}