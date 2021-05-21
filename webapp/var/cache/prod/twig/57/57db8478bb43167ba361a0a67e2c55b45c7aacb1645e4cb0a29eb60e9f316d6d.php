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

/* jury/rejudgings.html.twig */
class __TwigTemplate_71e4249d6259863a8d3cee9a6593c3630e4c9af71bdaa18941ad928d170cfa84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudgings.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rejudgings - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Rejudgings</h1>

    ";
        // line 15
        if (twig_test_empty(($context["rejudgings"] ?? null))) {
            // line 16
            echo "        <div class=\"alert alert-warning\">No rejudgings defined</div>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_table", [($context["rejudgings"] ?? null), ($context["table_fields"] ?? null), 0], 18, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 20
        echo "
    <p>
        ";
        // line 22
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_add"), "Add new rejudging", "primary", "plus");
        echo "
    </p>

";
    }

    public function getTemplateName()
    {
        return "jury/rejudgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  95 => 20,  89 => 18,  85 => 16,  83 => 15,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudgings.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/rejudgings.html.twig");
    }
}
