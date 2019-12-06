<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:08
 */

namespace Thor\AdventOfCode\Days;


use Thor\AdventOfCode\Exceptions\NotImplementedException;

class Day2
{
    private $code;

    public function compute($code) {
        $this->code = explode(',',$code);

        $step = 4;
        $index = 0;

        do {
            $opcode = $this->code[$index];
            $mem1 = @$this->code[$index + 1];
            $mem2 = @$this->code[$index + 2];
            $result = @$this->code[$index + 3];

            switch ($opcode) {
                case 1:
                    $this->code[$result] = $this->code[$mem1] + $this->code[$mem2];
                    break;
                case 2:
                    $this->code[$result] = $this->code[$mem1] * $this->code[$mem2];
                    break;
                case 99:
                    break 2;
                default:
                    eval(\Psy\sh());

            }

            $index += $step;

        } while ($opcode !== 99);
        return implode(',', $this->code);
    }

    public function computeResult(array $testCases): int {
        throw new NotImplementedException();
        $result = 0;

        return $result;
    }

    public function computeResultPt2(array $testCases): int {
        throw new NotImplementedException();
        $result = 0;

        return $result;
    }
}