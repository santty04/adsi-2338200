Proceso ejercicio28
	// Un trabajador recibe su pago, según la cantidad de horas trabajadas y su valor. Si la cantidad de
	//horas trabajadas es mayor que 40, éstas se consideran horas extra, y tienen un incremento de $10000
    //(diez mil) sobre el valor de la hora. Calcular y mostrar el salario (pago) del trabajador. Nota: leer horas
	//trabajadas y valor de la hora.
	definir cantidad_horas_trabajadas Como Entero;
	Definir valor_hora_paga Como Entero;
	definir pago_total como entero ; 
	
	escribir " ingrese cuantas horas a trabajado " ;
	leer cantidad_horas_trabajadas;
	Escribir " ingrese valor por hora trabajada ";
	leer valor_hora_paga ;
	
	pago_total = cantidad_horas_trabajadas*valor_hora_paga ;
	si (cantidad_horas_trabajadas > 40) Entonces
		pago_total = (valor_hora_paga + 10000) + cantidad_horas_trabajadas;
		Escribir "Su salario semanal fue de " , pago_total , " incluido el pago de horas extra";
	SiNo
		pago_total = (valor_hora_paga * cantidad_horas_trabajadas);
		Escribir "Su salario semanal fue de " , pago_total;
		
	FinSi
	
	
FinProceso