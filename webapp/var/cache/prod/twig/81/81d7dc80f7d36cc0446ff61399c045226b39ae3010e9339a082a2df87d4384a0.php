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

/* jury/partials/clarification_list.html.twig */
class __TwigTemplate_d2335d99b095d9a7127ab418e2892f544d81322e055225b6a41ae45272d5c480 extends \Twig\Template
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
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        ";
        // line 6
        if (($context["showExternalId"] ?? null)) {
            // line 7
            echo "            <th scope=\"col\">external ID</th>
        ";
        }
        // line 9
        if ((twig_length_filter($this->env, ($context["current_contests"] ?? null)) > 1)) {
            // line 10
            echo "
            <th scope=\"col\">contest</th>";
        }
        // line 13
        echo "
        <th scope=\"col\">time</th>
        <th scope=\"col\">from</th>
        <th scope=\"col\">to</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        ";
        // line 22
        if ((twig_length_filter($this->env, ($context["queues"] ?? null)) > 1)) {
            // line 23
            echo "             <th scope=\"col\">queue</th>
        ";
        }
        // line 25
        echo "    </tr>
    </thead>
    <tbody>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clarifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 29
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification", ["id" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 29)]);
            // line 30
            echo "
        <tr>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
            ";
            // line 33
            if (($context["showExternalId"] ?? null)) {
                // line 34
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "externalid", [], "any", false, false, false, 34), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 36
            if ((twig_length_filter($this->env, ($context["current_contests"] ?? null)) > 1)) {
                // line 37
                echo "
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 38), "shortname", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td>";
            }
            // line 40
            echo "
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 41), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 41)), "html", null, true);
            echo "</a></td>";
            // line 42
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 42))) {
                // line 43
                $context["sender"] = "Jury";
                // line 44
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44))) {
                    // line 45
                    $context["recipient"] = "All";
                } else {
                    // line 47
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 47), "effectiveName", [], "any", false, false, false, 47);
                }
            } else {
                // line 50
                $context["recipient"] = "Jury";
                // line 51
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 51), "effectiveName", [], "any", false, false, false, 51);
            }
            // line 53
            echo "
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["sender"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["sender"] ?? null), 30), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["recipient"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["recipient"] ?? null), 30), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 57)) {
                // line 58
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 58), "contestProblems", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "shortname", [], "any", false, false, false, 58), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 59
$context["clarification"], "category", [], "any", false, false, false, 59)) {
                // line 60
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60), [], "array", true, true, false, 60)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60)] ?? null) : null), "general")) : ("general")), "html", null, true);
            } else {
                // line 62
                echo "general";
            }
            // line 64
            echo "</a></td>

            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 66), "html", null, true);
            echo "</a></td>";
            // line 67
            $context["claim"] = false;
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 68)) {
                // line 69
                $context["answered"] = "<i class=\"fas fa-check\" title=\"is answered\"></i>";
            } else {
                // line 71
                $context["answered"] = "<i class=\"fas fa-times\" title=\"not answered\"></i>";
                // line 72
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 72))) {
                    // line 73
                    $context["claim"] = "yes";
                } else {
                    // line 75
                    $context["answered"] = "<i class=\"fas fa-user-lock\" title=\"claimed\"></i>";
                }
            }
            // line 78
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 78))) {
                // line 79
                $context["juryMember"] = "&nbsp;";
            } else {
                // line 81
                $context["juryMember"] = twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 81);
            }
            // line 83
            echo "
            <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo ($context["answered"] ?? null);
            echo "</a></td>
            <td><form action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">";
            // line 86
            if ((($context["claim"] ?? null) && twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 86))) {
                // line 87
                echo "<button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 89
$context["clarification"], "answered", [], "any", false, false, false, 89) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89) == ($context["juryMember"] ?? null)))) {
                // line 90
                echo "                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>";
            } else {
                // line 93
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["juryMember"] ?? null);
                echo "</a>";
            }
            // line 95
            echo "</form>
            </td>
";
            // line 97
            if ((twig_length_filter($this->env, ($context["queues"] ?? null)) > 1)) {
                // line 98
                echo "            <td data-search=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 98), [], "array", true, true, false, 98)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["queues"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 98)] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 100), "html", null, true);
                echo "\"><i class=\"fab fa-quora\"></i></div></div>
                 ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["queues"] ?? null));
                foreach ($context['_seq'] as $context["qk"] => $context["qv"]) {
                    // line 102
                    echo "                 <label class=\"btn btn-sm btn-outline-secondary";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 102))) {
                        echo " active";
                    }
                    echo "\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 103), "html", null, true);
                    echo "]\" data-clarid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 103), "html", null, true);
                    echo "\" id=\"q_";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" autocomplete=\"off\"";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 103))) {
                        echo " checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["qv"], "html", null, true);
                    echo "
                 </label>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['qk'], $context['qv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "            </div>
            </td>
";
            }
            // line 109
            echo "        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    </tbody>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 111,  293 => 109,  288 => 106,  267 => 103,  260 => 102,  256 => 101,  252 => 100,  246 => 98,  244 => 97,  240 => 95,  233 => 93,  229 => 90,  227 => 89,  224 => 87,  222 => 86,  219 => 85,  213 => 84,  210 => 83,  207 => 81,  204 => 79,  202 => 78,  198 => 75,  195 => 73,  193 => 72,  191 => 71,  188 => 69,  186 => 68,  184 => 67,  179 => 66,  175 => 64,  172 => 62,  169 => 60,  167 => 59,  164 => 58,  162 => 57,  159 => 56,  151 => 55,  143 => 54,  140 => 53,  137 => 51,  135 => 50,  131 => 47,  128 => 45,  126 => 44,  124 => 43,  122 => 42,  117 => 41,  114 => 40,  108 => 38,  105 => 37,  103 => 36,  95 => 34,  93 => 33,  87 => 32,  83 => 30,  81 => 29,  77 => 28,  73 => 25,  69 => 23,  67 => 22,  56 => 13,  52 => 10,  50 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/clarification_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/clarification_list.html.twig");
    }
}
