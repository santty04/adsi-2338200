using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio06
    {
        static void MainTemporal(string[] args)
        {
            /*6. Desarrollar un algoritmo que lea el nombre del mes y el año e imprima en pantalla cuantos días tiene. Es
            necesario tener en cuenta si es año bisiesto o no.*/


            double año, biciesto;
            int mes;

            Console.WriteLine("Ejercicio [06]");
            Console.WriteLine("______");



            Console.WriteLine("Mes");
            Console.WriteLine("1. Enero");
            Console.WriteLine("2. Febrero");
            Console.WriteLine("3. Marzo");
            Console.WriteLine("4. Abril");
            Console.WriteLine("5. Mayo");
            Console.WriteLine("6. Junio");
            Console.WriteLine("7. Julio");
            Console.WriteLine("8. Agosto ");
            Console.WriteLine("9. Septiembre");
            Console.WriteLine("10. Octubre");
            Console.WriteLine("11. Noviembre");
            Console.WriteLine("12. Diciembre");
            mes = int.Parse(Console.ReadLine());
            Console.WriteLine("____________");

            / ------------------------------------------------------------------/

            while (mes != 1 && mes != 2 && mes != 3 && mes != 4 && mes != 5 && mes != 6 && mes != 7 && mes != 8 && mes != 9 && mes != 10 && mes != 11 && mes != 12)
            {
                Console.WriteLine("Mes");
                Console.WriteLine("1. Enero");
                Console.WriteLine("2. Febrero");
                Console.WriteLine("3. Marzo");
                Console.WriteLine("4. Abril");
                Console.WriteLine("5. Mayo");
                Console.WriteLine("6. Junio");
                Console.WriteLine("7. Julio");
                Console.WriteLine("8. Agosto ");
                Console.WriteLine("9. Septiembre");
                Console.WriteLine("10. Octubre");
                Console.WriteLine("11. Noviembre");
                Console.WriteLine("12. Diciembre");
                mes = int.Parse(Console.ReadLine());
                Console.WriteLine("____________");
            }
            / ------------------------------------------------------------------/

            Console.WriteLine("Año");
            año = double.Parse(Console.ReadLine());
            Console.WriteLine("____________");

            biciesto = año % 4;

            / ------------------------------------------------------------------/

            switch (mes)
            {
                case 1:
                    Console.WriteLine("Enero tiene 31 dias");
                    break;
                case 2:
                    if (biciesto == 0)
                    {
                        Console.WriteLine("Febrero tiene 29 dias");
                    }
                    else
                    {
                        Console.WriteLine("Febrero tiene 28 dias");
                    }
                    break;

                case 3:
                    Console.WriteLine("Marzo tiene 31");
                    break;
                case 4:
                    Console.WriteLine("Abril tiene 30 dias");
                    break;
                case 5:
                    Console.WriteLine("Mayo tiene 31 dias");
                    break;
                case 6:
                    Console.WriteLine("Junio tiene 30 dias");
                    break;
                case 7:
                    Console.WriteLine("Julio tiene 31 dias");
                    break;
                case 8:
                    Console.WriteLine("Agosto tiene 31 dias");
                    break;
                case 9:
                    Console.WriteLine("Septiembre tiene 30 dias");
                    break;
                case 10:
                    Console.WriteLine("Octubre tiene 31 dias");
                    break;
                case 11:
                    Console.WriteLine("Noviembre tiene 30 dias");
                    break;
                case 12:
                    Console.WriteLine("Diciembre tiene 31 dias");
                    break;
                default:

                    break;
            }








        }
    }
}