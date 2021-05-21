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

/* @!NelmioApiDoc/SwaggerUi/index.html.twig */
class __TwigTemplate_6cf3833e7d9b549900a0c2dffa0933532c55b2278f55c6192e849f69b2f83c8d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'swagger_data' => [$this, 'block_swagger_data'],
            'svg_icons' => [$this, 'block_svg_icons'],
            'header' => [$this, 'block_header'],
            'swagger_ui' => [$this, 'block_swagger_ui'],
            'javascripts' => [$this, 'block_javascripts'],
            'swagger_initialization' => [$this, 'block_swagger_initialization'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<!DOCTYPE html>
<html>
<head>
    ";
        // line 11
        $this->displayBlock('meta', $context, $blocks);
        // line 14
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('swagger_data', $context, $blocks);
        // line 25
        echo "</head>
<body>
    ";
        // line 27
        $this->displayBlock('svg_icons', $context, $blocks);
        // line 54
        echo "    <header>
        ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "    </header>

    ";
        // line 60
        $this->displayBlock('swagger_ui', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('swagger_initialization', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
    }

    // line 11
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <meta charset=\"UTF-8\">
    ";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["swagger_data"] ?? null), "spec", [], "any", false, false, false, 14), "info", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_swagger_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        // line 23
        echo "        <script id=\"swagger-data\" type=\"application/json\">";
        echo json_encode(($context["swagger_data"] ?? null), 65);
        echo "</script>
    ";
    }

    // line 27
    public function block_svg_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"position:absolute;width:0;height:0\">
            <defs>
                <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
                    <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 20 20\" id=\"locked\">
                    <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 20 20\" id=\"close\">
                    <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
                    <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
                    <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
                    <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
                </symbol>
                <symbol viewBox=\"0 0 24 24\" id=\"expand\">
                    <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
                </symbol>
            </defs>
        </svg>
    ";
    }

    // line 55
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "            <a id=\"logo\" href=\"https://github.com/nelmio/NelmioApiDocBundle\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/logo.png"), "html", null, true);
        echo "\" alt=\"NelmioApiDocBundle\"></a>
        ";
    }

    // line 60
    public function block_swagger_ui($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "        <div id=\"swagger-ui\" class=\"api-platform\"></div>
    ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 69
    public function block_swagger_initialization($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/init-swagger-ui.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@!NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 70,  212 => 69,  206 => 66,  201 => 65,  197 => 64,  192 => 61,  188 => 60,  181 => 56,  177 => 55,  148 => 28,  144 => 27,  137 => 23,  135 => 22,  131 => 21,  125 => 18,  120 => 17,  116 => 16,  109 => 14,  104 => 12,  100 => 11,  94 => 72,  92 => 69,  89 => 68,  87 => 64,  84 => 63,  82 => 60,  78 => 58,  76 => 55,  73 => 54,  71 => 27,  67 => 25,  65 => 21,  62 => 20,  60 => 16,  54 => 14,  52 => 11,  46 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@!NelmioApiDoc/SwaggerUi/index.html.twig", "/home/tncnhan/domjudge/domserver/lib/vendor/nelmio/api-doc-bundle/Resources/views/SwaggerUi/index.html.twig");
    }
}
