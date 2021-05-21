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

/* base.html.twig */
class __TwigTemplate_7dd96b950c9f0d9df581133ab0d7d2b3fd7c86ee444878d8b6de372853414135 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- DOMjudge version ";
        // line 4
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo " -->
    <meta charset=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["DJ_CHARACTER_SET"] ?? null), "html", null, true);
        echo "\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type = \"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/quicksand.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/domjudge.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 17
        $this->displayBlock('extrahead', $context, $blocks);
        // line 22
        echo "</head>
<body style=\"padding-top: 4.5rem\" class = \"responsiveBody\">
";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
<script>
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39)) {
            // line 40
            echo "        var domjudge_base_url = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "getBaseURL", [], "method", false, false, false, 40), "html", null, true);
            echo "\";
    ";
        }
        // line 42
        echo "    \$(function () {
        \$('body').on('change', '.custom-file-input', function () {
            var files = this.files;
            var fileNames = [];
            for (var i = 0; i < files.length; i++) {
                fileNames.push(files.item(i).name);
            }
            \$(this).next('.custom-file-label').html(fileNames.join(\", \"));
            \$(this).next('.custom-file-label').removeClass('text-muted');
        });

        /* toggle refresh if set */
        ";
        // line 54
        if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null))) {
            // line 55
            echo "        \$('#refresh-navitem').on('click', function () {
            toggleRefresh('";
            // line 56
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 56);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 56), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 56), 0)) : (0)), "html", null, true);
            echo ");
        });
        ";
        }
        // line 59
        echo "        /* Enable page refresh if set if wanted by the page, and wanted by the user */
        ";
        // line 60
        if ((((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null)) && ($context["refresh_flag"] ?? null))) {
            // line 61
            echo "        enableRefresh('";
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 61);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 61), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 61), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        // line 63
        echo "
        initializeAjaxModals();
    });
</script>
";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        $this->displayBlock('extrafooter', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PTIT HCM";
    }

    // line 17
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_domjudge.css"), "html", null, true);
        echo "\">

        ";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["extrahead"]) || array_key_exists("extrahead", $context))) ? (_twig_default_filter(($context["extrahead"] ?? null), "")) : ("")), "html", null, true);
        echo "
    ";
    }

    // line 24
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 32
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div>
        </div>
    </div>
";
    }

    // line 29
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "                ";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["body"] ?? null);
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 68
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 68,  243 => 67,  236 => 32,  232 => 31,  229 => 30,  225 => 29,  218 => 33,  215 => 32,  213 => 29,  208 => 26,  204 => 25,  198 => 24,  192 => 20,  186 => 18,  182 => 17,  175 => 6,  169 => 69,  167 => 68,  165 => 67,  159 => 63,  149 => 61,  147 => 60,  144 => 59,  134 => 56,  131 => 55,  129 => 54,  115 => 42,  109 => 40,  107 => 39,  103 => 37,  101 => 25,  99 => 24,  95 => 22,  93 => 17,  89 => 16,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/base.html.twig");
    }
}
