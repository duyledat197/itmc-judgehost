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

/* jury/rejudging_finish.html.twig */
class __TwigTemplate_9927653e83fd547ec5b79f08509bb626bf36682f9681352a774590f4ba15469b extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging_finish.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging_finish.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["action"] ?? null)), "html", null, true);
        echo " rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["action"] ?? null)), "html", null, true);
        echo " rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

    ";
        // line 16
        if ((($context["action"] ?? null) == "apply")) {
            // line 17
            echo "    <p>Applying rejudge may take some time, please be patient.</p>
    ";
        }
        // line 19
        echo "
    <div id=\"rejudging-status\"></div>

";
    }

    // line 24
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <script>
        \$(function() {
            var lastResponseLength = false;
            var \$status = \$('div#rejudging-status');
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 30), "action" => ($context["action"] ?? null)]), "html", null, true);
        echo "', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onprogress = function(e) {
                var response = e.currentTarget.response;
                var output = lastResponseLength === false
                    ? response
                    : response.substring(lastResponseLength);

                lastResponseLength = response.length;

                \$status.append(output);

                // Scroll page to bottom of div to keep showing progress
                \$('html, body').animate({scrollTop: \$status.offset().top + \$status.height()}, 0);
            };

            xhr.send();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/rejudging_finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  113 => 25,  109 => 24,  102 => 19,  98 => 17,  96 => 16,  89 => 14,  86 => 13,  82 => 12,  76 => 9,  72 => 8,  67 => 7,  63 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudging_finish.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/rejudging_finish.html.twig");
    }
}
