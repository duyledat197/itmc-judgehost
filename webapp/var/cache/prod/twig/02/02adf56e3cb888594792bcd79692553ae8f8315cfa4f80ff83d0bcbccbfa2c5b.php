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

/* jury/check_judgings.html.twig */
class __TwigTemplate_904514d82642823af1fdbbdc96c9ede7a5f0ca33d82d21c3951d1d852ad7f460 extends \Twig\Template
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
        $macros["checkJudgings"] = $this->macros["checkJudgings"] = $this;
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/check_judgings.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/check_judgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Judging verifier - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Judging verifier</h1>

    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, ($context["numChecked"] ?? null), "html", null, true);
        echo " submissions checked:
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["unexpected"] ?? null)), "html", null, true);
        echo " unexpected results,
        ";
        // line 19
        if (($context["verifyMultiple"] ?? null)) {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["multiple"] ?? null)), "html", null, true);
            echo " automatically verified (multiple outcomes),
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["multiple"] ?? null)), "html", null, true);
            echo " to check manually,
        ";
        }
        // line 24
        echo "        ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["verified"] ?? null)), "html", null, true);
        echo " automatically verified
        <br>
        ";
        // line 26
        echo twig_escape_filter($this->env, ($context["numUnchecked"] ?? null), "html", null, true);
        echo " submissions not checked:
        ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["earlier"] ?? null)), "html", null, true);
        echo " verified earlier,
        ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nomatch"] ?? null)), "html", null, true);
        echo " without magic string
    </p>

    ";
        // line 41
        echo "
    ";
        // line 42
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["unexpected", "Unexpected results", ($context["unexpected"] ?? null)], 42, $context, $this->getSourceContext());
        echo "
    ";
        // line 43
        if (($context["verifyMultiple"] ?? null)) {
            // line 44
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Automatically verified (multiple outcomes)", ($context["multiple"] ?? null), true], 44, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 46
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Check manually", ($context["multiple"] ?? null)], 46, $context, $this->getSourceContext());
            echo "
        ";
            // line 47
            if ( !twig_test_empty(($context["multiple"] ?? null))) {
                // line 48
                echo "            <form action=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        ";
            }
            // line 56
            echo "    ";
        }
        // line 57
        echo "    ";
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["verified", "Automatically verified", ($context["verified"] ?? null), true], 57, $context, $this->getSourceContext());
        echo "
    ";
        // line 58
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["earlier", "Verified earlier", ($context["earlier"] ?? null), true], 58, $context, $this->getSourceContext());
        echo "
    ";
        // line 59
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["nomatch", "Without magic string", ($context["nomatch"] ?? null), true], 59, $context, $this->getSourceContext());
        echo "

";
    }

    // line 31
    public function macro_verifyResults($__id__ = null, $__header__ = null, $__results__ = null, $__collapse__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "header" => $__header__,
            "results" => $__results__,
            "collapse" => $__collapse__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "        ";
            if ( !twig_test_empty(($context["results"] ?? null))) {
                // line 33
                echo "            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
                echo "</a></h2>
            <ul id=\"detail";
                // line 34
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
                if ((((isset($context["collapse"]) || array_key_exists("collapse", $context))) ? (_twig_default_filter(($context["collapse"] ?? null), false)) : (false))) {
                    echo " class=\"d-none\"";
                }
                echo ">
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 36
                    echo "                    <li>";
                    echo $context["result"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </ul>
        ";
            }
            // line 40
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/check_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 40,  228 => 38,  219 => 36,  215 => 35,  207 => 34,  200 => 33,  197 => 32,  181 => 31,  174 => 59,  170 => 58,  165 => 57,  162 => 56,  150 => 48,  148 => 47,  143 => 46,  137 => 44,  135 => 43,  131 => 42,  128 => 41,  122 => 28,  118 => 27,  114 => 26,  108 => 24,  102 => 22,  96 => 20,  94 => 19,  90 => 18,  86 => 17,  80 => 13,  76 => 12,  70 => 9,  65 => 8,  61 => 7,  53 => 5,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/check_judgings.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/check_judgings.html.twig");
    }
}
