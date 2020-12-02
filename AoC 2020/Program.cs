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
                var runStart = DateTime.Now;
                var c = Activator.CreateInstance(challenge) as Challenge;
                
                var taskStart = DateTime.Now;
                var res = c.task1();
                var taskEnd = DateTime.Now;

                Console.WriteLine($"{challenge.Name} task 1: {res} in {taskEnd - taskStart}");

                taskStart = DateTime.Now;
                res = c.task2();
                taskEnd = DateTime.Now;

                Console.WriteLine($"{challenge.Name} task 2: {res} in {taskEnd - taskStart}");
                var runEnd = DateTime.Now;
                Console.WriteLine($"Challenge took: {runEnd - runStart}\n");
            }
            var end = DateTime.Now;
            Console.WriteLine($"Took: {end - start}");
        }
    }
}
