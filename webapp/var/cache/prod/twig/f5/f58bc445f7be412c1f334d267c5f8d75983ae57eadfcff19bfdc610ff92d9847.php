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

/* jury/partials/contest_form.html.twig */
class __TwigTemplate_4b42cd259e546b35bc9f4b97ba4fdc34591b24bbcb8651e674f7cd78bc9cecf7 extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-lg-4\">

        ";
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "externalid"], "method", false, false, false, 8)) {
            // line 9
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "externalid", [], "any", false, false, false, 9), 'row');
            echo "
        ";
        }
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shortname", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "activatetimeString", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "starttimeString", [], "any", false, false, false, 14), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "starttimeEnabled", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "freezetimeString", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endtimeString", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unfreezetimeString", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "deactivatetimeString", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "processBalloons", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "public", [], "any", false, false, false, 21), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "openToAllTeams", [], "any", false, false, false, 22), 'row');
        echo "
        <div data-teams-field>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", false, false, false, 24), 'row');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "teamCategories", [], "any", false, false, false, 25), 'row');
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 27), 'row');
        echo "
    </div>
    <div class=\"col-lg-4\">
        <b>Specification of contest times:</b><br/>
        Each of the contest times can be specified as absolute time or relative<br/>
        to the start time (except for start time itself). Use up to 6 subsecond<br/>
        decimals and a timezone from the
        <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">
            time zone database
        </a>.<br/><br/>
        Absolute time format: <b><tt>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</tt></b><br/>
        Relative time format: <b><tt>±[HHH]H:MM[:SS[.uuuuuu]]</tt></b><br/>
    </div>
</div>
<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "prototype", [], "any", false, false, false, 44), "problem", [], "any", false, false, false, 44), 'label');
        echo "</th>
        <th>";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "prototype", [], "any", false, false, false, 45), "shortname", [], "any", false, false, false, 45), 'label');
        echo "</th>
        <th>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "prototype", [], "any", false, false, false, 46), "points", [], "any", false, false, false, 46), 'label');
        echo "</th>
        <th>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "prototype", [], "any", false, false, false, 47), "allowSubmit", [], "any", false, false, false, 47), 'label');
        echo "</th>
        <th>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "prototype", [], "any", false, false, false, 48), "allowJudge", [], "any", false, false, false, 48), 'label');
        echo "</th>
        <th>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "prototype", [], "any", false, false, false, 49), "color", [], "any", false, false, false, 49), 'label');
        echo "</th>
        <th>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "prototype", [], "any", false, false, false, 50), "lazyEvalResults", [], "any", false, false, false, 50), 'label');
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody data-collection-holder data-after-add=\"bindColor\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 56
            echo "        <tr>
            <td>
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 58), 'errors');
            echo "
                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 59), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 62), 'errors');
            echo "
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 63), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 66), 'errors');
            echo "
                ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 67), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 70), 'errors');
            echo "
                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 71), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 74), 'errors');
            echo "
                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 75), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 78), 'errors');
            echo "
                ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 79), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 82), 'errors');
            echo "
                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 83), 'widget');
            echo "
            </td>
            <td>
                <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"7\"></td>
        <td>
            <button type=\"button\" data-add class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
        </td>
    </tr>
    </tfoot>
</table>

<script type=\"text/html\" data-prototype>
    <tr>
        <td>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "prototype", [], "any", false, false, false, 103), "problem", [], "any", false, false, false, 103), 'widget');
        echo "</td>
        <td>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "prototype", [], "any", false, false, false, 104), "shortname", [], "any", false, false, false, 104), 'widget');
        echo "</td>
        <td>";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "prototype", [], "any", false, false, false, 105), "points", [], "any", false, false, false, 105), 'widget');
        echo "</td>
        <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "prototype", [], "any", false, false, false, 106), "allowSubmit", [], "any", false, false, false, 106), 'widget');
        echo "</td>
        <td>";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "prototype", [], "any", false, false, false, 107), "allowJudge", [], "any", false, false, false, 107), 'widget');
        echo "</td>
        <td>";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "prototype", [], "any", false, false, false, 108), "color", [], "any", false, false, false, 108), 'widget');
        echo "</td>
        <td>";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "prototype", [], "any", false, false, false, 109), "lazyEvalResults", [], "any", false, false, false, 109), 'widget');
        echo "</td>
        <td>
            <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
        </td>
    </tr>
</script>

";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<script>
    function bindColor() {
        jscolor.bind();
    }

    \$(function () {
        function showHideTeams() {
            if (\$('#contest_openToAllTeams_1').is(':checked')) {
                \$('[data-teams-field]').show();
            } else {
                \$('[data-teams-field]').hide();
            }
        }

        \$('#contest_openToAllTeams_1, #contest_openToAllTeams_0').on('change', showHideTeams);
        showHideTeams();
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/contest_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 116,  293 => 109,  289 => 108,  285 => 107,  281 => 106,  277 => 105,  273 => 104,  269 => 103,  254 => 90,  241 => 83,  237 => 82,  231 => 79,  227 => 78,  221 => 75,  217 => 74,  211 => 71,  207 => 70,  201 => 67,  197 => 66,  191 => 63,  187 => 62,  181 => 59,  177 => 58,  173 => 56,  169 => 55,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  117 => 27,  112 => 25,  108 => 24,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  58 => 11,  52 => 9,  50 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/contest_form.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/contest_form.html.twig");
    }
}
