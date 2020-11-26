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

/* @admin/Store/plugin.twig */
class __TwigTemplate_2763b5ea0a9db53c0bc15a1a5224feb317f86a96805c05d0d4995ae6cc4353e4 extends \Eccube\Twig\Template
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
            'sheetsheet' => [$this, 'block_sheetsheet'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.809"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.810"), "html", null, true);
    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <script>
        function changeActionSubmit(action, form_name) {
            document.forms[form_name].action = action;
            document.forms[form_name].submit();
            return false;
        }
    </script>
";
    }

    // line 29
    public function block_sheetsheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <style type=\"text/css\">
        table a.plugin-image:hover {
            text-underline: none;
        }
    </style>
";
    }

    // line 37
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\"
                           class=\"btn btn-ec-regular mr-2 pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.811"), "html", null, true);
        echo "</a>
                        <h5 class=\"box-title mb-3\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.812"), "html", null, true);
        echo "</h5>
                    </div>
                    ";
        // line 47
        echo twig_include($this->env, $context, "@admin/Store/plugin_table_official.twig", ["Plugins" => ($context["officialPlugins"] ?? null)]);
        echo "

                </div>

                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <a href=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install");
        echo "\"
                           class=\"btn btn-ec-regular mr-2 pull-right\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.813"), "html", null, true);
        echo "</a>
                        <h5 class=\"box-title mb-3\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.814"), "html", null, true);
        echo "</h5>
                    </div>
                    ";
        // line 57
        echo twig_include($this->env, $context, "@admin/Store/plugin_table.twig", ["Plugins" => ($context["unofficialPlugins"] ?? null)]);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  136 => 55,  132 => 54,  128 => 53,  119 => 47,  114 => 45,  110 => 44,  106 => 43,  99 => 38,  95 => 37,  86 => 30,  82 => 29,  71 => 20,  67 => 19,  60 => 17,  53 => 16,  48 => 12,  46 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/admin/Store/plugin.twig");
    }
}
