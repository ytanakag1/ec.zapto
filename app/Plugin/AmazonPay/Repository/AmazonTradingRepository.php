<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Repository;use Doctrine\ORM\EntityRepository;class AmazonTradingRepository extends EntityRepository{public $config;public function setConfig(array $config){$this->config = $config;}}