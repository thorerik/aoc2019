using System;
using System.Collections.Generic;
using System.Text;
using System.Text.RegularExpressions;

namespace AoC_2020.Challenges
{
    public class Challenge2 : Challenge
    {
        public override int task1()
        {
            var matches = 0;
            foreach(var password in input)
            {
                Regex regex = new Regex(@"^(?<min>\d*)\s?\-\s?(?<max>\d*)\s(?<char>\w)\:\s(?<password>\w*)$");
                var f = regex.Match(password);

                var min = int.Parse(f.Groups["min"].Value);
                var max = int.Parse(f.Groups["max"].Value);
                var character = char.Parse(f.Groups["char"].Value);
                var pass = f.Groups["password"].Value;

                var total = 0;

               foreach(char l in pass)
               {
                    if(l == character)
                    {
                        total++;
                    }
               }
               if(total >= min && total <= max)
                {
                    matches++;
                }
            }
            return matches;
        }
        public override int task2()
        {
            var matches = 0;
            foreach (var password in input)
            {
                Regex regex = new Regex(@"^(?<pos1>\d*)\s?\-\s?(?<pos2>\d*)\s(?<char>\w)\:\s(?<password>\w*)$");
                var f = regex.Match(password);

                var pos1 = int.Parse(f.Groups["pos1"].Value);
                var pos2 = int.Parse(f.Groups["pos2"].Value);
                var character = char.Parse(f.Groups["char"].Value);
                var pass = f.Groups["password"].Value;

                if ((pass.Length > (pos1) || (pass.Length) < (pos1)) && pass[pos1 - 1] == character)
                {
                    if(!(pass[pos2 - 1] == character))
                        matches++;
                } else if(pass[pos2 - 1] == character)
                { 
                   matches++;
                }
            }
            return matches;
        }
    }
}
