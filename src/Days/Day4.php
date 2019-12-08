<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:08
 */

namespace Thor\AdventOfCode\Days;


use Thor\AdventOfCode\Exceptions\NotImplementedException;

class Day4
{
    public function test($pattern): bool {
        $last = 0;
        $hasRepeating = false;
        $doesNotDescend = true;
        // There's no array accessor for integers, but there's for strings.
        // Hence why I cast $pattern to a string to let me do that
        // then rely on type clobbering later on, because I too like to live dangerously
        $pattern = (string)$pattern; 
        for ($i=0; $i < strlen($pattern); $i++) { 
            // skip the first number
            if ($i === 0) {
                $last = $pattern[$i];
                continue;
            }
            
            if ((int)$last === (int)$pattern[$i]) {
                $hasRepeating = true;
            }

            if ($last > $pattern[$i]) {
                $last = $pattern[$i];
                return false;
            } 

            $last = $pattern[$i];
        }
        if ($hasRepeating && $doesNotDescend)
            return true;
        else
            return false;
    }

    public function computeResult(string $testCase): int {
        $result = 0;
        $testCase = explode('-', $testCase);
        $min = (int)$testCase[0];
        $max = (int)$testCase[1];

        for ($i=$min; $i <= $max; $i++) { 
            if ($this->test($i)) {
                $result++;
            }
        }
        return $result;
    }

    public function computeResultPt2(array $testCases): int {
        throw new NotImplementedException();
        $result = 0;

        return $result;
    }
}