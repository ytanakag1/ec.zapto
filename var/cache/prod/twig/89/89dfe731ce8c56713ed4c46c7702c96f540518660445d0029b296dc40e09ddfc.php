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

/* Shopping/alert.twig */
class __TwigTemplate_ffa256f88b8a4917795dffc18f872ba27232291174ac3aff2fca5638205f926a extends \Eccube\Twig\Template
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
        // line 1
        if ( !(isset($context["error_only"]) || array_key_exists("error_only", $context))) {
            // line 2
            echo "    ";
            $context["error_only"] = false;
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 4), "flashbag", [], "any", false, false, false, 4), "get", [0 => "eccube.front.error"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
            <div class=\"ec-alert-warning__text\">
                ";
            // line 9
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
        // line 14
        if ((($context["error_only"] ?? null) == false)) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "flashbag", [], "any", false, false, false, 15), "get", [0 => "eccube.front.warning"], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                echo "\">
            </div>
            <div class=\"ec-alert-warning__text\">
                ";
                // line 21
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
        }
    }

    public function getTemplateName()
    {
        return "Shopping/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  77 => 18,  73 => 16,  69 => 15,  67 => 14,  56 => 9,  51 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/alert.twig", "/var/www/ec.zapto/src/Eccube/Resource/template/default/Shopping/alert.twig");
    }
}
