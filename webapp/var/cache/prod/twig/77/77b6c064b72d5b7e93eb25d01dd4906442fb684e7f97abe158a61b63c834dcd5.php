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

/* jury/partials/balloon_list.html.twig */
class __TwigTemplate_ee3fe53c992a2c46b9c630ad75e489c76f4c3e7c94ed3fc40effe96f4ff03f5e extends \Twig\Template
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
        // line 3
        echo "
";
        // line 4
        if (twig_test_empty(($context["balloons"] ?? null))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No balloons</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["balloons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["balloon"]) {
                // line 25
                echo "            <tr class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 25), "done", [], "any", false, false, false, 25)) {
                    echo "disabled";
                }
                echo "\"
                data-affiliation-id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 26), "affiliationid", [], "any", false, false, false, 26), "html", null, true);
                echo "\"
                data-location-str=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 27), "location", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                <td>";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 29), "done", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "<i class=\"far fa-check-circle\"></i>";
                } else {
                    // line 32
                    echo "<i class=\"far fa-hourglass\"></i>";
                }
                // line 34
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 34), "balloonid", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35)), "html", null, true);
                echo "</td>
                <td><i style=\"color: ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "color", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"fas fa-golf-ball\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "problem", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 37), "team", [], "any", false, false, false, 37), 30), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 38), "affiliation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 39), "location", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["totalballoon"]) {
                    // line 43
                    echo "<i style=\"color: ";
                    echo twig_escape_filter($this->env, $context["totalballoon"], "html", null, true);
                    echo "\" class=\"fas fa-golf-ball\"></i>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalballoon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 46), "awards", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 48), "done", [], "any", false, false, false, 48)) {
                    // line 49
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons_setdone", ["balloonId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 49), "balloonid", [], "any", false, false, false, 49)]);
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>";
                }
                // line 55
                echo "</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['balloon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        </tbody>
    </table>

";
        }
    }

    public function getTemplateName()
    {
        return "jury/partials/balloon_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  153 => 55,  145 => 50,  143 => 49,  141 => 48,  137 => 46,  134 => 45,  126 => 43,  122 => 42,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  100 => 36,  96 => 35,  91 => 34,  88 => 32,  85 => 30,  83 => 29,  79 => 27,  75 => 26,  68 => 25,  64 => 24,  46 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/balloon_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/balloon_list.html.twig");
    }
}
