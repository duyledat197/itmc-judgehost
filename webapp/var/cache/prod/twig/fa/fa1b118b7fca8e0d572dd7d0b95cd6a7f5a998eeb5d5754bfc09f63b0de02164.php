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

/* jury/export/results.html.twig */
class __TwigTemplate_a0ee94effcfd65ccb2f06271e3a049c6540b16fb139ab2138bc1f710f1e2583a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/export/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/export/layout.html.twig", "jury/export/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h2>Awards</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Place</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Award</th>
            <th scope=\"col\">Solved problems</th>
            <th scope=\"col\">Total time</th>
            <th scope=\"col\">Time of last submission</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["awarded"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "            <tr>
                <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "award", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "total_time", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "max_time", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

    <h2>Other ranked teams</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Rank</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Solved problems</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ranked"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "            <tr>
                <th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 42), "html", null, true);
            echo "</th>
                <th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <h2>Honorable mentions</h2>
    <table class=\"table\">
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["honorable"] ?? null), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 54
            echo "            <tr>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 56
                echo "                    <td>";
                echo twig_escape_filter($this->env, $context["team"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>

    <h2>Region winners</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Region</th>
            <th scope=\"col\">Team</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regionWinners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 73
            echo "            <tr>
                <th scope=\"row\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "group", [], "any", false, false, false, 74), "html", null, true);
            echo "</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>

    <h2>First to solve</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Problem</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Time</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["firstToSolve"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            echo "            <tr>
                <th scope=\"row\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "problem", [], "any", false, false, false, 93), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "problem_name", [], "any", false, false, false, 93), "html", null, true);
            echo "</th>
                <td>
                    ";
            // line 95
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 95))) {
                // line 96
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 96), "html", null, true);
                echo "
                    ";
            } else {
                // line 98
                echo "                        <i>Not solved</i>
                    ";
            }
            // line 100
            echo "                </td>
                <td>
                    ";
            // line 102
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 102))) {
                // line 103
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 103), "html", null, true);
                echo "
                    ";
            } else {
                // line 105
                echo "                        <i>-</i>
                    ";
            }
            // line 107
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "jury/export/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 110,  266 => 107,  262 => 105,  256 => 103,  254 => 102,  250 => 100,  246 => 98,  240 => 96,  238 => 95,  231 => 93,  228 => 92,  224 => 91,  209 => 78,  200 => 75,  196 => 74,  193 => 73,  189 => 72,  175 => 60,  168 => 58,  159 => 56,  155 => 55,  152 => 54,  148 => 53,  140 => 47,  131 => 44,  127 => 43,  123 => 42,  120 => 41,  116 => 40,  101 => 27,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/export/results.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/export/results.html.twig");
    }
}
