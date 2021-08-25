Proceso Ejercicio06
	// Hacer un algoritmo que lea el nombre de un artículo, el valor unitario, la cantidad a comprar y muestre
	// el nombre y el total a pagar.
	
	// Definicion de varianle
	
	Definir nombreArticulo Como Caracter;
	definir valorUnitario Como Entero;
	Definir cantidad Como Entero;
	Definir valorTotal Como Entero;
	
	// Entrada
	Escribir "Ponga el articulo a llevar";
	Leer nombreArticulo;
	Escribir "Digite el valor del articulo";
	Leer valorUnitario;
	Escribir " Digite la cantidad a llevar";
	Leer cantidad;
	
	// Operaciones
	valorTotal = valorUnitario * cantidad;
	
	// Salida
	Escribir "Su producto es " , nombreArticulo , " y el total a pagar es " , valorTotal;
	
FinProceso
