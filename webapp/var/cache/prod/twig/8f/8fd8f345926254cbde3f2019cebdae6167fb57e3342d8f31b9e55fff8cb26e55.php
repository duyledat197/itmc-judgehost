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

/* team/menu.html.twig */
class __TwigTemplate_2065e0fd357a516c2ecf60180ecdd1c0f662ebb137bb54f08e97707cc5c49b41 extends \Twig\Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 8
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item ";
        // line 12
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\"><i class=\"fas fa-home\"></i> Home</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if ((($context["current_route"] ?? null) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 16), "started", [], "any", false, false, false, 16))) {
            // line 17
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 21
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 23
        echo "            </li>
            ";
        // line 24
        if (($context["have_printing"] ?? null)) {
            // line 25
            echo "                <li class=\"nav-item ";
            if ((($context["current_route"] ?? null) == "team_print")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 29
        echo "            <li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>

            ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 34
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 38
        echo "        </ul>

        <div id=\"submitbut\">
            ";
        // line 41
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 41), "started", [], "any", false, false, false, 41))) {
            // line 42
            echo "                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        } else {
            // line 48
            echo "                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        }
        // line 54
        echo "        </div>

        ";
        // line 56
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 56)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 57
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 59
        if ((twig_length_filter($this->env, ($context["current_team_contests"] ?? null)) > 1)) {
            // line 60
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 60)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null), "contests" => ($context["current_team_contests"] ?? null), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 61
            echo "            ";
        }
        // line 62
        echo "        </ul>

        ";
        // line 64
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 64)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null)]));
        // line 65
        echo "    </div>
</nav>
";
        // line 67
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 67)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "team/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 67,  178 => 65,  176 => 64,  172 => 62,  169 => 61,  166 => 60,  164 => 59,  160 => 57,  158 => 56,  154 => 54,  146 => 48,  136 => 42,  134 => 41,  129 => 38,  123 => 35,  120 => 34,  118 => 33,  112 => 30,  105 => 29,  99 => 26,  92 => 25,  90 => 24,  87 => 23,  83 => 21,  75 => 17,  73 => 16,  67 => 15,  62 => 13,  56 => 12,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/menu.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
