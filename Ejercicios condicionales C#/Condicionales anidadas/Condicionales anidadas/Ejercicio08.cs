using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio08
    {
        static void Main(string[] args)
        {
            /*8. El jefe del departamento de construcción de la constructora Pagasa, desea que se le desarrolle un programa
            en C++ para sus empleados, el cual calcule el sueldo de un empleado, de tal manera que el sueldo se calculará
            de la siguiente manera: si el número de horas trabajadas es mayor a 40, el excedente de 40 hrs. se paga al
            doble de la cuota por hora, en caso de no ser mayor a 40 hrs. se paga la cuota normal por hora, si las horas
            exceden a 50 hrs. el excedente de 50 hrs. se paga al triple de la cuota por hora. Se pedirá el nombre del
            empleado, el número de horas trabajadas y la cuota por hora. mostrar en pantalla el nombre del empleado, el
            número de horas trabajadas y su sueldo.*/

            Console.WriteLine(" Ejercicio 08");
            Console.WriteLine("<------------->");


            double sueldoP, sueldoT, ValHora, HorExtr, NumHora;
            string Name;

            Console.WriteLine("Digite su nombre");
            Name = Console.ReadLine();
            Console.WriteLine("Digite el valor por cada hora de su trabajo");
            ValHora = double.Parse(Console.ReadLine());
            Console.WriteLine("Digite el numero de horas trabajadas la ultima semana");
            NumHora = double.Parse(Console.ReadLine());

            if (NumHora <= 40)
            {
                sueldoP = NumHora * ValHora;
                Console.WriteLine(Name);
                Console.WriteLine("Usted esta semana trabajo " + NumHora + " horas, esta semana.");
                Console.WriteLine("Y su sueldo es de " + sueldoP);
            }
            else if (NumHora > 40 || NumHora <= 50)
            {
                sueldoP = (40 * ValHora);
                HorExtr = (NumHora - 40) * (ValHora * 2);
                sueldoT = sueldoP + HorExtr;

                Console.WriteLine(Name);
                Console.WriteLine("Usted esta semana trabajo " + NumHora + " horas, esta semana.");
                Console.WriteLine("Y su sueldo es de " + sueldoT);
            }
            else if (NumHora > 50)
            {
                sueldoP = (50 * ValHora);
                HorExtr = (NumHora - 50) * (ValHora * 3);
                sueldoT = sueldoP + HorExtr;

                Console.WriteLine(Name);
                Console.WriteLine("Usted esta semana trabajo " + NumHora + " horas, esta semana.");
                Console.WriteLine("Y su sueldo es de " + sueldoT);
            }
        }
    }
}