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

/* jury/problem_add.html.twig */
class __TwigTemplate_8b841c92b13e98e65cffa1402ac99de1cf003e1c6347848731d648c3662be50e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add problem - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <h1>Add problem</h1>

    ";
        // line 10
        $this->loadTemplate("jury/partials/problem_form.html.twig", "jury/problem_add.html.twig", 10)->display($context);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/problem_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  67 => 10,  62 => 7,  58 => 6,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem_add.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/problem_add.html.twig");
    }
}
