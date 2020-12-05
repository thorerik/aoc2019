using System.Collections.Generic;
using System.Linq;

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
            var max = v.Max();
            for(var current = v.Min(); current < max; current++)
            {
                if (v.Contains(current - 1) && v.Contains(current + 1) && !v.Contains(current))
                {
                    return current;
                }
            }
            return 1;
        }
    }
}
