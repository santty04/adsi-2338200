using System;

public class Ejercicio07
{
	public Ejercicio07()
	{
		static void Main(string[] args)
		{
			/*7. Una compañía de seguros esta abriendo un depto. de finanzas y estableció un programa para captar
			clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que 
			$50 000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que $50 000 la cuota a pagar
			será el 2% del monto. La compañia desea determinar cual será la cuota que debe pagar un cliente.*/

			double fianza, Cuota;

			Console.WriteLine("Ingrese el monto que le asignó la seguradora para su fianza");
			fianza = double.Parse(Console.ReadLine());

			Cuota = (fianza * 0.03);

			if (fianza > 50000)
			{
				Cuota = (fianza * 0.03);
			}

			Console.WriteLine("Su cuota inicial es de " + Cuota);
		}
	}
}
