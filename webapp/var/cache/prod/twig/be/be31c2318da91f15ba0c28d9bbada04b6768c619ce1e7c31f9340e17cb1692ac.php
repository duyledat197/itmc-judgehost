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

/* jury/partials/rejudging_matrix.html.twig */
class __TwigTemplate_8f83d7085dd4fa60e5bade30ec5b833ae9c1354a7b8c6d04e54420687b946ffc extends \Twig\Template
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
        echo "<div class=\"mt-2\">
    <h2>Overview of changes</h2>
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"old vs. new verdicts\">-\\+</th>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 7
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["verdict"], [], "array", true, true, false, 7)) {
                // line 8
                echo "                    <th title=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo " (new)\">";
                echo twig_escape_filter($this->env, $context["abbreviation"], "html", null, true);
                echo "</th>
                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </tr>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdictTable"] ?? null));
        foreach ($context['_seq'] as $context["originalVerdict"] => $context["changedVerdicts"]) {
            // line 14
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["originalVerdict"], [], "array", true, true, false, 14)) {
                // line 15
                echo "                <tr>
                    <th title=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["originalVerdict"], "html", null, true);
                echo " (old)\">";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["verdicts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["originalVerdict"]] ?? null) : null), "html", null, true);
                echo "</th>
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["changedVerdicts"]);
                foreach ($context['_seq'] as $context["newVerdict"] => $context["submitIds"]) {
                    // line 18
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["newVerdict"], [], "array", true, true, false, 18)) {
                        // line 19
                        echo "                            ";
                        $context["numSubmissions"] = twig_length_filter($this->env, $context["submitIds"]);
                        // line 20
                        echo "                            ";
                        $context["link"] = null;
                        // line 21
                        echo "                            ";
                        if (($context["originalVerdict"] == $context["newVerdict"])) {
                            // line 22
                            echo "                                ";
                            $context["class"] = "identical";
                            // line 23
                            echo "                            ";
                        } elseif ((($context["numSubmissions"] ?? null) == 0)) {
                            // line 24
                            echo "                                ";
                            $context["class"] = "zero";
                            // line 25
                            echo "                            ";
                        } else {
                            // line 26
                            echo "                                ";
                            $context["class"] = "changed";
                            // line 27
                            echo "                                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 27), "view" => "all", "oldverdict" => $context["originalVerdict"], "newverdict" => $context["newVerdict"]]);
                            // line 28
                            echo "                            ";
                        }
                        // line 29
                        echo "                            <td class=\"";
                        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                        echo "\">
                                ";
                        // line 30
                        if ( !(null === ($context["link"] ?? null))) {
                            // line 31
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 33
                            echo "                                    ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 35
                        echo "                            </td>
                        ";
                    }
                    // line 37
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['newVerdict'], $context['submitIds'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </tr>
            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['originalVerdict'], $context['changedVerdicts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  157 => 40,  153 => 38,  147 => 37,  143 => 35,  137 => 33,  129 => 31,  127 => 30,  122 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  85 => 17,  79 => 16,  76 => 15,  73 => 14,  69 => 13,  65 => 11,  59 => 10,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_matrix.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/rejudging_matrix.html.twig");
    }
}
