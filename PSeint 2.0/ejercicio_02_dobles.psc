Proceso ejercicio_02_dobles
	
	//Un obrero necesita calcular su salario semanal, el cual se obtiene de la sig. manera:
	//  -Si trabaja 40 horas o menos se le paga $16 por hora
	//	-Si trabaja más de 40 horas se le paga $16 por cada una de las primeras 40 horas y $20 por cada hora
	//extra. 
	
	Definir  horas_trabajadas , horas_extras , total_pagar Como Real; ;
	
	Escribir " Escribir cuantas horas trabajo esta semana " ;
	Leer horas_trabajadas ; 
	
	si ( horas_trabajadas > 40 ) Entonces
		horas_extras = ( horas_trabajadas - 40 ) * 20 ;
		total_pagar = horas_extras + ( 40 * 16 ) ;
		Escribir " su pago total es de : " , total_pagar , " incluidas las horas extras ";
	sino
		total_pagar = horas_trabajadas * 16 ; 
		Escribir " su pago total es de : " , total_pagar ;
	FinSi
	
FinProceso