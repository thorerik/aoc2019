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

    public function computeResult(array $testCases): int {
        $result = 0;
        foreach ($testCases as $testCase) {
            $calculation = $this->Calculate((int)$testCase);
            $result += $calculation;
        }
        return $result;
    }
}