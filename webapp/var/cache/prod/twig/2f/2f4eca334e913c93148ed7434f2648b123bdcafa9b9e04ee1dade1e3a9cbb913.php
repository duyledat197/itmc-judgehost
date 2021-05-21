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

/* team/clarification_modal.html.twig */
class __TwigTemplate_cda6295fd0c857acc1e4368bbcb21bc04f02b0b0675302e7fe091790de48675c extends \Twig\Template
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
            'extraButton' => [$this, 'block_extraButton'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/modal.html.twig", "team/clarification_modal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "senderId", [], "any", false, false, false, 4) == twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 4))) {
            // line 5
            echo "Clarification Request
";
        } else {
            // line 7
            echo "View clarification
";
        }
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->loadTemplate("team/partials/clarification_content.html.twig", "team/clarification_modal.html.twig", 12)->display($context);
    }

    // line 14
    public function block_extraButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <button class=\"btn btn-secondary\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
                aria-expanded=\"false\" aria-controls=\"collapsereplyform\">
            <i class=\"fa fa-reply\"></i> reply to this clarification
        </button>
";
    }

    public function getTemplateName()
    {
        return "team/clarification_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  73 => 14,  68 => 12,  64 => 11,  58 => 7,  54 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/clarification_modal.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/clarification_modal.html.twig");
    }
}
