<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Service\DataImportService;

class DataImportCommand extends ContainerAwareCommand
{

    private $importer;

    public function __construct(DataImportService $importer)
    {
        $this->importer = $importer;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('data:import')
            ->setDescription('Get file in CSV format, parse it and persist data in DB')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start parsing the file.');
        $output->writeln('Command result.');
    }

}
