Proceso Ejercicio24
	//Pedir un número entre 0 y 9.999 y decir cuántas cifras tiene.
	Definir num Como Entero;
	
	//Entrada
	Escribir "Escriba un numero entre el 0 y 9999";
	Leer num;
	
	//Salida
	Si num<10 Entonces
		Escribir , num , " es de una cifra"; 
	FinSi
	Si num>9 y num<100 Entonces
		Escribir , num , " es un numero de dos cifras";
	FinSi
	Si num>99 y num<1000 Entonces
		Escribir , num , " es un numero de tres cifras";
	FinSi 
	Si num>999 y num<10000 Entonces
		Escribir , num , " es un numero de cuatro cifras";
	Finsi 
	
	
FinProceso
