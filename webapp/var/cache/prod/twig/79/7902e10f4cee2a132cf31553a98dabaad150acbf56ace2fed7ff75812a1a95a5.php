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

/* jury/partials/clarification_form.html.twig */
class __TwigTemplate_ba9c0fbad90d6cb0094eb13a913faf828d74f3561c6599f0e5231bec3170e41b extends \Twig\Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send");
        echo "\" method=\"post\" id=\"sendclar\" onsubmit=\"return confirmClar();\">

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", true, true, false, 3)) {
            // line 4
            echo "<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
";
        }
        // line 6
        echo "
<div class=\"form-group\">
<label for=\"sendto\">Send to:</label>
<select id=\"sendto\" name=\"sendto\" class=\"custom-select\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "teams", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["id"] => $context["team"]) {
            // line 11
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "toteam", [], "any", true, true, false, 11) && (twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "toteam", [], "any", false, false, false, 11) == $context["id"]))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["team"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"subject\">Subject:</label>
<select name=\"problem\" id=\"subject\" class=\"custom-select\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "subjects", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
            // line 20
            echo "<optgroup label=\"";
            echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
            echo "\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["subject"]);
            foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                // line 22
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "onsubject", [], "any", true, true, false, 22) && (twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "onsubject", [], "any", false, false, false, 22) == $context["id"]))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</optgroup>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"bodytext\">Message:</label>
<textarea class=\"form-control\" name=\"bodytext\" id=\"bodytext\" rows=\"8\" cols=\"85\" required>";
        // line 31
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        echo "</textarea>
</div>

<div class=\"row\">
<div class=\"col-sm\">
<div class=\"form-group\">
<button type=\"submit\" name=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-envelope\"></i> Send</button>
</div>
</div>

<div class=\"col-sm text-right\">
";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", true, true, false, 42) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", false, false, false, 42)) > 0))) {
            // line 43
            echo "<div class=\"input-group\">
<div class=\"input-group-prepend\">
<div class=\"input-group-text\"><i class=\"fas fa-fish\"></i></div>
</div>
<select class=\"custom-select form-control-sm\" id=\"clar_answers\">
<option selected value=\"_default\">Add canned answer...</option>
";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<option>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</select>
</div>
";
        }
        // line 55
        echo "</div>

</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  163 => 52,  154 => 50,  150 => 49,  142 => 43,  140 => 42,  126 => 31,  119 => 26,  112 => 24,  97 => 22,  93 => 21,  88 => 20,  84 => 19,  76 => 13,  61 => 11,  57 => 10,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/clarification_form.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/clarification_form.html.twig");
    }
}
