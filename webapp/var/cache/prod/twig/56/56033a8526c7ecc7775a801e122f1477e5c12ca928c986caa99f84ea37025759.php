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

/* jury/partials/submission_list.html.twig */
class __TwigTemplate_c408ffb249caf6c4309c3f10dc9ce22ffe4ccbe066fc72e9e9031ef6f687449f extends \Twig\Template
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
        if ( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context))) {
            // line 5
            echo "    ";
            $context["showExternalResult"] = false;
        }
        // line 7
        if ( !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context))) {
            // line 8
            echo "    ";
            $context["showExternalTestcases"] = false;
        }
        // line 10
        echo "
";
        // line 11
        $context["rowSpan"] = 1;
        // line 12
        $context["tdExtraClass"] = "";
        // line 13
        if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
            // line 14
            echo "    ";
            $context["rowSpan"] = 2;
            // line 15
            echo "    ";
            $context["tdExtraClass"] = " thick-border";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty(($context["submissions"] ?? null))) {
            // line 19
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 21
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            ";
            // line 24
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                // line 25
                echo "                <th scope=\"col\" colspan=\"2\">ID</th>
            ";
            } else {
                // line 27
                echo "                <th scope=\"col\">ID</th>
            ";
            }
            // line 29
            if (($context["showContest"] ?? null)) {
                // line 30
                echo "
                <th scope=\"col\">contest</th>";
            }
            // line 33
            echo "
            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            ";
            // line 38
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                // line 39
                echo "                <th scope=\"col\" colspan=\"2\">result</th>
            ";
            } else {
                // line 41
                echo "                <th scope=\"col\">result</th>
            ";
            }
            // line 43
            echo "            ";
            if ((($context["showExternalResult"] ?? null) &&  !($context["showExternalTestcases"] ?? null))) {
                // line 44
                echo "                <th scope=\"col\">external result</th>
            ";
            }
            // line 46
            echo "            <th scope=\"col\">
                ";
            // line 47
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                // line 48
                echo "                    shadow diff verified
                ";
            } else {
                // line 50
                echo "                    verified
                ";
            }
            // line 52
            echo "            </th>
            ";
            // line 53
            if (( !($context["showExternalResult"] ?? null) ||  !($context["showExternalTestcases"] ?? null))) {
                // line 54
                echo "                <th scope=\"col\">by</th>
            ";
            }
            // line 56
            if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                // line 57
                echo "
                <th scope=\"col\">old result</th>";
            }
            // line 60
            if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && ($context["showTestcases"] ?? null))) {
                // line 61
                echo "
                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>";
            }
            // line 64
            echo "
        </tr>
        </thead>
        <tbody>";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 69
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 70
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 70), "rejudgingid" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 70)]);
                } else {
                    // line 72
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 72)]);
                }
                // line 74
                echo "
            <tr class=\"";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 75)) {
                    echo "ignore";
                }
                echo "\"
                data-problem-id=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "probid", [], "any", false, false, false, 76), "html", null, true);
                echo "\"
                data-team-id=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 77), "html", null, true);
                echo "\"
                data-language-id=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 78), "html", null, true);
                echo "\"
                data-submission-id=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 79), "html", null, true);
                echo "\">
                ";
                // line 80
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 81
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 87
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 88), "html", null, true);
                echo "</a>
                </td>";
                // line 90
                if (($context["showContest"] ?? null)) {
                    // line 91
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "cid", [], "any", false, false, false, 91), "html", null, true);
                    echo "</a></td>";
                }
                // line 93
                echo "
                <td rowspan=\"";
                // line 94
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 95), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 95)), "html", null, true);
                echo "</a>
                </td>
                <td rowspan=\"";
                // line 97
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"t";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 99), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), 30), "html", null, true);
                echo "</a>
                </td>
                <td class=\"probid";
                // line 101
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 103), "shortname", [], "any", false, false, false, 103), "html", null, true);
                echo "</a>
                </td>
                <td class=\"langid";
                // line 105
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 107), "html", null, true);
                echo "</a>
                </td>
                ";
                // line 109
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 110
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 116
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 118) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 118), "endtime", [], "any", false, false, false, 118))) {
                    // line 119
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("too-late");
                    // line 120
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 120), "first", [], "any", false, false, false, 120)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 120), "first", [], "any", false, false, false, 120), "result", [], "any", false, false, false, 120)))) {
                        // line 121
                        echo "                                (";
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 121), "first", [], "any", false, false, false, 121), "result", [], "any", false, false, false, 121));
                        echo ")";
                    }
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 123
$context["submission"], "judgings", [], "any", false, false, false, 123), "first", [], "any", false, false, false, 123)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 123), "first", [], "any", false, false, false, 123), "result", [], "any", false, false, false, 123)))) {
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, $context["submission"], "judgehost", [], "any", false, false, false, 124)) {
                        // line 125
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                    } else {
                        // line 127
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                    }
                } else {
                    // line 130
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 130), "first", [], "any", false, false, false, 130), "result", [], "any", false, false, false, 130));
                }
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["submission"], "stillBusy", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "(&hellip;)";
                }
                // line 135
                echo "</a>
                </td>
                ";
                // line 137
                if ((($context["showExternalResult"] ?? null) &&  !($context["showExternalTestcases"] ?? null))) {
                    // line 138
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 138), "empty", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 140
                        echo "                    ";
                    } else {
                        // line 141
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 141), "first", [], "any", false, false, false, 141);
                        // line 142
                        echo "                    ";
                    }
                    // line 143
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            ";
                    // line 145
                    if (((null === ($context["externalJudgement"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 145)))) {
                        // line 146
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 148
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 148));
                    }
                    // line 150
                    echo "                        </a>
                    </td>
                ";
                }
                // line 153
                $context["claim"] = false;
                // line 154
                echo "                ";
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 155
                    if (((((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155))) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155))) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155)))) {
                        // line 156
                        $context["verified"] = "-";
                        // line 157
                        $context["juryMember"] = "-";
                    } else {
                        // line 159
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 159), "first", [], "any", false, false, false, 159), "juryMember", [], "any", false, false, false, 159);
                        // line 160
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 160), "first", [], "any", false, false, false, 160), "verified", [], "any", false, false, false, 160)) {
                            // line 161
                            $context["verified"] = "yes";
                            // line 162
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 162), "first", [], "any", false, false, false, 162), "verifyComment", [], "any", false, false, false, 162)) {
                                // line 163
                                $context["verified"] = ((($context["verified"] ?? null) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 163), "first", [], "any", false, false, false, 163), "verifyComment", [], "any", false, false, false, 163));
                                // line 164
                                echo "                            ";
                            }
                        } else {
                            // line 166
                            $context["verified"] = "no";
                            // line 167
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167), "juryMember", [], "any", false, false, false, 167))) {
                                // line 168
                                $context["claim"] = true;
                            } else {
                                // line 170
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 174
                    if (($context["claim"] ?? null)) {
                        // line 175
                        $context["claimArg"] = ["claimdiff" => 1];
                    } else {
                        // line 177
                        $context["claimArg"] = ["unclaimdiff" => 1];
                    }
                    // line 179
                    echo "                ";
                } else {
                    // line 180
                    if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 180), "first", [], "any", false, false, false, 180)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 180), "first", [], "any", false, false, false, 180), "result", [], "any", false, false, false, 180)))) {
                        // line 181
                        $context["verified"] = "";
                        // line 182
                        $context["juryMember"] = "";
                    } else {
                        // line 184
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 184), "first", [], "any", false, false, false, 184), "juryMember", [], "any", false, false, false, 184);
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 185), "first", [], "any", false, false, false, 185), "verified", [], "any", false, false, false, 185)) {
                            // line 186
                            $context["verified"] = "yes";
                        } else {
                            // line 188
                            $context["verified"] = "no";
                            // line 189
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 189), "first", [], "any", false, false, false, 189), "juryMember", [], "any", false, false, false, 189))) {
                                // line 190
                                $context["claim"] = true;
                            } else {
                                // line 192
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 196
                    if (($context["claim"] ?? null)) {
                        // line 197
                        $context["claimArg"] = ["claim" => 1];
                    } else {
                        // line 199
                        $context["claimArg"] = ["unclaim" => 1];
                    }
                    // line 201
                    echo "                ";
                }
                // line 202
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["verified"] ?? null), "html", null, true);
                echo "</a></td>
                ";
                // line 203
                if (( !($context["showExternalResult"] ?? null) ||  !($context["showExternalTestcases"] ?? null))) {
                    // line 204
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">";
                    // line 205
                    if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                        // line 206
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge(($context["claimArg"] ?? null), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 206), "rejudgingid" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 206)]));
                    } else {
                        // line 208
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge(($context["claimArg"] ?? null), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 208)]));
                    }
                    // line 210
                    if (($context["claim"] ?? null)) {
                        // line 211
                        echo "<a class=\"btn btn-outline-secondary btn-sm\"
                               href=\"";
                        // line 212
                        echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 213
$context["submission"], "judgings", [], "any", false, false, false, 213), "first", [], "any", false, false, false, 213) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 213), "first", [], "any", false, false, false, 213), "verified", [], "any", false, false, false, 213)) && (($context["juryMember"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 213), "username", [], "any", false, false, false, 213)))) {
                        // line 214
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 216
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($context["juryMember"] ?? null), "html", null, true);
                        echo "</a>";
                    }
                    // line 218
                    echo "</td>
                ";
                }
                // line 220
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 221
                    echo "
                    <td class=\"";
                    // line 222
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 222)]), "html", null, true);
                    echo "\">
                            ";
                    // line 223
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, $context["submission"], "oldResult", [], "any", false, false, false, 223));
                    echo "
                        </a></td>";
                }
                // line 226
                if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && ($context["showTestcases"] ?? null))) {
                    // line 227
                    echo "
                    <td class=\"testcase-results";
                    // line 228
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">";
                    // line 229
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"]);
                    // line 230
                    echo "</td>";
                }
                // line 232
                echo "
            </tr>
            ";
                // line 234
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 235
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 235), "empty", [], "any", false, false, false, 235)) {
                        // line 236
                        echo "                    ";
                        $context["externalJudgement"] = null;
                        // line 237
                        echo "                ";
                    } else {
                        // line 238
                        echo "                    ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 238), "first", [], "any", false, false, false, 238);
                        // line 239
                        echo "                ";
                    }
                    // line 240
                    echo "                ";
                    if ( !twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                        // line 241
                        echo "                    ";
                        $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl($context["submission"]);
                        // line 242
                        echo "                ";
                    } else {
                        // line 243
                        echo "                    ";
                        $context["externalSubmissionUrl"] = null;
                        // line 244
                        echo "                ";
                    }
                    // line 245
                    echo "                <td>
                    <a ";
                    // line 246
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        External
                    </a>
                </td>
                <td>
                    <a ";
                    // line 251
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 252), "html", null, true);
                    echo "
                    </a>
                </td>
                <td>
                    <a ";
                    // line 256
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        External
                    </a>
                </td>
                <td>
                    <a ";
                    // line 261
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                    // line 262
                    if (((null === ($context["externalJudgement"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 262)))) {
                        // line 263
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 265
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 265));
                    }
                    // line 267
                    echo "                    </a>
                </td>
                <td>";
                    // line 270
                    $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge(($context["claimArg"] ?? null), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 270)]));
                    // line 271
                    if (($context["claim"] ?? null)) {
                        // line 272
                        echo "<a class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 273
$context["submission"], "externalJudgements", [], "any", false, false, false, 273), "first", [], "any", false, false, false, 273) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 273), "first", [], "any", false, false, false, 273), "verified", [], "any", false, false, false, 273)) && (($context["juryMember"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 273), "username", [], "any", false, false, false, 273)))) {
                        // line 274
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 276
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($context["juryMember"] ?? null), "html", null, true);
                        echo "</a>";
                    }
                    // line 278
                    echo "</td>
                <td class=\"testcase-results\">";
                    // line 280
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"], true);
                    // line 281
                    echo "</td>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "
        </tbody>
    </table>

    <p>
        Total correct: ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "correct", [], "any", false, false, false, 289), "html", null, true);
            echo ", submitted: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "total", [], "any", false, false, false, 289), "html", null, true);
            // line 290
            if ((twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "unverified", [], "any", false, false, false, 290) > 0)) {
                // line 291
                echo ", unverified: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "unverified", [], "any", false, false, false, 291), "html", null, true);
            }
            // line 293
            if ((twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "ignored", [], "any", false, false, false, 293) > 0)) {
                // line 294
                echo ", ignored: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "ignored", [], "any", false, false, false, 294), "html", null, true);
            }
            // line 296
            if ((twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "queued", [], "any", false, false, false, 296) > 0)) {
                // line 297
                echo ", judgement pending: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "queued", [], "any", false, false, false, 297), "html", null, true);
            }
            // line 299
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "jury/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 299,  721 => 297,  719 => 296,  715 => 294,  713 => 293,  709 => 291,  707 => 290,  703 => 289,  696 => 284,  688 => 281,  686 => 280,  683 => 278,  676 => 276,  671 => 274,  669 => 273,  665 => 272,  663 => 271,  661 => 270,  657 => 267,  654 => 265,  651 => 263,  649 => 262,  641 => 261,  629 => 256,  622 => 252,  614 => 251,  602 => 246,  599 => 245,  596 => 244,  593 => 243,  590 => 242,  587 => 241,  584 => 240,  581 => 239,  578 => 238,  575 => 237,  572 => 236,  569 => 235,  567 => 234,  563 => 232,  560 => 230,  558 => 229,  555 => 228,  552 => 227,  550 => 226,  545 => 223,  539 => 222,  536 => 221,  534 => 220,  530 => 218,  523 => 216,  518 => 214,  516 => 213,  513 => 212,  510 => 211,  508 => 210,  505 => 208,  502 => 206,  500 => 205,  496 => 204,  494 => 203,  485 => 202,  482 => 201,  479 => 199,  476 => 197,  474 => 196,  469 => 192,  466 => 190,  464 => 189,  462 => 188,  459 => 186,  457 => 185,  455 => 184,  452 => 182,  450 => 181,  448 => 180,  445 => 179,  442 => 177,  439 => 175,  437 => 174,  432 => 170,  429 => 168,  427 => 167,  425 => 166,  421 => 164,  419 => 163,  417 => 162,  415 => 161,  413 => 160,  411 => 159,  408 => 157,  406 => 156,  404 => 155,  401 => 154,  399 => 153,  394 => 150,  391 => 148,  388 => 146,  386 => 145,  382 => 144,  377 => 143,  374 => 142,  371 => 141,  368 => 140,  365 => 139,  362 => 138,  360 => 137,  356 => 135,  353 => 133,  351 => 132,  348 => 130,  344 => 127,  341 => 125,  339 => 124,  337 => 123,  332 => 121,  330 => 120,  327 => 119,  325 => 118,  322 => 117,  317 => 116,  309 => 111,  304 => 110,  302 => 109,  295 => 107,  291 => 106,  285 => 105,  278 => 103,  274 => 102,  268 => 101,  261 => 99,  257 => 98,  251 => 97,  244 => 95,  238 => 94,  235 => 93,  226 => 91,  224 => 90,  218 => 88,  213 => 87,  205 => 82,  200 => 81,  198 => 80,  194 => 79,  190 => 78,  186 => 77,  182 => 76,  176 => 75,  173 => 74,  170 => 72,  167 => 70,  165 => 69,  161 => 68,  156 => 64,  152 => 61,  150 => 60,  146 => 57,  144 => 56,  140 => 54,  138 => 53,  135 => 52,  131 => 50,  127 => 48,  125 => 47,  122 => 46,  118 => 44,  115 => 43,  111 => 41,  107 => 39,  105 => 38,  98 => 33,  94 => 30,  92 => 29,  88 => 27,  84 => 25,  82 => 24,  77 => 21,  73 => 19,  71 => 18,  68 => 17,  64 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  52 => 10,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/submission_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/submission_list.html.twig");
    }
}
