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

/* @admin/Setting/Shop/payment.twig */
class __TwigTemplate_4726da627bff30e8462dbba0f0cdd8825bfe0c9e5568ecf0f22db01cf3ecd0ef extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_payment"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/payment.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };

            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };

            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });

            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');

                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });

            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');

                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            ";
        // line 107
        echo "            // 表示・非表示
            \$('.check-display').click(function(){
                var id = \$(this).attr('id');
                if(\$('.display-show-toggle-' + id).hasClass('fa-eye')){
                    \$('.display-show-toggle-' + id).addClass('fa-eye-slash');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye');
                    \$('#' + id).css('background-color','#FAF1F1');
                }else{
                    \$('.display-show-toggle-' + id).addClass('fa-eye');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye-slash');
                    \$('#' + id).css('background-color','');
                }
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
    }

    // line 134
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 139
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                    <div class=\"col-auto\"><strong>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_id"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-2\"><strong>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-1\"><strong>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col\"><strong>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Payments"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Payment"]) {
            // line 154
            echo "                                <li id=\"ex-payment-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "sortNo", [], "any", false, false, false, 154), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                        <div class=\"col-auto d-flex align-items-center\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "</div>
                                        <div class=\"col-2 d-flex align-items-center\"><a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "method", [], "any", false, false, false, 158), "html", null, true);
            echo "</a></div>
                                        <div class=\"col-1 d-flex align-items-center\"><span>";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "charge", [], "any", false, false, false, 159)), "html", null, true);
            echo "</span></div>
                                        <div class=\"col d-flex align-items-center\">
                                        <span>
                                            ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", [], "any", false, false, false, 162) > 0)) {
                // line 163
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", [], "any", false, false, false, 163)), "html", null, true);
                echo "
                                            ";
            } else {
                // line 165
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                echo "
                                            ";
            }
            // line 167
            echo "
                                            ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", [], "any", false, false, false, 168) > 0)) {
                // line 169
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", [], "any", false, false, false, 169)), "html", null, true);
                echo "
                                            ";
            } elseif ((null === twig_get_attribute($this->env, $this->source,             // line 170
$context["Payment"], "rule_max", [], "any", false, false, false, 170))) {
                // line 171
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.unlimited"), "html", null, true);
                echo "
                                            ";
            }
            // line 173
            echo "                                        </span>
                                        </div>
                                        <div class=\"col-3 text-right\">
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-up";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 176)) ? (" disabled") : (""));
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-down";
            // line 179
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 179)) ? (" disabled") : (""));
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_visible", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 182)]), "html", null, true);
            echo "\"
                                               data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 183
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [], "any", false, false, false, 183)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\"
                                               data-confirm=\"false\" data-method=\"put\" ";
            // line 184
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " >
                                                <i class=\"fa fa-toggle-";
            // line 185
            echo ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [], "any", false, false, false, 185)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            </a>
                                            <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                   data-url=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\"
                                                   data-message=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Payment"], "method", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                        </ul>
                        <!-- 削除モーダル -->
                        <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title font-weight-bold\">
                                            ";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                        </h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-left\">
                                        <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                            ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                        </button>
                                        <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 220
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                           data-method=\"delete\" data-confirm=\"false\">
                                            ";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 230,  433 => 222,  428 => 220,  423 => 218,  409 => 207,  399 => 199,  377 => 191,  373 => 190,  368 => 188,  362 => 185,  358 => 184,  354 => 183,  350 => 182,  342 => 179,  334 => 176,  329 => 173,  321 => 171,  319 => 170,  312 => 169,  310 => 168,  307 => 167,  301 => 165,  295 => 163,  293 => 162,  287 => 159,  281 => 158,  277 => 157,  266 => 154,  249 => 153,  243 => 150,  239 => 149,  235 => 148,  231 => 147,  218 => 139,  212 => 135,  208 => 134,  179 => 107,  122 => 52,  97 => 30,  93 => 29,  89 => 28,  84 => 27,  80 => 26,  71 => 19,  67 => 18,  60 => 16,  53 => 15,  48 => 11,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/payment.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Setting/Shop/payment.twig");
    }
}
