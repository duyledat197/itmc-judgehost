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

/* jury/auditlog.html.twig */
class __TwigTemplate_568fb4799f2aad0f4469d32340275679e57374a082f9d5c2831c336336a4e9ce extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/auditlog.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/auditlog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Auditlog - ";
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
    <h1>Auditlog</h1>
    ";
        // line 14
        if ((($context["maxPages"] ?? null) > 1)) {
            // line 15
            echo "    <ul class=\"pagination pagination-sm\">
        <li class=\"page-item";
            // line 16
            echo (((($context["showAll"] ?? null) || (($context["thisPage"] ?? null) == 1))) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => ((((($context["thisPage"] ?? null) - 1) < 1)) ? (1) : ((($context["thisPage"] ?? null) - 1)))]), "html", null, true);
            echo "\">«</a>
        </li>

        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "        <li class=\"page-item";
                echo ((( !($context["showAll"] ?? null) && (($context["thisPage"] ?? null) == $context["i"]))) ? (" active") : (""));
                echo "\">
            <a class=\"page-link\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        <li class=\"page-item";
            // line 26
            echo (((($context["showAll"] ?? null) || (($context["thisPage"] ?? null) == ($context["maxPages"] ?? null)))) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => ((((($context["thisPage"] ?? null) + 1) <= ($context["maxPages"] ?? null))) ? ((($context["thisPage"] ?? null) + 1)) : (($context["thisPage"] ?? null)))]), "html", null, true);
            echo "\">»</a>
        </li>

        <li class=\"page-item";
            // line 30
            echo ((($context["showAll"] ?? null)) ? (" active") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["showAll" => true]);
            echo "\">show all</a>
        </li>
    </ul>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo twig_call_macro($macros["macros"], "macro_table", [($context["auditlog"] ?? null), ($context["table_fields"] ?? null), 0, ($context["table_options"] ?? null)], 36, $context, $this->getSourceContext());
        echo "

";
    }

    public function getTemplateName()
    {
        return "jury/auditlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 36,  141 => 35,  134 => 31,  130 => 30,  124 => 27,  120 => 26,  117 => 25,  106 => 22,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  84 => 15,  82 => 14,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/auditlog.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/auditlog.html.twig");
    }
}
