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

/* jury/team_affiliation.html.twig */
class __TwigTemplate_ba3a11cdf3a7eca550e6bd29611ad6d44cca1f7c95995e8ffd9c42e57e543bf2 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_affiliation.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_affiliation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Affiliation ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Affiliation: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["teamAffiliation"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Shortname</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        ";
        // line 39
        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 39);
        // line 40
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["teamAffiliation"] ?? null))) {
            // line 41
            echo "                            ";
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "externalid", [], "any", false, false, false, 41);
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                        ";
        $context["affiliationLogo"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
        // line 44
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
            // line 45
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                                 title=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"affiliation-logo\"/>
                        ";
        } else {
            // line 48
            echo "                            Not available
                        ";
        }
        // line 50
        echo "                    </td>
                </tr>
                ";
        // line 52
        if (((($context["showFlags"] ?? null) && ($context["teamAffiliation"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 52))) {
            // line 53
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 56
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 56))) {
                // line 57
                echo "                                ";
                $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 57)) . ".png");
                // line 58
                echo "                                ";
                if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                    // line 59
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 59)] ?? null) : null), "html", null, true);
                    echo "\"
                                         title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 60)] ?? null) : null), "html", null, true);
                    echo "\" class=\"countryflag\"/>
                                ";
                }
                // line 62
                echo "                            ";
            }
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 63)] ?? null) : null), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 67
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "comments", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <tr>
                        <th>Comments</th>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "comments", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 73
        echo "            </table>
        </div>
    </div>";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "<p>
            ";
            // line 79
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_edit", ["affilId" => twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 79)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 80
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_delete", ["affilId" => twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 80)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Teams from ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "</h2>
    ";
        // line 85
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "teams", [], "any", false, false, false, 85))) {
            // line 86
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 88
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "teams", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 99
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 104), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
            // line 113
            if ((isset($context["scoreboard"]) || array_key_exists("scoreboard", $context))) {
                // line 114
                echo "            <div data-ajax-refresh-target>
                ";
                // line 115
                $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/team_affiliation.html.twig", 115)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
                // line 116
                echo "            </div>
        ";
            }
            // line 118
            echo "    ";
        }
        // line 119
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/team_affiliation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 119,  307 => 118,  303 => 116,  301 => 115,  298 => 114,  296 => 113,  289 => 108,  277 => 104,  269 => 101,  265 => 99,  261 => 98,  249 => 88,  245 => 86,  243 => 85,  239 => 84,  236 => 83,  230 => 80,  226 => 79,  223 => 78,  221 => 77,  217 => 73,  211 => 70,  207 => 68,  204 => 67,  196 => 63,  193 => 62,  188 => 60,  181 => 59,  178 => 58,  175 => 57,  173 => 56,  168 => 53,  166 => 52,  162 => 50,  158 => 48,  153 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  129 => 39,  121 => 34,  114 => 30,  110 => 28,  104 => 25,  100 => 23,  98 => 22,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team_affiliation.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/team_affiliation.html.twig");
    }
}
