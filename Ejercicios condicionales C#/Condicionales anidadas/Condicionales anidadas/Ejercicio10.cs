using System;
using System.Collections.Generic;
using System.Text;

namespace Condicionales_Anidadas
{
    class Ejercicio10
    {
        static void Main(string[] args)
        {
            /*10. Tomando como base los resultados obtenidos en un laboratorio de análisis clínicos, un medico determina si
             una persona esta normal, tiene anemia o tiene cardiopatía lo cual depende de su nivel de hemoglobina en la
             sangre, de su edad y de su sexo. Si el nivel de hemoglobina que tiene una persona es menor que el rango que
             le corresponde, se determina su resultado como Anemia, si esta dentro del rango, se determina su resultado
             como Normal y si esta por encima del rango, se determina su resultado como Cardiopatía. La tabla en la que el
             medico se basa para obtener el resultado es la siguiente:
            | EDAD                 |  NIVEL HEMOGLOBINA |
            | 0 - 1 mes            |  13 - 26 g%        |
            | > 1 y < = 6 meses    |  10 - 18 g%        |
            | > 6 y < = 12 meses   |  11 - 15 g%        |
            | > 1 y < = 5 años     |  11.5 - 15 g%      |
            | > 5 y < = 10 años    |  12.6 - 15.5 g%    |
            | > 10 y < = 15 años   |  13 - 15.5 g%      |
            |                      |                    |
            ---------------------------------------------
            | mujeres > 15 años 12 - 16 g%              |
            |-------------------------------------------|
            | hombres > 15 años 14 - 18 g%              |  
            |-------------------------------------------|           */

            string nombre;
            byte hemo, sexo, menor1;
            double edadA;

            Console.WriteLine("Ejercicio 10");
            Console.WriteLine("----------------");
            Console.WriteLine("Digite el nombre del paciente");
            nombre = Console.ReadLine();
            Console.WriteLine("Digite el sexo del paciente");
            Console.WriteLine("1. Mujer");
            Console.WriteLine("2. Hombre");
            sexo = byte.Parse(Console.ReadLine());
            while (sexo != 1 && sexo != 2)
            {
                Console.WriteLine("Opción Incorrecta");
                Console.WriteLine("Digite el sexo del paciente");
                Console.WriteLine("1. Mujer");
                Console.WriteLine("2. Hombre");
                sexo = byte.Parse(Console.ReadLine());
            }
            Console.WriteLine("Digite el nivel de Hemoglobina en la sangre del paciente (g%)");
            hemo = byte.Parse(Console.ReadLine());
            Console.WriteLine("Digite la edad del paciente en años (Si el paciente es menor de un año digite |-1|)");
            edadA = double.Parse(Console.ReadLine());

            /* Meses del bebé*/

            if (edadA == -1)
            {
                Console.WriteLine("Digite los meses del menor(0 - 12)");
                menor1 = byte.Parse(Console.ReadLine());
                if (menor1 <= 1)
                {
                    if (hemo >= 13 && hemo <= 26)
                    {
                        Console.WriteLine("El diagnostico del paciente es normal");
                    }
                    else if (hemo < 13)
                    {
                        Console.WriteLine("El paciente sufre de anemia");
                    }
                    else
                    {
                        Console.WriteLine("El paciente sufre de Cardiopatia");
                    }
                }
                else if (menor1 > 1 && menor1 <= 6)
                {
                    if (hemo >= 10 && hemo <= 18)
                    {
                        Console.WriteLine("El diagnostico del paciente es normal");
                    }
                    else if (hemo < 10)
                    {
                        Console.WriteLine("El paciente sufre de anemia");
                    }
                    else
                    {
                        Console.WriteLine("El paciente sufre de Cardiopatia");

                    }
                }
                else if (menor1 > 6 && menor1 <= 12)
                {
                    if (hemo >= 11 && hemo <= 15)
                    {
                        Console.WriteLine("El diagnostico del paciente es normal");
                    }
                    else if (hemo < 11)
                    {
                        Console.WriteLine("El paciente sufre de anemia");
                    }
                    else
                    {
                        Console.WriteLine("El paciente sufre de Cardiopatia");
                    }

                }
            }
            /* Años de 1 a 5 */
            else if (edadA > 1 && edadA <= 5)
            {
                if (hemo >= 11.5 && hemo <= 15)
                {
                    Console.WriteLine("El diagnostico del paciente es normal");
                }
                else if (hemo < 11.5)
                {
                    Console.WriteLine("El paciente sufre de anemia");
                }
                else
                {
                    Console.WriteLine("El paciente sufre de Cardiopatia");
                }
            }
            /* Años de 5 a 10 */
            else if (edadA > 5 && edadA <= 10)
            {
                if (hemo >= 12.6 && hemo <= 15.5)
                {
                    Console.WriteLine("El diagnostico del paciente es normal");
                }
                else if (hemo < 12.6)
                {
                    Console.WriteLine("El paciente sufre de anemia");
                }
                else
                {
                    Console.WriteLine("El paciente sufre de Cardiopatia");
                }
            }
            /* Años 10 a 15 */
            else if (edadA > 10 && edadA <= 15)
            {
                if (hemo >= 13 && hemo <= 15.5)
                {
                    Console.WriteLine("El diagnostico del paciente es normal");
                }
                else if (hemo < 13)
                {
                    Console.WriteLine("El paciente sufre de anemia");
                }
                else
                {
                    Console.WriteLine("El paciente sufre de Cardiopatia");
                }
            }
            /* Mayor 15 años */
            else
            {
                if (sexo == 1)
                {
                    if (hemo >= 13 && hemo <= 15.5)
                    {
                        Console.WriteLine("El diagnostico del paciente es normal");
                    }
                    else if (hemo < 13)
                    {
                        Console.WriteLine("El paciente sufre de anemia");
                    }
                    else
                    {
                        Console.WriteLine("El paciente sufre de Cardiopatia");
                    }
                }
                else if (sexo == 2)
                {
                    if (hemo >= 13 && hemo <= 15.5)
                    {
                        Console.WriteLine("El diagnostico del paciente es normal");
                    }
                    else if (hemo < 13)
                    {
                        Console.WriteLine("El paciente sufre de anemia");
                    }
                    else
                    {
                        Console.WriteLine("El paciente sufre de Cardiopatia");
                    }
                }
                else
                {
                    Console.WriteLine("Syntax Error");
                }
            }

        }
    }
}