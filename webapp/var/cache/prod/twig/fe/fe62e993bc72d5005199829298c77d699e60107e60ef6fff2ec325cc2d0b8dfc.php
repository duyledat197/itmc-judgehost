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

/* partials/scoreboard_summary.html.twig */
class __TwigTemplate_7eabbba51568be3e439e349ab37f994792077f0339f2d7bbc540ac80de03929a extends \Twig\Template
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
        if ((null === ($context["limitToTeamIds"] ?? null))) {
            // line 2
            echo "    ";
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 3
                echo "        
\t<tr style=\"border-top: 2px solid black;\">
            ";
                // line 5
                $context["summaryColspan"] = 5;
                // line 6
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 7
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 8
                    echo "            ";
                }
                // line 9
                echo "            <td id=\"scoresummary\" title=\"Solved/Tries of each problem\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">Solved / Tries</td>
        
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 12
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 12), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    // line 13
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 14
                    $context["link"] = null;
                    // line 15
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 16
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 16)]);
                        // line 17
                        echo "                    ";
                    }
                    // line 18
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo " style = \"text-align: center\">
                        <!-- <i class=\"fas fa-thumbs-up fa-fw\"></i> -->
                        <span style=\"font-size:90%;\" title=\"number of accepted/tries submissions\">
                                ";
                    // line 21
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 21), ($context["sortOrder"] ?? null), [], "array", true, true, false, 21) &&  !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 21)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 21)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
\t\t\t\t/
\t\t\t\t";
                    // line 23
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 23), ($context["sortOrder"] ?? null), [], "array", true, true, false, 23) &&  !(null === (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 23)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 23)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>
                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        </tr>

\t<tr style=\"border-top: 1px solid silver;\">
            ";
                // line 32
                $context["summaryColspan"] = 5;
                // line 33
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 34
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "            <td id=\"scoresummary\" title=\"Pending of each problem\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">Pending</td>
        
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 39
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 39), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                    // line 40
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 41
                    $context["link"] = null;
                    // line 42
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 43
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 43)]);
                        // line 44
                        echo "                    ";
                    }
                    // line 45
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo " style = \"text-align: center\">

                        <span style=\"font-size:90%;\" title=\"number of pending submissions\">
                                ";
                    // line 48
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 48), ($context["sortOrder"] ?? null), [], "array", true, true, false, 48) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 48)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 48)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>

                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        </tr>

\t<tr style=\"border-top: 1px solid silver;\">
            ";
                // line 58
                $context["summaryColspan"] = 5;
                // line 59
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 60
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "            <td id=\"scoresummary\" title=\"First Solved in minutes of each problem\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">First Solved</td>
        
            ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 65
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 65), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                    // line 66
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 67
                    $context["link"] = null;
                    // line 68
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 69
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 69)]);
                        // line 70
                        echo "                    ";
                    }
                    // line 71
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo " style = \"text-align: center\">

                        <span style=\"font-size:90%;\" title=\"first solved\">
                            ";
                    // line 74
                    if ( !(null === twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 74))) {
                        // line 75
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 75), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 77
                        echo "                                n/a
                            ";
                    }
                    // line 79
                    echo "                        </span>

                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "        </tr>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 84,  245 => 79,  241 => 77,  235 => 75,  233 => 74,  222 => 71,  219 => 70,  216 => 69,  213 => 68,  211 => 67,  208 => 66,  205 => 65,  201 => 64,  195 => 62,  192 => 61,  189 => 60,  186 => 59,  184 => 58,  179 => 55,  166 => 48,  155 => 45,  152 => 44,  149 => 43,  146 => 42,  144 => 41,  141 => 40,  138 => 39,  134 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  117 => 32,  112 => 29,  100 => 23,  95 => 21,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  67 => 12,  63 => 11,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_summary.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/scoreboard_summary.html.twig");
    }
}
