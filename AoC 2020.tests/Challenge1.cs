using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace AoC_2020.tests
{
    [TestClass]
    public class Challenge1
    {

        [TestMethod]
        public void TestTask1()
        {
            string[] testItems = {
                "1721",
                "979",
                "366",
                "299",
                "675",
                "1456"
            };
            var c = new AoC_2020.Challenge1
            {
                input = testItems
            };

            var output = c.task1();
            Assert.AreEqual(514579, output);
        }

        [TestMethod]
        public void TestTask2()
        {
            string[] testItems = {
                "1721",
                "979",
                "366",
                "299",
                "675",
                "1456"
            };
            var c = new AoC_2020.Challenge1
            {
                input = testItems
            };

            var output = c.task2();
            Assert.AreEqual(241861950, output);
        }
    }
}
