using System;

namespace Ejercicio01
{
    class Program
    {
        static void Main(string[] args)
        {
            // Definicion de variables
            byte num1;
            sbyte num2;
            short num3;
            int num4, suma, resta;
            ulong num5;
            double peso;
            char genero;
            string nombre;
            bool esActivo;

            // Asignacion de variables
            num1 = 25;
            num2 = -25;
            num3 = 30000;
            num4 = 5654654;
            num5 = 4651654687446854556;
            genero = 'F';
            nombre = "Santiago";
            esActivo = false;

            //Declaracion y asignacion en una sopla linea
            ushort num6 = 75;
            decimal sueldo = (decimal)1500000.45;

            // Operaciones de salida
            Console.WriteLine("Hello World!");
            Console.WriteLine("El valor número 1 es: " + num1);
            Console.WriteLine("Valor de número 2 es: " + num2 + " y número 3 es: " + num3);

            // Procesos
            suma = num1 + num2;
            resta = num1 - num3;

           
            // Condicional doble
            if (esActivo == true)
            {
                Console.WriteLine("El usuario está activo");
            }
            else
            {
                Console.WriteLine("El usuario NO está activo");
            }

            // Operaciones de entrada (datos ingresados por el usuario)
            Console.WriteLine("Digite un su nombre");
            nombre = Console.ReadLine();

            Console.WriteLine("Digite el valor del número 1");
            num1 = byte.Parse(Console.ReadLine());

            Console.WriteLine("Digite su peso");
            peso = double.Parse(Console.ReadLine());

            Console.WriteLine("El numero 1 es: " + num1);
            Console.WriteLine("Su peso es: " + peso);
            Console.WriteLine("Su nombre es: " + nombre);
            


        }   
    }
}
