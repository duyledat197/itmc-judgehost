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

/* jury/import_export_contest_yaml.html.twig */
class __TwigTemplate_56c5e50ea2b8a07d6f5ccd10916119cc78c5263e369d507cdde93aa145d71910 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export_contest_yaml.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Import and export contest data - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Import and export contest data</h1>

    <h3>Import from YAML</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-warning\">
                Importing a contest.yaml may overwrite some settings (e.g. penalty time, clarification categories,
                clarification answers, etc.). This action can not be undone!
            </div>

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["import_form"] ?? null), 'form');
        echo "
        </div>
    </div>

    <h3>Export to YAML</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["export_form"] ?? null), 'form');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "jury/import_export_contest_yaml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  72 => 17,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/import_export_contest_yaml.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/import_export_contest_yaml.html.twig");
    }
}
