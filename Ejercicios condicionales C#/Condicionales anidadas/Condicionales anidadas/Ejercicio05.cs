using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio05
    {
        static void Main(string[] args)
        {
            /*5. Una frutería ofrece las manzanas con descuento según la siguiente tabla:
            NUM. DE KILOS COMPRADOS % DESCUENTO
            0 - 2 ------------->0
            2.01 - 5 ---------->10
            5.01 - 10 --------> 15
            10.01 en adelante ->20
            Determinar cuanto pagara una persona que compre manzanas es esa frutería sabiendo que el kilo vale $1300*/

            double kilos, totPag;

            Console.WriteLine("Ejercicio 05");
            Console.WriteLine("Digite el numero de quilo de manzanas que desea llevar ");
            kilos = double.Parse(Console.ReadLine());

            if (kilos > 0 || kilos <= 2)
            {
                totPag = 1300 * kilos;
                Console.WriteLine("El costo total de su compra es de " + totPag);
            }
            else if (kilos >= 2.01 || kilos <= 5)
            {
                totPag = ((1300 * kilos) * 10) / 100;
                Console.WriteLine("El costo total de su compra es de " + totPag);
            }
            else if (kilos >= 5.01 || kilos <= 10)
            {
                totPag = ((1300 * kilos) * 15) / 100;
                Console.WriteLine("El costo total de su compra es de " + totPag);
            }
            else if (kilos > 10)
            {
                totPag = ((1300 * kilos) * 20) / 100;
                Console.WriteLine("El costo total de su compra es de " + totPag);
            }
        }
    }
}