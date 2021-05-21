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

/* jury/partials/verify_form.html.twig */
class __TwigTemplate_064fd28145de3909d7dd39055bde5d325d1084cf0382a1e73d6535692c857287 extends \Twig\Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"verified\" value=\"";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 2)) {
            echo "0";
        } else {
            echo "1";
        }
        echo "\"/>

    ";
        // line 5
        echo "    <p>
        ";
        // line 6
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo ": <strong>";
        if (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 6)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</strong>";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "juryMember", [], "any", false, false, false, 7)))) {
            // line 8
            echo ", by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "juryMember", [], "any", false, false, false, 8), "html", null, true);
            // line 9
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verifyComment", [], "any", false, false, false, 9))) {
                // line 10
                echo "                with comment \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verifyComment", [], "any", false, false, false, 10), "html", null, true);
                echo "\"";
            }
        }
        // line 13
        if (($context["show_form"] ?? null)) {
            // line 14
            echo "            <input type=\"submit\" value=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 14)) {
                echo "un";
            }
            echo "mark verified\"
                   class=\"btn btn-outline-secondary btn-sm\"/>

            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 17)) {
                // line 18
                echo "                with comment
                <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                       style=\"display: inline; width: auto;\"/>
            ";
            }
            // line 22
            echo "
            ";
            // line 23
            if (((($context["show_icat"] ?? null) &&  !(null === ($context["icat_url"] ?? null))) && twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 23))) {
                // line 24
                echo "                <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                    post to iCAT
                </button>
            ";
            }
            // line 28
            echo "        ";
        }
        // line 29
        echo "    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/verify_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  106 => 28,  100 => 24,  98 => 23,  95 => 22,  89 => 18,  87 => 17,  78 => 14,  76 => 13,  70 => 10,  68 => 9,  65 => 8,  63 => 7,  54 => 6,  51 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/verify_form.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/verify_form.html.twig");
    }
}
