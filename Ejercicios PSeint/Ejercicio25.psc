Proceso Ejercicio25
	//Pedir una nota de 0 a 5 y mostrarla de la forma: Insuficiente (0 - 2,9), Suficiente (3 - 4,5) y Bien (4,6- 5)
	Definir nota Como Real;
	
	//Entrada
	Escribir "Escriba su nota para saber su nivel";
	Leer nota;
	
	//Salida
	Si nota>0 y nota<3 Entonces
		Escribir , nota , " esta nota es insuficiente";
	FinSi
	Si nota>2.9 y nota<4.6 Entonces
		Escribir , nota , " esta nota es suficiente";
	FinSi
	Si nota>4.5 y nota<5.1 Entonces
		Escribir , nota , " esta nota es bien";
	FinSi
FinProceso
