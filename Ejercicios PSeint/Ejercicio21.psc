Proceso Ejercicio21
	//Pedir dos n�meros y decir cu�l es el mayor o si son iguales.
	Definir num1 Como Real;
	Definir num2 Como Real;
	
	//Entrada y salida
	Escribir "Escriba un numero";
	Leer num1;
	Escribir "Escriba otro numero";
	Leer num2;
	
	//Salidas
	Si num1>num2 Entonces
		Escribir "El n�mero " , num1 , " es mayor que " , num2;
	SiNo
		Escribir "El n�mero " , num2 , " es mayor que " , num1;
	FinSi
	Si num1==num2 Entonces
		Escribir "Los n�meros " , num1 , " y " , num2 , " son iguales";
	FinSi
FinProceso
