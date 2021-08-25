Proceso Ejercicio03
	
	//Hacer un algoritmo que declare una variable para guardar el promedio del semestre, otra para guardar
	//el nombre de un estudiante y otra para guardar el número de notas perdidas.
	
	//Definir variables
	Definir not_1 Como Real;
	definir not_2 Como Real;
	definir not_3 Como Real;
	Definir Promedio_semestre Como Real;
	Definir Nombre_estudiante como cadena;
	definir Notas_perdidas como entero;
	
	//Operaciones de Entrada
	
	Escribir "Escribir Nota 1 del semestre:";
	Leer not_1;
	Escribir "Escribir Nota 2 del semestre";
	Leer not_2;
	Escribir "Escribir Nota 3 del semestre";
	Leer not_3;
	Escribir "Digite el nombre del estudiante: ";
	leer Nombre_estudiante;
	Escribir "Cuantas notas perdidas tuvo en el semestre: ";
	Leer Notas_perdidas;
	
	//Proceso 
	
	Promedio_semestre = (not_1 + not_2 + not_3) / 3;
	
	//Operaciones Salida
	Escribir "---------------------------------------------------------------------------------------------------------------------------------------------------";
	
	Escribir " Su promedio es de: " , Promedio_semestre , " Nombre del estudiante es: " , Nombre_estudiante , " Numero de notas perdidas :" , Notas_perdidas;
	
FinProceso
