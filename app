#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;


$application = new Application();

$application->addCommands([
        new \Thor\AdventOfCode\Console\RunTests,
        new \Thor\AdventOfCode\Console\RunDay,
]);

$application->run();
