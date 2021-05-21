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

/* jury/contest.html.twig */
class __TwigTemplate_3adc43560ea4571959c052634208be93ea571a6472a8b3e4e3c1c9f76906c16d extends \Twig\Template
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
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 4), "html", null, true);
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
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Contest ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if (($context["isActive"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            This is an active contest
        </div>
    ";
        }
        // line 20
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            This contest is disabled
        </div>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"alert alert-info\">
            This contest is final
        </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 38
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["contest"] ?? null))) {
            // line 39
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "externalid", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 44
        echo "                <tr>
                    <th>Short name</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetimeString", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeEnabled", [], "any", false, false, false, 59)) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 60), "html", null, true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 62), "html", null, true);
            echo "</span> <em>delayed</em>
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtimeString", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>";
        // line 76
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "deactivatetimeString", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "processBalloons", [], "any", false, false, false, 84)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "public", [], "any", false, false, false, 88)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 92)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 97)) {
            // line 98
            echo "                            <em>all teams</em>
                        ";
        } else {
            // line 100
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teams", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 101
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">
                                    ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 102), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 102), "html", null, true);
                echo ")
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teamCategories", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 107
                echo "                                All teams from
                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                                    ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 109), "html", null, true);
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        ";
        }
        // line 114
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 120)) {
            // line 121
            echo "        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 128), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "b", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
            // line 136
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizecomment", [], "any", false, false, false, 136), "html", null, true));
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if (($context["allowRemovedIntervals"] ?? null)) {
            // line 144
            echo "        <h2>Removed intervals</h2>
        ";
            // line 145
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "removedIntervals", [], "any", false, false, false, 145)))) {
                // line 146
                echo "            <p class=\"nodata\">None.</p>
        ";
            } else {
                // line 148
                echo "            ";
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 149
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_start');
                    echo "
            ";
                }
                // line 151
                echo "            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["removedIntervals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 166
                    echo "                            <tr>
                                <td>";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 167), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 168), "html", null, true);
                    echo "</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>";
                    // line 170
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 170), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 171
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttime", [], "any", false, false, false, 171), twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtime", [], "any", false, false, false, 171)), "html", null, true);
                    echo "</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 174), "intervalId" => twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 174)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 180
                    echo "                            <tr>
                                <td>new</td>
                                <td>
                                    ";
                    // line 183
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 183), 'errors');
                    echo "
                                    ";
                    // line 184
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 184), 'widget');
                    echo "
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    ";
                    // line 188
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 188), 'errors');
                    echo "
                                    ";
                    // line 189
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 189), 'widget');
                    echo "
                                </td>
                                <td></td>
                                <td>";
                    // line 192
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "add", [], "any", false, false, false, 192), 'widget');
                    echo "</td>
                            </tr>
                        ";
                }
                // line 195
                echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
                // line 199
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 200
                    echo "                <small class=\"text-muted\">Use the format <b><tt>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</tt></b> for
                    start/end times.
                </small>
                ";
                    // line 203
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_end');
                    echo "
            ";
                }
                // line 205
                echo "        ";
            }
            // line 206
            echo "
        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    ";
        }
        // line 221
        echo "
    <h2 class=\"mt-2\">Problems</h2>

    ";
        // line 224
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 225
            echo "        <p class=\"nodata\">No problems added yet</p>
    ";
        } else {
            // line 227
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 245
                echo "                        <tr>
                            ";
                // line 246
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 246)]);
                // line 247
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 247), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 248
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 249
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 249), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 250
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 250), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 251
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 251)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 252
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 252)), "html", null, true);
                echo "</a></td>
                            ";
                // line 253
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 253))) {
                    // line 254
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 256
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 256), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 257
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                                        <div class=\"circle\" style=\"background-color: ";
                    // line 258
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 258), "html", null, true);
                    echo "\"></div>
                                    </a>
                                </td>
                            ";
                }
                // line 262
                echo "                            <td>
                                <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                                    ";
                // line 264
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 264))) {
                    // line 265
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 265)), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 267
                    echo "                                        -
                                    ";
                }
                // line 269
                echo "                                </a>
                            </td>
                            <td>
                                ";
                // line 272
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 273
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 273), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 273)]), "html", null, true);
                    echo "\" data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 277
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 285
        echo "
    <p>";
        // line 287
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 288
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 288)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 289
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 289)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 291
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 291)) {
            // line 292
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 292)]), "Update finalization", "secondary", "lock");
            echo "
        ";
        } else {
            // line 294
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 294)]), "Finalize this contest", "secondary", "lock");
            echo "
        ";
        }
        // line 296
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 296)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 296), "buttonClass" => "btn-secondary"]));
        // line 297
        echo "    </p>

";
    }

    public function getTemplateName()
    {
        return "jury/contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 297,  657 => 296,  651 => 294,  645 => 292,  642 => 291,  637 => 289,  633 => 288,  631 => 287,  628 => 285,  621 => 280,  613 => 277,  605 => 273,  603 => 272,  598 => 269,  594 => 267,  588 => 265,  586 => 264,  582 => 263,  579 => 262,  572 => 258,  568 => 257,  563 => 256,  557 => 254,  555 => 253,  549 => 252,  543 => 251,  537 => 250,  531 => 249,  525 => 248,  518 => 247,  516 => 246,  513 => 245,  509 => 244,  490 => 227,  486 => 225,  484 => 224,  479 => 221,  462 => 206,  459 => 205,  454 => 203,  449 => 200,  447 => 199,  441 => 195,  435 => 192,  429 => 189,  425 => 188,  418 => 184,  414 => 183,  409 => 180,  406 => 179,  395 => 174,  389 => 171,  385 => 170,  380 => 168,  376 => 167,  373 => 166,  369 => 165,  353 => 151,  347 => 149,  344 => 148,  340 => 146,  338 => 145,  335 => 144,  333 => 143,  330 => 142,  321 => 136,  314 => 132,  307 => 128,  298 => 121,  296 => 120,  288 => 114,  285 => 113,  275 => 109,  271 => 108,  268 => 107,  263 => 106,  251 => 102,  246 => 101,  241 => 100,  237 => 98,  235 => 97,  227 => 92,  220 => 88,  213 => 84,  206 => 80,  199 => 76,  192 => 72,  185 => 68,  179 => 64,  173 => 62,  167 => 60,  165 => 59,  157 => 54,  150 => 50,  143 => 46,  139 => 44,  133 => 41,  129 => 39,  127 => 38,  122 => 36,  114 => 30,  108 => 26,  105 => 25,  99 => 21,  96 => 20,  90 => 16,  88 => 15,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contest.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/contest.html.twig");
    }
}
