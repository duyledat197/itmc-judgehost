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

/* jury/user.html.twig */
class __TwigTemplate_ce15a550d1e4f3f030d2f17f3e8ba2474ac549e7697198d4be7f35112970d520 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/user.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>User ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Login</th>
                    <td class=\"teamid\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 33)) {
            // line 34
            echo "                            <a href=\"mailto:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 36
            echo "                            -
                        ";
        }
        // line 38
        echo "                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 43)) {
            // line 44
            echo "                            Set
                        ";
        } else {
            // line 46
            echo "                            Not set
                        ";
        }
        // line 48
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP address</th>
                    <td>
                        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ipAddress", [], "any", false, false, false, 53)) {
            // line 54
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ipAddress", [], "any", false, false, false, 54), "html", null, true);
            echo "
                        ";
        } else {
            // line 56
            echo "                            -
                        ";
        }
        // line 58
        echo "                    </td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>
                        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "enabled", [], "any", false, false, false, 63)), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userRoles", [], "any", false, false, false, 69));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 70
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 70), "html", null, true);
            echo "<br>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                            No roles assigned
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </td>
                </tr>
                <tr>
                    <th>Team</th>
                    ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 78)) {
            // line 79
            echo "                        <td class=\"teamid\">
                            <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 80), "teamid", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">
                                ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 81), "effectiveName", [], "any", false, false, false, 81), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 81), "teamid", [], "any", false, false, false, 81), "html", null, true);
            echo ")
                            </a>
                        </td>
                    ";
        } else {
            // line 85
            echo "                        <td>-</td>
                    ";
        }
        // line 87
        echo "                </tr>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstLogin", [], "any", false, false, false, 96)) {
            // line 97
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstLogin", [], "any", false, false, false, 97), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                        ";
        } else {
            // line 99
            echo "                            -
                        ";
        }
        // line 101
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last login</th>
                    <td>
                        ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastLogin", [], "any", false, false, false, 106)) {
            // line 107
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastLogin", [], "any", false, false, false, 107), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                        ";
        } else {
            // line 109
            echo "                            -
                        ";
        }
        // line 111
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last IP</th>
                    <td>
                        ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastIpAddress", [], "any", false, false, false, 116)) {
            // line 117
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastIpAddress", [], "any", false, false, false, 117), true);
            echo "
                        ";
        } else {
            // line 119
            echo "                            -
                        ";
        }
        // line 121
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>";
        // line 127
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 128
            echo "<p>
            ";
            // line 129
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_edit", ["userId" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 129)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 130
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_delete", ["userId" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 130)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 133
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 133,  305 => 130,  301 => 129,  298 => 128,  296 => 127,  290 => 121,  286 => 119,  280 => 117,  278 => 116,  271 => 111,  267 => 109,  261 => 107,  259 => 106,  252 => 101,  248 => 99,  242 => 97,  240 => 96,  229 => 87,  225 => 85,  216 => 81,  212 => 80,  209 => 79,  207 => 78,  201 => 74,  194 => 72,  186 => 70,  181 => 69,  172 => 63,  165 => 58,  161 => 56,  155 => 54,  153 => 53,  146 => 48,  142 => 46,  138 => 44,  136 => 43,  129 => 38,  125 => 36,  117 => 34,  115 => 33,  107 => 28,  100 => 24,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/user.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/user.html.twig");
    }
}
