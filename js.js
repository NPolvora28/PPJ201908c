var palabra1 = "Hola gente";
	var palabra2 = "Estamos rogramando en JS";
	var numero = 23;
	var boleano = true;
	var boleana = false;
	
	if(window.console){
		//muestro por pantalla
		document.write("<h1>Ejemplos de c&oacute;digo JS</h1>");
		//muestro por consola
		console.log = "Este es un mensaje de consola";
		console.error(palabra1);
		console.warn(palabra2);
		console.info(numero);
		console.info(boleano);
		console.error(boleana);
		//muestro por pantalla las variables
		document.write("La variable palabra1 vale: "+palabra1+"<br>");
		document.write("La variable palabra2 vale: "+palabra2+"<br>");
		document.write("La variable numero vale: "+numero+"<br>");
		document.write("La variable boleano vale: "+boleano+"<br>");
		document.write("La variable boleana vale: "+boleana+"<br>");
		
		function inialert(){
			alert("esta es una ventana emergente");
			
		}
		alert("esta es otra ventana");
		
	}