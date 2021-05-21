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

/* jury/team.html.twig */
class __TwigTemplate_bb941954c14188df93942ff2fbc48db2fbe909fb8e1406d3228225382f182fb1 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "icpcid", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "icpcid", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        ";
        } else {
            // line 28
            echo "                            -
                        ";
        }
        // line 30
        echo "                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "displayName", [], "any", false, false, false, 39)) {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "displayName", [], "any", false, false, false, 40), "html", null, true);
            echo "
                        ";
        } else {
            // line 42
            echo "                            -
                        ";
        }
        // line 44
        echo "                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 49
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), "firstLogin", [], "any", false, false, false, 49))) {
            // line 50
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "firstLogin", [], "any", false, false, false, 50), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                        ";
        } else {
            // line 52
            echo "                            -
                        ";
        }
        // line 54
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        ";
        // line 59
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 59)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "lastIpAddress", [], "any", false, false, false, 59))) {
            // line 60
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), "lastIpAddress", [], "any", false, false, false, 60), true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            -
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 72
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>User</th>
                    <td>
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 81));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "userid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-user-plus\"></i> add user
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 98), "categoryid", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">
                            ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "
                        </a>
                    </td>
                </tr>
                ";
        // line 103
        if ((($context["showAffiliations"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 103))) {
            // line 104
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 107
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 107), "affilid", [], "any", false, false, false, 107);
            // line 108
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 108))) {
                // line 109
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 109), "externalid", [], "any", false, false, false, 109);
                // line 110
                echo "                            ";
            }
            // line 111
            echo "                            ";
            $context["affiliationLogo"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
            // line 112
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
                // line 113
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 113), "shortname", [], "any", false, false, false, 113), "html", null, true);
                echo "\"
                                     title=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 114), "shortname", [], "any", false, false, false, 114), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 116
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 116), "affilid", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">
                                ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 122
        echo "                ";
        if (((($context["showFlags"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 122)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 122), "country", [], "any", false, false, false, 122))) {
            // line 123
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 126
            $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 126), "country", [], "any", false, false, false, 126)) . ".png");
            // line 127
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                // line 128
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 128), "country", [], "any", false, false, false, 128)] ?? null) : null), "html", null, true);
                echo "\"
                                     title=\"";
                // line 129
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 129), "country", [], "any", false, false, false, 129)] ?? null) : null), "html", null, true);
                echo "\" class=\"countryflag\"/>
                            ";
            }
            // line 131
            echo "                            ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 131), "country", [], "any", false, false, false, 131)] ?? null) : null), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 135
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 135)) > 0)) {
            // line 136
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 140
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["ucontest"], "cid", [], "any", false, false, false, 140)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 140), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </td>
                </tr>
                ";
        }
        // line 145
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "comments", [], "any", false, false, false, 145))) {
            // line 146
            echo "                <tr>
                    <th>Comments</th>
                    <td>
                        ";
            // line 149
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "comments", [], "any", false, false, false, 149), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 153
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 153))) {
            // line 154
            echo "                    <tr>
                        <th>Members</th>
                        <td>";
            // line 156
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 156), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 159
        echo "            </table>
        </div>
    ";
        // line 161
        $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", false, false, false, 161)) . ".jpg");
        // line 162
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["teamImage"] ?? null))) {
            // line 163
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["teamImage"] ?? null)), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 164), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 165), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 168
        echo "    </div>

    <p>";
        // line 171
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 172
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 172)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 173
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 173)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 175
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 175)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 176
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 176)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 176), "buttonClass" => "btn-secondary"]));
        // line 177
        echo "    </p>

    <div data-ajax-refresh-target>
        ";
        // line 180
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 180)->display($context);
        // line 181
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 181,  449 => 180,  444 => 177,  442 => 176,  437 => 175,  432 => 173,  428 => 172,  426 => 171,  422 => 168,  416 => 165,  410 => 164,  407 => 163,  404 => 162,  402 => 161,  398 => 159,  392 => 156,  388 => 154,  385 => 153,  378 => 149,  373 => 146,  370 => 145,  365 => 142,  354 => 140,  350 => 139,  345 => 136,  342 => 135,  334 => 131,  329 => 129,  322 => 128,  319 => 127,  317 => 126,  312 => 123,  309 => 122,  301 => 117,  296 => 116,  291 => 114,  284 => 113,  281 => 112,  278 => 111,  275 => 110,  272 => 109,  269 => 108,  267 => 107,  262 => 104,  260 => 103,  253 => 99,  249 => 98,  237 => 88,  226 => 84,  216 => 82,  211 => 81,  206 => 78,  200 => 75,  196 => 73,  193 => 72,  187 => 69,  183 => 67,  181 => 66,  177 => 64,  173 => 62,  167 => 60,  165 => 59,  158 => 54,  154 => 52,  148 => 50,  146 => 49,  139 => 44,  135 => 42,  129 => 40,  127 => 39,  119 => 34,  113 => 30,  109 => 28,  103 => 26,  101 => 25,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/team.html.twig");
    }
}
