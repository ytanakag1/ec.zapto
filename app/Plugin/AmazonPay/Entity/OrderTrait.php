<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Entity;use Eccube\Annotation\EntityExtension;use Doctrine\ORM\Mapping as ORM;/**
 * @EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait{public function getSumAuthoriAmount(){goto HFHMp;ALlV4:foreach ($this->AmazonTradings as $AmazonTrading) {$sumAuthoriAmount += $AmazonTrading->getAuthoriAmount();dyJGR:}goto nkW9Q;nkW9Q:LaI9h:goto HLi1N;HFHMp:$sumAuthoriAmount = 0;goto ALlV4;HLi1N:return $sumAuthoriAmount;goto alLSY;alLSY:}public function getSumCaptureAmount(){goto RMQoE;RMQoE:$sumCaptureAmount = 0;goto bkxx3;bkxx3:foreach ($this->AmazonTradings as $AmazonTrading) {$sumCaptureAmount += $AmazonTrading->getCaptureAmount();YMgHb:}goto K8ILK;Lb4_n:return $sumCaptureAmount;goto CIT1e;K8ILK:GNnY8:goto Lb4_n;CIT1e:}    /**
     * @var string
     * 
     * @ORM\Column(name="reference_code", type="string", length=255, nullable=true)
     */
private $reference_code;    /**
     * @var integer
     * 
     * @ORM\Column(name="billable_amount", type="integer", nullable=true)
     */
private $billable_amount;    /**
     * @var AmazonStatus
     * @ORM\ManyToOne(targetEntity="Plugin\AmazonPay\Entity\Master\AmazonStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="amazon_status_id", referencedColumnName="id")
     * })
     */
private $AmazonStatus;    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Plugin\AmazonPay\Entity\AmazonTrading", mappedBy="Order", cascade={"persist", "remove"})
     */
private $AmazonTradings;public function setReferenceCode($referenceCode){$this->reference_code = $referenceCode;return $this;}public function getReferenceCode(){return $this->reference_code;}public function setBillableAmount($billableAmount){$this->billable_amount = $billableAmount;return $this;}public function getBillableAmount(){return $this->billable_amount;}public function setAmazonStatus(\Plugin\AmazonPay\Entity\Master\AmazonStatus $AmazonStatus){$this->AmazonStatus = $AmazonStatus;return $this;}public function getAmazonStatus(){return $this->AmazonStatus;}public function addAmazonTrading(\Plugin\AmazonPay\Entity\AmazonTrading $AmazonTrading){$this->AmazonTradings[] = $AmazonTrading;return $this;}public function getAmazonTradings(){return $this->AmazonTradings;}}