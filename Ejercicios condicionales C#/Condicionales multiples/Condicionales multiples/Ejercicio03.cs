using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio03
    {
        static void MainTemporal(string[] args)
        {
            /*3. Dados como datos dos variables de tipo entero, obtenga el resultado de la siguiente función:
            |Val          |       Num             |
            |-------------|-----------------------|
            |100 * v      |       1               |      
            |100^v        |       2               |
            |100/v        |       3               |
            |0            |       Cualquier número|
            
            */

            int Num1, Vari, resultado;

            Console.WriteLine("Ejercicio 3");
            Console.WriteLine("-------------");
            Console.WriteLine("Digite la operacion que quiere realizar.");
            Console.WriteLine("1. 100 * V");
            Console.WriteLine("2. 100 ^ V");
            Console.WriteLine("3. 100 / V");
            Num1 = int.Parse(Console.ReadLine());


            Console.WriteLine("Asignelé un Valor a la variable (V)");
            bool resp = int.TryParse(Console.ReadLine(), out Vari);



            switch (Num1)
            {
                case 1:
                    resultado = 100 * Vari;
                    Console.WriteLine("El resultado es " + resultado);
                    break;
                case 2:
                    resultado = 100 ^ Vari;
                    Console.WriteLine("El resultado es " + resultado);
                    break;
                case 3:
                    resultado = 100 / Vari;
                    Console.WriteLine("El resultado es " + resultado);
                    break;
                default:
                    Console.WriteLine(" El resultado es 0");
                    break;
            }



        }
    }
}