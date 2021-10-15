using System;

namespace CSLab02
{
    class My_Vector
    {
        public string Name;
        public int X;
        public int Y;
        public My_Vector(string name, int x, int y)
        {
            this.Name = name;
            this.X = x;
            this.Y = y;
        }
        public My_Vector() { }
        public static My_Vector operator +(My_Vector Name1, My_Vector Name2)
        {
            My_Vector Vec3 = new My_Vector();
            string NM = Name1.Name + "+" + Name2.Name;
            Vec3.Name = NM;
            Vec3.X = Name1.X + Name2.X;
            Vec3.Y = Name1.Y + Name2.Y;
            return Vec3;
        }
        public static My_Vector operator -(My_Vector Name1, My_Vector Name2)
        {
            My_Vector Vec4 = new My_Vector();
            string NM = Name1.Name + "-" + Name2.Name;
            Vec4.Name = NM;
            Vec4.X = Name1.X - Name2.X;
            Vec4.Y = Name1.Y - Name2.Y;
            return Vec4;
        }
        public static My_Vector operator *(My_Vector Name, int Num)
        {
            My_Vector Vec5 = new My_Vector();
            string NM = Name.Name + "*" + Num;
            Vec5.Name = NM;
            Vec5.X = Name.X * Num;
            Vec5.Y = Name.Y * Num;
            return Vec5;
        }
    }
    class CSLab02
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Первый вектор.\nВведите название вектора:");
            string name;
            while (true)
            {
                name = Console.ReadLine();
                if (name.Length < 1)
                {
                    Console.WriteLine("Введено пустое значение!");
                    Console.WriteLine("Введите название вектора:");
                    continue;
                }
                break;
            }
            Console.WriteLine("Введите координату X:");
            int x = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите координату Y:");
            int y = Convert.ToInt32(int.Parse(Console.ReadLine()));

            My_Vector Vec1 = new My_Vector(name, x, y);

            Console.WriteLine("-----------------------------------------------------------------------------------\nВторой вектор.\nВведите название вектора:");
            string name1;
            while (true)
            {
                name1 = Console.ReadLine();
                if ((String.Equals(name, name1)) || (name1.Length < 1))
                {
                    Console.WriteLine("Введённое название уже существует или введено пустое значение!");
                    Console.WriteLine("Введите название вектора:");
                    continue;
                }
                break;
            }
            Console.WriteLine("Введите координату X:");
            x = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите координату Y:");
            y = Convert.ToInt32(int.Parse(Console.ReadLine()));

            My_Vector Vec2 = new My_Vector(name1, x, y);

            bool menu = true;

            while (true)
            {
                if (menu == true)
                {
                    Console.WriteLine("===================================================================================\n1. Сложить векторы.");
                    Console.WriteLine("2. Вычесть вектор из вектора.");
                    Console.WriteLine("3. Умножить вектор на скалярную величину.");
                    Console.WriteLine("4. Вычислить длину вектора.");
                    Console.WriteLine("0. Перестать биться в агонии.\n");
                    menu = false;
                }
                int Action = Convert.ToInt32(int.Parse(Console.ReadLine()));

                switch (Action)
                {
                    case 1:
                        {
                            My_Vector Vec3 = Vec1 + Vec2;
                            Console.WriteLine($"-----------------------------------------------------------------------------------\n Сумма векторов {name} + {name1} = Вектор " + Vec3.Name + " = " + Vec3.X + " " + Vec3.Y);
                            menu = true;
                            Console.WriteLine("\nНажмите любую кнопку, чтобы продолжить...");
                            Console.ReadKey(true);
                            continue;
                        }
                    case 2:
                        {
                            Console.WriteLine("-----------------------------------------------------------------------------------\nВыберите вариант нахождения разности:");
                            Console.WriteLine($"1. {name} - {name1}");
                            Console.WriteLine($"2. {name1} - {name}");
                                                    
                            while (true)
                            {
                                Action = Convert.ToInt32(int.Parse(Console.ReadLine()));

                                if (Action == 1)
                                {
                                    My_Vector Vec4 = Vec1 - Vec2;
                                    Console.WriteLine($"\nРазность векторов {name} - {name1} = Вектор " + Vec4.Name + " = " + Vec4.X + " " + Vec4.Y);
                                    break;
                                }
                                else if (Action == 2)
                                {
                                    My_Vector Vec4 = Vec2 - Vec1;
                                    Console.WriteLine($"\nРазность векторов {name1} - {name} = Вектор " + Vec4.Name + " = " + Vec4.X + " " + Vec4.Y);
                                    break;
                                }
                            }
                            menu = true;
                            Console.WriteLine("\nНажмите любую кнопку, чтобы продолжить...");
                            Console.ReadKey(true);
                            continue;
                        }
                    case 3:
                        {
                            Console.WriteLine("-----------------------------------------------------------------------------------\nВыберите вектор:");
                            Console.WriteLine($"1. {name}");
                            Console.WriteLine($"2. {name1}");

                            while (true)
                            {
                                Action = Convert.ToInt32(int.Parse(Console.ReadLine()));
                                if (Action != null)
                                {
                                    Console.WriteLine("Введите число:");
                                    int num = Convert.ToInt32(int.Parse(Console.ReadLine()));

                                    if (Action == 1)
                                    {
                                        My_Vector Vec5 = Vec1 * num;
                                        Console.WriteLine($"Произведение вектора на скаляр \n{name} * {num} = Вектор " + Vec5.Name + " = " + Vec5.X + " " + Vec5.Y);
                                        break;
                                    }
                                    else if (Action == 2)
                                    {
                                        My_Vector Vec5 = Vec2 * num;
                                        Console.WriteLine($"Произведение вектора на скаляр \n{name1} * {num} = Вектор " + Vec5.Name + " = " + Vec5.X + " " + Vec5.Y);
                                        break;
                                    }
                                }
                            }
                            menu = true;
                            Console.WriteLine("\nНажмите любую кнопку, чтобы продолжить...");
                            Console.ReadKey(true);
                            continue;
                        }
                    case 4:
                        {
                            Console.WriteLine("-----------------------------------------------------------------------------------\nВыберите вектор:");
                            Console.WriteLine($"1. {name}");
                            Console.WriteLine($"2. {name1}");

                            while (true)
                            {
                                Action = Convert.ToInt32(int.Parse(Console.ReadLine()));

                                if (Action == 1)
                                {
                                    double Length = Math.Sqrt(Math.Pow(Vec1.X, 2) + Math.Pow(Vec1.Y, 2));
                                    Console.WriteLine($"\nДлина вектора {name} = " + Math.Round(Length, 2) + " ед.");
                                    break;
                                }
                                else if (Action == 2)
                                {
                                    double Length = Math.Sqrt(Math.Pow(Vec2.X, 2) + Math.Pow(Vec2.Y, 2));
                                    Console.WriteLine($"\nДлина вектора {name} = " + Math.Round(Length, 2) + " ед.");
                                    break;
                                }
                            
                            }
                            menu = true;
                            Console.WriteLine("\nНажмите любую кнопку, чтобы продолжить...");
                            Console.ReadKey(true);
                            continue;
                        }
                    case 0:
                        {
                            break;
                        }
                    default:
                        {
                            continue;
                        }
                }
                break;
            }
            Console.WriteLine("\nНажмите любую кнопку, чтобы продолжить...");
            Console.ReadKey(true);
        }
    }
}