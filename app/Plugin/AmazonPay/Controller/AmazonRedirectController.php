<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Controller;use Eccube\Controller\AbstractController;use Eccube\Repository\CustomerRepository;use Eccube\Repository\ClassCategoryRepository;use Eccube\Repository\ProductRepository;use Eccube\Repository\ProductClassRepository;use Eccube\Common\EccubeConfig;use Eccube\Service\CartService;use Eccube\Service\OrderHelper;use Eccube\Service\PurchaseFlow\PurchaseContext;use Eccube\Service\PurchaseFlow\PurchaseFlow;use Plugin\AmazonPay\Repository\ConfigRepository;use Plugin\AmazonPay\Service\AmazonOrderHelper;use Plugin\AmazonPay\Service\AmazonRequestService;use Symfony\Component\Routing\Annotation\Route;use Symfony\Component\HttpFoundation\ParameterBag;use Symfony\Component\HttpFoundation\Request;use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;class AmazonRedirectController extends AbstractController{private $sessionAmazonProfileKey = 'amazon_pay.profile';private $sessionAmazonAccessTokenKey = 'amazon_pay.access_token';protected $cartService;protected $configRepository;protected $amazonRequestService;public function __construct(PurchaseFlow $cartPurchaseFlow, OrderHelper $orderHelper, CartService $cartService, CustomerRepository $customerRepository, ClassCategoryRepository $classCategoryRepository, ProductRepository $productRepository, ProductClassRepository $productClassRepository, ConfigRepository $configRepository, AmazonOrderHelper $amazonOrderHelper, AmazonRequestService $amazonRequestService, ParameterBag $parameterBag, EccubeConfig $eccubeConfig, TokenStorageInterface $tokenStorage){goto BODsN;M6a3j:$this->classCategoryRepository = $classCategoryRepository;goto ACw8S;d5Vso:$this->amazonOrderHelper = $amazonOrderHelper;goto j_cGv;XXJAv:$this->eccubeConfig = $eccubeConfig;goto c8Lmz;rK4Il:$this->cartService = $cartService;goto KJ7CR;Ei6pI:$this->parameterBag = $parameterBag;goto XXJAv;ip5WC:$this->productClassRepository = $productClassRepository;goto zvHdN;h6lMa:$this->orderHelper = $orderHelper;goto rK4Il;c8Lmz:$this->tokenStorage = $tokenStorage;goto d5Jnj;d5Jnj:$this->Config = $configRepository->get();goto cAhn2;j_cGv:$this->amazonRequestService = $amazonRequestService;goto Ei6pI;BODsN:$this->purchaseFlow = $cartPurchaseFlow;goto h6lMa;ACw8S:$this->productRepository = $productRepository;goto ip5WC;KJ7CR:$this->customerRepository = $customerRepository;goto M6a3j;zvHdN:$this->configRepository = $configRepository;goto d5Vso;cAhn2:}    /**
     * @Route("/amazon_redirect", name="amazon_redirect")
     * 
     * @param Request $request
     * 
     * @return RedirectResponse
     */
public function index(Request $request){goto RB9Xu;A3FdK:logs('amazon_pay')->info('AmazonRedirect::index end.');goto gI9GK;sMA0F:$kana01 = $Customer->getKana01();goto ClJOJ;kk9_g:$this->cartService->save();goto OT0TO;f2zES:$this->cartService->save();goto jMBPl;RAiWu:$this->cartService->addProduct($ProductClass->getId(), $quantity);goto qJAFV;J6I3Y:$arrFixName = $this->amazonOrderHelper->reviseName($Customer->getName01());goto wLfVG;O6FGk:foreach ($this->cartService->getCarts() as $Cart) {$this->purchaseFlow->validate($Cart, new PurchaseContext($Cart, $Customer[0]));dNGf2:}goto hq0so;cSToJ:if (empty($class_category_id2)) {goto jwtrC;}goto rLhTF;wujUh:goto MyZFz;goto zsCVU;LkgJY:if (!$revise_flg) {goto jTOZQ;}goto t5_Xp;t5_Xp:$this->entityManager->persist($Customer);goto rzkS_;nuQez:$arrFixKana = $this->amazonOrderHelper->reviseKana($Customer->getName01(), $Customer->getName02(), $Customer->getEmail());goto tocqC;rzkS_:$this->entityManager->flush();goto Xa7Wy;Q7fiQ:if (!((empty($kana01) || $kana01 === '　') && (empty($kana02) || $kana02 === '　'))) {goto bsu2U;}goto nuQez;LoUzZ:$find['ClassCategory1'] = $ClassCategory1;goto PFWkf;VoKRC:if (!(empty($name02) || $name02 == '　')) {goto mKF6x;}goto J6I3Y;txDr9:$name02 = $Customer->getName02();goto VoKRC;OT0TO:$sale_type_id = $ProductClass->getSaleType()->getId();goto SAOz4;bsi23:logs('amazon_pay')->info('AmazonRedirect::add cart start.');goto rpMEY;I30xF:if (!($this->isGranted('IS_AUTHENTICATED_FULLY') && $this->Config->getOrderCorrect() == $this->eccubeConfig['amazon_pay']['toggle']['on'])) {goto O8J9q;}goto uZgVr;YX2_V:$Carts = $this->cartService->getCarts();goto TFwDn;z35R2:Sovra:goto oQr0P;JgqDb:return $this->redirectToRoute('cart');goto fQWZg;p0R6P:$revise_flg = true;goto qQbpV;pKxwN:W1di1:goto cB_Zm;wLfVG:if (empty($arrFixName)) {goto W1di1;}goto H0zzH;qJAFV:$Carts = $this->cartService->getCarts();goto LIfdU;XKWIZ:$ClassCategory1 = $this->classCategoryRepository->findOneBy(['id' => $class_category_id1]);goto LoUzZ;oQr0P:logs('amazon_pay')->info('AmazonRedirect::add cart end.');goto LBe6G;NVjTi:$class_category_id2 = $request->get('classcategory_id2');goto ISoiu;fQWZg:S6YhY:goto iEzSV;F4UPr:$ProductClass = $this->productClassRepository->findOneBy($find);goto RAiWu;Tvlqt:$this->tokenStorage->setToken($token);goto tyYE5;LlX0k:$this->session->set($this->sessionAmazonProfileKey, serialize($profile));goto MGABi;tocqC:if (empty($arrFixKana)) {goto iveRp;}goto hXf4u;cB_Zm:mKF6x:goto sMA0F;Or81W:$this->cartService->mergeFromPersistedCart();goto O6FGk;DMoIi:O8J9q:goto LlX0k;JtQRY:$access_token = $request->get('access_token');goto gx16J;ttYFU:$product_id = $request->get('product_id');goto WplU1;ISoiu:$Product = $this->productRepository->findOneBy(['id' => $product_id]);goto Lgxge;opxgD:if (!empty($product_id) && !empty($quantity)) {goto ULQ6J;}goto w3xSm;BxH_V:iveRp:goto W6V5z;W6V5z:bsu2U:goto LkgJY;rpMEY:$class_category_id1 = $request->get('classcategory_id1');goto NVjTi;Ns9D1:if (empty($class_category_id1)) {goto CoUrh;}goto XKWIZ;ug0AD:$this->cartService->save();goto JtQRY;LIfdU:$flowResults = array_map(function ($Cart) {$purchaseContext = new PurchaseContext($Cart, $this->getUser());return $this->purchaseFlow->validate($Cart, $purchaseContext);}, $Carts);goto kk9_g;w3xSm:$index = $request->get('index');goto wujUh;Xa7Wy:jTOZQ:goto DMoIi;gI9GK:return $this->redirectToRoute('amazon_shopping', ['init_flg' => true]);goto alzN5;WwL20:$token = new UsernamePasswordToken($Customer[0], null, 'customer', ['ROLE_USER']);goto Tvlqt;Bjj2V:$revise_flg = false;goto txDr9;uZgVr:$Customer = $this->getUser();goto Bjj2V;LBe6G:MyZFz:goto xVEIK;tyYE5:$request->getSession()->migrate(true);goto Or81W;ClJOJ:$kana02 = $Customer->getKana02();goto Q7fiQ;gx16J:$profile = $this->amazonRequestService->getAmazonProfile($access_token);goto adaMq;AwTk_:$find['ClassCategory2'] = $ClassCategory2;goto Tc5Og;H0zzH:$Customer->setName01($arrFixName['name01'])->setName02($arrFixName['name02']);goto clufT;WplU1:$quantity = $request->get('quantity');goto opxgD;hq0so:Fs_dL:goto f2zES;Tc5Og:jwtrC:goto F4UPr;MGABi:$this->session->set($this->sessionAmazonAccessTokenKey, $access_token);goto A3FdK;adaMq:if (!($profile === false)) {goto S6YhY;}goto JgqDb;SAOz4:$pattern = '/_' . $sale_type_id . '$/';goto YX2_V;RB9Xu:logs('amazon_pay')->info('AmazonRedirect::index start.');goto ttYFU;hXf4u:$Customer->setKana01($arrFixKana['kana01'])->setKana02($arrFixKana['kana02']);goto p0R6P;rLhTF:$ClassCategory2 = $this->classCategoryRepository->findOneBy(['id' => $class_category_id2]);goto AwTk_;iEzSV:if (!(!$this->isGranted('ROLE_USER') && $this->Config->getAutoLogin() == $this->eccubeConfig['amazon_pay']['toggle']['on'] && ($Customer = $this->customerRepository->getNonWithdrawingCustomers(['amazon_user_id' => $profile->user_id])))) {goto OLqmY;}goto WwL20;clufT:$revise_flg = true;goto GfFdJ;GfFdJ:logs('amazon_pay')->info('*** 会員情報 名前補正 *** customer_id = ' . $Customer->getId());goto pKxwN;zsCVU:ULQ6J:goto bsi23;xVEIK:$this->cartService->setPrimary($index);goto ug0AD;jMBPl:OLqmY:goto I30xF;TFwDn:foreach ($Carts as $Cart) {goto HWoIh;z2P3L:$index = $cartKey;goto JKOI3;Pmpji:e_Bky:goto BWXs0;FJiqX:xtzjq:goto Pmpji;EezgL:if (!preg_match($pattern, $cartKey)) {goto xtzjq;}goto z2P3L;HWoIh:$cartKey = $Cart->getCartKey();goto EezgL;JKOI3:goto Sovra;goto FJiqX;BWXs0:}goto z35R2;qQbpV:logs('amazon_pay')->info('*** 会員情報 フリガナ補正 *** customer_id = ' . $Customer->getId());goto BxH_V;PFWkf:CoUrh:goto cSToJ;Lgxge:$find = ['Product' => $Product];goto Ns9D1;alzN5:}    /**
     * @Route("/lwa/endpoint", name="lwa_endpoint")
     */
public function lwaEndpoint(Request $request){goto kjLsA;au3V5:switch (true) {case strpos($refferer, $this->generateUrl('mypage_change')) !== false:goto a7rt9;pNBjQ:$param = $arrRoute['param'];goto bxKez;usw7U:$route = $arrRoute['route'];goto pNBjQ;bxKez:goto w1uYT;goto lPvEC;a7rt9:$arrRoute = $this->amazonRequestService->lwaForMypageChange($request, $profile, $this->getUser());goto usw7U;lPvEC:case strpos($refferer, $this->generateUrl('mypage_login')) !== false:goto PUPeH;IshV1:$arrRoute = $this->amazonRequestService->lwaForMypageLogin($request, $profile);goto O7E0N;auCj4:$param = $arrRoute['param'];goto ZQRq1;ZQRq1:rj_Vz:goto M0cfP;O7E0N:$route = $arrRoute['route'];goto auCj4;PUPeH:if ($this->isGranted('ROLE_USER')) {goto rj_Vz;}goto IshV1;M0cfP:goto w1uYT;goto g7gzj;g7gzj:default:$this->redirectToRoute($route);goto w1uYT;}goto PPEfB;PPEfB:k8sRQ:goto hNYGW;wPsNi:return $this->redirectToRoute('mypage_login');goto ZM39l;tPqrM:$param = [];goto au3V5;t7x0Z:$access_token = $request->query->get('access_token');goto XZb9E;e9PWR:$route = 'mypage_login';goto tPqrM;XZb9E:$profile = $this->amazonRequestService->getAmazonProfile($access_token);goto s5ld7;W8pXs:$refferer = $request->query->get('referrer_uri');goto e9PWR;ZM39l:JTVtz:goto W8pXs;kjLsA:logs('amazon_pay')->info('AmazonRedirect::lwaEndpoint start.');goto t7x0Z;fRJem:logs('amazon_pay')->info('AmazonRedirect::lwaEndpoint end.');goto xyekW;s5ld7:if (!(empty($access_token) || empty($profile))) {goto JTVtz;}goto wPsNi;hNYGW:w1uYT:goto fRJem;xyekW:return $this->redirectToRoute($route, $param);goto qZHI1;qZHI1:}}