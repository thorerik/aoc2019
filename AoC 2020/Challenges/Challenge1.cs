using System;
using System.Collections.Generic;
using System.Text;

namespace AoC_2020.Challenges
{
    public class Challenge1 : Challenge
    {
        public override ulong task1()
        {
            foreach (var e1 in input)
            {
                foreach (var e2 in input)
                {
                    var i1 = ulong.Parse(e1);
                    var i2 = ulong.Parse(e2);
                    if (i1 + i2 == 2020)
                    {
                        return (i1 * i2);
                    }
                }
            }
            return 1;
        }
        public override ulong task2()
        {
            foreach (var e1 in input)
            {
                foreach (var e2 in input)
                {
                    foreach(var e3 in input)
                    {
                        var i1 = ulong.Parse(e1);
                        var i2 = ulong.Parse(e2);
                        var i3 = ulong.Parse(e3);
                        if (i1 + i2 + i3 == 2020)
                        {
                            return (i1 * i2 * i3);
                        }

                    }
                }
            }
            return 1;
        }
    }
}
