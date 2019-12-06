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
        $fuel = new Day2();
        $result = $fuel->compute($code);
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
}
