using System.IO;
using System.Text.RegularExpressions;

namespace AoC_2020
{
    public class Challenge
    {
        public string[] input;

        public Challenge()
        {
            string name = GetType().Name;
            Regex regex = new Regex(@"^Challenge(\d*)$");
            var res = regex.Match(name);
            var fileName = $"challenges/{res.Groups[1]}/input.txt";
            input = File.ReadAllLines(fileName);
        }
    }
}