<?php

use Thor\Aoc2023\Day1;

test('Day 1 Part 1', function () {
    $input = ["1abc2", "pqr3stu8vwx", "a1b2c3d4e5f", "treb7uchet"];
    $output = 142;
    $day1 = new Day1();
    expect($day1->part1($input))->toBe($output);
});

test('Day 1 Part 2', function () {
    $input = [
        "two1nine",
        "eightwothree",
        "abcone2threexyz",
        "xtwone3four",
        "4nineeightseven2",
        "zoneight234",
        "7pqrstsixteen",
    ];
    $output = 281;
    $day1 = new Day1();
    expect($day1->part2($input))->toBe($output);
});
