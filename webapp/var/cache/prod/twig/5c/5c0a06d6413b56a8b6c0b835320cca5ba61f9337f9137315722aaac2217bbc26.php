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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_6e78fe29f9f4e15c2ebafb1bd7dc9283ea126035019b26d3294248bd7f0a3a2d extends \Twig\Template
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
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context, $macros) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        echo "
";
        // line 22
        if ((($context["maxWidth"] ?? null) > 0)) {
            // line 23
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 25
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 29
        echo "
<table class=\"scoreboard center ";
        // line 30
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if (($context["showFlags"] ?? null)) {
            // line 36
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 38
            echo "            <col/>
        ";
        }
        // line 40
        echo "        ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 41
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 43
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 50
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 52
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </colgroup>

    ";
        // line 57
        $context["teamColspan"] = 2;
        // line 58
        echo "    ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 59
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">name</th>
        ";
        // line 67
        echo "\t<th title=\"solved\" scope=\"col\"> solve </th>
\t<th title=\"penalty time\" scope=\"col\"> time </th>
        ";
        // line 69
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 70
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 71
                echo "                ";
                $context["link"] = null;
                // line 72
                echo "                ";
                $context["target"] = "_self";
                // line 73
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 74
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 75
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 75)]);
                        // line 76
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 76), "problemtextType", [], "any", false, false, false, 76))) {
                        // line 77
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 78
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 78)]);
                            // line 79
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 80
                            echo "                        ";
                        } else {
                            // line 81
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 81)]);
                            // line 82
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 83
                            echo "                        ";
                        }
                        // line 84
                        echo "                    ";
                    }
                    // line 85
                    echo "                ";
                }
                // line 86
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 87
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 88), "html", null, true);
                echo "
                        ";
                // line 89
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 89))) {
                    // line 90
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 90), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 92
                echo "                        ";
                if (($context["showPoints"] ?? null)) {
                    // line 93
                    echo "                            <span class='problempoints'>
                                [";
                    // line 94
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 94) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 94), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 97
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        ";
        }
        // line 101
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 104
        $context["previousSortOrder"] =  -1;
        // line 105
        echo "    ";
        $context["previousTeam"] = null;
        // line 106
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 107
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 108
            echo "        ";
            $context["classes"] = [];
            // line 109
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 109), "category", [], "any", false, false, false, 109), "sortorder", [], "any", false, false, false, 109) != ($context["previousSortOrder"] ?? null))) {
                // line 110
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 111
                    echo "                ";
                    // line 112
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 112)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 113
                    echo "            ";
                }
                // line 114
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 115
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 115), "category", [], "any", false, false, false, 115), "sortorder", [], "any", false, false, false, 115);
                // line 116
                echo "            ";
                $context["previousTeam"] = null;
                // line 117
                echo "        ";
            }
            // line 118
            echo "
        ";
            // line 120
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 120), "teamid", [], "any", false, false, false, 120)))) {
                // line 121
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 122
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 123
                echo "        ";
            } else {
                // line 124
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "category", [], "any", false, false, false, 124), "color", [], "any", false, false, false, 124);
                // line 125
                echo "        ";
            }
            // line 126
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 126), "teamid", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 129
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 130
                echo "                    ?
                ";
            } elseif (((null ===             // line 131
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 131)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 131)] ?? null) : null), "rank", [], "any", false, false, false, 131) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 131)))) {
                // line 132
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 132), "html", null, true);
                echo "
                ";
            } else {
                // line 134
                echo "                ";
            }
            // line 135
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 135);
            // line 136
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 138
            if (($context["showFlags"] ?? null)) {
                // line 139
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 139), "affiliation", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                        ";
                    $context["link"] = null;
                    // line 141
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 142
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 142), "affilid", [], "any", false, false, false, 142)]);
                        // line 143
                        echo "                        ";
                    }
                    // line 144
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 145), "affiliation", [], "any", false, false, false, 145), "country", [], "any", false, false, false, 145)) {
                        // line 146
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146)) . ".png");
                        // line 147
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 148
                            echo "                                    <img loading=\"lazy\" class=\"countryflag\"
                                         src=\"";
                            // line 149
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 149), "affiliation", [], "any", false, false, false, 149), "country", [], "any", false, false, false, 149)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 150
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 150), "affiliation", [], "any", false, false, false, 150), "country", [], "any", false, false, false, 150)] ?? null) : null), "html", null, true);
                            echo "\">
                                ";
                        } else {
                            // line 152
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 152), "affiliation", [], "any", false, false, false, 152), "country", [], "any", false, false, false, 152)] ?? null) : null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 154
                        echo "                            ";
                    }
                    // line 155
                    echo "                        </a>
                    ";
                }
                // line 157
                echo "                ";
            }
            // line 158
            echo "            </td>
            ";
            // line 159
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 160
                echo "                <td class=\"scoreaf\">
                    ";
                // line 161
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 161), "affiliation", [], "any", false, false, false, 161)) {
                    // line 162
                    echo "                        ";
                    $context["link"] = null;
                    // line 163
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 164
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affilid", [], "any", false, false, false, 164)]);
                        // line 165
                        echo "                        ";
                    }
                    // line 166
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 167
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 167), "affiliation", [], "any", false, false, false, 167), "affilid", [], "any", false, false, false, 167);
                    // line 168
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 168), "affiliation", [], "any", false, false, false, 168))) {
                        // line 169
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 169), "affiliation", [], "any", false, false, false, 169), "externalid", [], "any", false, false, false, 169);
                        // line 170
                        echo "                            ";
                    }
                    // line 171
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 172
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 173
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 174
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 174), "affiliation", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 175
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 175), "affiliation", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 177
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 179
                    echo "                        </a>
                    ";
                }
                // line 181
                echo "                </td>
            ";
            }
            // line 183
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 184
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 185
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 186
                echo "            ";
            } else {
                // line 187
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 188
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 189
                echo "            ";
            }
            // line 190
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 190), "effectiveName", [], "any", false, false, false, 190), "html", null, true);
            echo "\">
                ";
            // line 191
            $context["link"] = null;
            // line 192
            echo "                ";
            $context["extra"] = null;
            // line 193
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 194
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 195
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 195), "teamid", [], "any", false, false, false, 195)]);
                    // line 196
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 197
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 197), "teamid", [], "any", false, false, false, 197)]);
                    // line 198
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 199
                    echo "                    ";
                } else {
                    // line 200
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 200), "teamid", [], "any", false, false, false, 200)]);
                    // line 201
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 202
                    echo "                    ";
                }
                // line 203
                echo "                ";
            }
            // line 204
            echo "                <a ";
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 206
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 206), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 206))) {
                // line 207
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 208), "category", [], "any", false, false, false, 208), "name", [], "any", false, false, false, 208), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 211
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "effectiveName", [], "any", false, false, false, 211), "html", null, true);
            echo "
                    </span>
                    ";
            // line 213
            if (($context["showAffiliations"] ?? null)) {
                // line 214
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 215), "affiliation", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 216), "affiliation", [], "any", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
                    echo "
                            ";
                }
                // line 218
                echo "                        </span>
                    ";
            }
            // line 220
            echo "                </a>
            </td>
            ";
            // line 222
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 222);
            // line 223
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 224
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 225
                echo "            ";
            }
            // line 226
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 226);
            // line 227
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 228
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>

            ";
            // line 230
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 231
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 232
                    echo "                    ";
                    // line 233
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 234
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 234)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 234), "teamid", [], "any", false, false, false, 234)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 234)] ?? null) : null);
                    // line 235
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 235)) {
                        // line 236
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 237
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 237), 1 => $context["problem"]], "method", false, false, false, 237)) {
                            // line 238
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 239
                            echo "                        ";
                        }
                        // line 240
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 240) > 0))) {
                        // line 241
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 242
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 242) > 0)) {
                        // line 243
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 244
                        echo "                    ";
                    }
                    // line 245
                    echo "
                    ";
                    // line 246
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 246);
                    // line 247
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 247) > 0))) {
                        // line 248
                        echo "                        ";
                        $context["numSubmissions"] = ((($context["numSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 248));
                        // line 249
                        echo "                    ";
                    }
                    // line 250
                    echo "
                    ";
                    // line 252
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 253
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 253)) {
                        // line 254
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 254);
                        // line 255
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 256
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 257
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 257) > 1)) {
                                // line 258
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 258))));
                                // line 259
                                echo "                            ";
                            }
                            // line 260
                            echo "                        ";
                        } else {
                            // line 261
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 262
                            echo "                        ";
                        }
                        // line 263
                        echo "                    ";
                    }
                    // line 264
                    echo "
                    ";
                    // line 265
                    $context["link"] = null;
                    // line 266
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 267
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 267)];
                        // line 268
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 268), "teamid", [], "any", false, false, false, 268), "restrict" => ($context["restrict"] ?? null)]);
                        // line 269
                        echo "                    ";
                    }
                    // line 270
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 272
                    if ((($context["numSubmissions"] ?? null) != "0")) {
                        // line 273
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 274
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 275
                        echo ($context["time"] ?? null);
                        echo "
                                    <span>
                                        ";
                        // line 277
                        if ((($context["numSubmissions"] ?? null) === 1)) {
                            // line 278
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 280
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 282
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 286
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "            ";
            }
            // line 289
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "
    ";
        // line 293
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 293)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 294
        echo "    </tbody>
</table>

";
        // line 297
        if (($context["showLegends"] ?? null)) {
            // line 298
            echo "    <p><br/><br/></p>

    ";
            // line 301
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 302
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 306
                $context["link"] = null;
                // line 307
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 308
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 309
                    echo "                    ";
                }
                // line 310
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 315), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 315), [], "array", true, true, false, 315); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 316
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 316)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 316), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 318
                    $context["link"] = null;
                    // line 319
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 320
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 320)]);
                        // line 321
                        echo "                        ";
                    }
                    // line 322
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 322), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "            </tbody>
        </table>
    ";
            }
            // line 329
            echo "
    ";
            // line 330
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 331
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 332
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 340
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
                        // line 341
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 342
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 345
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 350
        echo "<!--
<style>
    ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 353
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 354
            echo "
        .cl";
            // line 355
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 356
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 359
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 360
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 361
            echo "
        .cl";
            // line 362
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 364
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 365
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "</style>
-->
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1074 => 368,  1065 => 365,  1061 => 364,  1056 => 362,  1053 => 361,  1050 => 360,  1048 => 359,  1042 => 356,  1038 => 355,  1035 => 354,  1032 => 353,  1028 => 352,  1024 => 350,  1018 => 346,  1012 => 345,  1006 => 342,  1001 => 341,  998 => 340,  994 => 339,  981 => 332,  978 => 331,  976 => 330,  973 => 329,  968 => 326,  951 => 322,  948 => 321,  945 => 320,  942 => 319,  940 => 318,  930 => 316,  926 => 315,  913 => 310,  910 => 309,  907 => 308,  904 => 307,  902 => 306,  892 => 302,  889 => 301,  885 => 298,  883 => 297,  878 => 294,  875 => 293,  872 => 291,  857 => 289,  854 => 288,  847 => 286,  841 => 282,  835 => 280,  831 => 278,  829 => 277,  824 => 275,  820 => 274,  811 => 273,  809 => 272,  805 => 270,  802 => 269,  799 => 268,  796 => 267,  793 => 266,  791 => 265,  788 => 264,  785 => 263,  782 => 262,  779 => 261,  776 => 260,  773 => 259,  770 => 258,  767 => 257,  764 => 256,  761 => 255,  758 => 254,  755 => 253,  752 => 252,  749 => 250,  746 => 249,  743 => 248,  740 => 247,  738 => 246,  735 => 245,  732 => 244,  729 => 243,  726 => 242,  723 => 241,  720 => 240,  717 => 239,  714 => 238,  711 => 237,  708 => 236,  705 => 235,  702 => 234,  699 => 233,  697 => 232,  692 => 231,  690 => 230,  685 => 228,  680 => 227,  677 => 226,  674 => 225,  671 => 224,  668 => 223,  666 => 222,  662 => 220,  658 => 218,  652 => 216,  650 => 215,  647 => 214,  645 => 213,  639 => 211,  633 => 208,  630 => 207,  628 => 206,  614 => 204,  611 => 203,  608 => 202,  605 => 201,  602 => 200,  599 => 199,  596 => 198,  593 => 197,  590 => 196,  587 => 195,  584 => 194,  581 => 193,  578 => 192,  576 => 191,  569 => 190,  566 => 189,  563 => 188,  560 => 187,  557 => 186,  554 => 185,  551 => 184,  548 => 183,  544 => 181,  540 => 179,  534 => 177,  529 => 175,  523 => 174,  520 => 173,  517 => 172,  514 => 171,  511 => 170,  508 => 169,  505 => 168,  503 => 167,  494 => 166,  491 => 165,  488 => 164,  485 => 163,  482 => 162,  480 => 161,  477 => 160,  475 => 159,  472 => 158,  469 => 157,  465 => 155,  462 => 154,  456 => 152,  451 => 150,  445 => 149,  442 => 148,  439 => 147,  436 => 146,  434 => 145,  425 => 144,  422 => 143,  419 => 142,  416 => 141,  413 => 140,  410 => 139,  408 => 138,  404 => 136,  401 => 135,  398 => 134,  392 => 132,  390 => 131,  387 => 130,  384 => 129,  376 => 126,  373 => 125,  370 => 124,  367 => 123,  364 => 122,  361 => 121,  358 => 120,  355 => 118,  352 => 117,  349 => 116,  346 => 115,  343 => 114,  340 => 113,  337 => 112,  335 => 111,  332 => 110,  329 => 109,  326 => 108,  308 => 107,  305 => 106,  302 => 105,  300 => 104,  295 => 101,  292 => 100,  284 => 97,  273 => 94,  270 => 93,  267 => 92,  261 => 90,  259 => 89,  255 => 88,  245 => 87,  240 => 86,  237 => 85,  234 => 84,  231 => 83,  228 => 82,  225 => 81,  222 => 80,  219 => 79,  216 => 78,  213 => 77,  210 => 76,  207 => 75,  204 => 74,  201 => 73,  198 => 72,  195 => 71,  190 => 70,  188 => 69,  184 => 67,  180 => 65,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  159 => 55,  156 => 54,  149 => 52,  144 => 51,  142 => 50,  133 => 43,  129 => 41,  126 => 40,  122 => 38,  118 => 36,  116 => 35,  112 => 33,  105 => 30,  102 => 29,  95 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
