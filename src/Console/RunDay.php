<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:42
 */

namespace Thor\AdventOfCode\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunDay extends Command
{
    protected static $defaultName = 'day';


    protected function configure()
    {
        $this
            ->setDescription("Run code with input file")
            ->addArgument('day', InputArgument::REQUIRED, 'Day to test')
            ->addArgument('file', InputArgument::REQUIRED, 'Test input file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $day = $input->getArgument('day');
        $file = $input->getArgument('file');

        $className = 'Thor\\AdventOfCode\\Days\\Day'.$day;

        $testCases = $this->readFile($file);

        $class = new $className();

        $result = $class->computeResult($testCases);

        $output->write($result);

        return 0;
    }


    public static function readFile($file) {
        $input = file_get_contents($file);
        $input = trim($input);
        return explode("\n", $input);
    }
}