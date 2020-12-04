using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge2
    {
        private Challenges.Challenge2 c;

        [TestInitialize]
        public void Setup()
        {
            string[] testItems = {
                "1-3 a: abcde",
                "1-3 b: cdefg",
                "2 - 9 c: ccccccccc"
            };
            c = new Challenges.Challenge2
            {
                input = testItems
            };
        }

        [TestMethod]
        public void TestTask1()
        {
            var output = c.task1();
            Assert.AreEqual((long)2, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            var output = c.task2();
            Assert.AreEqual((long)1, output);
        }
    }
}
