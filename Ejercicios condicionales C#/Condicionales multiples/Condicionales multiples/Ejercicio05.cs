using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio05
    {
        static void Main(string[] args)
        {
            /*5. El costo de las llamadas internacionales depende de la zona geográfica en la que se encuentre el país destino,
            y del número de minutos hablados.
            En la siguiente tabla se presenta el costo por minuto por zona. A cada uno se le ha asociado una clave.
             _________________
            |Clave           |Zona              | Precio    |
            |12              |América del Norte |  200      |
            |15              |América Central   |  220      |
            |18              |América del Sur   |  450      |
            |19              |Europa            |  350      |
            |23              |Asia              |  600      |
            |25              |África            |  600      |
            |29              |Oceanía           |  500      |
            |_____|______!____|


            Construya la solución para calcular e imprimir el costo de una llamada dada la clave*/


            double PreMin, Zona, CostTot, numero;
            int MinHab;
            string NameCase;

            Console.WriteLine("Digite la extensión de la zona del mundo a la que quiere llamar");
            Console.WriteLine("12.  |América del Norte| ");
            Console.WriteLine("15.  |América Central| ");
            Console.WriteLine("18.  |América del Sur| ");
            Console.WriteLine("19.  |Europa|  ");
            Console.WriteLine("23.  |Asia|  ");
            Console.WriteLine("25.  |África| ");
            Console.WriteLine("29.  |Oceanía|   ");
            Zona = double.Parse(Console.ReadLine());

            while (Zona != 12 && Zona != 15 && Zona != 18 && Zona != 19 && Zona != 23 && Zona != 25 && Zona != 29)
            {
                Console.WriteLine("Digite la extensión de la zona del mundo a la que quiere llamar");
                Console.WriteLine("12.  |América del Norte| ");
                Console.WriteLine("15.  |América Central| ");
                Console.WriteLine("18.  |América del Sur| ");
                Console.WriteLine("19.  |Europa|  ");
                Console.WriteLine("23.  |Asia|  ");
                Console.WriteLine("25.  |África| ");
                Console.WriteLine("29.  |Oceanía|   ");
                Zona = double.Parse(Console.ReadLine());
            }

            Console.WriteLine("Digite el numero al cual desea llamar");
            numero = double.Parse(Console.ReadLine());

            Console.WriteLine("llamando al " + Zona + "-" + numero);
            Console.WriteLine("- - - - - - - - - - -");
            Console.WriteLine("- - - - - - - - - - -");
            Console.WriteLine("- - - - - - - - - - -");
            Console.WriteLine("- - - - - - - - - - -");
            Console.WriteLine("Digite el numero de minutos que habló");
            MinHab = int.Parse(Console.ReadLine());

            switch (Zona)
            {
                case 12:
                    NameCase = "America del Norte";
                    PreMin = 200;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 15:
                    NameCase = "America Central";
                    PreMin = 220;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 18:
                    NameCase = "America del Sur";
                    PreMin = 450;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 19:
                    NameCase = "Europa";
                    PreMin = 350;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 23:
                    NameCase = "Asia";
                    PreMin = 600;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 25:
                    NameCase = "África";
                    PreMin = 600;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                case 29:
                    NameCase = "Oceanía";
                    PreMin = 500;
                    CostTot = PreMin * MinHab;
                    Console.WriteLine("Llamada a " + NameCase);
                    Console.WriteLine("Numero llamadó [" + numero + "]");
                    Console.WriteLine("Costo total de la llamada " + CostTot);
                    break;
                default:
                    Console.WriteLine("Syntax ERROR");
                    break;
            }
        }
    }
}