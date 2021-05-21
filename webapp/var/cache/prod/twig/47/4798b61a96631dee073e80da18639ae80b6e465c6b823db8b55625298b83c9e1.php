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

/* jury/partials/shadow_matrix.html.twig */
class __TwigTemplate_275cea49f9fc7839a20e9ec816bf6ba55b789dd7babccfaa593e11191b29347b extends \Twig\Template
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
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"external vs. local verdicts\">e\\l</th>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 6
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["verdict"], [], "array", true, true, false, 6)) {
                // line 7
                echo "                    <th title=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo " (local)\">";
                echo twig_escape_filter($this->env, $context["abbreviation"], "html", null, true);
                echo "</th>
                ";
            }
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </tr>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdictTable"] ?? null));
        foreach ($context['_seq'] as $context["externalVerdict"] => $context["localVerdicts"]) {
            // line 13
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["externalVerdict"], [], "array", true, true, false, 13)) {
                // line 14
                echo "                <tr>
                    <th title=\"";
                // line 15
                echo twig_escape_filter($this->env, $context["externalVerdict"], "html", null, true);
                echo " (external)\">";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["verdicts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["externalVerdict"]] ?? null) : null), "html", null, true);
                echo "</th>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["localVerdicts"]);
                foreach ($context['_seq'] as $context["localVerdict"] => $context["submitIds"]) {
                    // line 17
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["localVerdict"], [], "array", true, true, false, 17)) {
                        // line 18
                        echo "                            ";
                        $context["numSubmissions"] = twig_length_filter($this->env, $context["submitIds"]);
                        // line 19
                        echo "                            ";
                        $context["link"] = null;
                        // line 20
                        echo "                            ";
                        if (($context["externalVerdict"] == $context["localVerdict"])) {
                            // line 21
                            echo "                                ";
                            $context["class"] = "identical";
                            // line 22
                            echo "                            ";
                        } elseif ((($context["numSubmissions"] ?? null) == 0)) {
                            // line 23
                            echo "                                ";
                            $context["class"] = "zero";
                            // line 24
                            echo "                            ";
                        } else {
                            // line 25
                            echo "                                ";
                            $context["class"] = "changed";
                            // line 26
                            echo "                                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "all", "external" => $context["externalVerdict"], "local" => $context["localVerdict"]]);
                            // line 27
                            echo "                            ";
                        }
                        // line 28
                        echo "                            <td class=\"";
                        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                        echo "\">
                                ";
                        // line 29
                        if ( !(null === ($context["link"] ?? null))) {
                            // line 30
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 32
                            echo "                                    ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 34
                        echo "                            </td>
                        ";
                    }
                    // line 36
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['localVerdict'], $context['submitIds'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                </tr>
            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['externalVerdict'], $context['localVerdicts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/shadow_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 40,  156 => 39,  152 => 37,  146 => 36,  142 => 34,  136 => 32,  128 => 30,  126 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  84 => 16,  78 => 15,  75 => 14,  72 => 13,  68 => 12,  64 => 10,  58 => 9,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/shadow_matrix.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/shadow_matrix.html.twig");
    }
}
