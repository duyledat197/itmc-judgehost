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

/* jury/print_result.html.twig */
class __TwigTemplate_07732f970551102f99791a08424f7c1348a4d54cbc61c62dc31316c0a45b35ec extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/print_result.html.twig", 1);
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
<div class=\"container\">
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
            echo "<div class=\"alert alert-success\">File has been printed</div>
";
        } else {
            // line 21
            echo "<div class=\"alert alert-danger\">Error while printing. Contact staff.</div>
";
        }
        // line 23
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "jury/print_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  89 => 21,  85 => 19,  83 => 18,  77 => 15,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/print_result.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/print_result.html.twig");
    }
}
