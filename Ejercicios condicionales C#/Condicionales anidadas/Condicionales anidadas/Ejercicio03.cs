using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio03
    {
        static void Main(string[] args)
        {
            /*3. En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de
            computadoras que compre. Si las computadoras son menos de cinco se les dará un 10% de descuento sobre el
            total de la compra; si el número de computadoras es mayor o igual a cinco pero menos de diez se le otorga un
            20% de descuento; y si son 10 o más se les da un 40% de descuento. El precio de cada computadora es de
            $1 100 000*/

            double PreComput, Descuento, valorCT, TotPagD;
            byte CanComp;



            Console.WriteLine(" Ejercicio 03");
            Console.WriteLine("<------------->");
            Console.WriteLine("¿Cuantos computadores desea comprar?");
            CanComp = byte.Parse(Console.ReadLine());

            PreComput = 1100000;

            valorCT = CanComp * PreComput;

            if (CanComp < 5)
            {
                Descuento = ((valorCT * 10) / 100);
            }
            else if (CanComp < 10)
            {
                Descuento = ((valorCT * 20) / 100);
            }
            else
            {
                Descuento = ((valorCT * 40) / 100);
            }

            TotPagD = CanComp * PreComput - Descuento;
            Console.WriteLine("Su total a pagar es de " + TotPagD + " con el descuento incluido.");
        }
    }
}