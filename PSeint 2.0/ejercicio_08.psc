Proceso ejercicio_08
	
	//Dada la duración en minutos de una llamada calcular el costo, considerando
	//-  Hasta tres minutos el costo es 600
	//-  Por encima de tres minutos es 600 más 150 por cada minuto adicional a los tres primeros.
	
	Definir tiempo_llamada , costo_minuto , costo_llamada , minutos_extra Como Real;
	
	escribir " cuanto duro la llamada " ;
	leer tiempo_llamada ;
	
	costo_minuto = 200 ; 
	costo_llamada = costo_minuto * tiempo_llamada ;
	
	si ( tiempo_llamada > 3 ) Entonces
		minutos_extra = ( tiempo_llamada - 3) * 150 ;
		costo_llamada = costo_llamada + minutos_extra ;
	FinSi
	
	escribir " su llamada duro : " , tiempo_llamada , " minutos " , " y el costo de la llamada fue : " , costo_llamada ; 
FinProceso