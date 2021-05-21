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

/* jury/judgehosts.html.twig */
class __TwigTemplate_f1d66f138b08de2bc998bd2850294fddc74e6ca30e55b0411336d7e7539232f5 extends \Twig\Template
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
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehosts.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehosts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Judgehosts - ";
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
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Judgehosts</h1>

    <div data-ajax-refresh-target>
        ";
        // line 16
        $this->loadTemplate("jury/partials/judgehost_list.html.twig", "jury/judgehosts.html.twig", 16)->display($context);
        // line 17
        echo "    </div>";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "
        <div class=\"mb-4\">
            <form action=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_activate_all");
            echo "\" method=\"post\" class=\"d-inline\">
                <button type=\"submit\" name=\"cmd-activate\" class=\"btn btn-success\">
                    <i class=\"fas fa-play\"></i>
                    Start all judgehosts
                </button>
            </form>
            <form action=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_deactivate_all");
            echo "\" method=\"post\" class=\"d-inline\">
                <button type=\"submit\" name=\"cmd-deactivate\" class=\"btn btn-warning\">
                    <i class=\"fas fa-pause\"></i>
                    Stop all judgehosts
                </button>
            </form>
            <div class=\"d-inline\">
                ";
            // line 35
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_edit"), "Edit judgehosts", "secondary", "edit");
            echo "
            </div>
        </div>";
        }
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/judgehosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  113 => 35,  103 => 28,  94 => 22,  90 => 20,  88 => 19,  86 => 17,  84 => 16,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/judgehosts.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/judgehosts.html.twig");
    }
}
