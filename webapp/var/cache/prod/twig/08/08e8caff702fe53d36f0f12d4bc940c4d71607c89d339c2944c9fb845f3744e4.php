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

/* team/clarification.html.twig */
class __TwigTemplate_9185d41512f6c1dbbd59546a95e2b9ca5298a555eb069e62fa4e0cc7de6d7d45 extends \Twig\Template
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
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "View clarification - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center mt-4\">Clarification
    ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "senderId", [], "any", false, false, false, 7) == twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 7))) {
            echo "Request";
        }
        echo "</h1>

    ";
        // line 9
        $this->loadTemplate("team/partials/clarification_content.html.twig", "team/clarification.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"container clarificationform mt-3\">
    <button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
            aria-expanded=\"false\" aria-controls=\"collapsereplyform\">
        <i class=\"fa fa-reply\"></i> reply to this clarification
    </button>
    </div>

";
    }

    public function getTemplateName()
    {
        return "team/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  69 => 9,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/clarification.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/clarification.html.twig");
    }
}
