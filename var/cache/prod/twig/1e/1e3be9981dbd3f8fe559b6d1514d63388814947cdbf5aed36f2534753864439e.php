<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Cart/index.twig */
class __TwigTemplate_bfb36705350cb880e1b9e1400d0e39c3176331b4b487990055ee33457b60ee33 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ショッピングカート"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 26
        $context["step"] = 1;
        // line 27
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 29
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 34
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 36
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 41
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 43
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 49
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 55
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
        ";
        // line 61
        $context["productStr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 61), "flashbag", [], "any", false, false, false, 61), "get", [0 => "eccube.front.request.product"], "method", false, false, false, 61);
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", [0 => "eccube.front.request.error"], "method", false, false, false, 62));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            echo "            ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63);
            // line 64
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                    <div class=\"ec-alert-warning__text\">
                        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["productStr"] ?? null), ($context["idx"] ?? null), [], "array", true, true, false, 68)) {
                // line 69
                echo "                            ";
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"], ["%product%" => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["productStr"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["idx"] ?? null)] ?? null) : null)]), "html", null, true));
                echo "
                        ";
            } else {
                // line 71
                echo "                            ";
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                echo "
                        ";
            }
            // line 73
            echo "                    </div>
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 77), "flashbag", [], "any", false, false, false, 77), "get", [0 => "eccube.front.cart.error"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 78
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                    <div class=\"ec-alert-warning__text\">
                        ";
            // line 82
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        ";
        if ((($context["totalQuantity"] ?? null) > 0)) {
            // line 88
            echo "            <div class=\"ec-cartRole__totalText\">
                <p>
                    ";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品の合計金額は「<strong>%price%</strong>」です。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["totalPrice"] ?? null))]);
            echo "
                </p>
            </div>
            ";
            // line 93
            if ((twig_length_filter($this->env, ($context["Carts"] ?? null)) > 1)) {
                // line 94
                echo "                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__text\">
                            ";
                // line 97
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同時購入できない商品がカートに含まれています。"), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 102
            echo "
            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"";
            // line 103
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">

                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 106
                echo "                    ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, false, 106);
                // line 107
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 107), "flashbag", [], "any", false, false, false, 107), "get", [0 => (("eccube.front.cart." . ($context["cartKey"] ?? null)) . ".request.error")], "method", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 108
                    echo "                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                <div class=\"ec-alert-warning__text\">
                                    ";
                    // line 112
                    echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                    echo "
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "
                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品内容"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
                echo "</li>
                            </ol>
                            ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 127
                    echo "                                ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, false, 127);
                    // line 128
                    echo "                                ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "Product", [], "any", false, false, false, 128);
                    // line 129
                    echo "                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "remove", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 137)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "MainListImage", [], "any", false, false, false, 138)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 138), "html", null, true);
                    echo "\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 143)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 143), "html", null, true);
                    echo "</a>
                                                ";
                    // line 144
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 144) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144))) {
                        // line 145
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 145), "ClassName", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 145), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 147
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 147) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147))) {
                        // line 148
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 148), "ClassName", [], "any", false, false, false, 148), "name", [], "any", false, false, false, 148), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 148), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 150
                    echo "                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">";
                    // line 151
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, false, 151)), "html", null, true);
                    echo "</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 152)), "html", null, true);
                    echo "</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">";
                    // line 156
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 156)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountSP\">";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 157)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            ";
                    // line 159
                    if ((twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 159) > 1)) {
                        // line 160
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "down", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, false, 160)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo " class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 161
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </a>
                                            ";
                    } else {
                        // line 164
                        echo "                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </div>
                                            ";
                    }
                    // line 168
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "up", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"";
                    // line 169
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
                    echo "\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 174)), "html", null, true);
                    echo "</div>
                                    </li>
                                </ul>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_amount", [], "any", false, false, false, 181) && twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_quantity", [], "any", false, false, false, 181))) {
                    // line 182
                    echo "                            <br/>
                            ";
                    // line 183
                    if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["is_delivery_free"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 184
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 186
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["least"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["cartKey"] ?? null)] ?? null) : null)), "%quantity%" => twig_number_format_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["quantity"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["cartKey"] ?? null)] ?? null) : null))]);
                        echo "
                            ";
                    }
                    // line 188
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_amount", [], "any", false, false, false, 188)) {
                    // line 189
                    echo "                            <br/>
                            ";
                    // line 190
                    if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["is_delivery_free"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 191
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 193
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["least"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["cartKey"] ?? null)] ?? null) : null))]);
                        echo "
                            ";
                    }
                    // line 195
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_quantity", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "                            <br/>
                            ";
                    // line 197
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["is_delivery_free"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 198
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 200
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%quantity%" => twig_number_format_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["quantity"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["cartKey"] ?? null)] ?? null) : null))]);
                        echo "
                            ";
                    }
                    // line 202
                    echo "                        ";
                }
                // line 203
                echo "                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">";
                // line 205
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計："), "html", null, true);
                echo "<span class=\"ec-cartRole__totalAmount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Cart"], "totalPrice", [], "any", false, false, false, 205)), "html", null, true);
                echo "</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("cart_buystep", ["cart_key" => ($context["cartKey"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("レジに進む"), "html", null, true);
                echo "</a>
                        ";
                // line 208
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 208)) {
                    // line 209
                    echo "                            <a class=\"ec-blockBtn--cancel\" href=\"";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 211
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "            </form>
        ";
        } else {
            // line 215
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 216
                echo "                ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, false, 216);
                // line 217
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 217), "flashbag", [], "any", false, false, false, 217), "get", [0 => (("eccube.front.cart." . ($context["cartKey"] ?? null)) . ".request.error")], "method", false, false, false, 217));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 218
                    echo "                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 220
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
                    // line 222
                    echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                    echo "
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 239
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "Cart/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 239,  643 => 233,  639 => 232,  633 => 228,  627 => 227,  616 => 222,  611 => 220,  607 => 218,  602 => 217,  599 => 216,  594 => 215,  590 => 213,  575 => 211,  567 => 209,  565 => 208,  559 => 207,  552 => 205,  548 => 203,  545 => 202,  539 => 200,  533 => 198,  531 => 197,  528 => 196,  525 => 195,  519 => 193,  513 => 191,  511 => 190,  508 => 189,  505 => 188,  499 => 186,  493 => 184,  491 => 183,  488 => 182,  486 => 181,  481 => 178,  471 => 174,  463 => 169,  456 => 168,  450 => 165,  447 => 164,  441 => 161,  434 => 160,  432 => 159,  426 => 157,  422 => 156,  414 => 152,  410 => 151,  407 => 150,  399 => 148,  396 => 147,  388 => 145,  386 => 144,  380 => 143,  370 => 138,  366 => 137,  358 => 132,  352 => 131,  348 => 129,  345 => 128,  342 => 127,  338 => 126,  333 => 124,  329 => 123,  325 => 122,  321 => 121,  315 => 117,  304 => 112,  299 => 110,  295 => 108,  290 => 107,  287 => 106,  270 => 105,  265 => 103,  262 => 102,  254 => 97,  249 => 94,  247 => 93,  241 => 90,  237 => 88,  234 => 87,  223 => 82,  218 => 80,  214 => 78,  209 => 77,  192 => 73,  186 => 71,  180 => 69,  178 => 68,  173 => 66,  169 => 64,  166 => 63,  148 => 62,  146 => 61,  138 => 56,  135 => 55,  132 => 54,  125 => 50,  122 => 49,  119 => 48,  112 => 44,  109 => 43,  106 => 42,  103 => 41,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  85 => 33,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  68 => 26,  58 => 19,  53 => 16,  49 => 15,  44 => 11,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Cart/index.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/default/Cart/index.twig");
    }
}
