<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Entity;use Doctrine\ORM\Mapping as ORM;use Eccube\Entity\AbstractEntity;/**
 * Config
 *
 * @ORM\Table(name="plg_amazon_pay_config")
 * @ORM\Entity(repositoryClass="Plugin\AmazonPay\Repository\ConfigRepository")
 */
class Config extends AbstractEntity{    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
private $id;    /**
     * @ORM\Column(name="amazon_account_mode", type="integer", nullable=true)
     */
private $amazon_account_mode;    /**
     * @var integer
     *
     * @ORM\Column(name="env", type="integer")
     */
private $env;    /**
     * @var string
     *
     * @ORM\Column(name="seller_id", type="string", length=255, nullable=true)
     */
private $seller_id;    /**
     * @var string
     *
     * @ORM\Column(name="mws_access_key_id", type="string", length=255, nullable=true)
     */
private $mws_access_key_id;    /**
     * @var string
     *
     * @ORM\Column(name="mws_secret_access_key", type="string", length=255, nullable=true)
     */
private $mws_secret_access_key;    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255, nullable=true)
     */
private $client_id;    /**
     * @var string
     *
     * @ORM\Column(name="test_client_id", type="string", length=255, nullable=true)
     */
private $test_client_id;    /**
     * @var string
     *
     * @ORM\Column(name="prod_key", type="string", length=255, nullable=true)
     */
private $prod_key;    /**
     * @var integer
     *
     * @ORM\Column(name="sale", type="integer")
     */
private $sale;    /**
     * @var boolean
     *
     * @ORM\Column(name="use_confirm_page", type="boolean", options={"default":false})
     */
private $use_confirm_page;    /**
     * @var boolean
     *
     * @ORM\Column(name="auto_login", type="boolean", options={"default":false})
     */
private $auto_login;    /**
     * @var boolean
     *
     * @ORM\Column(name="login_required", type="boolean", options={"default":false})
     */
private $login_required;    /**
     * @var boolean
     *
     * @ORM\Column(name="order_correct", type="boolean", options={"default":false})
     */
private $order_correct;    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_notices", type="text", nullable=true)
     */
private $mail_notices;    /**
     * @var boolean
     *
     * @ORM\Column(name="use_cart_button", type="boolean", options={"default":true})
     */
private $use_cart_button;    /**
     * @var string
     *
     * @ORM\Column(name="cart_button_color", type="string", length=255, nullable=true, options={"default":"Gold"})
     */
private $cart_button_color;    /**
     * @var string
     *
     * @ORM\Column(name="cart_button_size", type="string", length=255, nullable=true, options={"default":"large"})
     */
private $cart_button_size;    /**
     * @var string
     *
     * @ORM\Column(name="cart_button_place", type="string", length=255, nullable=true, options={"default":1})
     */
private $cart_button_place;    /**
     * @var boolean
     *
     * @ORM\Column(name="use_products_button", type="boolean", options={"default":true})
     */
private $use_products_button;    /**
     * @var string
     *
     * @ORM\Column(name="products_button_color", type="string", length=255, nullable=true, options={"default":"Gold"})
     */
private $products_button_color;    /**
     * @var string
     *
     * @ORM\Column(name="products_button_size", type="string", length=255, nullable=true, options={"default":"large"})
     */
private $products_button_size;    /**
     * @var string
     *
     * @ORM\Column(name="products_button_place", type="string", length=255, nullable=true, options={"default":1})
     */
private $products_button_place;    /**
     * @var boolean
     *
     * @ORM\Column(name="use_mypage_change_button", type="boolean", options={"default":false})
     */
private $use_mypage_change_button;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_change_button_color", type="string", length=255, nullable=true, options={"default":"Gold"})
     */
private $mypage_change_button_color;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_change_button_size", type="string", length=255, nullable=true, options={"default":"large"})
     */
private $mypage_change_button_size;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_change_button_place", type="string", length=255, nullable=true, options={"default":1})
     */
private $mypage_change_button_place;    /**
     * @var boolean
     *
     * @ORM\Column(name="use_mypage_login_button", type="boolean", options={"default":false})
     */
private $use_mypage_login_button;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_login_button_color", type="string", length=255, nullable=true, options={"default":"Gold"})
     */
private $mypage_login_button_color;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_login_button_size", type="string", length=255, nullable=true, options={"default":"large"})
     */
private $mypage_login_button_size;    /**
     * @var string
     *
     * @ORM\Column(name="mypage_login_button_place", type="string", length=255, nullable=true, options={"default":1})
     */
private $mypage_login_button_place;    /**
     * @var integer
     *
     * @ORM\Column(name="deliv_widget_height", type="integer", nullable=true)
     */
private $deliv_widget_height;    /**
     * @var integer
     *
     * @ORM\Column(name="deliv_wedget_width", type="integer", nullable=true)
     */
private $deliv_widget_width;    /**
     * @var integer
     *
     * @ORM\Column(name="payment_widget_height", type="integer", nullable=true)
     */
private $payment_widget_height;    /**
     * @var integer
     *
     * @ORM\Column(name="payment_widget_width", type="integer", nullable=true)
     */
private $payment_widget_width;public function __construct(){}public function getId(){return $this->id;}public function getAmazonAccountMode(){return $this->amazon_account_mode;}public function setAmazonAccountMode($amazon_account_mode = null){$this->amazon_account_mode = $amazon_account_mode;return $this;}public function getEnv(){return $this->env;}public function setEnv($env){$this->env = $env;return $this;}public function getSellerId(){return $this->seller_id;}public function setSellerId($seller_id){$this->seller_id = $seller_id;return $this;}public function getMwsAccessKeyId(){return $this->mws_access_key_id;}public function setMwsAccessKeyId($mws_access_key_id){$this->mws_access_key_id = $mws_access_key_id;return $this;}public function getMwsSecretAccessKey(){return $this->mws_secret_access_key;}public function setMwsSecretAccessKey($mws_secret_access_key){$this->mws_secret_access_key = $mws_secret_access_key;return $this;}public function getClientId(){return $this->client_id;}public function setClientId($client_id){$this->client_id = $client_id;return $this;}public function getTestClientId(){return $this->test_client_id;}public function setTestClientId($test_client_id){$this->test_client_id = $test_client_id;return $this;}public function getProdKey(){return $this->prod_key;}public function setProdKey($prod_key){$this->prod_key = $prod_key;return $this;}public function getSale(){return $this->sale;}public function setSale($sale){$this->sale = $sale;return $this;}public function getAutoLogin(){return $this->auto_login;}public function setAutoLogin($auto_login){$this->auto_login = $auto_login;return $this;}public function getLoginRequired(){return $this->login_required;}public function setLoginRequired($login_required){$this->login_required = $login_required;return $this;}public function getOrderCorrect(){return $this->order_correct;}public function setOrderCorrect($order_correct){$this->order_correct = $order_correct;return $this;}public function getMailNotices(){return $this->mail_notices;}public function setMailNotices($mail_notices){$this->mail_notices = $mail_notices;return $this;}public function getUseConfirmPage(){return $this->use_confirm_page;}public function setUseConfirmPage($use_confirm_page){$this->use_confirm_page = $use_confirm_page;return $this;}public function getUseCartButton(){return $this->use_cart_button;}public function setUseCartButton($use_cart_button){$this->use_cart_button = $use_cart_button;return $this;}public function getCartButtonSize(){return $this->cart_button_size;}public function setCartButtonSize($cart_button_size){$this->cart_button_size = $cart_button_size;return $this;}public function getCartButtonColor(){return $this->cart_button_color;}public function setCartButtonColor($cart_button_color){$this->cart_button_color = $cart_button_color;return $this;}public function getCartButtonPlace(){return $this->cart_button_place;}public function setCartButtonPlace($cart_button_place){$this->cart_button_place = $cart_button_place;return $this;}public function getUseProductsButton(){return $this->use_products_button;}public function setUseProductsButton($use_products_button){$this->use_products_button = $use_products_button;return $this;}public function getProductsButtonColor(){return $this->products_button_color;}public function setProductsButtonColor($products_button_color){$this->products_button_color = $products_button_color;return $this;}public function getProductsButtonSize(){return $this->products_button_size;}public function setProductsButtonSize($products_button_size){$this->products_button_size = $products_button_size;return $this;}public function getProductsButtonPlace(){return $this->products_button_place;}public function setProductsButtonPlace($products_button_place){$this->products_button_place = $products_button_place;return $this;}public function getUseMypageChangeButton(){return $this->use_mypage_change_button;}public function setUseMypageChangeButton($use_mypage_change_button){$this->use_mypage_change_button = $use_mypage_change_button;return $this;}public function getMypageChangeButtonColor(){return $this->mypage_change_button_color;}public function setMypageChangeButtonColor($mypage_change_button_color){$this->mypage_change_button_color = $mypage_change_button_color;return $this;}public function getMypageChangeButtonSize(){return $this->mypage_change_button_size;}public function setMypageChangeButtonSize($mypage_change_button_size){$this->mypage_change_button_size = $mypage_change_button_size;return $this;}public function getMypageChangeButtonPlace(){return $this->mypage_change_button_place;}public function setMypageChangeButtonPlace($mypage_change_button_place){$this->mypage_change_button_place = $mypage_change_button_place;return $this;}public function getUseMypageLoginButton(){return $this->use_mypage_login_button;}public function setUseMypageLoginButton($use_mypage_login_button){$this->use_mypage_login_button = $use_mypage_login_button;return $this;}public function getMypageLoginButtonColor(){return $this->mypage_login_button_color;}public function setMypageLoginButtonColor($mypage_login_button_color){$this->mypage_login_button_color = $mypage_login_button_color;return $this;}public function getMypageLoginButtonSize(){return $this->mypage_login_button_size;}public function setMypageLoginButtonSize($mypage_login_button_size){$this->mypage_login_button_size = $mypage_login_button_size;return $this;}public function getMypageLoginButtonPlace(){return $this->mypage_login_button_place;}public function setMypageLoginButtonPlace($mypage_login_button_place){$this->mypage_login_button_place = $mypage_login_button_place;return $this;}public function getDelivWidgetHeight(){return $this->deliv_widget_height;}public function setDelivWidgetHeight($deliv_widget_height){$this->deliv_widget_height = $deliv_widget_height;return $this;}public function getDelivWidgetWidth(){return $this->deliv_widget_width;}public function setDelivWidgetWidth($deliv_widget_width){$this->deliv_widget_width = $deliv_widget_width;return $this;}public function getPaymentWidgetHeight(){return $this->payment_widget_height;}public function setPaymentWidgetHeight($payment_widget_height){$this->payment_widget_height = $payment_widget_height;return $this;}public function getPaymentWidgetWidth(){return $this->payment_widget_width;}public function setPaymentWidgetWidth($payment_widget_width){$this->payment_widget_width = $payment_widget_width;return $this;}}