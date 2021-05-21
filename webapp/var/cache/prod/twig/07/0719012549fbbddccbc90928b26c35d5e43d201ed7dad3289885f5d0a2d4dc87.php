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

/* partials/team.html.twig */
class __TwigTemplate_6d959082ae4251a20d4bd9d9a3096a086fa135c4b370173d629f4f9f9ab82a07 extends \Twig\Template
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
        if (twig_test_empty(($context["team"] ?? null))) {
            // line 2
            echo "    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
";
        } else {
            // line 6
            echo "
    <div class=\"row\">
        <div class=\"col-lg-";
            // line 8
            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
            echo "\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 18))) {
                // line 19
                echo "                    <tr>
                        <th>Members</th>
                        <td>";
                // line 21
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 21), "html", null, true));
                echo "</td>
                    </tr>
                ";
            }
            // line 24
            echo "                ";
            if ((($context["showAffiliations"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                        ";
                // line 28
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 28), "affilid", [], "any", false, false, false, 28);
                // line 29
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                            ";
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 30), "externalid", [], "any", false, false, false, 30);
                    // line 31
                    echo "                        ";
                }
                // line 32
                echo "                        ";
                $context["affiliationLogo"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                // line 33
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
                    // line 34
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 34), "shortname", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                 title=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 35), "shortname", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" class=\"affiliation-logo\">
                        ";
                }
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 39
                if ((($context["showFlags"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 39), "country", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "                        <tr>
                            <th>Country</th>
                            <td>
                                ";
                    // line 43
                    $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 43), "country", [], "any", false, false, false, 43)) . ".png");
                    // line 44
                    echo "                                ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                        // line 45
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 45), "country", [], "any", false, false, false, 45)] ?? null) : null), "html", null, true);
                        echo "\"
                                         title=\"";
                        // line 46
                        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 46), "country", [], "any", false, false, false, 46)] ?? null) : null), "html", null, true);
                        echo "\" class=\"countryflag\"/>
                                ";
                    }
                    // line 48
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48)] ?? null) : null), "html", null, true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 52
                echo "                ";
            }
            // line 53
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 53))) {
                // line 54
                echo "                    <tr>
                        <th>Location</th>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 59
            echo "            </table>
        </div>
    ";
            // line 61
            $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", false, false, false, 61)) . ".jpg");
            // line 62
            echo "    ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["teamImage"] ?? null))) {
                // line 63
                echo "        <div class=\"col-lg-";
                echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
                echo "\">
        <img id=\"teampicture\" src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["teamImage"] ?? null)), "html", null, true);
                echo "\" alt=\"Picture of team ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 64), "html", null, true);
                echo "\"
             title=\"Picture of team ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
        </div>
    ";
            }
            // line 68
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 68,  190 => 65,  184 => 64,  179 => 63,  176 => 62,  174 => 61,  170 => 59,  164 => 56,  160 => 54,  157 => 53,  154 => 52,  146 => 48,  141 => 46,  134 => 45,  131 => 44,  129 => 43,  124 => 40,  122 => 39,  117 => 37,  112 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  88 => 28,  83 => 25,  80 => 24,  74 => 21,  70 => 19,  68 => 18,  63 => 16,  56 => 12,  49 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/team.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/team.html.twig");
    }
}
