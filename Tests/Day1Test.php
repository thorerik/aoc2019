<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:16
 */

class Day1Test extends \PHPUnit\Framework\TestCase
{
    private function invokePt1($mass, $expected) {
        $fuel = new \Thor\AdventOfCode\Days\Day1();
        $result = $fuel->Calculate($mass);
        $this->assertEquals($expected,$result);
    }

    private function invokePt2($mass, $expected) {
        $fuel = new \Thor\AdventOfCode\Days\Day1();
        $result = $fuel->testPt2Invocation($mass);
        $this->assertEquals($expected,$result);
    }

    public function testPt1Example1Test() {
        $this->invokePt1(12,2);
    }

    public function testPt1Example2Test() {
        $this->invokePt1(14,2);
    }

    public function testPt1Example3Test() {
        $this->invokePt1(1969, 654);
    }

    public function testPt1Example4Test() {
        $this->invokePt1(100756, 33583);
    }

    public function testPt1FinalSolution() {
        $testCases = \Thor\AdventOfCode\Console\RunDay::readFile('./Inputs/day1.txt');
        $day1 = new \Thor\AdventOfCode\Days\Day1;
        $result = $day1->computeResult($testCases);

        $this->assertEquals(3295539, $result);
    }

    public function testPt2Example1Test() {
        $this->invokePt2(14,2);
    }

    public function testPt2Example2Test() {
        $this->invokePt2(1969,966);
    }

    public function testPt2Example3Test() {
        $this->invokePt2(100756,50346);
    }

    public function testPt2FinalSolution() {
        $testCases = \Thor\AdventOfCode\Console\RunDay::readFile('./Inputs/day1.txt');
        $day1 = new \Thor\AdventOfCode\Days\Day1;
        $result = $day1->computeResultPt2($testCases);

        $this->assertEquals(4940441, $result);
    }
}