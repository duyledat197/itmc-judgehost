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

/* jury/language.html.twig */
class __TwigTemplate_7b9aca19da0f50a53099753568ff099759f2b04cb78bf76b71ca745268de4072 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/language.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/language.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Language ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Language ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["language"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Entry point</th>
                    <td>
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "requireEntryPoint", [], "any", false, false, false, 35)), "html", null, true);
        echo "
                        ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "requireEntryPoint", [], "any", false, false, false, 36) && twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "entryPointDescription", [], "any", false, false, false, 36))) {
            // line 37
            echo "                            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "entryPointDescription", [], "any", false, false, false, 37), "html", null, true);
            echo ")
                        ";
        }
        // line 39
        echo "                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowSubmit", [], "any", false, false, false, 44)), "html", null, true);
        echo "
                        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_submit", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowSubmit", [], "any", false, false, false, 46), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowJudge", [], "any", false, false, false, 54)), "html", null, true);
        echo "
                        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_judge", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_judge\" value=\"";
        // line 56
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowJudge", [], "any", false, false, false, 56), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "timeFactor", [], "any", false, false, false, 63), "html", null, true);
        echo " &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 68)) {
            // line 69
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 71
            echo "                            <span class=\"nodata\">none specified</span>
                        ";
        }
        // line 73
        echo "                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "extensions", [], "any", false, false, false, 77), ", "), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "filterCompilerFiles", [], "any", false, false, false, 82)), "html", null, true);
        echo "
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <p>";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_edit", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 91)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_delete", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 92)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 94
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/language.html.twig", 94)->display(twig_array_merge($context, ["table" => "language", "id" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 94), "buttonClass" => "btn-secondary"]));
        // line 95
        echo "    </p>

    <h2>Submissions in ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 97), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 100
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/language.html.twig", 100)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 101
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 101,  247 => 100,  242 => 97,  238 => 95,  235 => 94,  230 => 92,  226 => 91,  224 => 90,  214 => 82,  206 => 77,  200 => 73,  196 => 71,  188 => 69,  186 => 68,  178 => 63,  168 => 56,  164 => 55,  160 => 54,  149 => 46,  145 => 45,  141 => 44,  134 => 39,  128 => 37,  126 => 36,  122 => 35,  114 => 30,  110 => 28,  104 => 25,  100 => 23,  98 => 22,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/language.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/language.html.twig");
    }
}
