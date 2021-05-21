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

/* public/base.html.twig */
class __TwigTemplate_0dd063c88d0d6141be6d11f4dc89ef7100c323bad9693026e791da792b3862af extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "public/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), "PTIT HCM")) : ("PTIT HCM")), "html", null, true);
    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ( !(isset($context["hide_menu"]) || array_key_exists("hide_menu", $context))) {
            // line 7
            echo "        ";
            $this->loadTemplate("public/menu.html.twig", "public/base.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "public/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/base.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/public/base.html.twig");
    }
}
