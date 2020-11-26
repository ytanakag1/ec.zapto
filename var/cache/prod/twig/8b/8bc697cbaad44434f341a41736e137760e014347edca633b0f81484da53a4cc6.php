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

/* @admin/Store/plugin_table.twig */
class __TwigTemplate_3b57e16bff470106f4130a12e1f15a5990484684b6a70ca1fd7e6d8dc40917b6 extends \Eccube\Twig\Template
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
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
";
        // line 19
        if ((twig_length_filter($this->env, ($context["Plugins"] ?? null)) > 0)) {
            // line 20
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.887"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.888"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.889"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.890"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 34
                echo "                ";
                $context["form"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["plugin_forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 34)] ?? null) : null);
                // line 35
                echo "                <form id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 37) == false)) {
                    echo "active";
                }
                echo "\">
                        <td class=\"align-middle pl-3\">
                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        </td>
                        <td class=\"align-middle\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                        <td class=\"align-middle\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 42), "html", null, true);
                echo "
                            ";
                // line 44
                echo "                            ";
                // line 50
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                                <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 55
                    echo "                                <span class=\"text-secondary\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, false, 59) == 0)) {
                    // line 60
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 60), 'widget');
                    echo "
                                ";
                    // line 61
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_id", [], "any", false, false, false, 61), 'widget');
                    echo "
                                ";
                    // line 62
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_archive", [], "any", false, false, false, 62), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
                    echo "
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_archive", [], "any", false, false, false, 63), 'errors');
                    echo "

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "');\">
                                    ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.898"), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 70
                echo "                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 pull-right text-center\">
                                <div class=\"row\">
                                        ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 74) == false)) {
                    // line 75
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-toggle=\"modal\"
                                               data-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 84
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.903"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                } else {
                    // line 93
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.902"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 101
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 101), [], "array", true, true, false, 101)) {
                    // line 102
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href='";
                    // line 103
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["configPages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 103)] ?? null) : null), "html", null, true);
                    echo "'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.891"), "html", null, true);
                    echo "\"></i></a>
                                        </div>
                                        ";
                }
                // line 109
                echo "                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 119
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.900"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 125
        echo "
<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
                <button class=\"close\" type=\"button\"
                        data-dismiss=\"modal\"
                        aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">
                    ";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-dismiss=\"modal\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                </button>
                <a href=\"#\" ";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 151,  311 => 147,  306 => 145,  299 => 141,  288 => 133,  278 => 125,  271 => 121,  267 => 119,  261 => 115,  250 => 109,  244 => 106,  238 => 103,  235 => 102,  232 => 101,  225 => 97,  217 => 94,  214 => 93,  207 => 89,  199 => 86,  196 => 85,  193 => 84,  185 => 79,  179 => 75,  177 => 74,  171 => 70,  165 => 67,  159 => 66,  153 => 63,  149 => 62,  145 => 61,  140 => 60,  138 => 59,  134 => 57,  128 => 55,  122 => 53,  120 => 52,  116 => 50,  114 => 44,  110 => 42,  106 => 41,  101 => 39,  94 => 37,  86 => 35,  83 => 34,  79 => 33,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  49 => 20,  47 => 19,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_table.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Store/plugin_table.twig");
    }
}
