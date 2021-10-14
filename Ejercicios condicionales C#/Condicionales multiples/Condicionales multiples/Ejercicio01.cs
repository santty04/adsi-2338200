using System;

namespace Condicionales_Multiples
{
    class Ejercicio01
    {
        static void MainTemporal(string[] args)
        {
            /*1. La empresa comercializadora Solva vende escobas, recogedores y aromatizantes,
            clasifica a sus clientes de acuerdo a la frecuencia de compras con las condiciones
            siguientes:
             Si el cliente es de la categoría 1 se le descuenta el 5%
             Si el cliente es de la categoría 2 se le descuenta el 8%
             Si el cliente de de la categoría 3 se le descuenta el 12%
             Si el cliente es de la categoría 4 se le descuenta el 15%

             Cuando el cliente realiza una compra se generan los siguientes datos:
             Nombre del cliente
             Tipo de cliente
             Cantidad comprada de escobas, recogedores y aromatizantes.
            Los precios de estos elementos son.
            • Escobas. 3000.
            • Recogedores. 2000
            • Aromatizantes. 1000
            Desarrollar un programa en LPP que lea estos datos y calcule y muestre en pantalla:
             Nombre del cliente
             Subtotal a pagar
             Descuento
             Total a pagar.*/

            int Categoria, CantidadE, CantidadA, CantidadR;
            string Nombre;
            double Escoba, Recogedor, Aromatizante, SubTot, descuento, TotNEt;





            Console.WriteLine("Hello World!");
            Console.WriteLine("Condicionales Multiples");
            Console.WriteLine("Ejercicio 1");

            Console.WriteLine("Digite el nombre del cliente");
            Nombre = Console.ReadLine();
            Console.WriteLine("Digite la categoria a la que pertenece");
            Console.WriteLine("1. Categoria 1");
            Console.WriteLine("2. Categoria 2");
            Console.WriteLine("3. Categoria 3");
            Console.WriteLine("4. Categoria 4");
            Categoria = int.Parse(Console.ReadLine());



            while (Categoria != 1 && Categoria != 2 && Categoria != 3 && Categoria != 4)
            {

                Console.WriteLine("Syntax ERROR");
                Console.WriteLine("--------------");
                Console.WriteLine("Digite la categoria a la que pertenece");
                Console.WriteLine("1. Categoria 1");
                Console.WriteLine("2. Categoria 2");
                Console.WriteLine("3. Categoria 3");
                Console.WriteLine("4. Categoria 4");
                Categoria = int.Parse(Console.ReadLine());
            }

            Console.WriteLine("Digite la cantidad de escobas que desea comprar");
            bool resp0 = int.TryParse(Console.ReadLine(), out CantidadE);
            Console.WriteLine("Digite la cantidad de Recogedores que desea comprar");
            bool resp1 = int.TryParse(Console.ReadLine(), out CantidadR);
            Console.WriteLine("Digite la cantidad de escobas que desea comprar");
            bool resp2 = int.TryParse(Console.ReadLine(), out CantidadA);


            Escoba = 3000;
            Recogedor = 2000;
            Aromatizante = 1000;

            switch (Categoria)
            {
                case 1:
                    SubTot = (Escoba * CantidadE) + (Recogedor * CantidadR) + (Aromatizante * CantidadA);
                    descuento = (SubTot * 5) / 100;
                    TotNEt = SubTot - descuento;
                    Console.WriteLine("Cliente: " + Nombre);
                    Console.WriteLine("Sub total: " + SubTot);
                    Console.WriteLine("Descuento: " + descuento);
                    Console.WriteLine("Total a pagar: " + TotNEt);
                    break;
                case 2:
                    SubTot = (Escoba * CantidadE) + (Recogedor * CantidadR) + (Aromatizante * CantidadA);
                    descuento = (SubTot * 8) / 100;
                    TotNEt = SubTot - descuento;
                    Console.WriteLine("Cliente: " + Nombre);
                    Console.WriteLine("Sub total: " + SubTot);
                    Console.WriteLine("Descuento: " + descuento);
                    Console.WriteLine("Total a pagar: " + TotNEt);
                    break;
                case 3:
                    SubTot = (Escoba * CantidadE) + (Recogedor * CantidadR) + (Aromatizante * CantidadA);
                    descuento = (SubTot * 12) / 100;
                    TotNEt = (SubTot - descuento);
                    Console.WriteLine("Cliente: " + Nombre);
                    Console.WriteLine("Sub total: " + SubTot);
                    Console.WriteLine("Descuento: " + descuento);
                    Console.WriteLine("Total a pagar: " + TotNEt);
                    break;
                case 4:
                    SubTot = (Escoba * CantidadE) + (Recogedor * CantidadR) + (Aromatizante * CantidadA);
                    descuento = (SubTot * 15) / 100;
                    TotNEt = SubTot - descuento;
                    Console.WriteLine("Cliente: " + Nombre);
                    Console.WriteLine("Sub total: " + SubTot);
                    Console.WriteLine("Descuento: " + descuento);
                    Console.WriteLine("Total a pagar: " + TotNEt);
                    break;
                default:
                    Console.WriteLine("La Opcion es incorrecta");
                    break;
            }


        }
    }
}