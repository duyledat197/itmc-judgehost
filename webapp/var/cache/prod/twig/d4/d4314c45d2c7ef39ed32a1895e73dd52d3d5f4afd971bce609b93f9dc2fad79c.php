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

/* jury/menu.html.twig */
class __TwigTemplate_44c410fba310edab351e0884bca4a887e6cc003d57d2cd811ba4b09ad6e2cd50 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON")) {
            // line 11
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 38
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 47
            if (($context["show_shadow_differences"] ?? null)) {
                // line 48
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                ";
            }
            // line 52
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 59
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 63
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 64
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 68
        echo "        </ul>

        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 72
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 73
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75), "getUsername", [], "method", false, false, false, 75), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "getName", [], "method", false, false, false, 78))) {
                // line 79
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), "getName", [], "method", false, false, false, 79), "html", null, true);
                echo "</a>
                        ";
            }
            // line 81
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 89
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null))) {
                // line 90
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 92
                if (($context["refresh_flag"] ?? null)) {
                    // line 93
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 95
                    echo "                      Enable Refresh
                  ";
                }
                // line 97
                echo "                </span>
                                ";
                // line 98
                if (($context["refresh"] ?? null)) {
                    // line 99
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 99), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 101
                echo "                            </a>
                        ";
            }
            // line 103
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 108
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 112
        echo "
            ";
        // line 113
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 113)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null), "contests" => ($context["current_contests"] ?? null), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 114
        echo "        </ul>
        ";
        // line 115
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 115)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
        // line 116
        echo "    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 116,  260 => 115,  257 => 114,  255 => 113,  252 => 112,  246 => 109,  243 => 108,  236 => 104,  233 => 103,  229 => 101,  223 => 99,  221 => 98,  218 => 97,  214 => 95,  210 => 93,  208 => 92,  204 => 90,  202 => 89,  192 => 81,  186 => 79,  184 => 78,  178 => 75,  174 => 73,  171 => 72,  166 => 68,  160 => 65,  157 => 64,  154 => 63,  148 => 60,  145 => 59,  143 => 58,  140 => 57,  134 => 54,  130 => 52,  124 => 49,  121 => 48,  119 => 47,  113 => 44,  105 => 39,  102 => 38,  100 => 37,  97 => 36,  88 => 30,  82 => 27,  73 => 20,  71 => 19,  68 => 18,  59 => 12,  56 => 11,  54 => 10,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/menu.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
