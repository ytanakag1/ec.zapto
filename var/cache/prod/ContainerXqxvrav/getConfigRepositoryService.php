<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\AmazonPay\Repository\ConfigRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/AmazonPay/Repository/ConfigRepository.php';

return $this->services['Plugin\\AmazonPay\\Repository\\ConfigRepository'] = new \Plugin\AmazonPay\Repository\ConfigRepository(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});