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

/* jury/rejudging_form.html.twig */
class __TwigTemplate_558d68fbc8d44eb12154331a808ffd4b5f607e5263e4b847bbf7c102e8e675b0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extrahead' => [$this, 'block_extrahead'],
            'title' => [$this, 'block_title'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging_form.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 6, $context, $this->getSourceContext());
        echo "
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add rejudging - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Add rejudging</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
        </div>
    </div>

";
    }

    // line 23
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <script>
        \$(function () {
            var \$contests = \$('#rejudging_contests');
            \$contests.on('change', function () {
                var \$problems = \$('#rejudging_problems');
                var \$teams = \$('#rejudging_teams');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$contests.attr('name')] = \$contests.val();
                data[\$problems.attr('name')] = \$problems.val();
                data[\$teams.attr('name')] = \$teams.val();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    success: function (html) {
                        var \$newProblems = \$(html).find('#rejudging_problems');
                        \$newProblems.closest('.form-group').find('.invalid-feedback').remove();
                        \$('#rejudging_problems').closest('.form-group').replaceWith(
                            \$newProblems.closest('.form-group')
                        );
                        \$newProblems.select2();

                        var \$newTeams = \$(html).find('#rejudging_teams');
                        \$newTeams.closest('.form-group').find('.invalid-feedback').remove();
                        \$('#rejudging_teams').closest('.form-group').replaceWith(
                            \$newTeams.closest('.form-group')
                        );
                        \$newTeams.select2();
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/rejudging_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  95 => 23,  86 => 17,  79 => 12,  75 => 11,  67 => 9,  61 => 6,  56 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudging_form.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/rejudging_form.html.twig");
    }
}
