using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio04
    {
        static void Main(string[] args)
        {
            /*4. Calcular el valor de f(x) según la expresión
             *        _______________
                     |       |x ^ 2          |     Si x mod 4 = 0|
                     |       |x / 6          |     Si x mod 4 = 1|
                     | f(x)  |Raiz(x)        |     Si x mod 4 = 2|
                     |       |X ^ 3 + 5      |     Si x mod 4 = 3|
                     |__|_____|______|     */



            double Operación, mood;
            byte x;
            Console.WriteLine("Ejercicio [04]");
            Console.WriteLine("______");
            Console.WriteLine("Asignelé un valor a 'X':");
            Console.WriteLine("");
            x = byte.Parse(Console.ReadLine());

            mood = x % 4;
            if (mood == 0)
            {
                switch (mood)
                {
                    case 0:
                        Operación = x ^ 2;
                        Console.WriteLine("La operacion fue:");
                        Console.WriteLine(x + " ^ 2 = " + Operación);
                        break;
                }
            }
            if (mood == 1)
            {
                switch (mood)
                {
                    case 1:
                        Operación = x / 6;
                        Console.WriteLine("La operacion fue:");
                        Console.WriteLine(x + " / 6 = " + Operación);
                        break;
                }
            }
            if (mood == 2)
            {
                switch (mood)
                {
                    case 2:
                        Operación = Math.Sqrt(x);
                        Console.WriteLine("La operacion fue:");
                        Console.WriteLine(" Raiz(" + x + ") = " + Operación);
                        break;
                }
            }
            if (mood == 3)
            {
                switch (mood)
                {
                    case 3:
                        Operación = x ^ 3 + 5;
                        Console.WriteLine("La operacion fue:");
                        Console.WriteLine(x + " ^ 3 + 5  = " + Operación);
                        break;
                }
            }
        }




    }
}