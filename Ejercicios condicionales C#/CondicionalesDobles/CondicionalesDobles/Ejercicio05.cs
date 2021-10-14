using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_dobles
{
    class Ejercicio05
    {
        static void Main(string[] args)
        {
            /*5. Un cliente ordena cierta cantidad de brochas de cerda y rodillos; las brochas de cerda tienen un 20% de
            descuento y los rodillos un 15% de descuento. Los datos que se tienen por cada tipo de artículo son: la cantidad 
            pedida y el precio unitario. Además, si se paga de contado todo tiene un descuento del 7%. Elaborar un
            programa en LPP y DFD que calcule y muestre en pantalla el costo total de la orden, tanto para el pago de
            contado como para el caso de pago de crédito. Para el caso de pago de contado el usuario ingresa 1, para pago
            a crédito el usuario ingresa 2.*/

            double brocha, rodillo, descuentoR, descuentoB, total_P, tot_des;
            byte CanB, CanR, MedioP;

            brocha = (8000);
            descuentoB = brocha - ((brocha * 20) / 100);
            rodillo = (10000);
            descuentoR = rodillo - ((rodillo * 15) / 100);


            Console.WriteLine("Cantidad de brochas que desea comprar (Recuerde que tienen el 20% de descuento)");
            CanB = byte.Parse(Console.ReadLine());
            Console.WriteLine("Cantidad de rodillos que desea comprar (Recuerde que tienen el 15% de descuento)");
            CanR = byte.Parse(Console.ReadLine());
            Console.WriteLine("Medio de pago|| 1. Contado || 2. Credito");
            MedioP = byte.Parse(Console.ReadLine());

            if (MedioP != 1 && MedioP != 2)
            {
                while (MedioP != 1 && MedioP != 2)
                {
                    Console.WriteLine("Numero incorrecto, debe ser el numero uno(1) o el dos(2)");
                    Console.WriteLine("Medio de pago|| 1. Contado || 2. Credito");
                    MedioP = byte.Parse(Console.ReadLine());
                }

            }



            total_P = (CanR * descuentoR) + (CanB * descuentoB);

            if (MedioP == 1)
            {
                tot_des = total_P - (total_P * 7 / (100));
                Console.WriteLine("Su total a pagar es de " + tot_des);
            }
            else
            {
                Console.WriteLine("Su total a pagar es de " + total_P);
            }









        }
    }
}