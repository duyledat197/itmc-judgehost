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

/* public/menu.html.twig */
class __TwigTemplate_a1dcbe82c7281accfb0c612cb042ecc4f6ef7d9fbe00be632cc6e11b1cd501d4 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
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
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "public_index", 1 => "public_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if ((($context["current_route"] ?? null) == "public_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === ($context["current_public_contest"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_public_contest"] ?? null), "freezeData", [], "any", false, false, false, 16), "started", [], "any", false, false, false, 16)))) {
            // line 17
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problems");
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
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 26
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            ";
        }
        // line 32
        echo "
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

        ";
        // line 40
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "public/menu.html.twig", 40)->display($context);
        // line 41
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 43
        if ((twig_length_filter($this->env, ($context["current_public_contests"] ?? null)) > 1)) {
            // line 44
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "public/menu.html.twig", 44)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null), "contests" => ($context["current_public_contests"] ?? null), "change_path" => "public_change_contest", "show_no_contest" => false]));
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </ul>

        ";
        // line 48
        $this->loadTemplate("partials/menu_countdown.html.twig", "public/menu.html.twig", 48)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null)]));
        // line 49
        echo "    </div>
</nav>
";
        // line 51
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "public/menu.html.twig", 51)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_public_contest"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "public/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  142 => 49,  140 => 48,  136 => 46,  133 => 45,  130 => 44,  128 => 43,  124 => 41,  122 => 40,  118 => 38,  112 => 35,  109 => 34,  107 => 33,  104 => 32,  96 => 27,  93 => 26,  91 => 25,  87 => 23,  83 => 21,  75 => 17,  73 => 16,  67 => 15,  62 => 13,  56 => 12,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/menu.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/public/menu.html.twig");
    }
}
