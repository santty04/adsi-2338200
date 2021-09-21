Proceso ejercicio_04_doble
	
	//Una empresa de bienes ra�ces ofrece casas de inter�s social, bajo las siguientes condiciones: Si los ingresos del
	//comprador son mayores o iguales a $800000 la cuota inicial ser� del 15% del costo de la casa y el resto se
	//distribuir� en pagos mensuales, a pagar en diez a�os. Si los ingresos del comprador son inferiores a de $800000
	//la cuota inicial ser� del 30% del costo de la casa y el resto se distribuir� en pagos mensuales a pagar en 7 a�os.
	//La empresa quiere saber cuanto debe pagar un comprador por concepto de cuota inicial y cuanto por cada
	//pago mensual ingresando el valor de la casa.
	
	Definir ingresos , valor_casa , cuota_inicial , cuota_mensual Como Real ;
	
	Escribir " mis ingresos mensuales son de : " ;
	leer ingresos ;
	Escribir " el valor de la casa es de : " ;
	Leer valor_casa ;
	
	si ( ingresos >= 800000 ) Entonces
		cuota_inicial = valor_casa * 0.15 ;
		cuota_mensual = ( valor_casa - cuota_inicial) / 120 ;
	SiNo
		cuota_inicial = valor_casa * 0.3 ;
		cuota_mensual = ( valor_casa - cuota_inicial ) / 84 ;
		
	FinSi
	
	Escribir " su cuota inicial es de : " , cuota_inicial , " su cuota mensual es de : " , cuota_mensual ;
	
FinProceso