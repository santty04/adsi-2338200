Proceso Ejercicio30
	//Leer dos números y calcular su división, teniendo en cuenta que el denominador no debe ser 0 (cero)
	//variables
	Definir num1 Como Entero;
	Definir divisor Como Entero;
	
	//Entradas
	Escribir 'Digite un numero numero';
	Leer num1;
	Escribir 'Digite el divisor numero';
	Leer divisor;
	
	//salidas
	si num1 mod divisor = 0 Entonces
		Escribir divisor, ' Es divisor exacto de ' ,num1;
	SiNo
		Escribir 'El resto de dividir ' ,num1, ' por ' ,divisor, ' es ' ,num1 mod divisor;
	FinSi

	
FinProceso
