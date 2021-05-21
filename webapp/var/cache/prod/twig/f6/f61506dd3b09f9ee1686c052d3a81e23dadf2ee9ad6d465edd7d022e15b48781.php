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

/* public/scoreboard.html.twig */
class __TwigTemplate_fa5c89d41007f662aa146ec90522730754d41c068cf0fcd0e25515079f824028 extends \Twig\Template
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
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/scoreboard.html.twig", 1);
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
        echo "    ";
        $context["banner"] = "images/banner.png";
        // line 6
        echo "   ";
        // line 7
        echo "\t<div>
        \t<img class=\"banner\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner.png"), "html", null, true);
        echo "\" alt=\"Banner\">
\t</div>  
 ";
        // line 11
        echo "
    <div data-ajax-refresh-target data-ajax-refresh-after=\"initializeScoreboard\" class=\"mt-3\">
        ";
        // line 13
        $this->loadTemplate("partials/scoreboard.html.twig", "public/scoreboard.html.twig", 13)->display(twig_array_merge($context, ["jury" => false, "public" => true]));
        // line 14
        echo "    </div>
";
    }

    // line 17
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <script>
        initFavouriteTeams();
        pinScoreheader();

        var scoreboardUrl = '";
        // line 22
        (((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 22), "html", null, true))) : (print (null)));
        echo "';

        \$(function () {
            window.initializeScoreboard = function () {
                var \$newProgress = \$('[data-ajax-refresh-target] > .d-none > [data-progress-bar]');
                if (\$newProgress.length) {
                    var \$oldProgress = \$('body > [data-progress-bar]');
                    \$oldProgress.html(\$newProgress.children());
                    \$newProgress.parent().remove();
                }

                initFavouriteTeams();
                pinScoreheader();
            };
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "public/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  88 => 18,  84 => 17,  79 => 14,  77 => 13,  73 => 11,  68 => 8,  65 => 7,  63 => 6,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/scoreboard.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/public/scoreboard.html.twig");
    }
}
