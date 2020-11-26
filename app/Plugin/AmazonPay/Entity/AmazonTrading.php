<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Entity;use Doctrine\ORM\Mapping as ORM;/**
 * AmazonTrading
 * 
 * @ORM\Table(name="plg_amazon_pay_trading")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Plugin\AmazonPay\Repository\AmazonTrading")
 */
class AmazonTrading{    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
private $id;    /**
     * @var Eccube\Entity\Order
     * 
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Order", inversedBy="AmazonTrading")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
private $Order;    /**
     * @var string
     * 
     * @ORM\Column(name="trading_code", type="string", length=255)
     */
private $trading_code;    /**
     * @var integer
     * 
     * @ORM\Column(name="authori_amount", type="integer")
     */
private $authori_amount;    /**
     * @var integer
     * 
     * @ORM\Column(name="capture_amount", type="integer")
     */
private $capture_amount;    /**
     * @var integer
     * 
     * @ORM\Column(name="refund_count", type="integer")
     */
private $refund_count;public function setId($id){$this->id = $id;return $this;}public function getId(){return $this->id;}public function setOrder(\Eccube\Entity\Order $Order){$this->Order = $Order;return $this;}public function getOrder(){return $this->Order;}public function setTradingCode($tradingCode){$this->trading_code = $tradingCode;return $this;}public function getTradingCode(){return $this->trading_code;}public function setAuthoriAmount($authoriAmount){$this->authori_amount = $authoriAmount;return $this;}public function getAuthoriAmount(){return $this->authori_amount;}public function setCaptureAmount($captureAmount){$this->capture_amount = $captureAmount;return $this;}public function getCaptureAmount(){return $this->capture_amount;}public function setRefundCount($refundCount){$this->refund_count = $refundCount;return $this;}public function getRefundCount(){return $this->refund_count;}}