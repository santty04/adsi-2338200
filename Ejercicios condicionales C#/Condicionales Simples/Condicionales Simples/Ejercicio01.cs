using System;

namespace Condicionales_Simples
{
    class Ejercicio01
    {
        static void MainTemporal(string[] args)
        {
            /*1.El jefe del personal de operación de la industria aceitera Móvil desea calcular el sueldo neto de sus
            empleados bajo las siguientes normas, solicitar el nombre del empleado, número de horas trabajadas
            y la cuota por hora trabajada, para calcular el sueldo neto del empleado, se le otorga un incentivo del
            5 % si el empleado trabajó más de 40 horas.Imprimir el nombre del empleado y su sueldo. Desarrollar
            el algoritmo y diagrama de flujo.*/

            string nombre;
            byte horas_trabajadas;
            double valor_hora, total_pagar, horas_extra, sueldo_neto;

            Console.WriteLine("Escriba su nombre");
            nombre = Console.ReadLine();
            Console.WriteLine("Escriba el numero de horas trabajados esta semana");
            horas_trabajadas = byte.Parse(Console.ReadLine());
            Console.WriteLine("Digite el valor de cada hora que trabajo");
            valor_hora = double.Parse(Console.ReadLine());
            Console.WriteLine("Digite su sueldo neto");
            sueldo_neto = double.Parse(Console.ReadLine());

            if (horas_trabajadas > 40)

            {
                horas_extra = (horas_trabajadas - 40) * (sueldo_neto * 5 / 100);
                total_pagar = horas_extra + (40 * valor_hora);
            }
            else
            {
                total_pagar = (horas_trabajadas * valor_hora);
            }

            Console.WriteLine("Su total a pagar esta semana es de " + total_pagar);

        }
    }
}