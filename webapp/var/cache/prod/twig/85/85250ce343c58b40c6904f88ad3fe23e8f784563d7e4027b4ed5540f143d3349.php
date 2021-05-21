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

/* jury/export/clarifications.html.twig */
class __TwigTemplate_d30ea489d127aace825ab4bc4cdcd5285d4cfb40b204aaa1ec85fd314df21bf2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/export/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/export/layout.html.twig", "jury/export/clarifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
        td:first-child {
            padding-right: 10px;
        }

        tr.top-line {
            border-top: 4px solid #ccc;
        }

        tr.top-line td {
            padding-top: 8px;
        }
    </style>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped"] ?? null));
        foreach ($context['_seq'] as $context["queue"] => $context["clarifications"]) {
            // line 19
            echo "        <h2>";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["queues"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["queue"]] ?? null) : null), "html", null, true);
            echo "</h2>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Contest time</th>
                <th scope=\"col\">From</th>
                <th scope=\"col\">To</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Answered?</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["clarifications"]);
            foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
                // line 33
                echo "                <tr class=\"top-line\">
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarId", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submitTime", [], "any", false, false, false, 35), null, ($context["contest"] ?? null)), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 38), "effectiveName", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 40
                    echo "                            Jury (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 40), "html", null, true);
                    echo ")
                        ";
                }
                // line 42
                echo "                    </td>
                    <td>
                        ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 44)))) {
                    // line 45
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 45), "effectiveName", [], "any", false, false, false, 45), "html", null, true);
                    echo "
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 46
$context["clarification"], "sender", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                            Jury
                        ";
                } else {
                    // line 49
                    echo "                            All
                        ";
                }
                // line 51
                echo "                    </td>
                    <td>
                        ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["problems"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["clarification"], "probid", [], "any", false, false, false, 54)] ?? null) : null), "shortName", [], "any", false, false, false, 54), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                    echo "
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["clarification"], "category", [], "any", false, false, false, 55) && twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 55), [], "array", true, true, false, 55))) {
                    // line 56
                    echo "                            ";
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["categories"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 56)] ?? null) : null), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 58
                    echo "                            General
                        ";
                }
                // line 60
                echo "                    </td>
                    <td>
                        ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 62)), "html", null, true);
                echo "
                    </td>
                </tr>
                <tr>
                    <td><b>Content</b></td>
                    <td colspan=\"5\">
                        <pre>";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["clarification"], "body", [], "any", false, false, false, 68), 80), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
                ";
                // line 71
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 71))) {
                    // line 72
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["idx"] => $context["reply"]) {
                        // line 73
                        echo "                        <tr>
                            <td>
                                <b>
                                    ";
                        // line 76
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 76), "count", [], "any", false, false, false, 76) > 1)) {
                            // line 77
                            echo "                                        Reply #";
                            echo twig_escape_filter($this->env, ($context["idx"] + 1), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 79
                            echo "                                        Reply
                                    ";
                        }
                        // line 81
                        echo "                                </b>
                            </td>
                            <td colspan=\"5\">
                                <pre>";
                        // line 84
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["reply"], "body", [], "any", false, false, false, 84), 80), "html", null, true);
                        echo "</pre>
                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['idx'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                ";
                }
                // line 89
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['queue'], $context['clarifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "jury/export/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 90,  224 => 89,  221 => 88,  211 => 84,  206 => 81,  202 => 79,  196 => 77,  194 => 76,  189 => 73,  184 => 72,  182 => 71,  176 => 68,  167 => 62,  163 => 60,  159 => 58,  153 => 56,  151 => 55,  144 => 54,  142 => 53,  138 => 51,  134 => 49,  130 => 47,  128 => 46,  123 => 45,  121 => 44,  117 => 42,  111 => 40,  105 => 38,  103 => 37,  98 => 35,  94 => 34,  91 => 33,  87 => 32,  70 => 19,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/export/clarifications.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/export/clarifications.html.twig");
    }
}
