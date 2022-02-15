<?php

namespace Nymedia\GenerateDeploymentIdentifier;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface, Capable
{

  /**
   * {@inheritDoc}
   */
  public function activate(Composer $composer, IOInterface $io)
  {
  }

  /**
   * {@inheritDoc}
   */
  public function deactivate(Composer $composer, IOInterface $io)
  {
  }

  /**
   * {@inheritDoc}
   */
  public function uninstall(Composer $composer, IOInterface $io)
  {
  }

  /**
   * {@inheritDoc}
   */
  public function getCapabilities()
  {
    return array(
      'Composer\Plugin\Capability\CommandProvider' => 'Nymedia\GenerateDeploymentIdentifier\CommandProvider',
    );
  }
}
