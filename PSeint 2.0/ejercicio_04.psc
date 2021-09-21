Proceso ejercicio_04
	//Hacer un algoritmo que imprima el nombre de un artículo, clave, precio original y su precio con
	//descuento. El descuento lo hace en base a la clave, si la clave es 1 el descuento es del 10% y si la
	//clave es 2 el descuento en del 20% (solo existen dos claves).
	
	Definir  nombre como cadena ;
	Definir clave , precio , precioD , precioT Como Real;
	
	Escribir " digite el nombre del producto " ; 
	leer nombre ;
	escribir " digite el valor del producto " ; 
	leer precio ; 
	Escribir " digite la clave del producto que pueda ser 1 o 2 " ;
	leer clave ; 
	
	mientras ( clave <> 1 y clave <> 2 ) Hacer
		Escribir " la clave no es valida , vuelva a ingresar el valor " ; 
		escribir " digite la clave del producto que pueda ser 1 o 2 " ;
		leer clave ;
	FinMientras
	
	precioD = precio * 0.10 ;
	
	si ( clave == 2 ) Entonces
		precioD = precio * 0.20 ;
	FinSi
	si ( clave <> 1 y clave <> 2 ) Entonces
		Escribir " la clave no es valida " ;
	FinSi
	precioT = precio - precioD ; 
	
	escribir " el nombre del articulo es : " , nombre , " la clave es : " , clave , " el precio original es : " , precio , " su total a pagar es : " , precioT ;
FinProceso