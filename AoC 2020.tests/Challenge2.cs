using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge2
    {

        [TestMethod]
        public void TestTask1()
        {
            string[] testItems = {
                "1-3 a: abcde",
                "1-3 b: cdefg",
                "2 - 9 c: ccccccccc"
            };
            var c = new Challenges.Challenge2
            {
                input = testItems
            };

            var output = c.task1();
            Assert.AreEqual(2, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            string[] testItems = {
                "1-3 a: abcde",
                "1-3 b: cdefg",
                "2 - 9 c: ccccccccc"
            };
            var c = new Challenges.Challenge2
            {
                input = testItems
            };

            var output = c.task2();
            Assert.AreEqual(1, output);
        }
    }
}
