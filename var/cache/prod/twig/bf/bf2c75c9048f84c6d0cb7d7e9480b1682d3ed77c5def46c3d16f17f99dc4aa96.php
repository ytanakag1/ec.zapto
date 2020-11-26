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

/* Shopping/index.twig */
class __TwigTemplate_33528bf42e955fd2c14a35d8d710a5be814ebaac42080aceab4b37300ed52ab4 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        \$(function() {
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
        echo "').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            ";
        // line 30
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 31
            echo "            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    var name = \$(this).text();
                    var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                    \$(form[index]).empty().append(input);
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    \$(hidden[index]).val(\$(form[index]).children('input').val());
                });

                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();

                \$.ajax({
                    url: \"";
            // line 60
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_customer");
            echo "\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }
                }).fail(function() {
                    alert('更新に失敗しました。入力内容を確認してください。');
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            ";
        }
        // line 95
        echo "        });
    </script>
";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 110
        $context["step"] = 1;
        // line 111
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 112
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 113
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 117
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 118
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 119
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 120
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 125
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 126
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 127
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 132
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 133
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 138
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 139
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        ";
        // line 147
        echo twig_include($this->env, $context, "Shopping/alert.twig");
        echo "
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 150
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_confirm");
        echo "\">
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 151), 'widget');
        echo "
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_to", [], "any", false, false, false, 152), 'widget');
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 159
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 160
            echo "                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
            echo "</button>
                        </div>
                    ";
        }
        // line 164
        echo "                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo "<span class=\"customer-edit customer-name01\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 165), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 165), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        <p class=\"ec-halfInput\"><span class=\"customer-edit customer-kana01\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 166), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-kana02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 166), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-company_name\">";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, false, 167), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-zipInput\">〒<span class=\"customer-edit customer-postal_code\">";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 168), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-pref\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 169), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 169), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 169), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-telInput\"><span class=\"customer-edit customer-phone_number\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 170), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-email\">";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 171), "html", null, true);
        echo "</span></p>
                    </div>
                    ";
        // line 173
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 174
            echo "                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前(カナ)"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK"), "html", null, true);
            echo "</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("キャンセル"), "html", null, true);
            echo "</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 267), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 268), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 269), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 270), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, false, 271), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 272), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 273), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 274), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 275), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 276), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 277), "html", null, true);
            echo "\">
                    ";
        }
        // line 279
        echo "                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shippings", [], "any", false, false, false, 284));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 285
            echo "                        ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 285);
            // line 286
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 287
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 287)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
                echo ")";
            }
            // line 288
            echo "                            <div class=\"ec-orderDelivery__change\">
                                ";
            // line 289
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 290
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 290), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 292
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 292), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 292)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            }
            // line 294
            echo "                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, false, 298));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 299
                echo "                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 301))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 301), "MainListImage", [], "any", false, false, false, 301)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 301), "html", null, true);
                echo "\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 303), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                                ";
                // line 304
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 304)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 304), "classCategory1", [], "any", false, false, false, 304))) {
                    // line 305
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 305), "classCategory1", [], "any", false, false, false, 305), "className", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 305), "classCategory1", [], "any", false, false, false, 305), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 307
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 307)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 307), "classCategory2", [], "any", false, false, false, 307))) {
                    // line 308
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 308), "classCategory2", [], "any", false, false, false, 308), "className", [], "any", false, false, false, 308), "name", [], "any", false, false, false, 308), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 308), "classCategory2", [], "any", false, false, false, 308), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 310
                echo "                                                <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, false, 310)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 310)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 310)), "html", null, true);
                echo "</span></p>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                            </ul>
                            <p>";
            // line 316
            ((($context["isShowReducedTaxMess"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, false, 319), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, false, 319), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, false, 319), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, false, 319), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                            <p>";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 320), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 320), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 320), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 320), "html", null, true);
            echo "</p>
                            <p>";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 321), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select\">
                                    <label>";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                    ";
            // line 327
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 327)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, false, 327), 'widget', ["attr" => ["class" => "form-control", "data-trigger" => "change"]]);
            echo "
                                    ";
            // line 328
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 328)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, false, 328), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>";
            // line 331
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                    ";
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 332)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, false, 332), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 333
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 333)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, false, 333), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                    ";
            // line 337
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 337)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, false, 337), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 338
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 338)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, false, 338), 'errors');
            echo "
                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "                    <div class=\"ec-orderDelivery__edit\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
        // line 344
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_multiple");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を追加する"), "html", null, true);
        echo "</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-radio\">
                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 352));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 353
            echo "                            <div style=\"display: block;\">
                                ";
            // line 354
            $context["Payment"] = twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 354), "vars", [], "any", false, false, false, 354), "choices", [], "any", false, false, false, 354)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["key"]] ?? null) : null), "data", [], "any", false, false, false, 354);
            // line 355
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["data-trigger" => "change"]]);
            echo "
                                ";
            // line 356
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, false, 356))) {
                // line 357
                echo "                                    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, false, 357), "save_image"), "html", null, true);
                echo "\"></p>
                                ";
            }
            // line 359
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                    </div>
                    <div class=\"ec-input ";
        // line 362
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 362))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 362), 'errors');
        echo "</div>
                </div>
                ";
        // line 364
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 364) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 364)))) {
            // line 365
            echo "                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"ec-input ";
            // line 369
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 369))) ? (" error") : (""));
            echo "\">
                            <p>";
            // line 370
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%point% pt が利用可能です。", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 370), "Point", [], "any", false, false, false, 370))]), "html", null, true);
            echo "</p>
                            ";
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 371), 'widget', ["attr" => ["type" => "text", "class" => "form-control", "data-trigger" => "change"]]);
            echo "
                            ";
            // line 372
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 372), 'errors');
            echo "
                        </div>
                    </div>
                ";
        }
        // line 376
        echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)"), "rows" => "6"]]);
        echo "
                        ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 382), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 390)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 394)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "deliveryFeeTotal", [], "any", false, false, false, 398)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 400
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 400) < 0)) {
            // line 401
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 402
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 403
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 403)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 406
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 406)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 407));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 408
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 409
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 410
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 413));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 414
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 414)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 415
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 416
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 416), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 417
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 417)), "html", null, true);
            echo "</dd>
                        </dl>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 420)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 421
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 421) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 421)))) {
            // line 422
            echo "                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 425
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "UsePoint", [], "any", false, false, false, 425)), "html", null, true);
            echo " pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                            <dd><span class=\"ec-font-bold\">";
            // line 429
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "AddPoint", [], "any", false, false, false, 429)), "html", null, true);
            echo " pt</span></dd>
                        </dl>
                    </div>
                    ";
        }
        // line 433
        echo "                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認する"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 435
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "Shopping/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1023 => 435,  1019 => 434,  1016 => 433,  1009 => 429,  1005 => 428,  999 => 425,  995 => 424,  991 => 422,  989 => 421,  980 => 420,  963 => 417,  959 => 416,  956 => 415,  951 => 414,  933 => 413,  924 => 410,  920 => 409,  917 => 408,  913 => 407,  904 => 406,  898 => 403,  894 => 402,  891 => 401,  889 => 400,  884 => 398,  880 => 397,  874 => 394,  870 => 393,  864 => 390,  860 => 389,  850 => 382,  846 => 381,  840 => 378,  836 => 376,  829 => 372,  825 => 371,  821 => 370,  817 => 369,  812 => 367,  808 => 365,  806 => 364,  799 => 362,  796 => 361,  789 => 359,  783 => 357,  781 => 356,  776 => 355,  774 => 354,  771 => 353,  767 => 352,  761 => 349,  751 => 344,  748 => 343,  729 => 338,  725 => 337,  721 => 336,  715 => 333,  711 => 332,  707 => 331,  701 => 328,  697 => 327,  693 => 326,  685 => 321,  676 => 320,  663 => 319,  657 => 316,  654 => 315,  637 => 310,  629 => 308,  626 => 307,  618 => 305,  616 => 304,  608 => 303,  601 => 301,  597 => 299,  593 => 298,  587 => 294,  577 => 292,  567 => 290,  565 => 289,  562 => 288,  554 => 287,  551 => 286,  548 => 285,  531 => 284,  526 => 282,  521 => 279,  516 => 277,  512 => 276,  508 => 275,  504 => 274,  500 => 273,  496 => 272,  492 => 271,  488 => 270,  484 => 269,  480 => 268,  476 => 267,  471 => 265,  467 => 264,  454 => 254,  450 => 253,  437 => 243,  433 => 242,  413 => 225,  406 => 221,  398 => 216,  391 => 212,  387 => 211,  374 => 201,  360 => 190,  356 => 189,  342 => 178,  338 => 177,  333 => 174,  331 => 173,  326 => 171,  322 => 170,  314 => 169,  310 => 168,  306 => 167,  300 => 166,  290 => 165,  287 => 164,  281 => 161,  278 => 160,  276 => 159,  271 => 157,  263 => 152,  259 => 151,  255 => 150,  249 => 147,  239 => 140,  236 => 139,  233 => 138,  226 => 134,  223 => 133,  220 => 132,  213 => 128,  210 => 127,  207 => 126,  204 => 125,  197 => 121,  194 => 120,  191 => 119,  188 => 118,  186 => 117,  180 => 114,  177 => 113,  174 => 112,  171 => 111,  169 => 110,  159 => 103,  154 => 100,  150 => 99,  144 => 95,  106 => 60,  75 => 31,  73 => 30,  61 => 21,  54 => 16,  50 => 15,  45 => 11,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/index.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/default/Shopping/index.twig");
    }
}
