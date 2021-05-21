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

/* partials/javascript_language_detect.html.twig */
class __TwigTemplate_c7cf999b4f708e998f2328545faff90b778640419ebe411e7dabe319fb4f19b8 extends \Twig\Template
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
        // line 2
        echo "<script>
    function getMainExtension(ext) {
        switch (ext) {
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["submission_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["language"], "extensions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 7
                echo "            case '";
                echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                echo "':
                return '";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 8), "html", null, true);
                echo "';
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["submission_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["language"], "requireEntryPoint", [], "any", false, false, false, 19)) {
                // line 20
                echo "            case '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 20), "html", null, true);
                echo "':
                return '";
                // line 21
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", false, false, false, 21), "Entry point")) : ("Entry point")), "html", null, true);
                echo "';
                ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            default:
                return '';
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/javascript_language_detect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  96 => 23,  91 => 21,  86 => 20,  83 => 19,  79 => 18,  70 => 11,  64 => 10,  56 => 8,  51 => 7,  46 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/javascript_language_detect.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/javascript_language_detect.html.twig");
    }
}
