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

/* jury/language_edit.html.twig */
class __TwigTemplate_9c5d480374982d86f81e0e5e4dae45d652b288bd575087b4b1e68823fe867ad6 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/language_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/language_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit language ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 4), "html", null, true);
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
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Edit language ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Language ID/ext</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 26
        $this->loadTemplate("jury/partials/language_form.html.twig", "jury/language_edit.html.twig", 26)->display($context);
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/language_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  102 => 26,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/language_edit.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/language_edit.html.twig");
    }
}
