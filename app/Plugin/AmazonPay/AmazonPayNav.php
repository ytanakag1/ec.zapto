<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay;use Eccube\Common\EccubeNav;class AmazonPayNav implements EccubeNav{public static function getNav(){return ['order' => ['children' => ['amazon_pay_admin_payment_status' => ['name' => 'amazon_pay.admin.nav.payment_list', 'url' => 'amazon_pay_admin_payment_status']]]];}}