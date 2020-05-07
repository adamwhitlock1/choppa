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
        $max_frames = 111;
        for ($i = 0; $i <= $max_frames; $i++) {
            $section->overwrite($this->choppa($i));
            usleep(30000);
        }

    }

    private function choppa(int $frame): string
    {
        return '
' . $this->makeBlades($frame) . '
         ____/~~~~~~~======-=               :  /~> :
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
        $frame1 =<<<EOD
            ====
                =--+--=
                  ~|~  ====                  ,-~~-.
EOD;

        $frame2 =<<<EOD
          ====
              ===--+--===
                  ~|~    ====                ,-~~-.
EOD;

        $frame3 =<<<EOD
        ====
            =====--+--======
                  ~|~       ====             ,-~~-.
EOD;

        $frame4 =<<<EOD
      ====
          =======--+--========
                  ~|~         ====           ,-~~-.
EOD;

        $frame5 =<<<EOD
     ====
         ========--+--=========
                  ~|~          ====          ,-~~-.
EOD;

        $frame6 =<<<EOD
    ====
        =========--+--==========
                  ~|~           ====         ,-~~-.
EOD;

        $frame7 =<<<EOD
                                ====
        =========--+--==========
    ====          ~|~                        ,-~~-.
EOD;

        $frame8 =<<<EOD
                              ====
          =======--+--========
      ====        ~|~                        ,-~~-.
EOD;

        $frame9 =<<<EOD
                            ====
            =====--+--======
        ====      ~|~                        ,-~~-.
EOD;

        $frame10 =<<<EOD
                          ====
              ===--+--===
          ====    ~|~                        ,-~~-.
EOD;

        $frame11 =<<<EOD
                       ====
                =--+--=
            ====  ~|~                        ,-~~-.
EOD;

        switch ($frame % 10) {
            case 1:
                return $frame1;
            case 2:
                return $frame2;
            case 3:
                return $frame3;
            case 4:
                return $frame4;
            case 5:
                return $frame5;
            case 6:
                return $frame6;
            case 7:
                return $frame7;
            case 8:
                return $frame8;
            case 9:
                return $frame9;
            case 10:
                return $frame10;
        }

        return $frame11;
    }
}
