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
        foreach ($input as $line) {
            $numbers = $this->findNumbers($line);
//            echo $line . " -> " . implode(", ", $numbers) . "\n";
            // concat the first and last match and add to sum
            $value = $numbers[0] . $numbers[count($numbers) - 1];
            $sum += (int)$value;
        }

        return $sum;
    }

    function findNumbers(string $string): array {
        // Mapping of number words to digits
        $numberMap = [
            "zero" => "0", "one" => "1", "two" => "2", "three" => "3", "four" => "4",
            "five" => "5", "six" => "6", "seven" => "7", "eight" => "8", "nine" => "9"
        ];

        $result = '';
        $length = strlen($string);
        $matches = [];

        // First, find all possible matches (digits and spelled-out numbers)
        for ($i = 0; $i < $length; $i++) {
            // Check for a digit
            if (ctype_digit($string[$i])) {
                $matches[] = ['pos' => $i, 'digit' => $string[$i]];
            }

            // Check for spelled-out numbers
            foreach ($numberMap as $word => $digit) {
                $wordLength = strlen($word);
                if (substr($string, $i, $wordLength) === $word) {
                    $matches[] = ['pos' => $i, 'digit' => $digit];
                    break; // Move to the next character after the current match
                }
            }
        }

        // Sort matches by their position in the string
        usort($matches, function ($a, $b) {
            return $a['pos'] - $b['pos'];
        });

        // Add matches to the result, avoiding overlaps
        $lastPos = -1;
        foreach ($matches as $match) {
            if ($match['pos'] > $lastPos) {
                $result .= $match['digit'];
                $lastPos = $match['pos'] + strlen($match['digit']) - 1;
            }
        }

        // Split the string into an array of numbers
        return str_split($result);
    }
}