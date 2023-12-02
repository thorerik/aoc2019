<?php

namespace Thor\Aoc2023;

class Day2
{
    public function run()
    {
        $input = file_get_contents(__DIR__ . '/../input/Day2.txt');
        $input = explode("\n", $input);

        echo "\tPart 1 -> " . $this->part1($input) . "\n";
        echo "\tPart 2 -> " . $this->part2($input) . "\n";
    }

    public function part1(array $input): int
    {
        $validGames = [];

        $rules = [
            'red' => 12,
            'green' => 13,
            'blue' => 14,
        ];

        foreach ($input as $line) {
            $game = explode(':', $line);
            // get the game number from the first part of the line
            $idx = (int)str_replace('Game ', '', $game[0]);

            // get the draws from the second part of the line
            $draws = explode(';', $game[1]);

            foreach ($draws as $draw) {
                // get the colors from the draw
                $components = explode(',', $draw);
                foreach ($components as $component) {
                    $parts = explode(' ', trim($component));
                    $color = $parts[1];
                    $count = (int)$parts[0];
                    if($count <= $rules[$color]) {
                        $validGames[$idx] = $idx;
                    } else {
                        unset($validGames[$idx]);
                        break 2;
                    }
                }
            }
        }

        return array_sum($validGames);
    }

    public function part2(array $input): int
    {
        $games = [];
        foreach ($input as $line) {
            $game = explode(':', $line);
            // get the game number from the first part of the line
            $idx = (int)str_replace('Game ', '', $game[0]);

            $games[$idx] = [
                'red' => 0,
                'green' => 0,
                'blue' => 0,
            ];

            // get the draws from the second part of the line
            $draws = explode(';', $game[1]);

            foreach ($draws as $draw) {
                // get the colors from the draw
                $components = explode(',', $draw);
                foreach ($components as $component) {
                    $parts = explode(' ', trim($component));
                    $color = $parts[1];
                    $count = (int)$parts[0];

                    if ($count > $games[$idx][$color]) {
                        $games[$idx][$color] = $count;
                    }
                }
            }
        }

        $total = 0;
        foreach ($games as $game) {
            $total += $game['red'] * $game['green'] * $game['blue'];
        }
        return $total;
    }

}