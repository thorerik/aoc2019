using System;
using System.Collections.Generic;
using System.Text;
using System.Text.RegularExpressions;

namespace AoC_2020.Challenges
{
    public class Challenge4 : Challenge
    {
        public override long task1()
        {
            var total = 0L;
            var passport = "";

            foreach(var line in input)
            {
                if(line != "")
                {
                    passport += line;
                } else
                {
                    if(
                        passport.Contains("byr")
                        && passport.Contains("iyr")
                        && passport.Contains("eyr")
                        && passport.Contains("hgt")
                        && passport.Contains("hcl")
                        && passport.Contains("ecl")
                        && passport.Contains("pid")
                    )
                    {
                        total++;
                    }
                    passport = "";
                }
            }

            return total;
        }
        public override long task2()
        {
            var total = 0L;
            var passport = "";

            foreach (var line in input)
            {
                if (line != "")
                {
                    passport += line + " ";
                }
                else
                {
                    if (
                        passport.Contains("byr")
                        && passport.Contains("iyr")
                        && passport.Contains("eyr")
                        && passport.Contains("hgt")
                        && passport.Contains("hcl")
                        && passport.Contains("ecl")
                        && passport.Contains("pid")
                    )
                    {
                        var byrRe = new Regex(@".*byr:\s?(?<value>\d{4}).*"); // Birth year
                        var iyrRe = new Regex(@".*iyr:\s?(?<value>\d{4}).*"); // Issue year
                        var eyrRe = new Regex(@".*eyr:\s?(?<value>\d{4}).*"); // Expiration year
                        var hgtRe = new Regex(@".*hgt:\s?(?<value>\d{2,3})(?<unit>\w{2}).*"); // Height
                        var hclRe = new Regex(@".*hcl:\s?#[0-9a-f]{6}.*"); // Hair color
                        var eclRe = new Regex(@".*ecl:\s?(:?amb|blu|brn|gry|grn|hzl|oth).*"); // Eye color
                        var pidRe = new Regex(@".*pid:\s?\d{9}.*"); // Passport id

                        var byr = byrRe.Match(passport);
                        var iyr = iyrRe.Match(passport);
                        var eyr = eyrRe.Match(passport);
                        var hgt = hgtRe.Match(passport);
                        var hcl = hclRe.Match(passport);
                        var ecl = eclRe.Match(passport);
                        var pid = pidRe.Match(passport);

                        if(byr.Success && iyr.Success && eyr.Success && hgt.Success && hcl.Success && ecl.Success && pid.Success)
                        {
                            var byri = int.Parse(byr.Groups["value"].Value);
                            if (byri >= 1920 && byri <= 2002)
                            {
                                var iyri = int.Parse(iyr.Groups["value"].Value);
                                if (iyri >= 2010 && iyri <= 2020)
                                {
                                    var eyri = int.Parse(eyr.Groups["value"].Value);
                                    if (eyri >= 2020 && eyri <= 2030)
                                    {
                                        var height = int.Parse(hgt.Groups["value"].Value);
                                        var unit = hgt.Groups["unit"].Value;
                                        if(
                                            (unit == "cm" && height >= 150 && height <= 193)
                                            || (unit == "in" && height >= 59 && height <= 76)
                                        )
                                        {
                                            total++;
                                        }
                                    }

                                }
                            }
                        }

                    }
                    passport = "";
                }
            }

            return total;
        }
    }
}
