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

/* @admin/Setting/Shop/delivery.twig */
class __TwigTemplate_61495cb4ec9a7183f8e3e251645aebb61565287abe3bd312bc8e21ae6c9bd772 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/delivery.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
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
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_sort_no_move");
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

    // line 101
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "    <form name=\"form1\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0\">
                                <ul class=\"list-group list-group-flush sortable-container\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                            <div class=\"col-auto\"><strong>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-2\"><strong>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</strong></div>
                                        </div>
                                    </li>
                                    ";
        // line 120
        if ((twig_length_filter($this->env, ($context["Deliveries"] ?? null)) > 0)) {
            // line 121
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Deliveries"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Delivery"]) {
                // line 122
                echo "                                            <li id=\"ex-delivery-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "sortNo", [], "any", false, false, false, 122), "html", null, true);
                echo "\">
                                                <div class=\"row justify-content-around\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo "</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\">
                                                            ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "name", [], "any", false, false, false, 128), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Delivery"], "service_name", [], "any", false, false, false, 128), "html", null, true);
                echo "
                                                        </a>
                                                    </div>
                                                    <div class=\"col-auto text-right\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-up ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 132)) {
                    echo "disabled";
                }
                echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-down ";
                // line 135
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 135)) {
                    echo "disabled";
                }
                echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_visibility", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, false, 138)]), "html", null, true);
                echo "\"
                                                           data-tooltip=\"true\" data-placement=\"top\" title=\"";
                // line 139
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Delivery"], "visible", [], "any", false, false, false, 139)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
                echo "\"
                                                           data-confirm=\"false\" data-method=\"put\" ";
                // line 140
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " >
                                                            <i class=\"fa fa-toggle-";
                // line 141
                echo ((twig_get_attribute($this->env, $this->source, $context["Delivery"], "visible", [], "any", false, false, false, 141)) ? ("on") : ("off"));
                echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                               data-url=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "Id", [], "any", false, false, false, 146)]), "html", null, true);
                echo "\"
                                                               data-message=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "name", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg\"></i>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Delivery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                    ";
        }
        // line 156
        echo "                                </ul>
                                <!-- 削除モーダル -->
                                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title font-weight-bold\">
                                                    ";
        // line 164
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
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                                </button>
                                                <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 177
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                                   data-method=\"delete\" data-confirm=\"false\">
                                                    ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/delivery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 188,  358 => 179,  353 => 177,  348 => 175,  334 => 164,  324 => 156,  321 => 155,  299 => 147,  295 => 146,  290 => 144,  284 => 141,  280 => 140,  276 => 139,  272 => 138,  262 => 135,  252 => 132,  243 => 128,  239 => 127,  234 => 125,  223 => 122,  205 => 121,  203 => 120,  197 => 117,  193 => 116,  179 => 107,  172 => 102,  168 => 101,  105 => 41,  83 => 22,  79 => 21,  75 => 20,  70 => 19,  66 => 18,  59 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/delivery.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Setting/Shop/delivery.twig");
    }
}
