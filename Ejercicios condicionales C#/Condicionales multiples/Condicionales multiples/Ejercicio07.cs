using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio07
    {
        static void Main(string[] args)
        {
            /*7. El costo de las llamadas internacionales depende de la zona geográfica en la que se encuentre el país destino,
            y del número de minutos hablados.
            En la siguiente tabla se presenta el costo por minuto por zona. A cada uno se le ha asociado una clave.
            Construya la solución para calcular e imprimir el costo de una llamada dada la clave y la duración de la llamada.
            ._____________________________
            |Clave        |Zona                  |Precio         |Precio/minuto(del 4 en adelante)|
            |____|_______|_____|____________|
            |12           |América del Norte     |200            |150                             |  
            |15           |América Central       |220            |180                             |  
            |18           |América del Sur       |450            |350                             |  
            |19           |Europa                |350            |270                             |  
            |23           |Asia                  |600            |460                             |      
            |25           |África                |600            |460                             |  
            |29           |Oceanía               |500            |390                             |   
            |____|_______|_____|____________|
             */
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
                   
                    if (MinHab > 4)
                    {
                        NameCase = "America del Norte";
                        PreMin = 200;
                        CostTot = ((MinHab - 4) * 150) + (4 * PreMin); 
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "America del Norte";
                        PreMin = 200;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    
                    break;
                case 15:
                    if (MinHab > 4)
                    {
                        NameCase = "America Central";
                        PreMin = 220;
                        CostTot = ((MinHab - 4) * 180) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "America Central";
                        PreMin = 220;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                case 18:
                  
                    if (MinHab > 4)
                    {
                        NameCase = "America del Sur";
                        PreMin = 450;
                        CostTot = ((MinHab - 4) * 350) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "America del Sur";
                        PreMin = 450;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                case 19:
                    if (MinHab > 4)
                    {
                        NameCase = "Europa";
                        PreMin = 350;
                        CostTot = ((MinHab - 4) * 270) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "Europa";
                        PreMin = 350;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                case 23:
                    if (MinHab > 4)
                    {
                        NameCase = "Asia";
                        PreMin = 600;
                        CostTot = ((MinHab - 4) * 460) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "Asia";
                        PreMin = 600;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                case 25:
                    if (MinHab > 4)
                    {
                        NameCase = "África";
                        PreMin = 600;
                        CostTot = ((MinHab - 4) * 460) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "África";
                        PreMin = 600;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                case 29:
                    if (MinHab > 4)
                    {
                        NameCase = "Ocenía";
                        PreMin = 500;
                        CostTot = ((MinHab - 4) * 390) + (4 * PreMin);
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    else
                    {
                        NameCase = "Ocenía";
                        PreMin = 500;
                        CostTot = PreMin * MinHab;
                        Console.WriteLine("Llamada a " + NameCase);
                        Console.WriteLine("Numero llamadó [" + numero + "]");
                        Console.WriteLine("Costo total de la llamada " + CostTot);
                    }
                    break;
                default:
                    Console.WriteLine("Syntax ERROR");
                    break;
            }
        }
    }
}
