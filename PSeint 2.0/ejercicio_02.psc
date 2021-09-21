Proceso ejercicio_02
	//La compañía de seguros de vida atlas se va a cambiar de domicilio y por lo tanto pone en venta su
	//terreno pero no tiene una idea del valor del terreno, entonces solicita al departamento de sistemas
	//que le desarrolle un algoritmo con la finalidad de que calcule e imprima el precio del terreno del cual
	//se tiene los siguientes datos: largo, ancho y precio por metro cuadrado, si el terreno tiene más de
	//400 metros cuadrados se hace un descuento del 10%.
	Definir largo , ancho , valor_m2 , area , total_pagar Como Real;
	
	Escribir " digite el largo del terreno " ;
	Leer largo ;
	Escribir " digite el ancho del terreno " ;
	leer ancho ;
	Escribir " digite el precio por metro cuadrado del tereno " ;
	leer valor_m2 ; 
	
	area = ( largo * ancho ) ;
	total_pagar = ( area * valor_m2 ) ;
	
	si ( area > 400 ) Entonces
		total_pagar = total_pagar - ( total_pagar * 10 / 100 ) ;
		
	FinSi
	
	Escribir " su total a pagar es : " , total_pagar ;
	
	
FinProceso