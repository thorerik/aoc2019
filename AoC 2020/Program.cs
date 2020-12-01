using System;

namespace AoC_2020
{
    class Program
    {
        static void Main(string[] args)
        {
            var challenge1 = new Challenge1();
            var res = challenge1.task1();

            Console.WriteLine($"Challenge 1 task 1: {res}");
            res = challenge1.task2();

            Console.WriteLine($"Challenge 1 task 2: {res}");
        }
    }
}
