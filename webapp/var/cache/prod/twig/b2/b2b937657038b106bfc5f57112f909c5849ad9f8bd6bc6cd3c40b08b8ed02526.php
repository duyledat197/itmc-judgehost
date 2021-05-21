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

/* team/partials/submission.html.twig */
class __TwigTemplate_f27f9108387489708d5343569a35d456b12459d7652632a4beb449203387606e extends \Twig\Template
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
        if (((twig_test_empty(($context["judging"] ?? null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 1), "submittime", [], "any", false, false, false, 1) >= twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 1))) || (($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 4
            echo "    <div class=\"container\">
        ";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "valid", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        ";
            }
            // line 10
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 16), "contestProblem", [], "any", false, false, false, 16), "shortname", [], "any", false, false, false, 16), "html", null, true);
            echo "</span> -
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "problem", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 22), "submittime", [], "any", false, false, false, 22), null, ($context["current_team_contest"] ?? null)), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 26), "language", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 30) == "compiler-error")) {
                // line 31
                echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
            } else {
                // line 33
                echo "                    <span class=\"badge badge-success\">successful</span>
                ";
            }
            // line 35
            echo "            </div>
        </div>

        ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 38) != "compiler-error")) {
                // line 39
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: ";
                // line 41
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 41));
                echo "
                </div>
            </div>
        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if (($context["allowDownload"] ?? null)) {
                // line 47
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a class=\"btn btn-primary\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submitid", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-download\"></i> Download submission
                    </a>
                </div>
            </div>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if (((($context["showCompile"] ?? null) == 2) || ((($context["showCompile"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 56) == "compiler-error")))) {
                // line 57
                echo "            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            ";
                // line 59
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 59))) {
                    // line 60
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 60), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 62
                    echo "                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            ";
                }
                // line 64
                echo "        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if ((($context["showSampleOutput"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 66) != "compiler-error"))) {
                // line 67
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 70
                if (twig_test_empty(($context["runs"] ?? null))) {
                    // line 71
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 73
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 74
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "</h5>

                    ";
                        // line 76
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "judgingRuns", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76);
                        // line 77
                        echo "                    ";
                        if (((($context["judgingRun"] ?? null) == null) || (twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 77) == null))) {
                            // line 78
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 80
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 81
                            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 85), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>";
                            // line 89
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runtime", [], "any", false, false, false, 89), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_";
                            // line 94
                            if ((twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 94) != "correct")) {
                                echo " in";
                            }
                            echo "correct\">
                                                    ";
                            // line 95
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 95), "html", null, true);
                            echo "
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">Program output</h6>
                        ";
                            // line 104
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 104), "outputRun", [], "any", false, false, false, 104))) {
                                // line 105
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 105), "outputRun", [], "any", false, false, false, 105), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 107
                                echo "                            <p class=\"nodata\">There was no program output.</p>
                        ";
                            }
                            // line 109
                            echo "
                        <h6 class=\"text-center\">Diff output</h6>
                        ";
                            // line 111
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 111), "outputDiff", [], "any", false, false, false, 111))) {
                                // line 112
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 112), "outputDiff", [], "any", false, false, false, 112), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 114
                                echo "                            <p class=\"nodata\">There was no diff output.</p>
                        ";
                            }
                            // line 116
                            echo "
                        <h6 class=\"text-center\">Error output (info/debug/errors)</h6>
                        ";
                            // line 118
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 118), "outputError", [], "any", false, false, false, 118))) {
                                // line 119
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 119), "outputError", [], "any", false, false, false, 119), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 121
                                echo "                            <p class=\"nodata\">There was no stderr output.</p>
                        ";
                            }
                            // line 123
                            echo "                    ";
                        }
                        // line 124
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "            ";
                }
                echo " ";
                // line 126
                echo "        ";
            }
            echo " ";
            // line 127
            echo "    </div>
";
        }
        // line 128
        echo " ";
    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 128,  300 => 127,  296 => 126,  292 => 125,  286 => 124,  283 => 123,  279 => 121,  273 => 119,  271 => 118,  267 => 116,  263 => 114,  257 => 112,  255 => 111,  251 => 109,  247 => 107,  241 => 105,  239 => 104,  227 => 95,  221 => 94,  213 => 89,  206 => 85,  199 => 81,  196 => 80,  192 => 78,  189 => 77,  187 => 76,  179 => 74,  174 => 73,  170 => 71,  168 => 70,  163 => 67,  161 => 66,  158 => 65,  155 => 64,  151 => 62,  145 => 60,  143 => 59,  139 => 57,  137 => 56,  134 => 55,  125 => 49,  121 => 47,  119 => 46,  116 => 45,  109 => 41,  105 => 39,  103 => 38,  98 => 35,  94 => 33,  90 => 31,  88 => 30,  81 => 26,  74 => 22,  66 => 17,  62 => 16,  54 => 10,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/partials/submission.html.twig");
    }
}
