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

/* @NelmioApiDoc/SwaggerUi/index.html.twig */
class __TwigTemplate_860478189b9ac8d2399b62e0c2db8b83bc941ca3cff37d73ff864d6e2f31acf9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@!NelmioApiDoc/SwaggerUi/index.html.twig", "@NelmioApiDoc/SwaggerUi/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    <a id=\"logo\" href=\"https://github.com/DOMjudge/domjudge\" target=\"_blank\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" alt=\"DOMjudge\">
    </a>
";
    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@NelmioApiDoc/SwaggerUi/index.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/bundles/NelmioApiDocBundle/SwaggerUi/index.html.twig");
    }
}
