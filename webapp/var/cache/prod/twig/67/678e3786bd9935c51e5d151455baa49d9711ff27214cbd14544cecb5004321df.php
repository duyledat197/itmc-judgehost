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

/* jury/balloons.html.twig */
class __TwigTemplate_aee7055f9f6ad5f3f0381740457936c268c914a49f74f01a94573359a9f8c71b extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/balloons.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/balloons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Balloons - ";
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
    ";
        // line 14
        if ((null === ($context["current_contest"] ?? null))) {
            // line 15
            echo "        <h1>Balloons</h1>
        <p class=\"nodata\">No active contest</p>
    ";
        } else {
            // line 18
            echo "
    <h1>Balloons - ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>

    ";
            // line 21
            if (($context["isfrozen"] ?? null)) {
                // line 22
                echo "        <div class=\"alert alert-info\"><i class=\"fas fa-snowflake\"></i> Scoreboard of c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "cid", [], "any", false, false, false, 22), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "shortname", [], "any", false, false, false, 22), "html", null, true);
                echo ") is now frozen.</div>
    ";
            }
            // line 24
            echo "
    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
            // line 27
            if (($context["hasFilters"] ?? null)) {
                echo "active";
            }
            echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
            // line 28
            if (($context["hasFilters"] ?? null)) {
                echo "checked";
            }
            echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
            // line 32
            if ( !($context["hasFilters"] ?? null)) {
                echo " d-none";
            }
            echo "\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"affiliation-filter\">Filter on affiliation(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"affiliation-id\"
                                data-ajax-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "affiliations", "select2" => true]), "html", null, true);
            echo "\">";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filteredAffiliations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                // line 40
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 40), "html", null, true);
                echo "\" selected>
                                    ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo " (a";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 41), "html", null, true);
                echo ")
                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
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
    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_balloons_filter\">";
            // line 56
            $this->loadTemplate("jury/partials/balloon_list.html.twig", "jury/balloons.html.twig", 56)->display($context);
            // line 57
            echo "    </div>
    ";
        }
        // line 59
        echo "
";
    }

    // line 62
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    <script>
        \$(function () {
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

            window.process_balloons_filter = function () {
                var \$trs = \$('table.balloons-table > tbody tr');

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

                var balloons_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    balloons_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_balloonsfilter', JSON.stringify(balloons_filter));

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

            \$('select[data-filter-field]').on('change', process_balloons_filter);
            window.process_balloons_filter();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/balloons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 63,  188 => 62,  183 => 59,  179 => 57,  177 => 56,  164 => 44,  154 => 41,  149 => 40,  145 => 39,  142 => 38,  131 => 32,  122 => 28,  116 => 27,  111 => 24,  103 => 22,  101 => 21,  96 => 19,  93 => 18,  88 => 15,  86 => 14,  83 => 13,  79 => 12,  73 => 9,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/balloons.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/balloons.html.twig");
    }
}
