<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay;use Eccube\Event\TemplateEvent;use Eccube\Event\EventArgs;use Eccube\Event\EccubeEvents;use Eccube\Common\EccubeConfig;use Eccube\Repository\PaymentRepository;use Eccube\Repository\PluginRepository;use Eccube\Service\OrderHelper;use Eccube\Service\CartService;use Plugin\AmazonPay\Repository\ConfigRepository;use Plugin\AmazonPay\Service\Method\AmazonPay;use Symfony\Component\DependencyInjection\ContainerInterface;use Symfony\Component\EventDispatcher\EventSubscriberInterface;use Symfony\Component\HttpFoundation\RequestStack;use Symfony\Component\HttpFoundation\Session\Session;use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;class AmazonPayEvent implements EventSubscriberInterface{private $sessionAmazonProfileKey = 'amazon_pay.profile';private $sessionAmazonAccessTokenKey = 'amazon_pay.access_token';protected $eccubeConfig;protected $configRepository;public function __construct(RequestStack $requestStack, Session $session, TokenStorageInterface $tokenStorage, EccubeConfig $eccubeConfig, PaymentRepository $paymentRepository, PluginRepository $pluginRepository, ConfigRepository $configRepository, ContainerInterface $container, OrderHelper $orderHelper, CartService $cartService){goto O0mid;KUVqs:$this->configRepository = $configRepository;goto FMaND;O0mid:$this->requestStack = $requestStack;goto ePyVq;yT6YP:$this->tokenStorage = $tokenStorage;goto m_Gjc;ePyVq:$this->session = $session;goto yT6YP;JFP4I:$this->orderHelper = $orderHelper;goto tJCB8;Lu3DE:$this->pluginRepository = $pluginRepository;goto KUVqs;ez_v0:$this->paymentRepository = $paymentRepository;goto Lu3DE;FMaND:$this->container = $container;goto JFP4I;tJCB8:$this->cartService = $cartService;goto waigJ;m_Gjc:$this->eccubeConfig = $eccubeConfig;goto ez_v0;waigJ:}public static function getSubscribedEvents(){return [EccubeEvents::FRONT_CART_BUYSTEP_COMPLETE => 'amazon_cart_buystep', 'Product/detail.twig' => 'product', 'Cart/index.twig' => 'cart', 'Shopping/index.twig' => 'amazon_shopping', 'Shopping/confirm.twig' => 'amazon_confirm', 'Mypage/change.twig' => 'mypage_change', 'Mypage/login.twig' => 'mypage_login'];}public function product(TemplateEvent $event){goto HJ6by;HJ6by:$parameters = $event->getParameters();goto n60uQ;ghmYa:if ($Product->getStockFind()) {goto KvzR7;}goto Q47oJ;EL4p_:return;goto NcTcI;CGwTp:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto MSEhC;}goto JZhwO;n67PK:if (!($Config->getProductsButtonPlace() == $this->eccubeConfig['amazon_pay']['button_place']['auto'])) {goto tIloD;}goto mY6H0;JZhwO:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto P03Jb;mY6H0:$event->addSnippet('@AmazonPay/default/Product/button.twig');goto woncr;mN5Rj:if (!($Config->getUseProductsButton() == $this->eccubeConfig['amazon_pay']['toggle']['off'])) {goto O5eOg;}goto EL4p_;n60uQ:$Product = $parameters['Product'];goto ghmYa;F9DLZ:$event->setParameters($parameters);goto ziAeH;ziAeH:$event->addSnippet('@AmazonPay/default/Product/amazon_pay_js.twig');goto n67PK;yK_14:$Config = $this->configRepository->get();goto mN5Rj;ybFwp:$parameters['Config'] = $Config;goto CGwTp;KWzQk:MSEhC:goto NG7T5;woncr:tIloD:goto F2IpV;NG7T5:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto IMwHb;dJ0bD:KvzR7:goto yK_14;P03Jb:goto G4n5S;goto KWzQk;Q47oJ:return;goto dJ0bD;IMwHb:G4n5S:goto F9DLZ;NcTcI:O5eOg:goto ybFwp;F2IpV:}public function cart(TemplateEvent $event){goto a6cTT;OpzMW:return;goto TvPbG;ll3i1:$parameters['Config'] = $Config;goto d6_Rs;pI9Cf:$Config = $this->configRepository->get();goto Mpc3H;Dv1Ih:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto fmXyB;Ptev_:qW1ew:goto ll3i1;oRnCX:if (!($Config->getCartButtonPlace() == $this->eccubeConfig['amazon_pay']['button_place']['auto'])) {goto T3lGL;}goto LPr3S;MMvsj:goto jhC_C;goto kHE1h;FaPUw:$event->setParameters($parameters);goto Pvcuo;Pvcuo:$event->addSnippet('@AmazonPay/default/Cart/amazon_pay_js.twig');goto oRnCX;d6_Rs:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto KGXCQ;}goto pMGEp;FUJey:return;goto Ptev_;kHE1h:KGXCQ:goto Dv1Ih;ousFn:if (!empty($parameters['Carts'])) {goto j5bLm;}goto OpzMW;fmXyB:jhC_C:goto FaPUw;a6cTT:$parameters = $event->getParameters();goto ousFn;LPr3S:$event->addSnippet('@AmazonPay/default/Cart/button.twig');goto OafpR;OafpR:T3lGL:goto uSUx3;TvPbG:j5bLm:goto pI9Cf;pMGEp:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto MMvsj;Mpc3H:if (!($Config->getUseCartButton() == $this->eccubeConfig['amazon_pay']['toggle']['off'])) {goto qW1ew;}goto FUJey;uSUx3:}public function amazon_cart_buystep(EventArgs $event){goto PuChs;GtGnv:$this->session->remove($this->sessionAmazonProfileKey);goto TGhBG;TGhBG:$this->cartService->setPreOrderId(null);goto Ex_tk;PuChs:if (!($this->orderHelper->getNonmember() && $this->session->get($this->sessionAmazonProfileKey))) {goto q96io;}goto Nliqm;Ex_tk:$this->cartService->save();goto FMAn0;FMAn0:q96io:goto B5pVV;Nliqm:$this->session->remove(OrderHelper::SESSION_NON_MEMBER);goto GtGnv;B5pVV:}public function amazon_shopping(TemplateEvent $event){goto Pz7wq;VNPV1:goto kI7hI;goto qdtIJ;Hvx5I:oF9z0:goto WVznY;fr5b_:$Order = $parameters['Order'];goto JzZ4F;czf7x:header("Location:" . $this->container->get('router')->generate('amazon_shopping'));goto HiK18;WVznY:$Config = $this->configRepository->get();goto tR54b;BX3Qt:$uri = $request->getUri();goto rzmzI;inUvo:goto hrLL5;goto sM0Nx;ozP3m:hrLL5:goto suV_b;RarQ7:$parameters['Config'] = $Config;goto J39NO;AxJdo:$parameters = $event->getParameters();goto HhXLy;WbYxe:if (!(preg_match('/amazon_shopping/', $uri) == false)) {goto oF9z0;}goto AGiF0;RWU51:wo6Vr:goto lplUf;kL45i:$parameters['useMailMagazine'] = $useMailMagazine;goto i8UJo;iUwlJ:$useMailMagazine = true;goto RvdaW;Pz7wq:$request = $this->requestStack->getMasterRequest();goto BX3Qt;AGiF0:$referer = $request->headers->get('referer');goto fr5b_;TqpzI:$addressConsentToken = $this->session->get($this->sessionAmazonAccessTokenKey);goto AxJdo;CqtW4:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto inUvo;sM0Nx:DJcD2:goto SS9QM;JzZ4F:$Payment = $Order->getPayment();goto F59DA;F59DA:if (!($Payment && $Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', $referer))) {goto wo6Vr;}goto czf7x;qdtIJ:taFKs:goto iUwlJ;SS9QM:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto ozP3m;suV_b:$event->setParameters($parameters);goto UBT8q;HhXLy:$parameters['addressConsentToken'] = $addressConsentToken;goto RarQ7;i8UJo:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto DJcD2;}goto CqtW4;HiK18:exit;goto RWU51;J39NO:if ($this->pluginRepository->findOneBy(['code' => 'MailMagazine4', 'enabled' => true])) {goto taFKs;}goto jfZGk;tR54b:$event->addSnippet('@AmazonPay/default/Shopping/widgets.twig');goto hmKlh;rzmzI:$parameters = $event->getParameters();goto WbYxe;jfZGk:$useMailMagazine = false;goto VNPV1;lplUf:return;goto Hvx5I;hmKlh:$event->addSnippet('@AmazonPay/default/Shopping/customer_regist.twig');goto TqpzI;RvdaW:kI7hI:goto kL45i;UBT8q:}public function amazon_confirm(TemplateEvent $event){goto q9ZmQ;Ulu9e:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto cMlpU;jrRtk:MXbYX:goto nDpAJ;b1SB4:$useMailMagazine = true;goto jrRtk;LpTQm:if ($this->pluginRepository->findBy(['code' => 'MailMagazine4', 'enabled' => 1])) {goto v8LlG;}goto nQm3K;sbY8j:return;goto bhzq0;Y1KdD:$uri = $request->getUri();goto puddR;eEmKi:$event->setParameters($parameters);goto XbatV;EVvbL:$Config = $this->configRepository->get();goto JABb_;Lo16L:$event->addSnippet('@AmazonPay/default/Shopping/confirm_customer_regist.twig');goto R5EqI;Pbc6D:DYw_u:goto Ulu9e;R5EqI:$addressConsentToken = $this->session->get($this->sessionAmazonAccessTokenKey);goto JQxgI;q9ZmQ:$request = $this->requestStack->getMasterRequest();goto Y1KdD;puddR:if (!(preg_match('/amazon_shopping/', $uri) == false)) {goto V5ra4;}goto sbY8j;NjeFv:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto DYw_u;}goto JLImu;BlO2O:$parameters['addressConsentToken'] = $addressConsentToken;goto rgFGW;JABb_:$event->addSnippet('@AmazonPay/default/Shopping/confirm_widgets.twig');goto Lo16L;Vc9O8:goto MXbYX;goto rGdxx;cMlpU:TWJR0:goto eEmKi;rgFGW:$parameters['Config'] = $Config;goto LpTQm;rGdxx:v8LlG:goto b1SB4;MbuEL:goto TWJR0;goto Pbc6D;nQm3K:$useMailMagazine = false;goto Vc9O8;nDpAJ:$parameters['useMailMagazine'] = $useMailMagazine;goto NjeFv;JLImu:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto MbuEL;bhzq0:V5ra4:goto EVvbL;JQxgI:$parameters = $event->getParameters();goto BlO2O;XbatV:}public function mypage_change(TemplateEvent $event){goto JurT7;Uliwg:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto Vt9PH;GzVSW:Bmaxx:goto impWA;N66tT:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto KcPbm;ImiTm:$event->addSnippet('@AmazonPay/default/Mypage/change_page_button.twig');goto GzVSW;JurT7:$parameters = $event->getParameters();goto Zwi0e;Zwi0e:$Config = $this->configRepository->get();goto k8NuA;IscQ0:if (!($Config->getMypageChangeButtonPlace() == $this->eccubeConfig['amazon_pay']['button_place']['auto'])) {goto Bmaxx;}goto ImiTm;k8NuA:if (!($Config->getUseMypageChangeButton() == $this->eccubeConfig['amazon_pay']['toggle']['off'])) {goto Vrpps;}goto KzLT4;KcPbm:Q701x:goto fS1r_;fS1r_:$event->setParameters($parameters);goto vGGIm;Y70SY:Vrpps:goto EHb7M;Vt9PH:goto Q701x;goto RE0Ve;oS2aw:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto SM8tO;}goto Uliwg;EHb7M:$parameters['Config'] = $Config;goto oS2aw;KzLT4:return;goto Y70SY;vGGIm:$event->addSnippet('@AmazonPay/default/Mypage/amazon_login_js.twig');goto IscQ0;RE0Ve:SM8tO:goto N66tT;impWA:}public function mypage_login(TemplateEvent $event){goto FQoGt;mYu4k:Dj7EF:goto oXBGR;MRTwj:return;goto mYu4k;UT8GM:CDMsG:goto vkxfZ;wdktO:if ($Config->getEnv() == $this->eccubeConfig['amazon_pay']['env']['prod']) {goto CDMsG;}goto Gi8dv;pYK1U:W6dNq:goto lS9B1;qA3bx:if (!($Config->getMypageChangeButtonPlace() == $this->eccubeConfig['amazon_pay']['button_place']['auto'])) {goto W6dNq;}goto I28ss;WwAx3:$event->addSnippet('@AmazonPay/default/Mypage/amazon_login_js.twig');goto qA3bx;Gi8dv:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['sandbox'];goto xvGqJ;SCa_S:if (!($Config->getUseMypageChangeButton() == $this->eccubeConfig['amazon_pay']['toggle']['off'])) {goto Dj7EF;}goto MRTwj;oXBGR:$parameters['Config'] = $Config;goto wdktO;I28ss:$event->addSnippet('@AmazonPay/default/Mypage/login_page_button.twig');goto pYK1U;Znge0:nepDF:goto lkKYQ;FQoGt:$parameters = $event->getParameters();goto IVt2Y;lkKYQ:$event->setParameters($parameters);goto WwAx3;xvGqJ:goto nepDF;goto UT8GM;IVt2Y:$Config = $this->configRepository->get();goto SCa_S;vkxfZ:$parameters['AmazonApi'] = $this->eccubeConfig['amazon_pay']['api']['prod'];goto Znge0;lS9B1:}}