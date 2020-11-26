<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Repository;use Doctrine\ORM\EntityRepository;class AmazonOrderRepository extends EntityRepository{public $config;protected $app;public function setApplication($app){$this->app = $app;}public function setConfig(array $config){$this->config = $config;}public function getAmazonOrderByOrderDataForAdmin($Orders){goto AuKvv;AuKvv:$AmazonOrders = [];goto elv06;lWuBO:BRl2b:goto iMEeS;iMEeS:return $AmazonOrders;goto IoTNz;elv06:foreach ($Orders as $Order) {goto Y84oa;T2bdX:hRli3:goto lfyQT;eFWgN:$AmazonOrders[] = $AmazonOrder[0];goto T2bdX;lfyQT:b3yfb:goto DKMhe;Y84oa:$AmazonOrder = $this->findby(['Order' => $Order]);goto xRmkL;xRmkL:if (empty($AmazonOrder)) {goto hRli3;}goto eFWgN;DKMhe:}goto lWuBO;IoTNz:}}