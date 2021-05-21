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

/* jury/shadow_differences.html.twig */
class __TwigTemplate_c51a33f79750263f039c56262f017d68f39f86c64aecbe03b6149c14bd44ca6b extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/shadow_differences.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/shadow_differences.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shadow differences - ";
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
    <h1>Shadow differences</h1>";
        // line 16
        if (twig_test_empty(($context["current_contests"] ?? null))) {
            // line 17
            echo "        <div class=\"alert alert-danger\">No active contest</div>";
        } else {
            // line 19
            echo "        <div data-shadow-matrix>
            ";
            // line 20
            $this->loadTemplate("jury/partials/shadow_matrix.html.twig", "jury/shadow_differences.html.twig", 20)->display($context);
            // line 21
            echo "        </div>

        <h2 class=\"mt-4\">Details</h2>

        Show submissions:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 28
                echo "
                <label class=\"btn btn-secondary ";
                // line 29
                if (($context["idx"] == ($context["view"] ?? null))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 31
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
            // line 34
            echo "        </div>
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verificationViewTypes"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 37
                echo "
                <label class=\"btn btn-secondary ";
                // line 38
                if (($context["idx"] == ($context["verificationView"] ?? null))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"verificationviewtype\" autocomplete=\"off\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 40
                if (($context["idx"] == ($context["verificationView"] ?? null))) {
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
            // line 43
            echo "        </div>

        <form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
            echo "\" method=\"get\">
            <input type=\"hidden\" name=\"view\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["viewTypes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["view"] ?? null)] ?? null) : null), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"verificationview\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["verificationView"] ?? null)] ?? null) : null), "html", null, true);
            echo "\"/>
            <div class=\"form-row\">
                <div class=\"form-group col-md-4\">
                    <label for=\"oldverdict\">External verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"external\"
                            id=\"external\">
                        <option value=\"all\" ";
            // line 53
            if ((($context["external"] ?? null) == "all")) {
                echo "selected";
            }
            echo ">all</option>";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 55
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\"
                                    ";
                // line 56
                if ((($context["external"] ?? null) == $context["verdict"])) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 57
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                    </select>
                </div>
                <div class=\"form-group col-md-4\">
                    <label for=\"newverdict\">Local verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"local\" id=\"local\">
                        <option value=\"all\" ";
            // line 66
            if ((($context["local"] ?? null) == "all")) {
                echo "selected";
            }
            echo ">all</option>";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 68
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\" ";
                if ((($context["local"] ?? null) == $context["verdict"])) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 69
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
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
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["viewTypes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["view"] ?? null)] ?? null) : null), "verificationview" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["verificationView"] ?? null)] ?? null) : null)]), "html", null, true);
            echo "\"
                       class=\"btn btn-secondary form-control\">Clear</a>
                </div>
            </div>
        </form>

        <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
            ";
            // line 88
            $this->loadTemplate("jury/partials/shadow_submissions.html.twig", "jury/shadow_differences.html.twig", 88)->display($context);
            // line 89
            echo "        </div>
    ";
        }
        // line 91
        echo "
";
    }

    // line 94
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        if ( !twig_test_empty(($context["current_contests"] ?? null))) {
            // line 96
            echo "        <script>
            \$(function () {
                \$('input[name=viewtype]').on('change', function () {
                    window.location = '";
            // line 99
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "REPLACE_ME", "verificationview" => (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["verificationView"] ?? null)] ?? null) : null), "external" => ($context["external"] ?? null), "local" => ($context["local"] ?? null)]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });
                \$('input[name=verificationviewtype]').on('change', function () {
                    window.location = '";
            // line 102
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["viewTypes"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["view"] ?? null)] ?? null) : null), "verificationview" => "REPLACE_ME", "external" => ($context["external"] ?? null), "local" => ($context["local"] ?? null)]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });

                \$('.select2').select2();

                window.updateMatrix = function () {
                    var \$matrixData = \$('[data-new-shadow-matrix]');
                    var \$matrix = \$('[data-shadow-matrix]');
                    \$matrix.html(\$matrixData.children());
                }
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "jury/shadow_differences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 102,  290 => 99,  285 => 96,  283 => 95,  279 => 94,  274 => 91,  270 => 89,  268 => 88,  258 => 81,  247 => 72,  239 => 69,  230 => 68,  226 => 67,  221 => 66,  213 => 60,  205 => 57,  199 => 56,  194 => 55,  190 => 54,  185 => 53,  176 => 47,  172 => 46,  168 => 45,  164 => 43,  152 => 40,  148 => 39,  142 => 38,  139 => 37,  135 => 36,  132 => 34,  120 => 31,  116 => 30,  110 => 29,  107 => 28,  103 => 27,  96 => 21,  94 => 20,  91 => 19,  88 => 17,  86 => 16,  83 => 13,  79 => 12,  73 => 9,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/shadow_differences.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/shadow_differences.html.twig");
    }
}
