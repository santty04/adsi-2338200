Proceso Ejercicio21
	//Pedir dos números y decir cuál es el mayor o si son iguales.
	Definir num1 Como Real;
	Definir num2 Como Real;
	
	//Entrada y salida
	Escribir "Escriba un numero";
	Leer num1;
	Escribir "Escriba otro numero";
	Leer num2;
	
	//Salidas
	Si num1>num2 Entonces
		Escribir "El número " , num1 , " es mayor que " , num2;
	SiNo
		Escribir "El número " , num2 , " es mayor que " , num1;
	FinSi
	Si num1==num2 Entonces
		Escribir "Los números " , num1 , " y " , num2 , " son iguales";
	FinSi
FinProceso
