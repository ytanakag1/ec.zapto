<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.mapping.cache_warmer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

return $this->services['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->load('getValidator_BuilderService.php')) && false ?: '_'}, ($this->targetDirs[0].'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->load('getCache_ValidatorService.php')) && false ?: '_'});
