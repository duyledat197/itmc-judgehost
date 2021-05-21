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

/* jury/partials/rejudging_submissions.html.twig */
class __TwigTemplate_7e42a2bfc4f96d2e822ecca4909783151d4a64633966982af316c99097bdc85d extends \Twig\Template
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
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && ($context["ajax"] ?? null))) {
            // line 2
            echo "    <span class=\"d-none\" data-new-todo>
        ";
            // line 3
            echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
            echo "
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        ";
            // line 6
            $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/partials/rejudging_submissions.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        ";
            // line 9
            $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/partials/rejudging_submissions.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 13
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/rejudging_submissions.html.twig", 13)->display(twig_array_merge($context, ["showContest" => true]));
    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 10,  54 => 9,  50 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_submissions.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/rejudging_submissions.html.twig");
    }
}
