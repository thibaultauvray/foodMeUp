<?php

namespace PageBundle\Command;

use PageBundle\Utility\csvUtility;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class generateEntityCommand extends Command
{

    /*
     * Simple commands for generated mapping information from the array CSVArray
     */
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:generate-entity')
            ->setDescription('Create mapping information for entity.')
            ->setHelp('This command Create mapping information for entity...');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $generateEntity = new csvUtility();
        $generateEntity->textEntity();
    }
}
