<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Repository;use Eccube\Repository\AbstractRepository;use Plugin\AmazonPay\Entity\PaymentStatus;use Symfony\Bridge\Doctrine\RegistryInterface;class PaymentStatusRepository extends AbstractRepository{public function __construct(RegistryInterface $registry){parent::__construct($registry, PaymentStatus::class);}}