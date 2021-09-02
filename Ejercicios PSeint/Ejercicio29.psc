Proceso Ejercicio29
	//Dado un monto, calcular el descuento considerando que por encima de 100 el descuento es del 10% 
	//y por debajo de 100, el descuento es del 2%.
	Definir monto Como Entero;
	
	//Entradas
	Escribir "Escriba el monto";
	Leer monto;
	
	//Salidas
	Si monto>100 entonces
		Escribir "El descuento es del 10%: " , monto*0.10;
	SiNo
		Escribir "El descuento es del 2%: " , monto*0.02;
	FinSi
FinProceso
