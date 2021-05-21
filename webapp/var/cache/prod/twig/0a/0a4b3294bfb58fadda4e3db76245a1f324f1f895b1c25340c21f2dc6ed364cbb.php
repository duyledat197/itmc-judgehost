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

/* team/submit.html.twig */
class __TwigTemplate_40811365c67ca3d28dcfed4c26d9b28ff2a3bc8ee638e7ac453fa550e4c3727b extends \Twig\Template
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
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/submit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submit - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container submitform pt-5\">
        <h1 class=\"text-center\">Submit</h1>
        ";
        // line 8
        if ((twig_test_empty(($context["current_team_contest"] ?? null)) || ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 8), "started", [], "any", false, false, false, 8)))) {
            // line 9
            echo "            <div class=\"container submitform\">
                <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
            </div>
        ";
        } else {
            // line 13
            echo "
            ";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 15), 'row');
            echo "
            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problem", [], "any", false, false, false, 16), 'row');
            echo "
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, false, 17), 'row');
            echo "
            <div class=\"form-group\" data-entry-point>
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 19), 'label');
            echo "
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 20), 'widget');
            echo "
                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 21), 'help');
            echo "
            </div>
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn-success btn\"><i class=\"fas fa-cloud-upload-alt\"></i> Submit
                </button>
            </div>
            ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

        ";
        }
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "team/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  108 => 27,  99 => 21,  95 => 20,  91 => 19,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  65 => 9,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/submit.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/submit.html.twig");
    }
}
