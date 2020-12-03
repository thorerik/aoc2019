using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge3
    {
        private Challenges.Challenge3 c;

        [TestInitialize]
        public void Setup()
        {
            string[] testItems = {
                "..##.......",
                "#...#...#..",
                ".#....#..#.",
                "..#.#...#.#",
                ".#...##..#.",
                "..#.##.....",
                ".#.#.#....#",
                ".#........#",
                "#.##...#...",
                "#...##....#",
                ".#..#...#.#"
                
            };
            c = new Challenges.Challenge3
            {
                input = testItems
            };
        }

        [TestMethod]
        public void TestTask1()
        {
            var output = c.task1();
            Assert.AreEqual((ulong)7, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            var output = c.task2();
            Assert.AreEqual((ulong)336, output);
        }
    }
}
