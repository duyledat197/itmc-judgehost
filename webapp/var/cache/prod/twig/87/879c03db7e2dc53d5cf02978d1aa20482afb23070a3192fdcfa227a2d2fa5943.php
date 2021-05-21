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

/* partials/scoreboard_progress_bar.html.twig */
class __TwigTemplate_a986bc0dbe7b7a693de7c8d0b9d0c9ae718b85326756b54402d777554f64abf2 extends \Twig\Template
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
        if (((($context["contest"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 1), "stopped", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["percentage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 2), "progress", [], "any", false, false, false, 2);
            // line 3
            echo "    <div class=\"progress\" style=\"margin-top:";
            echo twig_escape_filter($this->env, (((isset($context["margin"]) || array_key_exists("margin", $context))) ? (_twig_default_filter(($context["margin"] ?? null), 0)) : (0)), "html", null, true);
            echo "px; height: 10px;\" data-progress-bar>
        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 4
            echo twig_escape_filter($this->env, ($context["percentage"] ?? null), "html", null, true);
            echo "%;\"
             aria-valuenow=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["percentage"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_progress_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_progress_bar.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/scoreboard_progress_bar.html.twig");
    }
}
