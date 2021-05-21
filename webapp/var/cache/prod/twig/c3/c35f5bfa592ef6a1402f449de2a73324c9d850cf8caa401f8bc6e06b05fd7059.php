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

/* jury/internal_error.html.twig */
class __TwigTemplate_20620b495a8df1147f3651e5d4b11ef33450494899c61a930663e8ccc968d72c extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_error.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Internal error e";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Internal error e";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        ";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "description", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <span class=\"nodata\">None</span>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        ";
        }
        // line 26
        echo "                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "time", [], "any", false, false, false, 30), "%F %T"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "status", [], "any", false, false, false, 34)), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judgingid", [], "any", false, false, false, 36))) {
            // line 37
            echo "                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judgingid", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                j";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judgingid", [], "any", false, false, false, 41), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 46
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "cid", [], "any", false, false, false, 46))) {
            // line 47
            echo "                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "cid", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                c";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "cid", [], "any", false, false, false, 51), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 56
        echo "                ";
        if ( !(null === ($context["affectedText"] ?? null))) {
            // line 57
            echo "                    <tr>
                        <th>Affected ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "disabled", [], "any", false, false, false, 58), "kind", [], "any", false, false, false, 58), "html", null, true);
            echo "</th>
                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["affectedLink"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["affectedText"] ?? null), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
        }
        // line 62
        echo "                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">";
        // line 65
        echo twig_escape_filter($this->env, base64_decode(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judgehostlog", [], "any", false, false, false, 65)), "html", null, true);
        echo "</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "status", [], "any", false, false, false, 72) == "open")) {
            // line 73
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 73), "action" => "ignore"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 80), "action" => "resolve"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "disabled", [], "any", false, false, false, 83), "kind", [], "any", false, false, false, 83), "html", null, true);
            echo "
            </button>
        </form>
    ";
        }
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 87,  215 => 83,  209 => 80,  198 => 73,  196 => 72,  186 => 65,  181 => 62,  173 => 59,  169 => 58,  166 => 57,  163 => 56,  155 => 51,  151 => 50,  146 => 47,  143 => 46,  135 => 41,  131 => 40,  126 => 37,  124 => 36,  119 => 34,  112 => 30,  106 => 26,  100 => 24,  96 => 22,  94 => 21,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/internal_error.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/internal_error.html.twig");
    }
}
