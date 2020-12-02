using System;
using System.Linq;
using System.Reflection;

namespace AoC_2020
{
    class Program
    {
        static void Main(string[] args)
        {
            var start = DateTime.Now;
            var asm = Assembly.GetExecutingAssembly();
            var classes = asm.GetTypes().Where(p =>
                 p.Namespace == "AoC_2020.Challenges" &&
                 p.Name.Contains("Challenge")
            ).ToList();

            foreach(var challenge in classes)
            {
                var c = Activator.CreateInstance(challenge) as Challenge;
                var res = c.task1();

                Console.WriteLine($"{challenge.Name} task 1: {res}");
                res = c.task2();

                Console.WriteLine($"{challenge.Name} task 2: {res}");
            }
            var end = DateTime.Now;
            Console.WriteLine($"Took: {end - start}");
        }
    }
}
