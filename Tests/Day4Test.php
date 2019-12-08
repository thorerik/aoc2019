<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 11:40
 */

use Thor\AdventOfCode\Days\Day4;
use PHPUnit\Framework\TestCase;

class Day4Test extends TestCase
{
    private function invokePt1($pattern, $expected) {
        $class = new Day4();
        $result = $class->test($pattern);
        $this->assertEquals($expected,$result);
    }
    private function invokePt2($pattern, $expected) {
        $class = new Day4();
        $result = $class->testPt2($pattern);
        $this->assertEquals($expected,$result);
    }

    public function testPt1Example1() {
        $this->invokePt1('111111', true);
    }

    public function testPt1Example2() {
        $this->invokePt1('223450', false);
    }

    public function testPt1Example3() {
        $this->invokePt1('123789', false);
    }

    public function testPt1Custom1()
    {
        $class = new Day4();
        $result = $class->computeResult('100-112');
        $this->assertEquals(2, $result);
    }
}
