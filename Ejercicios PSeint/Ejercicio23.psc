Proceso Ejercicio23
	//Pedir tres números y mostrarlos ordenados de mayor a menor.
	Definir num1 Como Real;
	Definir num2 Como Real;
	Definir num3 como real;
	
	//Entrada
	Escribir "Escriba un numero";
	Leer num1;
	Escribir "Escriba otro número";
	Leer num2;
	Escribir "Escriba otro numero";
	Leer num3;
	
	//Salida
	Si num1>num2 y num2>num3 Entonces
		Escribir "El orden de mayor a menor es " , num1 , " - " , num2 , " - " , num3;
	FinSi
	Si num2>num1 y num1>num3 Entonces
		Escribir "El orden de mayor a menor es " , num2 , " - " , num1 , " - " , num3;
	FinSi
	Si num3>num1 y num1>num2 Entonces
		Escribir "El orden de mayor a menor es " , num3 , " - " , num1 , " - " , num2;
	FinSi
	Si num1>num3 y num3>num2 Entonces
		Escribir "El orden de mayor a menor es " , num1 , " - " , num3 , " - " , num2;
	FinSi
	Si num3>num2 y num2>num1 Entonces
		Escribir "El orden de mayor a menor es " , num3 , " - " , num2 , " - " , num1;
	FinSi
	
	
FinProceso
