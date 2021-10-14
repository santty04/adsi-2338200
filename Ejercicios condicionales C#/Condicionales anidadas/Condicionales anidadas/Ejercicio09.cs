using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio09
    {
        static void MainTemporal(string[] args)
        {
            /*9. El fondo de administración de pensiones requiere clasificar a las personas que se jubilaran en el año 2009.
            Existen tres tipos de jubilaciones: por edad, por antigüedad joven y por antigüedad adulta. Las personas
            adscritas a la jubilación por edad deben tener 60 años o mas y una antigüedad en su empleo de menos de 25
            años.
            Las personas adscritas a la jubilación por antigüedad joven deben tener menos de 60 años y una antigüedad
            en su empleo de 25 años o más.
            Las personas adscritas a la jubilación por antigüedad adulta deben tener 60 años o mas y una antigüedad en su
            empleo de 25 años o mas.
            Determinar en que tipo de jubilación, quedara adscrita una persona.*/

            byte Antigüedad, Edad;
            string Nombre, TipJub;

            Console.WriteLine("Digite el nombre del Jubilado");
            Nombre = Console.ReadLine();
            Console.WriteLine("Digite la edad de " + Nombre);
            Edad = byte.Parse(Console.ReadLine());
            Console.WriteLine("Cuantos años trabajo " + Nombre);
            Antigüedad = byte.Parse(Console.ReadLine());

            if (Antigüedad >= 25)
            {
                if (Edad < 60)
                {
                    TipJub = " Por Antigüedad Joven";
                    Console.WriteLine(Nombre + " Esta clasificado como" + TipJub);
                }
                else
                {
                    TipJub = " Por Antigüedad Adulta";
                    Console.WriteLine(Nombre + " Esta clasificado como" + TipJub);
                }
            }
            else if (Edad >= 60)
            {
                TipJub = "Por edad ";
                Console.WriteLine(Nombre + " Esta clasificado como" + TipJub);

            }
        }
    }
}