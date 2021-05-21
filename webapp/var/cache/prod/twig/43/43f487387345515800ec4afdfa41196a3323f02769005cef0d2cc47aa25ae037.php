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

/* jury/partials/submission_diff.html.twig */
class __TwigTemplate_4d5783bd0815b5f7412caa616889450970acc354a571828edbc379ea89ff72fe extends \Twig\Template
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
        if (((twig_length_filter($this->env, ($context["files"] ?? null)) > 1) || (twig_length_filter($this->env, ($context["oldFiles"] ?? null)) > 1))) {
            // line 2
            echo "
    <table class=\"table table-sm table-striped file-diff-table\">
        <tr>
            <th class=\"diff-add\">Files added</th>
            <td class=\"filename\">";
            // line 6
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "added", [], "any", false, false, false, 6), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th class=\"diff-del\">Files removed</th>
            <td class=\"filename\">";
            // line 10
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "removed", [], "any", false, false, false, 10), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th class=\"diff-changed\">Files changed</th>
            <td class=\"filename\">";
            // line 14
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "changed", [], "any", false, false, false, 14), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Files unchanged</th>
            <td class=\"filename\">";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "unchanged", [], "any", false, false, false, 18), ", "), "html", null, true);
            echo "</td>
        </tr>
    </table>
";
        }
        // line 22
        echo "<ul class=\"nav nav-tabs source-tab-nav\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "changedfiles", [], "any", false, false, false, 23));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filePair"]) {
            // line 24
            echo "
        <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
               href=\"#diff-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 27), "submitfileid", [], "any", false, false, false, 27), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 0, [], "any", false, false, false, 27), "filename", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
        </li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filePair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
</ul>
<div class=\"tab-content source-tab\">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oldFileStats"] ?? null), "changedfiles", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filePair"]) {
            // line 34
            echo "
        <div class=\"tab-pane fade ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) {
                echo "show active";
            }
            echo "\" id=\"diff-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 35), "submitfileid", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
             role=\"tabpanel\">
            <pre class=\"output_text\">";
            // line 37
            echo $this->extensions['App\Twig\TwigExtension']->showDiff(twig_get_attribute($this->env, $this->source, $context["filePair"], 0, [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 37));
            echo "</pre>
        </div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filePair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/submission_diff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  153 => 37,  144 => 35,  141 => 34,  124 => 33,  120 => 30,  102 => 27,  96 => 26,  92 => 24,  75 => 23,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/submission_diff.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/submission_diff.html.twig");
    }
}
