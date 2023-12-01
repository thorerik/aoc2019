<?php

namespace Thor\Aoc2023;

class Day1
{
    public function run()
    {
        $input = file_get_contents(__DIR__ . '/../input/Day1.txt');
        $input = explode("\n", $input);

        echo "\tPart 1 -> " . $this->part1($input) . "\n";
        echo "\tPart 2 -> " . $this->part2($input) . "\n";
    }

    public function part1(array $input): int
    {
        $sum = 0;

        foreach ($input as $line) {

            // find all numbers in the line without using regex
            $matches = [];
            for($i = 0; $i < strlen($line); $i++) {
                if (is_numeric($line[$i])) {
                    $matches[] = $line[$i];
                }
            }

            // concat the first and last match and add to sum
            $value = $matches[0] . $matches[count($matches) - 1];
            $sum += (int)$value;
        }

        return $sum;
    }

    public function part2(array $input): int
    {
        $sum = 0;

        return $sum;
    }
}