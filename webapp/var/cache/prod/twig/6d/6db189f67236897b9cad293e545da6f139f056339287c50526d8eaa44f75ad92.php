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

/* jury/partials/shadow_submissions.html.twig */
class __TwigTemplate_36ef91f537b3752b06ea897baa607f99c3dee52293c4551b599081d4da985b82 extends \Twig\Template
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
            echo "    <div class=\"d-none\" data-new-shadow-matrix>
        ";
            // line 3
            $this->loadTemplate("jury/partials/shadow_matrix.html.twig", "jury/partials/shadow_submissions.html.twig", 3)->display($context);
            // line 4
            echo "    </div>
";
        }
        // line 7
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/shadow_submissions.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "jury/partials/shadow_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/shadow_submissions.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/shadow_submissions.html.twig");
    }
}
