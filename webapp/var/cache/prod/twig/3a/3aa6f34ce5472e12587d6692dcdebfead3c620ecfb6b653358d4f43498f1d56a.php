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

/* jury/partials/judgehosts_form.html.twig */
class __TwigTemplate_db34c80983028eee8d70dc6fc415e78b3d7f40ce7bd770c0c85e60077918050d extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "judgehosts", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6), "hostname", [], "any", false, false, false, 6), 'label');
        echo "</th>
        <th>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "judgehosts", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "prototype", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), 'label');
        echo "</th>
        <th>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "judgehosts", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "prototype", [], "any", false, false, false, 8), "restriction", [], "any", false, false, false, 8), 'label');
        echo "</th>
    </tr>
    </thead>
    <tbody data-collection-holder>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "judgehosts", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
            // line 13
            echo "        <tr>
            <td style=\"width: 20%\">
                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 15), 'widget');
            echo "
            </td>
            <td style=\"width: 10%\">
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 18), 'widget');
            echo "
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 19), 'errors');
            echo "
            </td>
            <td>
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "restriction", [], "any", false, false, false, 22), 'widget');
            echo "
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "restriction", [], "any", false, false, false, 23), 'errors');
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>

";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 30), 'widget');
        echo "

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/partials/judgehosts_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  103 => 30,  98 => 27,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  68 => 15,  64 => 13,  60 => 12,  53 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/judgehosts_form.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/judgehosts_form.html.twig");
    }
}
