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

/* team/partials/clarification_list.html.twig */
class __TwigTemplate_d3333fa8bde87f73b1ed9f30eecbd5678a300a2d646ada0d8b26a395080d2721 extends \Twig\Template
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
        echo "<div class=\"table-wrapper\">
    <table class=\"data-table table table-striped table-hover table-sm\" style=\"width:100%;\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">from</th>
            <th scope=\"col\">to</th>
            <th scope=\"col\">subject</th>
            <th scope=\"col\">text</th>
        </tr>
        </thead>
        <tbody>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clarifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 14
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 14)]);
            // line 15
            echo "
            <tr class=\"";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "unreadClarifications", [], "any", false, false, false, 16), "contains", [0 => $context["clarification"]], "method", false, false, false, 16)) {
                echo "unseen";
            }
            echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 19), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 19)), "html", null, true);
            echo "
                    </a>
                </td>";
            // line 22
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 22))) {
                // line 23
                $context["sender"] = "Jury";
                // line 24
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 24))) {
                    // line 25
                    $context["recipient"] = "All";
                } else {
                    // line 27
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 27), "effectiveName", [], "any", false, false, false, 27);
                }
            } else {
                // line 30
                $context["recipient"] = "Jury";
                // line 31
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 31), "effectiveName", [], "any", false, false, false, 31);
            }
            // line 33
            echo "
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["sender"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["sender"] ?? null), 30), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["recipient"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["recipient"] ?? null), 30), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 46)) {
                // line 47
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 47), "contestProblems", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), "shortname", [], "any", false, false, false, 47), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 48
$context["clarification"], "category", [], "any", false, false, false, 48)) {
                // line 49
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49), [], "array", true, true, false, 49)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49)] ?? null) : null), "general")) : ("general")), "html", null, true);
            } else {
                // line 51
                echo "general";
            }
            // line 53
            echo "</a>
                </td>

                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 58), "html", null, true);
            echo "
                    </a>
                </td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "team/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 63,  149 => 58,  145 => 57,  139 => 53,  136 => 51,  133 => 49,  131 => 48,  128 => 47,  126 => 46,  123 => 45,  116 => 41,  110 => 40,  103 => 36,  97 => 35,  93 => 33,  90 => 31,  88 => 30,  84 => 27,  81 => 25,  79 => 24,  77 => 23,  75 => 22,  70 => 19,  66 => 18,  59 => 16,  56 => 15,  54 => 14,  50 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/clarification_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/partials/clarification_list.html.twig");
    }
}
