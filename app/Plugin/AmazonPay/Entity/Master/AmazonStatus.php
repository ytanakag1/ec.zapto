<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Entity\Master;use Doctrine\ORM\Mapping as ORM;use Eccube\Entity\Master\AbstractMasterEntity;/**
 * AmazonStatus
 *
 * @ORM\Table(name="plg_amazon_pay_status")
 * @ORM\Entity(repositoryClass="Plugin\AmazonPay\Repository\Master\AmazonStatusRepository")
 */
class AmazonStatus extends AbstractMasterEntity{const AUTHORI = 1;const CAPTURE = 2;const CANCEL = 3;}