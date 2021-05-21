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

/* jury/judgehost_restriction.html.twig */
class __TwigTemplate_6c2348bbd158cbcb5942e0f3746c3371453ebdfae99209f3b4c90045a2476922 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost_restriction.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost_restriction.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Judgehost restriction ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Judgehost restriction ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "restrictionid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Restrict to contests</th>
                    ";
        // line 28
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "contests", [], "any", false, false, false, 28))) {
            // line 29
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 31
            echo "                        <td>
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "contests", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
                // line 33
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["contests"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["contest"]] ?? null) : null), "name", [], "any", false, false, false, 33), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["contests"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["contest"]] ?? null) : null), "shortname", [], "any", false, false, false, 33), "html", null, true);
                echo " - c";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </td>
                    ";
        }
        // line 37
        echo "                </tr>
                <tr>
                    <th>Restrict to problems</th>
                    ";
        // line 40
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "problems", [], "any", false, false, false, 40))) {
            // line 41
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 43
            echo "                        <td>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "problems", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["problems"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["problem"]] ?? null) : null), "name", [], "any", false, false, false, 45), "html", null, true);
                echo " (p";
                echo twig_escape_filter($this->env, $context["problem"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        </td>
                    ";
        }
        // line 49
        echo "                </tr>
                <tr>
                    <th>Restrict to languages</th>
                    ";
        // line 52
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "languages", [], "any", false, false, false, 52))) {
            // line 53
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 55
            echo "                        <td>
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "languages", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 57
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["languages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["language"]] ?? null) : null), "name", [], "any", false, false, false, 57), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </td>
                    ";
        }
        // line 61
        echo "                </tr>
                <tr>
                    <th>Rejudge by same judgehost</th>
                    <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "rejudgeOwn", [], "any", false, false, false, 64)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 72
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_edit", ["restrictionId" => twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "restrictionid", [], "any", false, false, false, 72)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 73
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_delete", ["restrictionId" => twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "restrictionid", [], "any", false, false, false, 73)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 75
        echo "    </div>

    <h2>Judgehosts having restriction ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "</h2>
    ";
        // line 78
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "judgehosts", [], "any", false, false, false, 78))) {
            // line 79
            echo "        <p class=\"nodata\">no judgehosts</p>
    ";
        } else {
            // line 81
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"data-table table table-sm table-striped\">
                    <thead>
                    <tr>
                        <th>hostname</th>
                        <th>active</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["judgehostRestriction"] ?? null), "judgehosts", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
                // line 92
                echo "                        <tr>
                            <td ";
                // line 93
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 93)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\">
                                    ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 95), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td ";
                // line 98
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 98)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">
                                    ";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 100)), "html", null, true);
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 110
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/judgehost_restriction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 110,  298 => 105,  287 => 100,  283 => 99,  277 => 98,  271 => 95,  267 => 94,  261 => 93,  258 => 92,  254 => 91,  242 => 81,  238 => 79,  236 => 78,  232 => 77,  228 => 75,  223 => 73,  219 => 72,  217 => 71,  208 => 64,  203 => 61,  199 => 59,  188 => 57,  184 => 56,  181 => 55,  177 => 53,  175 => 52,  170 => 49,  166 => 47,  155 => 45,  151 => 44,  148 => 43,  144 => 41,  142 => 40,  137 => 37,  133 => 35,  120 => 33,  116 => 32,  113 => 31,  109 => 29,  107 => 28,  100 => 24,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/judgehost_restriction.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/judgehost_restriction.html.twig");
    }
}
