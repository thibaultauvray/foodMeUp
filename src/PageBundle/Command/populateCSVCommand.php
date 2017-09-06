<?php
/**
 * Created by PhpStorm.
 * User: tauvray
 * Date: 8/31/17
 * Time: 3:11 PM
 */

namespace PageBundle\Command;
use PageBundle\Service\csvService;
use PageBundle\Utility\csvUtility;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class populateCSVCommand extends ContainerAwareCommand
{
    /*
     * Command for fill DB with CSV Data
     * Not sure if it's best to do a command or a Migrations
     */
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:populate-db')
            ->setDescription('Fill DB with CSV data.')
            ->setHelp('Fill DB with CSV data...');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $csvManager = $this->getContainer()->get('app.csvUtility');
        $csvManager->populateDatabase();

    }
}