<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:16
 */

class Day1Test extends \PHPUnit\Framework\TestCase
{
    private function invoke($mass, $expected) {
        $fuel = new \Thor\AdventOfCode\Days\Day1();
        $result = $fuel->Calculate($mass);
        $this->assertEquals($expected,$result);
    }

    public function testExample1Test() {
        $this->invoke(12,2);
    }

    public function testExample2Test() {
        $this->invoke(14,2);
    }

    public function testExample3Test() {
        $this->invoke(1969, 654);
    }

    public function testExample4Test() {
        $this->invoke(100756, 33583);
    }

    public function testFinalSolution() {
        $testCases = \Thor\AdventOfCode\Console\RunDay::readFile(__DIR__ . '/../../Inputs/day1.txt');
        $day1 = new \Thor\AdventOfCode\Days\Day1;
        $result = $day1->computeResult($testCases);

        $this->assertEquals(3295539, $result);
    }
}