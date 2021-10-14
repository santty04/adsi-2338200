using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio06
    {
        static void Main(string[] args)
        {
            /*6. El dueño de una empresa desea planificar las decisiones financieras que tomara en el Siguiente año. La manera
            de planificarlas depende de lo siguiente:
            Si actualmente su capital se encuentra con saldo negativo, pedirá un préstamo bancario para que su nuevo
            saldo sea de $1 000 000. Si su capital tiene actualmente un saldo positivo pedirá un préstamo bancario para
            tener un nuevo saldo de $2 000 000, pero si su capital tiene actualmente un saldo superior a los $2 000 000 no
            pedirá ningún préstamo.
            Posteriormente repartirá su presupuesto de la siguiente manera.
            • $500 000 para equipo de computo
            • $200 000 para mobiliario
            • y del resto, la mitad será para la compra de insumos y la otra para otorgar incentivos al personal.
            Solicitar el capital y en base a este desplegar que cantidades se destinaran para la compra de insumos e
            incentivos al personal y, en caso de que fuera necesario, a cuanto ascendería la cantidad que se pediría al
            banco*/

            double prestamo, capital, equipoC, Mobiliario, insumos, Presupuesto, incentivos;

            Console.WriteLine("Digite el capital actual de la empresa");
            capital = double.Parse(Console.ReadLine());

            if (capital < 0)
            {
                prestamo = 1000000;
                Presupuesto = capital + prestamo;
                equipoC = 500000;
                Mobiliario = 200000;
                insumos = (prestamo - (equipoC + Mobiliario)) / 2;
                incentivos = (prestamo - (equipoC + Mobiliario)) / 2;

                Console.WriteLine("El dinero (" + Presupuesto + ") se repartira de la siguiente forma:");
                Console.WriteLine("Prestamo -> " + prestamo);
                Console.WriteLine("Equipo de computo -> " + equipoC);
                Console.WriteLine("Mobiliario -> " + Mobiliario);
                Console.WriteLine("insumos -> " + insumos);
                Console.WriteLine("Incentivos -> " + incentivos);
            }
            else if (capital > 0 || capital < 2000000)
            {
                prestamo = 2000000;
                Presupuesto = capital + prestamo;
                equipoC = 500000;
                Mobiliario = 200000;
                insumos = (prestamo - (equipoC + Mobiliario)) / 2;
                incentivos = (prestamo - (equipoC + Mobiliario)) / 2;

                Console.WriteLine("El dinero (" + Presupuesto + ") se repartira de la siguiente forma:");
                Console.WriteLine("Prestamo -> " + prestamo);
                Console.WriteLine("Equipo de computo -> " + equipoC);
                Console.WriteLine("Mobiliario -> " + Mobiliario);
                Console.WriteLine("insumos -> " + insumos);
                Console.WriteLine("Incentivos -> " + incentivos);
            }
            else
            {
                prestamo = 0;
                Presupuesto = capital;
                equipoC = 500000;
                Mobiliario = 200000;
                insumos = (prestamo - (equipoC + Mobiliario)) / 2;
                incentivos = (prestamo - (equipoC + Mobiliario)) / 2;

                Console.WriteLine("El dinero (" + Presupuesto + ") se repartira de la siguiente forma:");
                Console.WriteLine("Prestamo -> " + prestamo);
                Console.WriteLine("Equipo de computo -> " + equipoC);
                Console.WriteLine("Mobiliario -> " + Mobiliario);
                Console.WriteLine("insumos -> " + insumos);
                Console.WriteLine("Incentivos -> " + incentivos);
            }


        }

    }
}