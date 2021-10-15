using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CSLab00
{
    class CSLab00
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Za Wārudo!\nВведите своё имя:");
            string name = Console.ReadLine();
            Console.WriteLine("Введите свой возраст:");
            int age = int.Parse(Console.ReadLine());
            string ageUnit;
            if (age / 10 != 1 && age % 10 == 1)
            {
                ageUnit = " год.";
            } 
            else if (age / 10 != 1 && (age % 10 == 2 || age % 10 == 3 || age % 10 == 4))
            {
                ageUnit = " года.";
            }
            else
            {
                ageUnit = " лет.";
            }
            Console.WriteLine("Здравствуйте, " + name + ", соболезную, однако Вам уже " + age + ageUnit);
            Console.ReadKey(false);
        }
    }
}
