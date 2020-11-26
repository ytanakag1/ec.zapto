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

/* @admin/Store/plugin_table_official.twig */
class __TwigTemplate_b313a6b4cae612c9fc845bda9f62ea7e95019b859b153418d279570cc5026580 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                message.text('削除が完了しました。');
                \$('#deleteLog').text(data.log);
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                progress.hide();
                \$('#deleteLogPane').show();
                footer.show().find('button').toggle();
            }
        );
    });
});
</script>
";
        // line 48
        if ((twig_length_filter($this->env, ($context["Plugins"] ?? null)) > 0)) {
            // line 49
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.905"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["Plugin"]) {
                // line 63
                echo "                ";
                $context["pluginDetail"] = ((twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", true, true, false, 63)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["officialPluginsDetail"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), null)) : (null));
                // line 64
                echo "                <tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 64) == false)) {
                    echo "active";
                }
                echo "\">
                    <td class=\"align-middle pl-3\">
                        <a href=\"#\" target=\"_blank\" class=\"plugin-image pr-3\">
                            <img height=\"60\" src=\"";
                // line 67
                echo twig_escape_filter($this->env, ((($context["pluginDetail"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "image", [], "any", false, false, false, 67)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
                echo "\" alt=\"\">
                        </a>
                        <span>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "</span>
                    </td>
                    <td class=\"align-middle\" style=\"width: 136px\">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 72), "html", null, true);
                echo "</p></td>
                    <td class=\"align-middle\">
                        ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "                                <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                        echo "</span>
                            ";
                    } else {
                        // line 78
                        echo "                                <span class=\"text-secondary\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 80
                    echo "                        ";
                }
                // line 81
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 83
                if (($context["pluginDetail"] ?? null)) {
                    // line 84
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "update_status", [], "any", false, false, false, 85) == 3)) {
                            // line 86
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_update_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                            echo "\"
                                       class=\"btn btn-ec-regular\">";
                            // line 87
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.916"), "html", null, true);
                            echo "</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">";
                            // line 89
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.917", ["%version%" => twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "version", [], "any", false, false, false, 89)]), "html", null, true);
                            echo "</li>
                                        <li class=\"plugin-version\">
                                            ";
                            // line 91
                            $context["versions"] = "";
                            // line 92
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "supported_versions", [], "any", false, false, false, 92));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                                // line 93
                                echo "                                                ";
                                $context["versions"] = (($context["versions"] ?? null) . $context["version"]);
                                // line 94
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 94) == false)) {
                                    $context["versions"] = (($context["versions"] ?? null) . ",");
                                }
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 96
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.918", ["%versions%" => ($context["versions"] ?? null)]), "html", null, true);
                            echo "
                                        </li>
                                        <li class=\"plugin-update\">";
                            // line 98
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.919", ["%update_date%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo(twig_get_attribute($this->env, $this->source, ($context["pluginDetail"] ?? null), "update_date", [], "any", false, false, false, 98))]), "html", null, true);
                            echo "</li>
                                    </ul>
                                ";
                        } else {
                            // line 101
                            echo "                                    <p class=\"mb-0\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.920"), "html", null, true);
                            echo "。</p>
                                ";
                        }
                        // line 103
                        echo "                            ";
                    } else {
                        // line 104
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, false, 104)]), "html", null, true);
                        echo "\" class=\"btn btn-ec-regular\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 106
                    echo "                        ";
                }
                // line 107
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                            <div class=\"col-12 col-xs-11 col-md-10 col-lg-8 pull-right text-center\">
                                <div class=\"row\">
                                    <div class=\"col-4 px-0\">
                                        ";
                    // line 113
                    if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 113) == false)) {
                        // line 114
                        echo "                                            <a href=\"#\"
                                               data-toggle=\"modal\"
                                               data-target=\"#officialPluginDeleteModal\"
                                               data-id=\"";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 117), "html", null, true);
                        echo "\"
                                               data-delete-url=\"";
                        // line 118
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_api_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                        echo "\"
                                               data-name=\"";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 119), "html", null, true);
                        echo "\"
                                               data-version=\"";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 120), "html", null, true);
                        echo "\"
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                        echo "\"></i>
                                            </a>

                                        ";
                    }
                    // line 126
                    echo "                                    </div>
                                    <div class=\"col-4 px-0\">
                                        ";
                    // line 128
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 128)) {
                        // line 129
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 133
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.925"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    } else {
                        // line 136
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 140
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.924"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    }
                    // line 143
                    echo "                                    </div>
                                    <div class=\"col-4 pl-0\">
                                        ";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 145), [], "array", true, true, false, 145)) {
                        // line 146
                        echo "                                            <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["configPages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 146)] ?? null) : null), "html", null, true);
                        echo "\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.906"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    }
                    // line 151
                    echo "                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 155
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 161
            if ((twig_length_filter($this->env, ($context["officialPluginsDetail"] ?? null)) == 0)) {
                // line 162
                echo "    <p class=\"ml-3\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.help"), "html", null, true);
                echo "</p>
    ";
            }
        } else {
            // line 165
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.923"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 171
        echo "
<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_table_official.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 195,  429 => 194,  414 => 182,  408 => 179,  398 => 171,  391 => 167,  387 => 165,  380 => 162,  378 => 161,  373 => 158,  365 => 155,  359 => 151,  353 => 148,  347 => 146,  345 => 145,  341 => 143,  335 => 140,  325 => 136,  319 => 133,  309 => 129,  307 => 128,  303 => 126,  296 => 122,  291 => 120,  287 => 119,  283 => 118,  279 => 117,  274 => 114,  272 => 113,  267 => 110,  265 => 109,  261 => 107,  258 => 106,  250 => 104,  247 => 103,  241 => 101,  235 => 98,  229 => 96,  213 => 94,  210 => 93,  192 => 92,  190 => 91,  185 => 89,  180 => 87,  175 => 86,  172 => 85,  169 => 84,  167 => 83,  163 => 81,  160 => 80,  154 => 78,  148 => 76,  145 => 75,  143 => 74,  138 => 72,  134 => 71,  129 => 69,  124 => 67,  115 => 64,  112 => 63,  108 => 62,  100 => 57,  96 => 56,  92 => 55,  88 => 54,  84 => 53,  78 => 49,  76 => 48,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_table_official.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Store/plugin_table_official.twig");
    }
}
