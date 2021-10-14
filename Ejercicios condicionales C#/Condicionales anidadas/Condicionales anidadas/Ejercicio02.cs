using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio02
    {
        static void Main(string[] args)
        {
            /*2. Dado el monto de una compra calcular el descuento considerado
            • Descuento es 20% si el monto es mayor a 20 000 pesos.
            • Descuento es 10% si el monto es mayor a 10 000 pesos y menor o igual a 20000 pesos.
            • no hay descuento si el monto es menor o igual a 10000 pesos.*/

            double ValCom, descuCom, TotPag;

            Console.WriteLine("Digite el costo neto de su compra");
            ValCom = double.Parse(Console.ReadLine());

            if (ValCom > 20000)
            {
                descuCom = ((ValCom * 20) / 100);
            }
            else if (ValCom > 10000)
            {
                descuCom = ((ValCom * 10) / 100);
            }
            else
            {
                descuCom = 0;
            }

            TotPag = ValCom - descuCom;

            Console.WriteLine("Su total a pagar es de " + TotPag);

        }
    }
}