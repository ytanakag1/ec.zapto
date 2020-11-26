<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.3   |
    |              on 2020-11-16 14:57:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
namespace Plugin\AmazonPay\Form\Extension;use Eccube\Common\EccubeConfig;use Eccube\Entity\Order;use Eccube\Form\Type\Shopping\OrderType;use Eccube\Repository\PaymentRepository;use Eccube\Repository\PluginRepository;use Plugin\AmazonPay\Service\Method\AmazonPay;use Plugin\AmazonPay\Repository\ConfigRepository;use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;use Symfony\Component\DependencyInjection\ContainerInterface;use Symfony\Component\Form\AbstractTypeExtension;use Symfony\Component\Form\Extension\Core\Type\TextType;use Symfony\Component\Form\Extension\Core\Type\PasswordType;use Symfony\Component\Form\Extension\Core\Type\ChoiceType;use Symfony\Component\Form\Extension\Core\Type\CheckboxType;use Symfony\Component\Form\FormBuilderInterface;use Symfony\Component\Form\FormEvent;use Symfony\Component\Form\FormEvents;class AmazonCustomerExtension extends AbstractTypeExtension{use ControllerTrait;protected $paymentRepository;protected $eccubeConfig;protected $configRepository;protected $container;public function __construct(EccubeConfig $eccubeConfig, PaymentRepository $paymentRepository, PluginRepository $pluginRepository, ConfigRepository $configRepository, ContainerInterface $container){goto RbcdL;tpi7b:$this->configRepository = $configRepository;goto nOAgw;IJywi:$this->container = $container;goto XTVsd;nOAgw:$this->Config = $this->configRepository->get();goto IJywi;LaPHV:$this->pluginRepository = $pluginRepository;goto dFrUc;RbcdL:$this->paymentRepository = $paymentRepository;goto LaPHV;dFrUc:$this->eccubeConfig = $eccubeConfig;goto tpi7b;XTVsd:}public function buildForm(FormBuilderInterface $builder, array $options){goto hr1pU;pkqYO:$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use($self) {goto GO0QE;XeMJw:$form->add('customer_regist', CheckboxType::class, ['label' => 'ご利用規約に同意し、注文者情報を会員として登録する', 'required' => false, 'mapped' => false, 'attr' => ['class' => 'form-control', 'autocomplete' => 'off']]);goto UFVJ4;FCT2M:if (!$data->getPayment()) {goto MMPup;}goto iklVh;oMi9S:MMPup:goto gr6Sw;gH6BQ:AtBAf:goto ng9kn;c_oJD:E7vXE:goto oMi9S;iklVh:if (!($data->getPayment()->getMethodClass() === AmazonPay::class && !$this->isGranted('IS_AUTHENTICATED_FULLY'))) {goto E7vXE;}goto XeMJw;UFVJ4:if (!$this->pluginRepository->findOneBy(['code' => 'MailMagazine4', 'enabled' => true])) {goto AtBAf;}goto VcOh_;ng9kn:if (!($this->Config->getLoginRequired() == $this->eccubeConfig['amazon_pay']['toggle']['on'] && !$this->isGranted('IS_AUTHENTICATED_FULLY'))) {goto FVvZX;}goto aWdMv;VcOh_:$form->add('mail_magazine', CheckboxType::class, ['label' => 'メールマガジンを購読する', 'required' => false, 'mapped' => false, 'attr' => ['class' => 'form-control', 'autocomplete' => 'off']]);goto gH6BQ;aWdMv:$form->add('login_check', ChoiceType::class, ['choices' => ['まだ会員登録されていないお客様' => 'regist', '会員登録がお済みのお客様' => 'login'], 'mapped' => false, 'expanded' => true])->add('amazon_login_email', TextType::class, ['mapped' => false, 'required' => false, 'attr' => ['class' => 'form-control', 'max_length' => 50]])->add('amazon_login_password', PasswordType::class, ['mapped' => false, 'required' => false, 'always_empty' => false, 'attr' => ['class' => 'form-control', 'max_length' => 50]]);goto BfS3j;BfS3j:FVvZX:goto c_oJD;GO0QE:$data = $event->getData();goto dvt0Y;dvt0Y:$form = $event->getForm();goto FCT2M;gr6Sw:});goto TEU_G;TEU_G:$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {goto LuECd;poIvX:$Payment = $this->paymentRepository->findOneBy(['method_class' => AmazonPay::class]);goto bc91i;On49g:ed1Q2:goto INbGp;SjfsI:if ($options['skip_add_form']) {goto ed1Q2;}goto poIvX;b2bP2:oObek:goto a3bFF;YzZhC:$form = $event->getForm();goto cvDYb;iq43Y:$form->remove('customer_regist')->remove('login_check')->remove('amazon_login_email')->remove('amazon_login_password');goto b2bP2;a3bFF:goto Z0A33;goto On49g;cvDYb:if (!(!empty($data['Payment']) && $Payment->getId() != $data['Payment'])) {goto oObek;}goto iq43Y;bc91i:$data = $event->getData();goto YzZhC;LuECd:$options = $event->getForm()->getConfig()->getOptions();goto SjfsI;INbGp:return;goto GUpzj;GUpzj:Z0A33:goto rdOX_;rdOX_:});goto TrKNi;hr1pU:$self = $this;goto pkqYO;TrKNi:}public function getExtendedType(){return OrderType::class;}}