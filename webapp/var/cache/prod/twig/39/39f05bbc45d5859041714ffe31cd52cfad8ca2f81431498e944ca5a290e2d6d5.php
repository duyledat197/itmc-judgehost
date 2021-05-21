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

/* team/scoreboard.html.twig */
class __TwigTemplate_f13fac4bb39067e975d7444a6f470aa1257e44f07a22b18e6584157d558d43b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/scoreboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Scoreboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div data-ajax-refresh-target data-ajax-refresh-after=\"initializeScoreboard\" class=\"mt-3\">
        ";
        // line 6
        $this->loadTemplate("partials/scoreboard.html.twig", "team/scoreboard.html.twig", 6)->display(twig_array_merge($context, ["jury" => false, "public" => false, "current_contest" => ($context["current_team_contest"] ?? null)]));
        // line 7
        echo "    </div>
";
    }

    // line 10
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <script>
        pinScoreheader();
        \$(function () {
            window.initializeScoreboard = function () {
                var \$newProgress = \$('[data-ajax-refresh-target] > [data-progress-bar]');
                if (\$newProgress.length) {
                    var \$oldProgress = \$('body > [data-progress-bar]');
                    \$oldProgress.html(\$newProgress.children());
                    \$newProgress.parent().remove();
                }
                pinScoreheader();
            };
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "team/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  70 => 10,  65 => 7,  63 => 6,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/scoreboard.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/scoreboard.html.twig");
    }
}
