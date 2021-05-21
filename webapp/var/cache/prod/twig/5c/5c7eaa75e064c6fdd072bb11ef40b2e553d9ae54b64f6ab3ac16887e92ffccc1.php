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

/* jury/partials/team_score_and_submissions.html.twig */
class __TwigTemplate_5b0a573e62915a185bb1493c4f6145a73fcc06fb947d38e2b3fb1a9070276a68 extends \Twig\Template
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
        if (((isset($context["scoreboard"]) || array_key_exists("scoreboard", $context)) &&  !(null === ($context["scoreboard"] ?? null)))) {
            // line 2
            echo "    <h2 class=\"mt-2\">Score</h2>

    ";
            // line 4
            $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/partials/team_score_and_submissions.html.twig", 4)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
        }
        // line 6
        echo "
<h2 class=\"mt-2\">
    Submissions
    ";
        // line 9
        if (($context["restrictionText"] ?? null)) {
            // line 10
            echo "    <small class=\"text-muted\">
        restricted to ";
            // line 11
            echo twig_escape_filter($this->env, ($context["restrictionText"] ?? null), "html", null, true);
            echo " (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">show all</a>)
    </small>
    ";
        }
        // line 14
        echo "</h2>";
        // line 15
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/team_score_and_submissions.html.twig", 15)->display(twig_array_merge($context, ["showTestcases" => false]));
    }

    public function getTemplateName()
    {
        return "jury/partials/team_score_and_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  64 => 14,  56 => 11,  53 => 10,  51 => 9,  46 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/team_score_and_submissions.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/team_score_and_submissions.html.twig");
    }
}
