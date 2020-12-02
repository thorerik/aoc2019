using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge1
    {
        private Challenges.Challenge1 c;

        [TestInitialize]
        public void Setup()
        {
            string[] testItems = {
                "1721",
                "979",
                "366",
                "299",
                "675",
                "1456"
            };
            c = new Challenges.Challenge1
            {
                input = testItems
            };
        }

        [TestMethod]
        public void TestTask1()
        {
            var output = c.task1();
            Assert.AreEqual(514579, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            var output = c.task2();
            Assert.AreEqual(241861950, output);
        }
    }
}
