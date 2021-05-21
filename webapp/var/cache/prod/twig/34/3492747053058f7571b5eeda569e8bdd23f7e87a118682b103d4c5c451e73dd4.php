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

/* jury/refresh_scoreboard.html.twig */
class __TwigTemplate_bd7adddd60df44bd769916c63c410acfc1a16c9c1d595246a784ffc35c87be01 extends \Twig\Template
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
        echo "<div class=\"alert alert-warning\">
    <strong>Warning:</strong> Refresh scoreboard cache
    <hr>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
        echo "\" method=\"POST\">
        ";
        // line 6
        if ( !twig_test_empty(($context["current_contest"] ?? null))) {
            // line 7
            echo "            <input type=\"hidden\" name=\"cid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "cid", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
        ";
        }
        // line 9
        echo "        <input type=\"submit\" name=\"refresh\" value=\"Recalculate caches now\" class=\"btn btn-primary\"/>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/refresh_scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  52 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/refresh_scoreboard.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/refresh_scoreboard.html.twig");
    }
}
