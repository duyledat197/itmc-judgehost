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

/* form_theme.html.twig */
class __TwigTemplate_1055197ee45dc7c728a8db8430f833172a50f964335b161501f9cdf03bbdc08d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "form_theme.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'button_widget' => [$this, 'block_button_widget'],
                'bootstrap_file_widget' => [$this, 'block_bootstrap_file_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('button_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('bootstrap_file_widget', $context, $blocks);
    }

    // line 3
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-control custom-select"))]);
        // line 5
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 8
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["parent_label_class"] = "radio-custom";
        // line 10
        $this->displayParentBlock("radio_widget", $context, $blocks);
    }

    // line 13
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["parent_label_class"] = "checkbox-custom";
        // line 15
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
    }

    // line 18
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 20
            $context["parent_label_class"] = "checkbox-custom radio-custom";
            // line 21
            echo "    ";
        }
        // line 22
        $this->displayParentBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 25
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "btn-primary")) : ("btn-primary")))]);
        // line 27
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 30
    public function block_bootstrap_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "<div class=\"custom-file\">";
        // line 32
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 32), "custom-file-input")) : ("custom-file-input")))]);
        // line 33
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 34
        echo "<label class=\"custom-file-label text-truncate text-muted\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">No file selected</label>
    </div>";
    }

    public function getTemplateName()
    {
        return "form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 34,  150 => 33,  148 => 32,  146 => 31,  142 => 30,  138 => 27,  136 => 26,  132 => 25,  128 => 22,  125 => 21,  123 => 20,  121 => 19,  117 => 18,  113 => 15,  111 => 14,  107 => 13,  103 => 10,  101 => 9,  97 => 8,  93 => 5,  91 => 4,  87 => 3,  83 => 30,  80 => 29,  78 => 25,  75 => 24,  73 => 18,  70 => 17,  68 => 13,  65 => 12,  63 => 8,  60 => 7,  58 => 3,  55 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_theme.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/form_theme.html.twig");
    }
}
