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

/* jury/partials/analysis_filter.html.twig */
class __TwigTemplate_72c2679d0f32726688ab8b84626a6470301b6013b4aa55421f253dc9d3abdd26 extends \Twig\Template
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
        echo "Filter:
<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 4
            echo "
        <label class=\"btn btn-secondary ";
            // line 5
            if (($context["key"] == ($context["view"] ?? null))) {
                echo "active";
            }
            echo "\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   ";
            // line 7
            if (($context["key"] == ($context["view"] ?? null))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/analysis_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  57 => 7,  53 => 6,  47 => 5,  44 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/analysis_filter.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/analysis_filter.html.twig");
    }
}
