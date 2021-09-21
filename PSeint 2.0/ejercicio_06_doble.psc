Proceso ejercicio_06_doble 
	
	//6. El gobierno colombiano desea reforestar un bosque que mide determinado número de hectáreas. Si la
	//superficie del terreno excede a 1 millón de metros cuadrados, entonces decidirá sembrar de la sig. manera:
	//Porcentaje de la superficie del bosque Tipo de árbol
	//70% Pino // 20% Roble // 10% Cedro
	//Si la superficie del terreno es menor o igual a un millón de metros cuadrados, entonces decidirá sembrar de la
	//sig. manera:
	//Porcentaje de la superficie del bosque Tipo de árbol
	//50% Pino // 30% Roble // 20% Cedro
	//El gobierno desea saber el numero de pinos, robles y cedros que tendrá que sembrar en el bosque, si se sabe
	//que en 10 metros cuadrados caben 8 pinos, en 15 metros cuadrados caben 15 robles y en 18 metros cuadrados
	//caben 10 cedros. También se sabe que una hectárea equivale a 10 mil metros cuadrados.
	
	Definir metros_bosque, pinos, robles, cedros, hectareas Como Real;
	Definir pinos_num, robles_num, cedros_num Como entero;
	
	Escribir "Bienvenido al Sistema";
	Escribir "------------";
	Escribir "Digite el numero de metros cuadrados que van a reforestar en Hectareas";
	Leer hectareas;
	
	metros_bosque = (hectareas * 10000);
	
	Si (metros_bosque > 1000000) Entonces
		pinos = ((70 * metros_bosque) / 100);
		robles = ((20 * metros_bosque) / 100);
		cedros = ((10 * metros_bosque) / 100);
		Escribir "Se va a sembrar en este terreno 70% de pinos, 20% de robles y 10% de cedros";
		
	SiNo
		pinos = ((50 * metros_bosque) / 100);
		robles = ((30 * metros_bosque) / 100);
		cedros = ((20 * metros_bosque) / 100);
		Escribir "Se va a sembrar en este terreno 50% de pinos, 30% de robles y 20% de cedros";
		
	FinSi
	
	pinos_num = trunc((pinos/10)*8);
	robles_num = trunc((robles/15)*15);
	cedros_num = trunc((cedros/18)*10);
	
	Escribir "El numero de cedros es ", cedros_num;
	Escribir "El numero de robles es ", robles_num;
	Escribir "El numero de pinos es ", pinos_num;
	
FinProceso