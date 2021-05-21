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

/* jury/submission.html.twig */
class __TwigTemplate_d9b7133f319cabf41dde7c799f9b23c22bac87ab5f67a93e3b726b8473dfa040 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($context["claimWarning"] ?? null)) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, ($context["claimWarning"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "
    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 41), "html", null, true);
        echo "
            ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 42)) {
            // line 43
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 43), "submitid", [], "any", false, false, false, 43)]);
            // line 44
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, ($context["origSubmissionUrl"] ?? null), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 44), "submitid", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>)
            ";
        }
        // line 46
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 46))) {
            // line 47
            echo "                (resubmitted as";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 48));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 49
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 49)]);
                // line 50
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["resubmissionUrl"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 50), "html", null, true);
                echo "</a>";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo ")
            ";
        }
        // line 55
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 55)) {
            // line 56
            echo "                (ignored)
            ";
        }
        // line 58
        echo "        </h1>
        ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 60)) {
                // line 61
                echo "                ";
                $context["action"] = "ignore";
                // line 62
                echo "            ";
            } else {
                // line 63
                echo "                ";
                $context["action"] = "unignore";
                // line 64
                echo "            ";
            }
            // line 65
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 67)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["action"] ?? null)), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 70
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 70), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 74)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 74)]));
        // line 75
        echo "    </div>

    ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 77)) {
            // line 78
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 81)) {
            // line 82
            echo "        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    ";
        }
        // line 86
        echo "
    ";
        // line 88
        echo "    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 91), "cid" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">
                ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 92), "effectiveName", [], "any", false, false, false, 92), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 92), "html", null, true);
        echo ")
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">
                ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 99), "shortname", [], "any", false, false, false, 99), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\">
                ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 106)) {
            // line 107
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 107), "shortname", [], "any", false, false, false, 107), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                ";
        } else {
            // line 109
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
            echo "
                ";
        }
        // line 111
        echo "            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "langid", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">
                ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 123), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
        echo "\">
                ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 124), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 124)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 130
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 130), "timelimit", [], "any", false, false, false, 130) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 130), "timeFactor", [], "any", false, false, false, 130)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\">
                View source code
            </a>
        </span>

        ";
        // line 140
        if ( !twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
            // line 141
            echo "            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
                    View in external CCS
                </a>
            </span>
        ";
        }
        // line 148
        echo "    </div>

    ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 150)) {
            // line 151
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 153
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 154), "html", null, true);
            } else {
                // line 156
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 157), "html", null, true);
                // line 158
                echo "</a>";
            }
            // line 160
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 161
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 161));
                echo "
            ";
            }
            // line 163
            echo "        </div>
    ";
        }
        // line 165
        echo "
    ";
        // line 166
        if ((((( !(null === ($context["externalJudgement"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 166))) &&  !(null === ($context["selectedJudging"] ?? null))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 166))) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 166) != twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 166)))) {
            // line 167
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 172
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 173
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 173));
                echo " by the external CCS
                ";
            } else {
                // line 175
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 176
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 176));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 179
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 179));
            echo "
                by DOMjudge.
            </p>
        </div>

        ";
            // line 184
            $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 184)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>             // line 186
($context["externalJudgement"] ?? null), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,             // line 187
($context["externalJudgement"] ?? null), "extjudgementid", [], "any", false, false, false, 187)]), "show_form" => true, "show_icat" => false]));
            // line 190
            echo "    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if ((( !($context["sameTestcaseIds"] ?? null) &&  !(null === ($context["selectedJudging"] ?? null))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 192)))) {
            // line 193
            echo "        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    ";
        }
        // line 195
        echo "
    ";
        // line 196
        if (((twig_length_filter($this->env, ($context["judgings"] ?? null)) > 1) || ((twig_length_filter($this->env, ($context["judgings"] ?? null)) == 1) && (null === ($context["selectedJudging"] ?? null))))) {
            // line 197
            echo "        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 212
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 212), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 212)]);
                // line 213
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 213)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 215
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 216
                if (( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 216) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 216)))) {
                    // line 217
                    echo "                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            ";
                } else {
                    // line 219
                    echo "                                &nbsp;
                            ";
                }
                // line 221
                echo "                        </a>
                    </td>
                    <td><a href=\"";
                // line 223
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 223), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 224
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 224), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 224)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 226
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 227
                if ( !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 227)] ?? null) : null))) {
                    // line 228
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 228)] ?? null) : null), "html", null, true);
                    echo "s
                            ";
                }
                // line 230
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 233
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 234
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 234))) {
                    // line 235
                    echo "                                ";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 235), "hostname", [], "any", false, false, false, 235));
                    echo "
                            ";
                }
                // line 237
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 240
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 241
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 241), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 241), true);
                echo "
                            ";
                // line 242
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 242)) {
                    // line 243
                    echo "                                (&hellip;)
                            ";
                }
                // line 245
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 248
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 249
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 249))) {
                    // line 250
                    echo "                                r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 250), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 250), "reason", [], "any", false, false, false, 250), "html", null, true);
                    echo ")
                            ";
                }
                // line 252
                echo "                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "            </tbody>
        </table>
    ";
        }
        // line 259
        echo "
    ";
        // line 260
        if ((null === ($context["selectedJudging"] ?? null))) {
            // line 261
            echo "        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        ";
            // line 263
            if ( !twig_test_empty(($context["unjudgableReasons"] ?? null))) {
                // line 264
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unjudgableReasons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 265
                    echo "                <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "        ";
            }
            // line 268
            echo "    ";
        }
        // line 269
        echo "
    ";
        // line 270
        if (( !(null === ($context["selectedJudging"] ?? null)) ||  !(null === ($context["externalJudgement"] ?? null)))) {
            // line 271
            echo "
        ";
            // line 272
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 272)->display($context);
            // line 273
            echo "
        ";
            // line 274
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 275
                echo "
            ";
                // line 277
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 279), "html", null, true);
                echo "
                    ";
                // line 280
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 280)) {
                    // line 281
                    echo "                        (rejudging
                        <a href=\"";
                    // line 282
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudgingid", [], "any", false, false, false, 282)]), "html", null, true);
                    echo "\">
                            r";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudgingid", [], "any", false, false, false, 283), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 283), "reason", [], "any", false, false, false, 283), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 284
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 284)) {
                    // line 285
                    echo "                        (Invalid)
                    ";
                }
                // line 287
                echo "                </h2>
                &nbsp;
                ";
                // line 289
                if ( !twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 289)) {
                    // line 290
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 290), "jid" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 290)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 292
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 292))) {
                        // line 293
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 293), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 296
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 296), "username", [], "any", false, false, false, 296) == twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 296))) {
                        // line 297
                        echo "                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    } else {
                        // line 299
                        echo "                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    }
                    // line 301
                    echo "                    </form>
                ";
                }
                // line 303
                echo "            </div>
        ";
            }
            // line 305
            echo "
        <div class=\"mb-2\">
            <div>
                Result:
                ";
            // line 309
            if (((null === ($context["selectedJudging"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 309)))) {
                // line 310
                if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "judgehost", [], "any", false, false, false, 310)) {
                    // line 311
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 313
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 316
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 316));
            }
            // line 318
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "stillBusy", [], "any", false, false, false, 318)) {
                // line 319
                echo "(&hellip;)";
            }
            // line 321
            if ( !(null === ($context["lastJudging"] ?? null))) {
                // line 322
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 322)]);
                // line 323
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 324
                echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 324), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "result", [], "any", false, false, false, 324), "html", null, true);
                echo ")";
                // line 325
                echo "</span>";
            }
            // line 327
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 328
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 328));
                echo ")";
            }
            // line 330
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 331
                echo ", Judgehost:
                    ";
                // line 332
                $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgehost", [], "any", false, false, false, 332), "hostname", [], "any", false, false, false, 332)]);
                // line 333
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["judgehostLink"] ?? null), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgehost", [], "any", false, false, false, 333), "hostname", [], "any", false, false, false, 333));
                echo "</a>,
                    <span class=\"judgetime\">Judging started: ";
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 334), "%H:%M:%S"), "html", null, true);
                // line 335
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 335)) {
                    // line 336
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 336), twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 336)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 337
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 337) || twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 337))) {
                    // line 338
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 338)), "html", null, true);
                    echo "]";
                } else {
                    // line 340
                    echo "&nbsp;[aborted]";
                }
                // line 342
                echo "</span>
                ";
            }
            // line 344
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 345
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 345), "%H:%M:%S"), "html", null, true);
                // line 346
                if (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 346)) {
                    // line 347
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 347), twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 347)), "html", null, true);
                    echo "s";
                } else {
                    // line 349
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 349)), "html", null, true);
                    echo "]";
                }
                // line 351
                echo ")</span>";
            }
            // line 353
            if (( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 353) != "compiler-error"))) {
                // line 354
                echo ", max/sum runtime:
                    ";
                // line 355
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 355), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 355), 2, ".", ""), "html", null, true);
                echo "s";
                // line 356
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 357
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 358
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 358), "html", null, true);
                    echo "</a>:
                            ";
                    // line 359
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 359), 2, ".", ""), "html", null, true);
                    // line 360
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 360), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 364
            if ((( !(null === ($context["externalJudgement"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 364) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 364) != null))) {
                // line 365
                echo ", external max/sum runtime:
                    ";
                // line 366
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "maxRuntime", [], "any", false, false, false, 366), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "sumRuntime", [], "any", false, false, false, 366), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 368
            echo "            </div>

            ";
            // line 371
            echo "            ";
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 371) != "compiler-error")))) {
                // line 372
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 376
                if ((null === ($context["selectedJudging"] ?? null))) {
                    // line 377
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 378
                    echo "                            ";
                } else {
                    // line 379
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 379));
                    // line 380
                    echo "                            ";
                }
                // line 381
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["runs"] ?? null), ($context["judgingDone"] ?? null));
                echo "
                        </td>
                    </tr>
                    ";
                // line 384
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 385
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 387
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 387), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 390
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["lastRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "endtime", [], "any", false, false, false, 390)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 394
                echo "                    ";
                if ( !(null === ($context["externalJudgement"] ?? null))) {
                    // line 395
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 398
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["externalRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 398)), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 402
                echo "                </table>

                ";
                // line 405
                echo "                ";
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 406
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 408
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 408), "html", null, true);
                    echo "</a>
                        ";
                    // line 409
                    if (twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 409)) {
                        // line 410
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 410), "html", null, true);
                        echo "')</span>
                        ";
                    }
                    // line 412
                    echo "                </span>
                ";
                }
                // line 414
                echo "            ";
            }
            // line 415
            echo "        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        ";
            // line 424
            echo "        ";
            if (( !(null === ($context["selectedJudging"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 424)))) {
                // line 425
                echo "            ";
                $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 425)->display(twig_array_merge($context, ["label" => "Verified", "judging" =>                 // line 427
($context["selectedJudging"] ?? null), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source,                 // line 428
($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 428)]), "show_form" =>  !((                // line 429
($context["verificationRequired"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 429)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 429)), "show_icat" => true]));
                // line 431
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 431)) {
                    // line 432
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 436
                    echo twig_escape_filter($this->env, ($context["icat_url"] ?? null), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 437
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 437), "username", [], "any", false, false, false, 437), "html", null, true);
                    echo "',
                                '";
                    // line 438
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 438), "html", null, true);
                    echo "',
                                '";
                    // line 439
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 439), "shortname", [], "any", false, false, false, 439), "html", null, true);
                    echo "',
                                '";
                    // line 440
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 440), "html", null, true);
                    echo "'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            ";
                }
                // line 448
                echo "        ";
            } elseif ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 449
                echo "            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        ";
            }
            // line 451
            echo "
        ";
            // line 453
            echo "        ";
            $context["color"] = "#6666FF";
            // line 454
            echo "        ";
            $context["message"] = "not finished yet";
            // line 455
            echo "        ";
            $context["output"] = null;
            // line 456
            echo "        ";
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 457
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 457);
                // line 458
                echo "        ";
            }
            // line 459
            echo "        ";
            if ( !(null === ($context["output"] ?? null))) {
                // line 460
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 460) == "compiler-error")) {
                    // line 461
                    echo "                ";
                    $context["color"] = "red";
                    // line 462
                    echo "                ";
                    $context["message"] = "unsuccessful";
                    // line 463
                    echo "            ";
                } else {
                    // line 464
                    echo "                ";
                    $context["color"] = "#1daa1d";
                    // line 465
                    echo "                ";
                    $context["message"] = "successful";
                    // line 466
                    echo "                ";
                    if ( !twig_test_empty(($context["output"] ?? null))) {
                        // line 467
                        echo "                    ";
                        $context["message"] = (((($context["message"] ?? null) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount(($context["output"] ?? null))) . " line(s) of output)");
                        // line 468
                        echo "                ";
                    }
                    // line 469
                    echo "            ";
                }
                // line 470
                echo "        ";
            }
            // line 471
            echo "        ";
            $context["header"] = (((("Compilation <span style=\"color: " . ($context["color"] ?? null)) . ";\">") . ($context["message"] ?? null)) . "</span>");
            // line 472
            echo "        <h3>
            ";
            // line 473
            if ( !twig_test_empty(($context["output"] ?? null))) {
                // line 474
                echo "                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    ";
                // line 475
                echo ($context["header"] ?? null);
                echo "
                </a>
            ";
            } else {
                // line 478
                echo "                ";
                echo ($context["header"] ?? null);
                echo "
            ";
            }
            // line 480
            echo "        </h3>
        ";
            // line 481
            if (twig_test_empty(($context["output"] ?? null))) {
                // line 482
                echo "            <p class=\"nodata";
                if (((null === ($context["selectedJudging"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 482) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        ";
            } else {
                // line 485
                echo "            <pre class=\"output_text ";
                if (((null === ($context["selectedJudging"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 485) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">";
                // line 486
                echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
                echo "</pre>
        ";
            }
            // line 488
            echo "
        ";
            // line 489
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 489) != "compiler-error")))) {
                // line 490
                echo "            ";
                // line 491
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 492
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 493
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 493)) {
                        // line 494
                        echo "                    ";
                        $context["externalRun"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["externalRuns"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["runIdx"]] ?? null) : null);
                        // line 495
                        echo "                ";
                    }
                    // line 496
                    echo "                <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 496), "html", null, true);
                    echo "\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run ";
                    // line 498
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 498) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 498), "runresult", [], "any", false, false, false, 498) == "correct"))) {
                        echo "run_correct";
                    }
                    echo "\">
                    <div class=\"card-header\">
                        Run #";
                    // line 500
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 500), "html", null, true);
                    echo "
                        ";
                    // line 501
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 501))) {
                        // line 502
                        echo "                            | <span style=\"font-family:monospace;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 502), "html", null, true);
                        echo ".in</span>
                        ";
                    } else {
                        // line 504
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 504))) {
                            // line 505
                            echo "                                | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 505), "html", null, true);
                            echo "
                            ";
                        }
                        // line 507
                        echo "                        ";
                    }
                    // line 508
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 508))) {
                        // line 509
                        echo "                            |
                            <span class=\"sol ";
                        // line 510
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 510), "runresult", [], "any", false, false, false, 510) == "correct")) {
                            echo "sol_correct";
                        } else {
                            echo "sol_incorrect";
                        }
                        echo "\">
                                ";
                        // line 511
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 511), "runresult", [], "any", false, false, false, 511), "html", null, true);
                        echo "
                            </span>
                            ";
                        // line 513
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 513), "runresult", [], "any", false, false, false, 513) == "timelimit")) {
                            // line 514
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["runsOutput"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["runIdx"]] ?? null) : null), "terminated", [], "any", false, false, false, 514)) {
                                // line 515
                                echo "                                    <b>(terminated)</b>
                                ";
                            } else {
                                // line 517
                                echo "                                    <b>(finished late)</b>
                                ";
                            }
                            // line 519
                            echo "                            ";
                        }
                        // line 520
                        echo "                        ";
                    }
                    // line 521
                    echo "                        ";
                    if (( !(null === ($context["externalRun"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 521)))) {
                        // line 522
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 522))) {
                            // line 523
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 524
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 524), "result", [], "any", false, false, false, 524) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 525
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 525), "result", [], "any", false, false, false, 525), "html", null, true);
                            // line 526
                            echo "</span>";
                            // line 527
                            echo ")
                            ";
                        }
                        // line 529
                        echo "                        ";
                    }
                    // line 530
                    echo "                        <span style=\"float: right;\">
                            <a href=\"";
                    // line 531
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 531), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 531), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 537
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 537), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 537), "type" => "output"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            ";
                    // line 543
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 543))) {
                        // line 544
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 544), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 544), "runid", [], "any", false, false, false, 544), "contest" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 544)]), "html", null, true);
                        echo "\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        Team Output
                                    </button>
                                </a>
                            ";
                    }
                    // line 551
                    echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                    ";
                    // line 554
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 554))) {
                        // line 555
                        echo "                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        ";
                        // line 557
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["runsOutput"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["runIdx"]] ?? null) : null), "cpu_time", [], "any", false, false, false, 557), "html", null, true);
                        echo "s CPU
                        ";
                        // line 558
                        if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["runsOutput"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 558))) {
                            // line 559
                            echo "                            , ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["runsOutput"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["runIdx"]] ?? null) : null), "wall_time", [], "any", false, false, false, 559), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 561
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["runsOutput"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["runIdx"]] ?? null) : null), "memory", [], "any", false, false, false, 561), "html", null, true);
                            echo "
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 564
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["runsOutput"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["runIdx"]] ?? null) : null), "exitcode", [], "any", false, false, false, 564), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["runsOutput"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 564) > 0)) {
                                echo ",
                                signal: ";
                                // line 565
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["runsOutput"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 565), "html", null, true);
                                echo "
                            ";
                            }
                            // line 567
                            echo "                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-";
                            // line 568
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            <div class=\"collapse\" id=\"collapseExample-";
                            // line 572
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                  <div class=\"card card-body output_text\">";
                            // line 573
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["runsOutput"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 573), "html", null, true);
                            echo "</div>
                            </div>
                        ";
                        }
                        // line 576
                        echo "                    </span>
                    ";
                    }
                    // line 578
                    echo "                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 578))) {
                        // line 579
                        echo "                        <p><em>
                            ";
                        // line 580
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 580));
                        echo "
                        </em></p>
                    ";
                    }
                    // line 583
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["runsOutput"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 583)) {
                        // line 584
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 585
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 585), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 585), "type" => "image"]);
                        // line 586
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["imgUrl"] ?? null), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 587
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 587), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["runsOutput"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 587)), "html", null, true);
                        echo "\"/>
                            </a>
                        </span>
                    ";
                    }
                    // line 591
                    echo "
                    ";
                    // line 592
                    $context["runDone"] = false;
                    // line 593
                    echo "                    ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 593))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 593), "runresult", [], "any", false, false, false, 593)))) {
                        // line 594
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 595
                        echo "                    ";
                    }
                    // line 596
                    echo "                    ";
                    if ( !($context["runDone"] ?? null)) {
                        // line 597
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 598
                        if (( !(null === ($context["selectedJudging"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 598))) {
                            // line 599
                            echo "                                Run not used for final result.
                            ";
                        } else {
                            // line 601
                            echo "                                Run not started/finished yet.
                            ";
                        }
                        // line 603
                        echo "                        </p>
                    ";
                    } else {
                        // line 605
                        echo "                        ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605), "runresult", [], "any", false, false, false, 605)))) {
                            // line 606
                            echo "                            ";
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 607
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 608
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["runsOutput"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 608))) {
                                    // line 609
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 611
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["runsOutput"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 611));
                                    echo "</pre>
                                ";
                                }
                                // line 613
                                echo "                            ";
                            } else {
                                // line 614
                                echo "                                <h5>Diff output</h5>
                                ";
                                // line 615
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["runsOutput"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 615))) {
                                    // line 616
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 618
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["runsOutput"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 618));
                                    echo "</pre>
                                ";
                                }
                                // line 620
                                echo "
                                ";
                                // line 621
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 621), "runresult", [], "any", false, false, false, 621) != "correct")) {
                                    // line 622
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["runsOutput"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["runIdx"]] ?? null) : null));
                                    echo "
                                ";
                                }
                                // line 624
                                echo "                            ";
                            }
                            // line 625
                            echo "
                            ";
                            // line 626
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 627
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 628
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["runsOutput"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 628))) {
                                    // line 629
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 631
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["runsOutput"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 631));
                                    echo "
                                ";
                                }
                                // line 633
                                echo "                            ";
                            } else {
                                // line 634
                                echo "                                <h5>Program output</h5>
                                ";
                                // line 635
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["runsOutput"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 635))) {
                                    // line 636
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 638
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["runsOutput"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 638));
                                    echo "</pre>
                                ";
                                }
                                // line 640
                                echo "                            ";
                            }
                            // line 641
                            echo "
                            <h5>Program error output</h5>
                            ";
                            // line 643
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["runsOutput"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 643))) {
                                // line 644
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 646
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["runsOutput"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 646));
                                echo "</pre>
                            ";
                            }
                            // line 648
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 650
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["runsOutput"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 650))) {
                                // line 651
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 653
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["runsOutput"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 653));
                                echo "</pre>
                            ";
                            }
                            // line 655
                            echo "                        ";
                        }
                        // line 656
                        echo "                    ";
                    }
                    // line 657
                    echo "
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 661
                echo "
            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        ";
            }
            // line 672
            echo " ";
            // line 673
            echo "
    ";
        }
        // line 674
        echo " ";
        // line 675
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1632 => 675,  1630 => 674,  1626 => 673,  1624 => 672,  1610 => 661,  1601 => 657,  1598 => 656,  1595 => 655,  1589 => 653,  1585 => 651,  1583 => 650,  1579 => 648,  1573 => 646,  1569 => 644,  1567 => 643,  1563 => 641,  1560 => 640,  1554 => 638,  1550 => 636,  1548 => 635,  1545 => 634,  1542 => 633,  1536 => 631,  1532 => 629,  1530 => 628,  1527 => 627,  1525 => 626,  1522 => 625,  1519 => 624,  1513 => 622,  1511 => 621,  1508 => 620,  1502 => 618,  1498 => 616,  1496 => 615,  1493 => 614,  1490 => 613,  1484 => 611,  1480 => 609,  1478 => 608,  1475 => 607,  1472 => 606,  1469 => 605,  1465 => 603,  1461 => 601,  1457 => 599,  1455 => 598,  1452 => 597,  1449 => 596,  1446 => 595,  1443 => 594,  1440 => 593,  1438 => 592,  1435 => 591,  1426 => 587,  1421 => 586,  1419 => 585,  1416 => 584,  1413 => 583,  1407 => 580,  1404 => 579,  1401 => 578,  1397 => 576,  1391 => 573,  1387 => 572,  1380 => 568,  1377 => 567,  1372 => 565,  1367 => 564,  1361 => 561,  1355 => 559,  1353 => 558,  1349 => 557,  1345 => 555,  1343 => 554,  1338 => 551,  1327 => 544,  1325 => 543,  1316 => 537,  1307 => 531,  1304 => 530,  1301 => 529,  1297 => 527,  1295 => 526,  1293 => 525,  1285 => 524,  1282 => 523,  1279 => 522,  1276 => 521,  1273 => 520,  1270 => 519,  1266 => 517,  1262 => 515,  1259 => 514,  1257 => 513,  1252 => 511,  1244 => 510,  1241 => 509,  1238 => 508,  1235 => 507,  1229 => 505,  1226 => 504,  1220 => 502,  1218 => 501,  1214 => 500,  1207 => 498,  1201 => 496,  1198 => 495,  1195 => 494,  1192 => 493,  1189 => 492,  1184 => 491,  1182 => 490,  1180 => 489,  1177 => 488,  1172 => 486,  1165 => 485,  1156 => 482,  1154 => 481,  1151 => 480,  1145 => 478,  1139 => 475,  1136 => 474,  1134 => 473,  1131 => 472,  1128 => 471,  1125 => 470,  1122 => 469,  1119 => 468,  1116 => 467,  1113 => 466,  1110 => 465,  1107 => 464,  1104 => 463,  1101 => 462,  1098 => 461,  1095 => 460,  1092 => 459,  1089 => 458,  1086 => 457,  1083 => 456,  1080 => 455,  1077 => 454,  1074 => 453,  1071 => 451,  1067 => 449,  1064 => 448,  1053 => 440,  1049 => 439,  1045 => 438,  1041 => 437,  1037 => 436,  1031 => 432,  1028 => 431,  1026 => 429,  1025 => 428,  1024 => 427,  1022 => 425,  1019 => 424,  1009 => 415,  1006 => 414,  1002 => 412,  996 => 410,  994 => 409,  988 => 408,  984 => 406,  981 => 405,  977 => 402,  970 => 398,  965 => 395,  962 => 394,  955 => 390,  947 => 387,  943 => 385,  941 => 384,  934 => 381,  931 => 380,  928 => 379,  925 => 378,  922 => 377,  920 => 376,  914 => 372,  911 => 371,  907 => 368,  900 => 366,  897 => 365,  895 => 364,  888 => 360,  886 => 359,  880 => 358,  877 => 357,  875 => 356,  870 => 355,  867 => 354,  865 => 353,  862 => 351,  857 => 349,  852 => 347,  850 => 346,  847 => 345,  845 => 344,  841 => 342,  838 => 340,  833 => 338,  831 => 337,  827 => 336,  825 => 335,  823 => 334,  816 => 333,  814 => 332,  811 => 331,  809 => 330,  804 => 328,  802 => 327,  799 => 325,  792 => 324,  789 => 323,  787 => 322,  785 => 321,  782 => 319,  780 => 318,  777 => 316,  773 => 313,  770 => 311,  768 => 310,  766 => 309,  760 => 305,  756 => 303,  752 => 301,  748 => 299,  744 => 297,  741 => 296,  734 => 293,  732 => 292,  726 => 290,  724 => 289,  720 => 287,  716 => 285,  714 => 284,  708 => 283,  704 => 282,  701 => 281,  699 => 280,  695 => 279,  691 => 277,  688 => 275,  686 => 274,  683 => 273,  681 => 272,  678 => 271,  676 => 270,  673 => 269,  670 => 268,  667 => 267,  658 => 265,  653 => 264,  651 => 263,  647 => 261,  645 => 260,  642 => 259,  637 => 256,  628 => 252,  620 => 250,  618 => 249,  614 => 248,  609 => 245,  605 => 243,  603 => 242,  599 => 241,  595 => 240,  590 => 237,  584 => 235,  582 => 234,  578 => 233,  573 => 230,  567 => 228,  565 => 227,  561 => 226,  554 => 224,  548 => 223,  544 => 221,  540 => 219,  536 => 217,  534 => 216,  530 => 215,  522 => 213,  519 => 212,  515 => 211,  499 => 197,  497 => 196,  494 => 195,  490 => 193,  488 => 192,  485 => 191,  482 => 190,  480 => 187,  479 => 186,  478 => 184,  469 => 179,  463 => 176,  458 => 175,  452 => 173,  450 => 172,  443 => 167,  441 => 166,  438 => 165,  434 => 163,  428 => 161,  426 => 160,  423 => 158,  421 => 157,  417 => 156,  414 => 154,  412 => 153,  408 => 151,  406 => 150,  402 => 148,  394 => 143,  390 => 141,  388 => 140,  380 => 135,  372 => 130,  363 => 124,  359 => 123,  350 => 117,  346 => 116,  339 => 111,  333 => 109,  325 => 107,  323 => 106,  319 => 105,  310 => 99,  306 => 98,  295 => 92,  291 => 91,  286 => 88,  283 => 86,  277 => 82,  275 => 81,  272 => 80,  268 => 78,  266 => 77,  262 => 75,  260 => 74,  257 => 73,  249 => 70,  245 => 69,  236 => 67,  230 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  215 => 60,  213 => 59,  210 => 58,  206 => 56,  203 => 55,  199 => 53,  183 => 51,  177 => 50,  175 => 49,  158 => 48,  156 => 47,  153 => 46,  145 => 44,  142 => 43,  140 => 42,  136 => 41,  131 => 38,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  96 => 25,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 7,  58 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submission.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/submission.html.twig");
    }
}
