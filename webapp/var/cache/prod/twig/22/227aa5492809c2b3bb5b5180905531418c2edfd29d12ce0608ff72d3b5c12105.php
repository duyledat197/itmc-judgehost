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

/* jury/rejudging.html.twig */
class __TwigTemplate_f63c9281325baf6a0e1edd4caafe7e5238c2765540405796a07b88346bfb08e6 extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Rejudging r";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 14)) {
            echo "(canceled)";
        }
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <span class=\"nodata\">none</span>
                        ";
        } else {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
        }
        // line 27
        echo "                    </td>
                </tr>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 33), "userid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <tr>
                        <th>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 41)) {
                echo "Accepted";
            } else {
                echo "Canceled";
            }
            echo " by</th>
                        <td>
                            ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "autoapply", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                automatically applied
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 45
($context["rejudging"] ?? null), "repeat", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                part of a repeated judging
                            ";
            } else {
                // line 48
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 48), "userid", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 52
            echo "                        </td>
                    </tr>
                ";
        }
        // line 55
        echo "                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 59), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 60)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 63
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 70)) {
            // line 71
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 71), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 72)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 75
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 77
        echo "                    </td>
                </tr>
                <tr ";
        // line 79
        if ((($context["todo"] ?? null) <= 0)) {
            echo "class=\"d-none\"";
        }
        echo ">
                    <th>Queued</th>
                    <td><span data-todo>";
        // line 81
        echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
        echo "</span> unfinished judgings</td>
                </tr>
                ";
        // line 83
        if (($context["repetitions"] ?? null)) {
            // line 84
            echo "                    <tr>
                        <th>Repetitions</th>
                        <td>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["repetitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 88
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => $context["rep"]]), "html", null, true);
                echo "\">
                                    r";
                // line 89
                echo twig_escape_filter($this->env, $context["rep"], "html", null, true);
                echo "<br/>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        </td>
                    </tr>
                ";
        }
        // line 95
        echo "            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        ";
        // line 100
        $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/rejudging.html.twig", 100)->display($context);
        // line 101
        echo "    </div>

    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "autoapply", [], "any", false, false, false, 103) &&  !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 103))) {
            // line 104
            echo "         <br/>
         <div class=\"alert alert-warning\">Judgings in this rejudging will be applied automatically.</div>
    ";
        }
        // line 107
        echo "
    <div data-rejudging-matrix>
        ";
        // line 109
        $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/rejudging.html.twig", 109)->display($context);
        // line 110
        echo "    </div>

    <h2 class=\"mt-4\">Details</h2>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 117
            echo "
            <label class=\"btn btn-secondary ";
            // line 118
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 120
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
            </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </div>

    <form action=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 125)]), "html", null, true);
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["viewTypes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["view"] ?? null)] ?? null) : null), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" ";
        // line 131
        if ((($context["oldverdict"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 133
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((($context["oldverdict"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 134
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" ";
        // line 143
        if ((($context["newverdict"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 145
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((($context["newverdict"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 146
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 158), "view" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["viewTypes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["view"] ?? null)] ?? null) : null)]), "html", null, true);
        echo "\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        ";
        // line 165
        $this->loadTemplate("jury/partials/rejudging_submissions.html.twig", "jury/rejudging.html.twig", 165)->display($context);
        // line 166
        echo "    </div>

";
    }

    // line 170
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 174), "view" => "REPLACE_ME", "oldverdict" => ($context["oldverdict"] ?? null), "newverdict" => ($context["newverdict"] ?? null)]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-rejudging-matrix]');
                var \$matrix = \$('[data-rejudging-matrix]');
                \$matrix.html(\$matrixData.children());

                var \$buttonData = \$('[data-new-rejudging-buttons]');
                var \$button = \$('[data-rejudging-buttons]');
                \$button.html(\$buttonData.children());

                var todo = \$('[data-new-todo]').text();
                var \$todo = \$('[data-todo]');
                \$todo.text(todo);
                if (parseInt(todo) <= 0) {
                    \$todo.closest('tr').addClass('d-none');
                } else {
                    \$todo.closest('tr').removeClass('d-none');
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/rejudging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 174,  443 => 171,  439 => 170,  433 => 166,  431 => 165,  421 => 158,  410 => 149,  402 => 146,  393 => 145,  389 => 144,  384 => 143,  376 => 137,  368 => 134,  359 => 133,  355 => 132,  350 => 131,  342 => 126,  338 => 125,  334 => 123,  322 => 120,  318 => 119,  312 => 118,  309 => 117,  305 => 116,  298 => 110,  296 => 109,  292 => 107,  287 => 104,  285 => 103,  281 => 101,  279 => 100,  272 => 95,  267 => 92,  258 => 89,  253 => 88,  249 => 87,  244 => 84,  242 => 83,  237 => 81,  230 => 79,  226 => 77,  222 => 75,  216 => 72,  211 => 71,  209 => 70,  202 => 65,  198 => 63,  192 => 60,  187 => 59,  185 => 58,  180 => 55,  175 => 52,  169 => 49,  164 => 48,  160 => 46,  158 => 45,  155 => 44,  153 => 43,  144 => 41,  141 => 40,  138 => 39,  130 => 34,  126 => 33,  121 => 30,  119 => 29,  115 => 27,  109 => 25,  105 => 23,  103 => 22,  88 => 14,  85 => 13,  81 => 12,  75 => 9,  71 => 8,  66 => 7,  62 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudging.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/rejudging.html.twig");
    }
}
