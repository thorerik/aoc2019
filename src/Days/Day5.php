<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:08
 */

namespace Thor\AdventOfCode\Days;


use League\CLImate\CLImate;
use Thor\AdventOfCode\Exceptions\NotImplementedException;

class Day5
{
    private $code;
    private $cli;


    public function __construct()
    {
        $this->cli = new CLImate();
    }

    public function compute($code) {
        $this->code = explode(',',$code);

        $step = 4;
        $ip = 0;

        do {
            $instruction = (string)$this->code[$ip];
            $length = strlen($instruction)-1;
            if ($length)
                $opcode = (int)($instruction[$length-1] . $instruction[$length]);
            else
                $opcode = (int)$instruction;
            
            if ($length > 1) {
                $param1mode = (int)$instruction[$length-2];
            } else {
                $param1mode = 0;
            }

            if ($length > 2) {
                $param2mode = (int)$instruction[$length-3];
            } else {
                $param2mode = 0;
            }

            // Implemented but not used at the moment since
            // param 3 for the time being is only return val
            // May be used in the future
            if ($length > 3) {
                $param3mode = (int)$instruction[$length-4];
            } else {
                $param3mode = 0;
            }

            //eval(\psy\sh());

            switch ($opcode) {
                case 1:
                    // Add
                    $step = 4;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];
                    $result = $this->code[$ip + 3];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    $this->code[$result] = $input1 + $input2;

                    $ip += $step;
                    break;
                case 2:
                    // Multiply
                    $step = 4;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];
                    $result = $this->code[$ip + 3];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    $this->code[$result] = $input1 * $input2;

                    $ip += $step;
                    break;
                case 3:
                    // Input
                    $step = 2;
                    $mem1 = $this->code[$ip + 1];
                    $input = $this->cli->input('Value');
                    $this->code[$mem1] = (int)$input->prompt();

                    $ip += $step;
                    break;
                case 4:
                    // Output
                    $step = 2;
                    $mem1 = $this->code[$ip + 1];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    $this->cli->out($input1);

                    $ip += $step;
                    break;
                case 5:
                    // Jump if true
                    $step = 3;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    if ($input1) {
                        $ip = $input2;
                    } else {
                        $ip += $step;
                    }
                    break;
                case 6:
                    // Jump if false
                    $step = 3;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    if (!$input1) {
                        $ip = $input2;
                    } else {
                        $ip += $step;
                    }
                    break;
                case 7:
                    // Less than
                    $step = 4;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];
                    $result = $this->code[$ip + 3];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    if ($input1 < $input2) {
                        $this->code[$result] = 1;
                    } else {
                        $this->code[$result] = 0;
                    }

                    $ip += $step;
                    break;
                case 8:
                    // Equals
                    $step = 4;
                    $mem1 = $this->code[$ip + 1];
                    $mem2 = $this->code[$ip + 2];
                    $result = $this->code[$ip + 3];

                    if ($param1mode) {
                        $input1 = $mem1;
                    } else {
                        $input1 = $this->code[$mem1];
                    }

                    if ($param2mode) {
                        $input2 = $mem2;
                    } else {
                        $input2 = $this->code[$mem2];
                    }

                    if ($input1 == $input2) {
                        $this->code[$result] = 1;
                    } else {
                        $this->code[$result] = 0;
                    }

                    $ip += $step;
                    break;
                case 99:
                    break 2;
                default:
                    eval(\Psy\sh());

            }

        } while ($opcode !== 99);
        //return implode(',', $this->code);
    }

    public function computeResult(string $testCase) {
        return $this->compute($testCase);
    }

    public function computeResultPt2(array $testCases): int {
        throw new NotImplementedException();
        $result = 0;

        return $result;
    }
}