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

/* team/print_result.html.twig */
class __TwigTemplate_9b538b0614012a3f6d28ff234b5d9b1dc1d89234c9776c4a58589ae3aeffcb38 extends \Twig\Template
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
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/print_result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Print";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"container pt-5\">
        <h1 class=\"text-center\">Print source</h1>

        <pre class=\"output_text m-3\">
";
        // line 15
        echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
        echo "
</pre>

        ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-success\">File has been printed</div>
        ";
        } else {
            // line 21
            echo "            <div class=\"alert alert-danger\">Error while printing. Contact staff.</div>
        ";
        }
        // line 23
        echo "
        <a href=\"./\" class=\"btn btn-secondary mt-3\">Close</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "team/print_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  86 => 19,  84 => 18,  78 => 15,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/print_result.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/print_result.html.twig");
    }
}
