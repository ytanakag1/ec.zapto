<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\InstallerCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Eccube/Command/InstallerCommand.php';

$this->services['Eccube\\Command\\InstallerCommand'] = $instance = new \Eccube\Command\InstallerCommand($this);

$instance->setName('eccube:install');

return $instance;
