using System.Collections.Generic;

namespace AoC_2020.Challenges
{
    public class Challenge5 : Challenge
    {
        private List<long> v = new List<long>();

        public override long task1()
        {
            long max = 0;
            foreach(var boardingpass in input)
            {
                const char upper = 'B';
                const char right = 'R'; // Upper half of column

                uint b = 0;

                foreach (var f in boardingpass)
                {
                    b <<= 1;
                    if(f == right || f == upper)
                    {
                        b |= 01;
                    }
                }

                if (b > max)
                {
                    max = b;
                }
                v.Add(b);
                
            }
            return max;
        }
        public override long task2()
        {
            v.Sort(); // sorting and just looping is faster than using Linq
            for(var current = v[0]; current < v[v.Count-1]; current++)
            {
                var previous = current - 1;
                var next = current + 1;
                if (v.Contains(previous) && v.Contains(next) && !v.Contains(current))
                {
                    return current;
                }
            }
            return 1;
        }
    }
}
