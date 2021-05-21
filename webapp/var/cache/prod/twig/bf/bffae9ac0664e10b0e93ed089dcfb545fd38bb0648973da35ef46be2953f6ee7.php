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

/* jury/team_affiliation_edit.html.twig */
class __TwigTemplate_584eddf3091480a05878eac71a2c347acb232ff6cd5104d104b839f241f35db9 extends \Twig\Template
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
        // line 5
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_affiliation_edit.html.twig", 5)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_affiliation_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit affiliation ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
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
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Edit affiliation ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        $this->loadTemplate("jury/partials/team_affiliation_form.html.twig", "jury/team_affiliation_edit.html.twig", 15)->display($context);
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/team_affiliation_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  88 => 15,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 3,  46 => 1,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team_affiliation_edit.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/team_affiliation_edit.html.twig");
    }
}
