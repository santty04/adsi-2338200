Proceso Ejercicio19
	//Pedir dos números y decir si uno es múltiplo del otro.
	
	//variables
	definir num_1 como entero;
	definir num_2 como entero;
	
	//entradas
	escribir "Escriba el primer numero";
	Leer num_1;
	Escribir "Escriba el segundo numero";
	leer num_2;
	
	//salidas
	si num_1>num_2 Entonces
		si num_1 mod num_2=0 entonces 
			Escribir "El número " ,num_1, " Es multiplo de " ,num_2;
		SiNo
			Escribir "El número " ,num_1, " no es multiplo de " ,num_2;
			
		FinSi
	sino 
		si num_2 MOD num_1=0 Entonces
			Escribir "El numero " ,num_2, " es multiplo de " ,num_1;
		SiNo
			Escribir "El numero " ,num_2," no es multiplo de " ,num_1;
		FinSi
	FinSi
	
FinProceso
