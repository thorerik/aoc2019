<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 11:40
 */

use Thor\AdventOfCode\Days\Day2;
use PHPUnit\Framework\TestCase;

class Day2Test extends TestCase
{
    private function invokePt1($code, $expected) {
        $class = new Day2();
        $result = $class->compute($code);
        $this->assertEquals($expected,$result);
    }

    public function testPt1Example1() {
        $this->invokePt1('1,0,0,0,99', '2,0,0,0,99');
    }

    public function testPt1Example2() {
        $this->invokePt1('2,3,0,3,99', '2,3,0,6,99');
    }

    public function testPt1Example3() {
        $this->invokePt1('2,4,4,5,99,0', '2,4,4,5,99,9801');
    }

    public function testPt1Example4() {
        $this->invokePt1('1,1,1,4,99,5,6,0,99', '30,1,1,4,2,5,6,0,99');
    }

    public function testPt1Final() {
        $class = new Day2();
        $testCases = \Thor\AdventOfCode\Console\RunDay::readFile('./Inputs/day2.txt');
        $result = $class->computeResult($testCases);
        $expected = '11590668,12,2,2,1,1,2,3,1,3,4,3,1,5,0,3,2,1,13,60,1,10,19,64,2,9,23,192,1,6,27,194,1,10,31,198,1,35,10,202,1,9,39,205,1,6,43,207,1,10,47,211,1,6,51,213,2,13,55,1065,1,6,59,1067,1,10,63,1071,2,67,9,3213,1,71,5,3214,1,13,75,3219,2,79,13,16095,1,83,9,16098,2,10,87,64392,2,91,6,128784,2,13,95,643920,1,10,99,643924,2,9,103,1931772,1,107,5,1931773,2,9,111,5795319,1,5,115,5795320,1,9,119,5795323,2,123,6,11590646,1,5,127,11590647,1,10,131,11590651,1,135,6,11590653,1,139,5,11590654,1,143,9,11590657,1,5,147,11590658,1,151,13,11590663,1,5,155,11590664,1,2,159,11590666,1,163,6,0,99,2,0,14,0';
        $this->assertEquals($expected, $result);
    }
}
