<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:08
 */

namespace Thor\AdventOfCode\Days;


class Day1
{
    public function Calculate(int $mass): int {
        $v = $mass/3;
        $result = floor($v) - 2;

        return $result;
    }

    public function testPt2Invocation(int $mass): int {
        $result = (int)floor($this->Calculate($mass));
        if ($result < 1)
            return 0;
        else
            return $result + $this->testPt2Invocation($result);
    }

    public function computeResult(array $testCases): int {
        $result = 0;
        foreach ($testCases as $testCase) {
            $calculation = $this->Calculate((int)$testCase);
            $result += $calculation;
        }
        return $result;
    }

    public function computeResultPt2(array $testCases): int {
        $result = 0;
        foreach ($testCases as $testCase) {
            $calculation = $this->testPt2Invocation((int)$testCase);
            $result += $calculation;
        }
        return $result;
    }
}