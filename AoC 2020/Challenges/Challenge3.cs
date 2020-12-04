using System;
using System.Collections.Generic;
using System.Text;
using System.Text.RegularExpressions;

namespace AoC_2020.Challenges
{
    public class Challenge3 : Challenge
    {
        public override long task1()
        {
            var x = 0;
            var y = 1;
            long total = 0;

            for (; y < input.Length; y += 1)
            {
                x += 3;
                if (x >= input[y].Length)
                {
                    x -= input[y].Length;
                }
                if (input[y][x] == '#')
                {
                    total++;
                }
            }

            return total;
        }
        public override long task2()
        {
            long product = 1;
            var steps = new Dictionary<int, List<int>>
            {
                { 1, new List<int>{1,1} },
                { 2, new List<int>{3,1} },
                { 3, new List<int>{5,1} },
                { 4, new List<int>{7,1} },
                { 5, new List<int>{1,2} }
            };
            foreach(var step in steps)
            {
                long total = 0;
                var x = 0;
                var y = step.Value[1];

                for (; y < input.Length; y += step.Value[1])
                {
                    x += step.Value[0];
                    if (x >= input[y].Length)
                    {
                        x -= input[y].Length;
                    }
                    if (input[y][x] == '#')
                    {
                        total++;
                    }
                }
                product *= total;
            }

            return product;
        }
    }
}
