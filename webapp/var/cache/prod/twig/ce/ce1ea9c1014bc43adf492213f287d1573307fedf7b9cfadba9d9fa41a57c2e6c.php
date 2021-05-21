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

/* jury/contest_finalize.html.twig */
class __TwigTemplate_406750115c1efa122362d3696258efe374a078c5a85858a7ccd5ef24975316bc extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest_finalize.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest_finalize.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Finalize contest - ";
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
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <h1>Finalize contest</h1>

    ";
        // line 14
        if ( !twig_test_empty(($context["blockers"] ?? null))) {
            // line 15
            echo "        <div class=\"alert alert-danger\">
            <h5 class=\"alert-heading\">Contest can not yet be finalized</h5>
            <hr>
            <ul>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blockers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blocker"]) {
                // line 20
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["blocker"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blocker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </ul>
        </div>
    ";
        } else {
            // line 25
            echo "        <div class=\"col-md-5\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Contest ID</th>
                    <td>c";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Contest name</th>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Started</th>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttime", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Ended</th>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtime", [], "any", false, false, false, 41)), "html", null, true);
            echo "</td>
                </tr>
            </table>
        </div>

        ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "b", [], "any", false, false, false, 47), 'row');
            echo "
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "finalizecomment", [], "any", false, false, false, 48), 'row');
            echo "
        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "finalize", [], "any", false, false, false, 49), 'widget');
            echo "
        ";
            // line 50
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 50)]), "Cancel", "secondary");
            echo "
        ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 53
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/contest_finalize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 53,  160 => 51,  156 => 50,  152 => 49,  148 => 48,  144 => 47,  140 => 46,  132 => 41,  125 => 37,  118 => 33,  111 => 29,  105 => 25,  100 => 22,  91 => 20,  87 => 19,  81 => 15,  79 => 14,  74 => 11,  70 => 10,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contest_finalize.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/contest_finalize.html.twig");
    }
}
