using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Simples
{
    class Ejercicio03
    {
        static void Main(string[] args)
        {
            /*3. El jefe de un almacén de ropa, pone una promoción en sus trajes por un período de tres días para
            sus clientes, de tal manera que si un cliente ordena un traje se captura el modelo del traje y el
            precio unitario. Si el cliente ordena tres o más trajes se le hace un descuento del 17%, si no se le
            cobra al precio normal. Desarrollar el algoritmo y diagrama de flujo.*/

            string modelo;
            double precioU, descuento, totalPG;
            byte Cantidad;

            Console.WriteLine("Escriba el modelo y la talla del traje que desea comprar");
            modelo = Console.ReadLine();
            Console.WriteLine("Escriba el valor o costo unitario dle traje que desea comprar");
            precioU = double.Parse(Console.ReadLine());
            Console.WriteLine("Escriba la cantidad de trajes de este modlo que desea comprar");
            Cantidad = byte.Parse(Console.ReadLine());

            totalPG = (Cantidad * precioU);
            Console.WriteLine("Su total a pagar es de " + totalPG);

            if (Cantidad >= 3)
            {
                descuento = totalPG - (totalPG * 0.17);
                Console.WriteLine("Menos el descuento su total a pagar es de " + descuento);
            }



        }
    }
}