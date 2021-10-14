using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Multiples
{
    class Ejercicio02
    {
        static void MainTemporal(string[] args)
        {
            /*2. Una compañía de fumigación utiliza aviones para fumigar las cosechas contra una gran variedad de plagas. Las
            cantidades que la compañía cobra a los granjeros depende de qué es lo que se desea fumigar y del número de
            hectáreas que se desea fumigar, de acuerdo con la siguiente distribución :
            Tipo 1 : Fumigación contra malas hierbas, $50 000 por hectárea
            Tipo 2 : Fumigación contra moscas y mosquitos, $70 000 por hectárea
            Tipo 3 : Fumigación contra gusanos, $80 000 por hectárea.
            Tipo 4 : Fumigación contra todo lo anterior, $190 000 por hectárea.

            • Si el área a fumigar es mayor de 100 hectáreas, el granjero goza de un 5% de descuento.
            • Además, si la cuenta total sobrepasa el $1 000 000 se hace acreedor a un 10% de descuento sobre la cantidad
            que sobrepase el $1 000 000.
            • Si ambos descuentos son aplicables, el correspondiente a la superficie se considera primero.
            Diseñe el programa que lea el nombre del granjero, el tipo de fumigación solicitada (1-4) y el número de hectáreas a
            fumigar.
            Se debe imprimir el nombre del granjero y la cuenta total.*/

            double CostoTotal, Hectareas, Fumigación, descuento;
            string Nombre;
            double costo;

            Console.WriteLine("Ejercicio 2");
            Console.WriteLine("-------------");
            Console.WriteLine("Nombre del granjero o encargado de la finca:");
            Nombre = Console.ReadLine();

            Console.WriteLine("Numero de hectareas que desea Fumigar:");
            bool resp = double.TryParse(Console.ReadLine(), out Hectareas);


            Console.WriteLine("Tipo de Fumigación");
            Console.WriteLine("1. Fumigación contra malas hierbas");
            Console.WriteLine("2. Fumigación contra moscas y mosquitos");
            Console.WriteLine("3. Fumigación contra gusanos");
            Console.WriteLine("4. Fumigación contra todo lo anterior");
            Fumigación = double.Parse(Console.ReadLine());

            while (Fumigación != 1 && Fumigación != 2 && Fumigación != 3 && Fumigación != 4)
            {

                Console.WriteLine("Syntax ERROR");
                Console.WriteLine("--------------");
                Console.WriteLine("Tipo de Fumigación");
                Console.WriteLine("1. Fumigación contra malas hierbas");
                Console.WriteLine("2. Fumigación contra moscas y mosquitos");
                Console.WriteLine("3. Fumigación contra gusanos");
                Console.WriteLine("4. Fumigación contra todo lo anterior");
                Fumigación = double.Parse(Console.ReadLine());
            }

            Console.WriteLine(Nombre);

            switch (Fumigación)
            {
                case 1:
                    costo = Hectareas * 50000;
                    if (Hectareas > 100)
                    {
                        descuento = costo * 5 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000)
                    {
                        descuento = costo * 10 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000 && Hectareas > 100)
                    {
                        descuento = costo * 15 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    break;
                case 2:
                    costo = Hectareas * 70000;
                    if (Hectareas > 100)
                    {
                        descuento = costo * 5 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000)
                    {
                        descuento = costo * 10 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000 && Hectareas > 100)
                    {
                        descuento = costo * 15 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    break;
                case 3:
                    costo = Hectareas * 80000;
                    if (Hectareas > 100)
                    {
                        descuento = costo * 5 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000)
                    {
                        descuento = costo * 10 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000 && Hectareas > 100)
                    {
                        descuento = costo * 15 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    break;
                case 4:
                    costo = Hectareas * 190000;
                    if (Hectareas > 100)
                    {
                        descuento = costo * 10 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000)
                    {
                        descuento = costo * 5 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    else if (costo > 1000000 && Hectareas > 100)
                    {
                        descuento = costo * 15 / 100;
                        CostoTotal = costo - descuento;
                        Console.WriteLine("El costo total de la fumigación es de " + CostoTotal);
                    }
                    break;

                default:
                    Console.WriteLine("Syntax ERROR");
                    break;
            }
        }
    }
}