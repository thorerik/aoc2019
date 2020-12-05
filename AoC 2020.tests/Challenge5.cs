using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge5
    {
        private Challenges.Challenge5 c;

        [TestInitialize]
        public void Setup()
        {
            string[] testItems = {
                "FBFBBFFRLR",
                "BFFFBBFRRR",
                "FFFBBBFRRR",
                "BBFFBBFRLL"
            };
            c = new Challenges.Challenge5
            {
                input = testItems
            };
        }

        [TestMethod]
        public void TestTask1()
        {
            var output = c.task1();
            Assert.AreEqual((long)820, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            Assert.AreEqual((long)1, 1); // Don't have test data for this task
        }
    }
}
