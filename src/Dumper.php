<?php

namespace Nymedia\GenerateDeploymentIdentifier;

use Composer\Command\BaseCommand;
use Composer\InstalledVersions;
use eiriksm\GitInfo\GitInfo;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Dumper extends BaseCommand {

  /**
   * {@inheritDoc}
   */
  protected function configure()
  {
    $this->setName('dump-deployment-identifier');
  }

  /**
   * {@inheritDoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $gitInfo = new GitInfo();
    $installed = hash('sha1', json_encode(InstalledVersions::getAllRawData()));
    $output->write($gitInfo->getShortHash() . '-' . $installed);
    return 0;
  }

}
