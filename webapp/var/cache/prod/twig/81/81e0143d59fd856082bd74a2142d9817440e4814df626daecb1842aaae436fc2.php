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

/* jury/partials/judgehost_judgings.html.twig */
class __TwigTemplate_a983145bed0c6827335fd8baef7c082199b2fcf946c019a6dba1cd7c6c728851 extends \Twig\Template
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
        if ( !($context["judgings"] ?? null)) {
            // line 2
            echo "    <div class=\"alert alert-warning\">No judgings</div>
";
        } else {
            // line 4
            echo "    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 17
                echo "            ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 17)]);
                // line 18
                echo "            <tr class=\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 18)) {
                    echo "disabled";
                }
                echo "\">
                <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 20)), "html", null, true);
                echo "</a></td>
                <td>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "aborted", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            [aborted]
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, $context["judging"], "endtime", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 32
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 32));
                echo "
                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                            (&hellip;)
                        ";
                }
                // line 36
                echo "                    </a>
                </td>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 38)), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "verified", [], "any", false, false, false, 39)), "html", null, true);
                echo "</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "jury/partials/judgehost_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  129 => 39,  123 => 38,  119 => 36,  115 => 34,  113 => 33,  109 => 32,  105 => 31,  100 => 28,  94 => 26,  90 => 24,  88 => 23,  84 => 22,  77 => 20,  71 => 19,  64 => 18,  61 => 17,  57 => 16,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/judgehost_judgings.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/judgehost_judgings.html.twig");
    }
}
