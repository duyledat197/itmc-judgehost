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

/* team/submission.html.twig */
class __TwigTemplate_b232a539355df4bfd2e92c9f7da5bf965cc5b10d409d1bccf22c324ea4e62139 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/submission.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submission details - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <h1 class=\"text-center mt-4\">Submission details</h1>

    ";
        // line 10
        $this->loadTemplate("team/partials/submission.html.twig", "team/submission.html.twig", 10)->display($context);
    }

    public function getTemplateName()
    {
        return "team/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 8,  55 => 7,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/submission.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/submission.html.twig");
    }
}
