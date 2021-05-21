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

/* jury/contests.html.twig */
class __TwigTemplate_0868bb6d3433d95bd43f73eef5fe09a1f3dfe9510073712c10662ec620bf46fc extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contests.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contests.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contests - ";
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
        echo "    <h1>Contests</h1>

    <h3>Current contests</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["current_contests"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 17
            echo "        ";
            // line 18
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "shortname", [], "any", false, false, false, 24), "html", null, true);
            echo " - c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 24), "html", null, true);
            echo ")
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 27
            if (( !twig_get_attribute($this->env, $this->source, $context["contest"], "starttimeEnabled", [], "any", false, false, false, 27) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contest"], "finalizetime", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            ";
            }
            // line 32
            echo "                            <table class=\"table table-hover\">
                                <tbody>
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contest"], "juryTimeData", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                // line 35
                echo "                                    <tr>
                                        <td class=\"";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
                echo "\">
                                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", true, true, false, 37)) {
                    // line 38
                    echo "                                                <i class=\"fas fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 40
                echo "                                        </td>
                                        <td class=\"";
                // line 41
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 41), "html", null, true);
                echo ":</b></td>
                                        <td class=\"";
                // line 42
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "time", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                        ";
                // line 43
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 44
                    echo "                                            <td>
                                                ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "show_button", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 47
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo " now\"/>
                                                ";
                    }
                    // line 49
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", true, true, false, 49)) {
                        // line 50
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51), "html", null, true);
                        echo "]\"
                                                           value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 54
                    echo "                                            </td>
                                        ";
                }
                // line 56
                echo "                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        ";
            if (twig_test_empty(($context["upcoming_contest"] ?? null))) {
                // line 67
                echo "            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        ";
            } else {
                // line 71
                echo "            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "shortname", [], "any", false, false, false, 74), "html", null, true);
                echo ")</i>;
                    active from ";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "activatetime", [], "any", false, false, false, 75), "%a %d %b %Y %T %Z"), "html", null, true);
                echo "
                </p>
                <form action=\"";
                // line 77
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
                echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "cid", [], "any", false, false, false, 78), "html", null, true);
                echo "\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        ";
            }
            // line 83
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    <h3>All available contests</h3>

    ";
        // line 87
        echo twig_call_macro($macros["macros"], "macro_table", [($context["contests_table"] ?? null), ($context["table_fields"] ?? null), ($context["num_actions"] ?? null)], 87, $context, $this->getSourceContext());
        echo "

    ";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "        <p>
            ";
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_add"), "Add new contest", "primary", "plus");
            echo "
        </p>
    ";
        }
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 94,  273 => 91,  270 => 90,  268 => 89,  263 => 87,  258 => 84,  252 => 83,  244 => 78,  240 => 77,  235 => 75,  229 => 74,  224 => 71,  218 => 67,  215 => 66,  203 => 58,  196 => 56,  192 => 54,  187 => 52,  183 => 51,  180 => 50,  177 => 49,  170 => 47,  167 => 46,  165 => 45,  162 => 44,  160 => 43,  154 => 42,  148 => 41,  145 => 40,  139 => 38,  137 => 37,  133 => 36,  130 => 35,  126 => 34,  122 => 32,  116 => 28,  114 => 27,  104 => 24,  96 => 19,  91 => 18,  89 => 17,  84 => 16,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contests.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/contests.html.twig");
    }
}
