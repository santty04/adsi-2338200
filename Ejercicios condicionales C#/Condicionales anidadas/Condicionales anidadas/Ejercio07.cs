using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio07
    {
        static void MainTemporal(string[] args)
        {
            /*7. Leer 2 números; si son iguales que los multiplique, si el primero es mayor que el segundo que los reste y si no
            que los sume.*/

            double num1, num2, result;

            Console.WriteLine("Digite el primer numero");
            num1 = double.Parse(Console.ReadLine());
            Console.WriteLine("Digite el segundo numero");
            num2 = double.Parse(Console.ReadLine());

            if (num1 == num2)
            {
                result = num1 * num2;
                Console.WriteLine("El resultado es " + result);
            }
            else if (num1 > num2)
            {
                result = num1 - num2;
                Console.WriteLine("El resultado es " + result);
            }
            else
            {
                result = num1 + num2;
                Console.WriteLine("El resultado es " + result);
            }

        }
    }
}