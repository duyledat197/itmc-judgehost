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

/* jury/clarifications.html.twig */
class __TwigTemplate_a88e64c1cbda66162ce849296ebc333e46baa76ae302d08f393cb6aa88867779 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/clarifications.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Clarifications - ";
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
    <h1>Clarifications</h1>";
        // line 15
        if (twig_test_empty(($context["current_contests"] ?? null))) {
            // line 16
            echo "
        <div class=\"alert alert-danger\">No active contest(s)</div>";
        } else {
            // line 19
            echo "
        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_new");
            echo "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        <br />
        <br />

        Filter:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <label class=\"btn btn-secondary ";
            // line 28
            if ((null === ($context["currentFilter"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       ";
            // line 30
            if ((null === ($context["currentFilter"] ?? null))) {
                echo "checked";
            }
            echo "> All
            </label>
            <label class=\"btn btn-secondary ";
            // line 32
            if ((($context["currentFilter"] ?? null) == "new")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       ";
            // line 34
            if ((($context["currentFilter"] ?? null) == "new")) {
                echo "checked";
            }
            echo "> New
            </label>
            <label class=\"btn btn-secondary ";
            // line 36
            if ((($context["currentFilter"] ?? null) == "old")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       ";
            // line 38
            if ((($context["currentFilter"] ?? null) == "old")) {
                echo "checked";
            }
            echo "> Old
            </label>
            <label class=\"btn btn-secondary ";
            // line 40
            if ((($context["currentFilter"] ?? null) == "general")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       ";
            // line 42
            if ((($context["currentFilter"] ?? null) == "general")) {
                echo "checked";
            }
            echo "> General
            </label>
        </div>

        ";
            // line 46
            if ((twig_length_filter($this->env, ($context["queues"] ?? null)) > 0)) {
                // line 47
                echo "            Queue:
            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <label class=\"btn btn-secondary ";
                // line 49
                if ((null === ($context["currentQueue"] ?? null))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           ";
                // line 51
                if ((null === ($context["currentQueue"] ?? null))) {
                    echo "checked";
                }
                echo "> All
                </label>
                <label class=\"btn btn-secondary ";
                // line 53
                if (( !(null === ($context["currentQueue"] ?? null)) && (($context["currentQueue"] ?? null) == ""))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"\"
                           ";
                // line 55
                if (( !(null === ($context["currentQueue"] ?? null)) && (($context["currentQueue"] ?? null) == ""))) {
                    echo "checked";
                }
                echo "> Unassigned
                </label>";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["queues"] ?? null));
                foreach ($context['_seq'] as $context["queue"] => $context["name"]) {
                    // line 58
                    echo "                    <label class=\"btn btn-secondary ";
                    if ((($context["currentQueue"] ?? null) == $context["queue"])) {
                        echo "active";
                    }
                    echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                    echo "\"
                               ";
                    // line 60
                    if ((($context["currentQueue"] ?? null) == $context["queue"])) {
                        echo "checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </label>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['queue'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </div>
        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if (((null === ($context["currentFilter"] ?? null)) || (($context["currentFilter"] ?? null) == "new"))) {
                // line 67
                echo "            <h3 id=\"newrequests\">New requests:</h3>";
                // line 68
                if ((twig_length_filter($this->env, ($context["newClarifications"] ?? null)) == 0)) {
                    // line 69
                    echo "                <p class=\"nodata\">No new clarification requests.</p>";
                } else {
                    // line 71
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 71)->display(twig_array_merge($context, ["clarifications" => ($context["newClarifications"] ?? null)]));
                }
                // line 73
                echo "        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if (((null === ($context["currentFilter"] ?? null)) || (($context["currentFilter"] ?? null) == "old"))) {
                // line 76
                echo "            <h3 id=\"oldrequests\">Old requests:</h3>";
                // line 77
                if ((twig_length_filter($this->env, ($context["oldClarifications"] ?? null)) == 0)) {
                    // line 78
                    echo "                <p class=\"nodata\">No old clarification requests.</p>";
                } else {
                    // line 80
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 80)->display(twig_array_merge($context, ["clarifications" => ($context["oldClarifications"] ?? null)]));
                }
                // line 82
                echo "        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (((null === ($context["currentFilter"] ?? null)) || (($context["currentFilter"] ?? null) == "general"))) {
                // line 85
                echo "            <h3 id=\"clarifications\">General clarifications:</h3>";
                // line 86
                if ((twig_length_filter($this->env, ($context["generalClarifications"] ?? null)) == 0)) {
                    // line 87
                    echo "                <p class=\"nodata\">No general clarifications.</p>";
                } else {
                    // line 89
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 89)->display(twig_array_merge($context, ["clarifications" => ($context["generalClarifications"] ?? null)]));
                }
                // line 91
                echo "        ";
            }
        }
        // line 93
        echo "
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications", ["queue" => "REPLACE_QUEUE", "filter" => "REPLACE_FILTER"]), "html", null, true);
        echo "'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val())
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => 12345]);
        echo "\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "jury/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 122,  284 => 97,  278 => 93,  274 => 91,  271 => 89,  268 => 87,  266 => 86,  264 => 85,  262 => 84,  259 => 83,  256 => 82,  253 => 80,  250 => 78,  248 => 77,  246 => 76,  244 => 75,  241 => 74,  238 => 73,  235 => 71,  232 => 69,  230 => 68,  228 => 67,  226 => 66,  223 => 65,  219 => 63,  207 => 60,  203 => 59,  196 => 58,  192 => 57,  186 => 55,  179 => 53,  172 => 51,  165 => 49,  161 => 47,  159 => 46,  150 => 42,  143 => 40,  136 => 38,  129 => 36,  122 => 34,  115 => 32,  108 => 30,  101 => 28,  90 => 20,  87 => 19,  83 => 16,  81 => 15,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/clarifications.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/clarifications.html.twig");
    }
}
