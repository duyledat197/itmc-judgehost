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

/* partials/alert.html.twig */
class __TwigTemplate_3ac3a30d0d47013305ab91cd869835b9c87ec8df9b3950f57a2eafb3d7a0e519 extends \Twig\Template
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
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " alert-dismissible fade show\">
    ";
        // line 2
        echo ($context["message"] ?? null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/alert.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/alert.html.twig");
    }
}
