Proceso ejercicio_06
	//En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento
	//dependiendo de un número que se escoge al azar. Si el numero escogido es menor que 74 el
	//descuento es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%.
	//Obtener cuánto dinero se le descuenta.
	
	Definir  numazar , valorcompra , descuento , total_pagar Como Real;
	
	Escribir " digite el valor de su compra " ;
	leer valorcompra ; 
	
	numazar = azar( 100 ) ;
	Escribir " el numero al azar asignado es : " , numazar ;
	
	descuento = valorcompra * 0.15 ;
	
	si ( numazar >= 74 ) Entonces
		descuento = valorcompra * 0.2 ;
	FinSi
	
	total_pagar = valorcompra - descuento ;
	
	Escribir " su descuento es : " , descuento , " y su total a pagar es : " , total_pagar ;
	
	
	
FinProceso