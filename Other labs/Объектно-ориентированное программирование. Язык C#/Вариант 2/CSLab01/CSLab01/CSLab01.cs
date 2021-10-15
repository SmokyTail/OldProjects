using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CSLab01
{
    class Rectangle
    {
        public Rectangle(int x, int y, int width, int height)
        {
            X = x;
            Y = y;
            Width = width;
            Height = height;
        }
        public int X;
        public int Y;
        public int Width;
        public int Height;
        public void Move(int x, int y)
        {
            X = x;
            Y = y;
        }
        public void SizeEdit(int width, int height)
        {
            Width = width;
            Height = height;
        }
        public static Rectangle Bunch(Rectangle a, Rectangle b)
        {
            int x = Math.Min(a.X, b.X);
            int y = Math.Min(a.Y, b.Y);
            int maxX = Math.Max(a.X + a.Width, b.X + b.Width);
            int width = maxX - x;
            int maxY = Math.Max(a.Y + a.Height, b.Y + b.Height);
            int height = maxY - y;
            return new Rectangle(x, y, width, height);
        }
        public static Rectangle Intersection(Rectangle a, Rectangle b)
        {
            int x = Math.Max(a.X, b.X);
            int minX = Math.Min(a.X + a.Width, b.X + b.Width);
            int y = Math.Max(a.Y, b.Y);
            int minY = Math.Min(a.Y + a.Height, b.Y + b.Height);
            int width = minX - x;
            int height = minY - y;
            if (minX >= x && minY >= y)
            {
                return new Rectangle(x, y, width, height);
            }
            return null;
        }
        public override string ToString()
        {
            return String.Format("Положение по оси X: {0}\nПоложение по оси Y: {1}\nШирина: {2}\nВысота: {3}", X, Y, Width, Height);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Первый прямоугольник.\nВведите положение по оси X:");
            int x = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите положение по оси Y:");
            int y = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите ширину:");
            int width = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите высоту:");
            int height = Convert.ToInt32(int.Parse(Console.ReadLine()));

            Rectangle Rec1 = new Rectangle(x, y, width, height);

            Console.WriteLine("-----------------------------------------------------------------------------------\nВторой прямоугольник.\nВведите положение по оси X:");
            int x1 = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите положение по оси Y:");
            int y1 = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите ширину:");
            int width1 = Convert.ToInt32(int.Parse(Console.ReadLine()));
            Console.WriteLine("Введите высоту:");
            int height1 = Convert.ToInt32(int.Parse(Console.ReadLine()));

            Rectangle Rec2 = new Rectangle(x1, y1, width1, height1);

            while (true)
            {
                Console.WriteLine("===================================================================================\nВыбор действий:");
                Console.WriteLine("1. Вывести данные о прямоугольниках;");
                Console.WriteLine("2. Переместить прямоугольник;");
                Console.WriteLine("3. Изменить размер прямоугольника;");
                Console.WriteLine("4. Построить наименьший прямоугольник, содержащий оба прямоугольника;");
                Console.WriteLine("5. Найти область пересечения прямоугольник;");
                Console.WriteLine("0. Прекратить мучения.");

                int Rec;

                switch (int.Parse(Console.ReadLine()))
                {
                    case 1:
                        Console.WriteLine("-----------------------------------------------------------------------------------\nПервый прямоугольник.");
                        Console.WriteLine(Rec1);
                        Console.WriteLine("-----------------------------------------------------------------------------------\nВторой прямоугольник.");
                        Console.WriteLine(Rec2);
                        break;
                    case 2:
                        Console.WriteLine("-----------------------------------------------------------------------------------\nВыберите прямоугольник (1 или 2):");
                        Rec = int.Parse(Console.ReadLine());
                        if (Rec == 1)
                        {
                            Console.WriteLine("Задать новое положение по оси X:");
                            x = int.Parse(Console.ReadLine());
                            Console.WriteLine("Задать новое положение по оси Y:");
                            y = int.Parse(Console.ReadLine());
                            Rec1.Move(x, y);
                        }
                        else if (Rec == 2)
                        {
                            Console.WriteLine("Задать новое положение по оси X:");
                            x1 = int.Parse(Console.ReadLine());
                            Console.WriteLine("Задать новое положение по оси Y:");
                            y1 = int.Parse(Console.ReadLine());
                            Rec2.Move(x1, y1);
                        }
                        break;
                    case 3:
                        Console.WriteLine("-----------------------------------------------------------------------------------\nВыберите прямоугольник (1 или 2):");
                        Rec = int.Parse(Console.ReadLine());
                        if (Rec == 1)
                        {
                            Console.WriteLine("Задать новую ширину:");
                            width = int.Parse(Console.ReadLine());
                            Console.WriteLine("Задать новую высоту:");
                            height = int.Parse(Console.ReadLine());
                            Rec1.SizeEdit(width, height);
                        }
                        else if (Rec == 2)
                        {
                            Console.WriteLine("Задать новую ширину:");
                            width1 = int.Parse(Console.ReadLine());
                            Console.WriteLine("Задать новую высоту:");
                            height1 = int.Parse(Console.ReadLine());
                            Rec2.SizeEdit(width1, height1);
                        }
                        break;
                    case 4:
                        Rectangle Rec3 = Rectangle.Bunch(Rec1, Rec2);
                        Console.WriteLine("-----------------------------------------------------------------------------------\nОбщий минимальный прямоугольник.");
                        Console.WriteLine(Rec3);
                        break;
                    case 5:
                        Rectangle Rec4 = Rectangle.Intersection(Rec1, Rec2);
                        if (Rec4 == null)
                        {
                            Console.WriteLine("-----------------------------------------------------------------------------------\nПрямоугольники не пересекаются.");
                        } 
                        else
                        {
                            Console.WriteLine("-----------------------------------------------------------------------------------\nОбласть пересечения прямоугольников.");
                            Console.WriteLine(Rec4);
                        }
                        break;
                    case 0:
                        return;
                    default:
                        break;
                }
                Console.ReadKey(false);
            }
        }
    }
}
