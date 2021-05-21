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

/* partials/scoreboard_table.html.twig.save */
class __TwigTemplate_deee579c08caaa0cdf0ef9edab3f5272a5e5029c86c7ee98a074e24740d6139e extends \Twig\Template
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
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
\tborder-collapse: collapse
        ";
        // line 68
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 69
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 70
                echo "                ";
                $context["link"] = null;
                // line 71
                echo "                ";
                $context["target"] = "_self";
                // line 72
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 73
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 74
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 74)]);
                        // line 75
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 75), "problemtextType", [], "any", false, false, false, 75))) {
                        // line 76
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 77
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 77)]);
                            // line 78
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 79
                            echo "                        ";
                        } else {
                            // line 80
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 80)]);
                            // line 81
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 82
                            echo "                        ";
                        }
                        // line 83
                        echo "                    ";
                    }
                    // line 84
                    echo "                ";
                }
                // line 85
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 86
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 87), "html", null, true);
                echo "
                        ";
                // line 88
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 88))) {
                    // line 89
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 89), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 91
                echo "                        ";
                if (($context["showPoints"] ?? null)) {
                    // line 92
                    echo "                            <span class='problempoints'>
                                [";
                    // line 93
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 93) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 93), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 96
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
        }
        // line 100
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 103
        $context["previousSortOrder"] =  -1;
        // line 104
        echo "    ";
        $context["previousTeam"] = null;
        // line 105
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 106
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
            // line 107
            echo "        ";
            $context["classes"] = [];
            // line 108
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 108), "category", [], "any", false, false, false, 108), "sortorder", [], "any", false, false, false, 108) != ($context["previousSortOrder"] ?? null))) {
                // line 109
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 110
                    echo "                ";
                    // line 111
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig.save", 111)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 112
                    echo "            ";
                }
                // line 113
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 114
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 114), "category", [], "any", false, false, false, 114), "sortorder", [], "any", false, false, false, 114);
                // line 115
                echo "            ";
                $context["previousTeam"] = null;
                // line 116
                echo "        ";
            }
            // line 117
            echo "
        ";
            // line 119
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 119), "teamid", [], "any", false, false, false, 119)))) {
                // line 120
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 121
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 122
                echo "        ";
            } else {
                // line 123
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 123), "category", [], "any", false, false, false, 123), "color", [], "any", false, false, false, 123);
                // line 124
                echo "        ";
            }
            // line 125
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 125), "teamid", [], "any", false, false, false, 125), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 128
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 129
                echo "                    ?
                ";
            } elseif (((null ===             // line 130
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 130)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 130)] ?? null) : null), "rank", [], "any", false, false, false, 130) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 130)))) {
                // line 131
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 131), "html", null, true);
                echo "
                ";
            } else {
                // line 133
                echo "                ";
            }
            // line 134
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 134);
            // line 135
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 137
            if (($context["showFlags"] ?? null)) {
                // line 138
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 138), "affiliation", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                        ";
                    $context["link"] = null;
                    // line 140
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 141
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 141), "affilid", [], "any", false, false, false, 141)]);
                        // line 142
                        echo "                        ";
                    }
                    // line 143
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 144), "affiliation", [], "any", false, false, false, 144), "country", [], "any", false, false, false, 144)) {
                        // line 145
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 145), "affiliation", [], "any", false, false, false, 145), "country", [], "any", false, false, false, 145)) . ".png");
                        // line 146
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 147
                            echo "                                    <img loading=\"lazy\" class=\"countryflag\"
                                         src=\"";
                            // line 148
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 149
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 149), "affiliation", [], "any", false, false, false, 149), "country", [], "any", false, false, false, 149)] ?? null) : null), "html", null, true);
                            echo "\">
                                ";
                        } else {
                            // line 151
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 151), "affiliation", [], "any", false, false, false, 151), "country", [], "any", false, false, false, 151)] ?? null) : null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 153
                        echo "                            ";
                    }
                    // line 154
                    echo "                        </a>
                    ";
                }
                // line 156
                echo "                ";
            }
            // line 157
            echo "            </td>
            ";
            // line 158
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 159
                echo "                <td class=\"scoreaf\">
                    ";
                // line 160
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 160), "affiliation", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "                        ";
                    $context["link"] = null;
                    // line 162
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 163
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 163), "affilid", [], "any", false, false, false, 163)]);
                        // line 164
                        echo "                        ";
                    }
                    // line 165
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 166
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 166), "affiliation", [], "any", false, false, false, 166), "affilid", [], "any", false, false, false, 166);
                    // line 167
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 167), "affiliation", [], "any", false, false, false, 167))) {
                        // line 168
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 168), "affiliation", [], "any", false, false, false, 168), "externalid", [], "any", false, false, false, 168);
                        // line 169
                        echo "                            ";
                    }
                    // line 170
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 171
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 172
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 173
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 173), "affiliation", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 174
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 174), "affiliation", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 176
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 178
                    echo "                        </a>
                    ";
                }
                // line 180
                echo "                </td>
            ";
            }
            // line 182
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 183
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 184
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 185
                echo "            ";
            } else {
                // line 186
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 187
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 188
                echo "            ";
            }
            // line 189
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 189), "effectiveName", [], "any", false, false, false, 189), "html", null, true);
            echo "\">
                ";
            // line 190
            $context["link"] = null;
            // line 191
            echo "                ";
            $context["extra"] = null;
            // line 192
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 193
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 194
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 194), "teamid", [], "any", false, false, false, 194)]);
                    // line 195
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 196
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 196), "teamid", [], "any", false, false, false, 196)]);
                    // line 197
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 198
                    echo "                    ";
                } else {
                    // line 199
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 199), "teamid", [], "any", false, false, false, 199)]);
                    // line 200
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 201
                    echo "                    ";
                }
                // line 202
                echo "                ";
            }
            // line 203
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
            // line 205
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 205), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 205))) {
                // line 206
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 207), "category", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 210
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 210), "effectiveName", [], "any", false, false, false, 210), "html", null, true);
            echo "
                    </span>
                    ";
            // line 212
            if (($context["showAffiliations"] ?? null)) {
                // line 213
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 214
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 214), "affiliation", [], "any", false, false, false, 214)) {
                    // line 215
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 215), "affiliation", [], "any", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
                    echo "
                            ";
                }
                // line 217
                echo "                        </span>
                    ";
            }
            // line 219
            echo "                </a>
            </td>
            ";
            // line 221
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 221);
            // line 222
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 223
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 224
                echo "            ";
            }
            // line 225
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 225);
            // line 226
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 227
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>

            ";
            // line 229
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 230
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 231
                    echo "                    ";
                    // line 232
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 233
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 233)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 233), "teamid", [], "any", false, false, false, 233)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 233)] ?? null) : null);
                    // line 234
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 234)) {
                        // line 235
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 236
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 236), 1 => $context["problem"]], "method", false, false, false, 236)) {
                            // line 237
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 238
                            echo "                        ";
                        }
                        // line 239
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 239) > 0))) {
                        // line 240
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 241
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 241) > 0)) {
                        // line 242
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 243
                        echo "                    ";
                    }
                    // line 244
                    echo "
                    ";
                    // line 245
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 245);
                    // line 246
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 246) > 0))) {
                        // line 247
                        echo "                        ";
                        $context["numSubmissions"] = ((($context["numSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 247));
                        // line 248
                        echo "                    ";
                    }
                    // line 249
                    echo "
                    ";
                    // line 251
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 252
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 252)) {
                        // line 253
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 253);
                        // line 254
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 255
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 256
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 256) > 1)) {
                                // line 257
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 257))));
                                // line 258
                                echo "                            ";
                            }
                            // line 259
                            echo "                        ";
                        } else {
                            // line 260
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 261
                            echo "                        ";
                        }
                        // line 262
                        echo "                    ";
                    }
                    // line 263
                    echo "
                    ";
                    // line 264
                    $context["link"] = null;
                    // line 265
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 266
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 266)];
                        // line 267
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 267), "teamid", [], "any", false, false, false, 267), "restrict" => ($context["restrict"] ?? null)]);
                        // line 268
                        echo "                    ";
                    }
                    // line 269
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 271
                    if ((($context["numSubmissions"] ?? null) != "0")) {
                        // line 272
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 273
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 274
                        echo ($context["time"] ?? null);
                        echo "
                                    <span>
                                        ";
                        // line 276
                        if ((($context["numSubmissions"] ?? null) === 1)) {
                            // line 277
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 279
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 281
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 285
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "            ";
            }
            // line 288
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
        // line 290
        echo "
    ";
        // line 292
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig.save", 292)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 293
        echo "    </tbody>
</table>

";
        // line 296
        if (($context["showLegends"] ?? null)) {
            // line 297
            echo "    <p><br/><br/></p>

    ";
            // line 300
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 301
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 305
                $context["link"] = null;
                // line 306
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 307
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 308
                    echo "                    ";
                }
                // line 309
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
                // line 314
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 314), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 314), [], "array", true, true, false, 314); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 315
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 315)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 315), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 317
                    $context["link"] = null;
                    // line 318
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 319
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 319)]);
                        // line 320
                        echo "                        ";
                    }
                    // line 321
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 321), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "            </tbody>
        </table>
    ";
            }
            // line 328
            echo "
    ";
            // line 329
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 330
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 331
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
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 339
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
                        // line 340
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 341
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 344
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 345
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 349
        echo "
<style>
    ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 352
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 353
            echo "
        .cl";
            // line 354
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 355
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 358
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 359
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 360
            echo "
        .cl";
            // line 361
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 363
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 364
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "</style>
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
        return "partials/scoreboard_table.html.twig.save";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1072 => 367,  1063 => 364,  1059 => 363,  1054 => 361,  1051 => 360,  1048 => 359,  1046 => 358,  1040 => 355,  1036 => 354,  1033 => 353,  1030 => 352,  1026 => 351,  1022 => 349,  1016 => 345,  1010 => 344,  1004 => 341,  999 => 340,  996 => 339,  992 => 338,  979 => 331,  976 => 330,  974 => 329,  971 => 328,  966 => 325,  949 => 321,  946 => 320,  943 => 319,  940 => 318,  938 => 317,  928 => 315,  924 => 314,  911 => 309,  908 => 308,  905 => 307,  902 => 306,  900 => 305,  890 => 301,  887 => 300,  883 => 297,  881 => 296,  876 => 293,  873 => 292,  870 => 290,  855 => 288,  852 => 287,  845 => 285,  839 => 281,  833 => 279,  829 => 277,  827 => 276,  822 => 274,  818 => 273,  809 => 272,  807 => 271,  803 => 269,  800 => 268,  797 => 267,  794 => 266,  791 => 265,  789 => 264,  786 => 263,  783 => 262,  780 => 261,  777 => 260,  774 => 259,  771 => 258,  768 => 257,  765 => 256,  762 => 255,  759 => 254,  756 => 253,  753 => 252,  750 => 251,  747 => 249,  744 => 248,  741 => 247,  738 => 246,  736 => 245,  733 => 244,  730 => 243,  727 => 242,  724 => 241,  721 => 240,  718 => 239,  715 => 238,  712 => 237,  709 => 236,  706 => 235,  703 => 234,  700 => 233,  697 => 232,  695 => 231,  690 => 230,  688 => 229,  683 => 227,  678 => 226,  675 => 225,  672 => 224,  669 => 223,  666 => 222,  664 => 221,  660 => 219,  656 => 217,  650 => 215,  648 => 214,  645 => 213,  643 => 212,  637 => 210,  631 => 207,  628 => 206,  626 => 205,  612 => 203,  609 => 202,  606 => 201,  603 => 200,  600 => 199,  597 => 198,  594 => 197,  591 => 196,  588 => 195,  585 => 194,  582 => 193,  579 => 192,  576 => 191,  574 => 190,  567 => 189,  564 => 188,  561 => 187,  558 => 186,  555 => 185,  552 => 184,  549 => 183,  546 => 182,  542 => 180,  538 => 178,  532 => 176,  527 => 174,  521 => 173,  518 => 172,  515 => 171,  512 => 170,  509 => 169,  506 => 168,  503 => 167,  501 => 166,  492 => 165,  489 => 164,  486 => 163,  483 => 162,  480 => 161,  478 => 160,  475 => 159,  473 => 158,  470 => 157,  467 => 156,  463 => 154,  460 => 153,  454 => 151,  449 => 149,  443 => 148,  440 => 147,  437 => 146,  434 => 145,  432 => 144,  423 => 143,  420 => 142,  417 => 141,  414 => 140,  411 => 139,  408 => 138,  406 => 137,  402 => 135,  399 => 134,  396 => 133,  390 => 131,  388 => 130,  385 => 129,  382 => 128,  374 => 125,  371 => 124,  368 => 123,  365 => 122,  362 => 121,  359 => 120,  356 => 119,  353 => 117,  350 => 116,  347 => 115,  344 => 114,  341 => 113,  338 => 112,  335 => 111,  333 => 110,  330 => 109,  327 => 108,  324 => 107,  306 => 106,  303 => 105,  300 => 104,  298 => 103,  293 => 100,  290 => 99,  282 => 96,  271 => 93,  268 => 92,  265 => 91,  259 => 89,  257 => 88,  253 => 87,  243 => 86,  238 => 85,  235 => 84,  232 => 83,  229 => 82,  226 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  208 => 75,  205 => 74,  202 => 73,  199 => 72,  196 => 71,  193 => 70,  188 => 69,  186 => 68,  180 => 65,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  159 => 55,  156 => 54,  149 => 52,  144 => 51,  142 => 50,  133 => 43,  129 => 41,  126 => 40,  122 => 38,  118 => 36,  116 => 35,  112 => 33,  105 => 30,  102 => 29,  95 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig.save", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig.save");
    }
}
