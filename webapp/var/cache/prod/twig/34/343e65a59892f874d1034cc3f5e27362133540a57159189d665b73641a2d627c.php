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

/* jury/partials/judgehost_list.html.twig */
class __TwigTemplate_6019e0acf99d82f69d133c24ecc3d561bfd31f198c815252ada243c41f281900 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/judgehost_list.html.twig", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["macros"], "macro_table", [($context["judgehosts"] ?? null), ($context["table_fields"] ?? null), ($context["num_actions"] ?? null), ["ordering" => "false"]], 2, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/partials/judgehost_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/judgehost_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/judgehost_list.html.twig");
    }
}
