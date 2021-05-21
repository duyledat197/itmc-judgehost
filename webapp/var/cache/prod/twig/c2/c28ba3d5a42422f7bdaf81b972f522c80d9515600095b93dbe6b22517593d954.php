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

/* jury/delete.html.twig */
class __TwigTemplate_6bcd559b1358e34b1622c1dbb1ce08312c27fa63a208f15d80e8c9415f11e47e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete ";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\" - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <h1>Delete ";
        // line 8
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\"</h1>

    ";
        // line 10
        if (($context["isError"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger\">
            <strong>Error: ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), 0, [], "any", false, false, false, 12), "html", null, true);
            echo "</strong>
        </div>
    ";
        } else {
            // line 15
            echo "        <div class=\"alert alert-warning\">
            <form method=\"post\">
                <p>You're about to delete ";
            // line 17
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "\".</p>

                ";
            // line 19
            if ( !twig_test_empty(($context["messages"] ?? null))) {
                // line 20
                echo "                    <p>
                        <strong>Warning, this will:</strong>
                    </p>
                    <ul>
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                    </ul>
                ";
            }
            // line 29
            echo "
                <p>Are you sure?</p>
                <hr>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["redirectUrl"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Cancel</a>
                <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    ";
        }
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  131 => 32,  126 => 29,  122 => 27,  113 => 25,  109 => 24,  103 => 20,  101 => 19,  92 => 17,  88 => 15,  82 => 12,  79 => 11,  77 => 10,  68 => 8,  65 => 7,  61 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/delete.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/delete.html.twig");
    }
}
