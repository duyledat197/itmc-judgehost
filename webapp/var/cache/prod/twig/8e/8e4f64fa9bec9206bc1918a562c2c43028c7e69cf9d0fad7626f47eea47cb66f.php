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

/* team/partials/clarification_content.html.twig */
class __TwigTemplate_29d3ad3b2bae0ec9e26564d1be680a3cc54e62b098b24288924ff9c855a2b5c8 extends \Twig\Template
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
        echo "<div class=\"container clarificationform\">
    ";
        // line 2
        $this->loadTemplate("team/partials/clarification.html.twig", "team/partials/clarification_content.html.twig", 2)->display(twig_array_merge($context, ["clarification" => ($context["clarification"] ?? null)]));
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "replies", [], "any", false, false, false, 3), function ($__reply__) use ($context, $macros) { $context["reply"] = $__reply__; return twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "canViewClarification", [0 => $context["reply"]], "method", false, false, false, 3); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 4
            echo "        ";
            $this->loadTemplate("team/partials/clarification.html.twig", "team/partials/clarification_content.html.twig", 4)->display(twig_array_merge($context, ["clarification" => $context["reply"]]));
            // line 5
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>

<div class=\"collapse mt-3 container clarificationform\" id=\"collapsereplyform\">
    <div class=\"card card-body\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recipient", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 13), 'row');
        echo "
        <div class=\"form-group\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-envelope\"></i> Send
            </button>
        </div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "team/partials/clarification_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  77 => 6,  63 => 5,  60 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/clarification_content.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/partials/clarification_content.html.twig");
    }
}
