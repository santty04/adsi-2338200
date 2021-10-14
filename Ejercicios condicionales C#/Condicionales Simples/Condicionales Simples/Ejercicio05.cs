using System;

public class Ejercicio05
{
	public Ejercicio05()
	{
		static void Main(string[] args)
		{
			/*5.Calcular el total que una persona debe pagar en un almacén, si el precio de cada llanta es de $80000
			si se compran menos de 5 llantas y de $70000 si se compran 5 o más.*/

			byte cantidadLL;
			double precioU, total_pagar;

			Console.WriteLine("Digite el numero de llantas que quire llevar");
			cantidadLL = byte.Parse(Console.ReadLine());

			precioU = (80000);

			if (cantidadLL >= 5)
			{
				precioU = (70000);

			}

			total_pagar = precioU * cantidadLL;

			Console.WriteLine("Su total a pagar es de " + total_pagar);


		}
	}
}
