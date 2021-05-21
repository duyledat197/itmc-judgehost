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

/* partials/scoreboard.html.twig */
class __TwigTemplate_9f940f3628e3c8da39d4e9a27ba693b495402a6251f954efbf35fc96af4a97a0 extends \Twig\Template
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
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if (((((isset($context["ajax"]) || array_key_exists("ajax", $context)) && ($context["ajax"] ?? null)) &&  !($context["static"] ?? null)) && ($context["public"] ?? null))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === ($context["current_contest"] ?? null))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 18
            if ((null === ($context["scoreboard"] ?? null))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["current_contest"] ?? null)), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 20), "showFinal", [0 => ($context["jury"] ?? null)], "method", false, false, false, 20)) {
                // line 21
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "finalizetime", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 24
                    echo "                        final standings
                    ";
                }
                // line 26
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 26), "stopped", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    contest over, waiting for results
                ";
            } else {
                // line 29
                echo "                    starts: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 29)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "endtime", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "            </span>
        </div>

        ";
            // line 34
            if (($context["static"] ?? null)) {
                // line 35
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 35)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    </div> ";
            // line 38
            echo "
    ";
            // line 39
            if (((null === ($context["scoreboard"] ?? null)) &&  !($context["jury"] ?? null))) {
                // line 40
                echo "        ";
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupedAffiliations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 42
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 45
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 46
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 50
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 51
                            $context["affiliationLogo"] = (("images/affiliations/" . twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 51)) . ".png");
                            // line 52
                            echo "                                        ";
                            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
                                // line 53
                                echo "                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"";
                                // line 54
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 54), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 55
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 55), "html", null, true);
                                echo "\">
                                        ";
                            }
                            // line 57
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 57), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                ";
                    if ((twig_length_filter($this->env, $context["affiliationGroupRow"]) < 3)) {
                        // line 65
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 66
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "    ";
            } else {
                // line 72
                echo "
        ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 73), "showFrozen", [0 => false], "method", false, false, false, 73)) {
                    // line 74
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 75
                    if (($context["jury"] ?? null)) {
                        // line 76
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 77
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 77), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 79
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 79), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 80), "html", null, true);
                        echo " minutes of the contest ";
                        if (($context["showPending"] ?? null)) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 82
                    echo "            </div>
        ";
                }
                // line 84
                echo "
        ";
                // line 85
                if (( !($context["static"] ?? null) && (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 86
($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 86)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 87
($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 87)) > 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 88
($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 88)) > 1)))) {
                    // line 89
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 93
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "                    Filter
                ";
                    } else {
                        // line 96
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 96), "html", null, true);
                        echo ")
                ";
                    }
                    // line 98
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        ";
                    // line 103
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 103)) > 1)) {
                        // line 104
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 105));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 106
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "affiliations", [], "any", false, false, false, 106))) {
                                echo "selected";
                            }
                            // line 107
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "                            </select>
                        ";
                    }
                    // line 111
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 111)) > 1)) {
                        // line 112
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 113
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 113));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 114
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "countries", [], "any", false, false, false, 114))) {
                                echo "selected";
                            }
                            // line 115
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["country"]] ?? null) : null), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 117
                        echo "                            </select>
                        ";
                    }
                    // line 119
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 119)) > 1)) {
                        // line 120
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 121
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 121));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 122
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "categories", [], "any", false, false, false, 122))) {
                                echo "selected";
                            }
                            // line 123
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        echo "                            </select>
                        ";
                    }
                    // line 127
                    echo "                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 133
                    echo " ";
                    // line 134
                    echo "            <br/>
        ";
                }
                // line 135
                echo " ";
                // line 136
                echo "
        ";
                // line 137
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 137)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 138
                echo "
    ";
            }
            // line 139
            echo " ";
            // line 140
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "%a %d %b %Y %T %Z"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 142,  417 => 140,  415 => 139,  411 => 138,  409 => 137,  406 => 136,  404 => 135,  400 => 134,  398 => 133,  389 => 127,  385 => 125,  374 => 123,  369 => 122,  365 => 121,  362 => 120,  359 => 119,  355 => 117,  344 => 115,  339 => 114,  335 => 113,  332 => 112,  329 => 111,  325 => 109,  314 => 107,  309 => 106,  305 => 105,  302 => 104,  300 => 103,  293 => 98,  287 => 96,  283 => 94,  281 => 93,  275 => 89,  273 => 88,  272 => 87,  271 => 86,  270 => 85,  267 => 84,  263 => 82,  252 => 80,  247 => 79,  242 => 77,  237 => 76,  235 => 75,  232 => 74,  230 => 73,  227 => 72,  224 => 71,  217 => 69,  214 => 68,  207 => 66,  202 => 65,  199 => 64,  190 => 60,  180 => 57,  175 => 55,  169 => 54,  166 => 53,  163 => 52,  161 => 51,  158 => 50,  154 => 49,  148 => 46,  145 => 45,  141 => 44,  137 => 42,  132 => 41,  130 => 40,  128 => 39,  125 => 38,  123 => 37,  120 => 36,  117 => 35,  115 => 34,  110 => 31,  102 => 29,  98 => 27,  95 => 26,  91 => 24,  87 => 22,  84 => 21,  82 => 20,  77 => 19,  75 => 18,  70 => 16,  66 => 14,  62 => 12,  60 => 11,  57 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/scoreboard.html.twig");
    }
}
