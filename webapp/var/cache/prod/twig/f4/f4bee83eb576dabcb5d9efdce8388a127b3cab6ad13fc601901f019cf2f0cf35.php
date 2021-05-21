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

/* team/partials/index_content.html.twig */
class __TwigTemplate_32723b01c5e87a8cec52fb6ab41538978df84915c94075b94b6b4178e0ffc4ad extends \Twig\Template
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
        if (twig_test_empty(($context["contest"] ?? null))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["contest"] ?? null)), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "
    <div id=\"teamscoresummary\">
        ";
            // line 12
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 12), "showFrozen", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 13)->display(twig_array_merge($context, ["displayRank" => ($context["displayRank"] ?? null), "jury" => false, "public" => false]));
            // line 14
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 17
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 17)->display($context);
            // line 18
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            ";
            // line 24
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 24)->display($context);
            // line 25
            echo "        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            ";
            // line 28
            if (twig_test_empty(($context["clarifications"] ?? null))) {
                // line 29
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 31
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 31)->display(twig_array_merge($context, ["clarifications" => ($context["clarifications"] ?? null)]));
                // line 32
                echo "            ";
            }
            // line 33
            echo "
            <h3 class=\"teamoverview\">Clarification Requests</h3>
            ";
            // line 35
            if (twig_test_empty(($context["clarificationRequests"] ?? null))) {
                // line 36
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 38
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 38)->display(twig_array_merge($context, ["clarifications" => ($context["clarificationRequests"] ?? null)]));
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 49
        echo "
";
        // line 50
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && ($context["ajax"] ?? null))) {
            // line 51
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 51)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  135 => 50,  132 => 49,  122 => 42,  118 => 40,  115 => 39,  112 => 38,  108 => 36,  106 => 35,  102 => 33,  99 => 32,  96 => 31,  92 => 29,  90 => 28,  85 => 25,  83 => 24,  75 => 18,  73 => 17,  68 => 14,  65 => 13,  63 => 12,  59 => 10,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/index_content.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/partials/index_content.html.twig");
    }
}
