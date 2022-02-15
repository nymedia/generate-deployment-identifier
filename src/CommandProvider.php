<?php

namespace Nymedia\GenerateDeploymentIdentifier;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{

  /**
   * {@inheritDoc}
   */
  public function getCommands()
  {
    return array(new Dumper());
  }
}
