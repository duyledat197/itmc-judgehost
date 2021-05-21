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

/* jury/submissions.html.twig */
class __TwigTemplate_0e45a0de5abbe8ab16264cc45fab9361cc054d8f2b6966ed5d741bb89bab31f3 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/submissions.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submissions - ";
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
    <h1>Submissions</h1>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 19
            echo "
            <label class=\"btn btn-secondary ";
            // line 20
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 22
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
        // line 25
        echo "
    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
        // line 30
        if (($context["hasFilters"] ?? null)) {
            echo "active";
        }
        echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
        // line 31
        if (($context["hasFilters"] ?? null)) {
            echo "checked";
        }
        echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
        // line 35
        if ( !($context["hasFilters"] ?? null)) {
            echo " d-none";
        }
        echo "\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on problem(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"problem-id\"
                                data-ajax-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "problems", "select2" => true]), "html", null, true);
        echo "\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredProblems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 43
            echo "
                                <option value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 44), "html", null, true);
            echo "\" selected>
                                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo " (p";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 45), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on language(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"language-id\"
                                data-ajax-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "languages", "select2" => true]), "html", null, true);
        echo "\">";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 59
            echo "
                                <option value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 60), "html", null, true);
            echo "\" selected>
                                    ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 61), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on team(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"team-id\"
                                data-ajax-url=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "teams", "select2" => true]), "html", null, true);
        echo "\">";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredTeams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 75
            echo "
                                <option value=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 76), "html", null, true);
            echo "\" selected>
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 77), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 77), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_submissions_filter\">";
        // line 93
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/submissions.html.twig", 93)->display(twig_array_merge($context, ["showTestcases" => true]));
        // line 94
        echo "    </div>

";
    }

    // line 98
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions", ["view" => "REPLACE_ME"]);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_submissions_filter = function () {
                var \$trs = \$('table.submissions-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var submissions_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    submissions_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_submissionsfilter', JSON.stringify(submissions_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_submissions_filter);
            window.process_submissions_filter();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 102,  271 => 99,  267 => 98,  261 => 94,  259 => 93,  245 => 80,  235 => 77,  231 => 76,  228 => 75,  224 => 74,  221 => 73,  210 => 64,  200 => 61,  196 => 60,  193 => 59,  189 => 58,  186 => 57,  175 => 48,  165 => 45,  161 => 44,  158 => 43,  154 => 42,  151 => 41,  140 => 35,  131 => 31,  125 => 30,  118 => 25,  106 => 22,  102 => 21,  96 => 20,  93 => 19,  89 => 18,  83 => 13,  79 => 12,  73 => 9,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submissions.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/submissions.html.twig");
    }
}
