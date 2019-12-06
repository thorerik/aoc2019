<?php
/**
 * Created by PhpStorm.
 * User: thor
 * Date: 06.12.19
 * Time: 00:42
 */

namespace Thor\AdventOfCode\Console;


use PHPUnit\TextUI\TestRunner;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunTests extends Command
{
    protected static $defaultName = 'test';

    protected function configure()
    {
        $this->setDescription("Run phpunit");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $phpunit = new TestRunner();
        $results = $phpunit->doRun($phpunit->getTest(__DIR__ . '/../../Tests', '', 'Test.php'));
        $output->write($results);
    }
}