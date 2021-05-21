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

/* jury/executable.html.twig */
class __TwigTemplate_1c66662c600f371743f04d32ce32cf7070e0f206e9aecbe3f05ae799a23528f1 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>MD5sum</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "md5sum", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "zipFileSize", [], "any", false, false, false, 36), "html", null, true);
        echo " bytes</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_content", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
                            View file contents
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Used as ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 47), "html", null, true);
        echo " script</th>
                    <td>
                        ";
        // line 49
        $context["used"] = false;
        // line 50
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 50) == "compare") && (($context["default_compare"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 50)))) {
            // line 51
            echo "                            <em>default compare</em>
                            ";
            // line 52
            $context["used"] = true;
            // line 53
            echo "                        ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 53) == "run") && (($context["default_run"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 53)))) {
            // line 54
            echo "                            <em>default run</em>
                            ";
            // line 55
            $context["used"] = true;
            // line 56
            echo "                        ";
        }
        // line 57
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 57) == "compare")) {
            // line 58
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "problemsCompare", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 59
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                                    p";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                </a>
                                ";
                // line 62
                $context["used"] = true;
                // line 63
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 64) == "run")) {
            // line 65
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "problemsRun", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 66
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">
                                    p";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 67), "html", null, true);
                echo "
                                </a>
                                ";
                // line 69
                $context["used"] = true;
                // line 70
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 71) == "compile")) {
            // line 72
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "languages", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 73
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">
                                    ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 74), "html", null, true);
                echo "
                                </a>
                                ";
                // line 76
                $context["used"] = true;
                // line 77
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                        ";
        if ( !($context["used"] ?? null)) {
            // line 80
            echo "                            <span class=\"nodata\">none</span>
                        ";
        }
        // line 82
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "<p>
                ";
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 91)]), "Download", "secondary", "file-download");
            echo "
                ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 92)]), "Edit", "primary", "edit");
            echo "
                ";
            // line 93
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 93)]), "Delete", "danger", "trash-alt", true);
            echo "
            </p>
        ";
        }
        // line 96
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/executable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 96,  273 => 93,  269 => 92,  265 => 91,  262 => 90,  260 => 89,  252 => 82,  248 => 80,  245 => 79,  242 => 78,  236 => 77,  234 => 76,  229 => 74,  224 => 73,  219 => 72,  216 => 71,  210 => 70,  208 => 69,  203 => 67,  198 => 66,  193 => 65,  190 => 64,  184 => 63,  182 => 62,  177 => 60,  172 => 59,  167 => 58,  164 => 57,  161 => 56,  159 => 55,  156 => 54,  153 => 53,  151 => 52,  148 => 51,  145 => 50,  143 => 49,  138 => 47,  129 => 41,  121 => 36,  114 => 32,  107 => 28,  100 => 24,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/executable.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/executable.html.twig");
    }
}
