Proceso Ejercicio12
	//Hacer un algoritmo que lea el nombre de una persona, el valor de la hora trabajada y el número de
	// horas que trabajó. Se debe mostrar el nombre y el pago de la persona.
	
	// Definicion de variables
	Definir nombre Como Caracter;
	Definir valordehora Como Entero;
	Definir numhoras Como Entero;
	Definir pago Como Entero;
	
	// Entradas
	Escribir "Escriba su nombre";
	Leer nombre;
	Escribir "Escriba el valor de la hora";
	Leer valordehora;
	Escribir "Escriba el numero de horas que trabajó";
	Leer numhoras;
	
	// Operaciones
	pago = valordehora * numhoras;
	
	// Salida
	Escribir , nombre , " su pago es de " , pago;
	
FinProceso
