<?php

declare(strict_types=1);

namespace Mosher\Choppa\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetToTheChoppaCommand extends Command
{
    protected static $defaultName = 'gettothe:choppa';

    protected function configure()
    {
        $this->setDescription('Description')
            ->setHelp('This is the help');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $text = $output->section();
        $section = $output->section();
        $section->writeLn('');
        $text->writeLn('Hole up...');
        sleep(1);
        $text->overwrite('Wait a minute...');
        sleep(2);
        $text->overwrite('It\'s a chopper...');
        $this->animate($section);

        return 0;
    }

    private function animate($section)
    {
        $max_frames = 50;
        for ($i = 0; $i <= $max_frames; $i++) {
            $section->overwrite($this->choppa($i));
            usleep(50000);
        }

    }

    private function choppa(int $frame): string
    {
        return '
' . $this->makeBlades($frame) . '
                 ~|~                        ,-~~-.
         ____/~~~~~~~======-=              :  /~> :
       /\'~~||~| |== == |-- ~-________________/  /
     _/_|__||_| ||_||_||     LARAVEL           <
   (-+|    |    |______|     ___-----```````\__\
    `-+._____ ___________ _-~
   ~-________||__________||_____
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ';
    }

    private function makeBlades(int $frame): string
    {
        switch ($frame % 5) {
            case 1:
                return '   =============--+--==============   ';
            case 2:
                return '         =======--+--========         ';
            case 3:
                return '               =--+--=                ';
            case 4:
                return '         =======--+--========         ';
            case 5:
                return '   =============--+--==============   ';
        }

        return '================--+--=================';
    }
}
