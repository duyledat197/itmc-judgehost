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

/* jury/config.html.twig */
class __TwigTemplate_602e1a30288c33132ef67ebb2c855b8a6c1243b731efd1270ac6de2d886e46dd extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configuration - ";
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <h1>Configuration</h1>

    <form method=\"post\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 29
                echo "                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                    ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 32) == "bool")) {
                    // line 33
                    echo "                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "\"
                                            ";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["option"], "type", [], "any", false, false, false, 38) == "int")) {
                    // line 39
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 39))) {
                        // line 40
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                   style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                   name=\"config_";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "\">
                                                ";
                        // line 43
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 43));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 44
                            echo "                                                    <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 44) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 48
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                   type=\"number\"
                                                   name=\"config_";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "\"
                                                   value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 52), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 54
                    echo "                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["option"], "type", [], "any", false, false, false, 55) == "string")) {
                    // line 56
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 56))) {
                        // line 57
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display: block;\"
                                                    name=\"config_";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "\">
                                                ";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 60));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 61
                            echo "                                                    <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 61) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 63
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 65
                        echo "                                            <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                   name=\"config_";
                        // line 66
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 66), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 66), "html", null, true);
                        echo "\"
                                                   value=\"";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 67), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 69
                    echo "                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 69) == "array_keyval")) {
                    // line 70
                    echo "                                        <br/>
                                        ";
                    // line 71
                    $context["counter"] = 0;
                    // line 72
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 73
                        echo "                                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 73))) {
                            // line 74
                            echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:10em;text-align:right;display:inline-block;\"
                                                        name=\"config_";
                            // line 76
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 76), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][key]\">
                                                    ";
                            // line 77
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 77));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 78
                                echo "                                                        <option ";
                                if (($context["key"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 80
                            echo "                                                </select>
                                            ";
                        } else {
                            // line 82
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 84
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 85), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][key]\"
                                                       id=\"config_";
                            // line 86
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "__key_\">
                                            ";
                        }
                        // line 88
                        echo "                                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 88))) {
                            // line 89
                            echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display:inline-block;\"
                                                        name=\"config_";
                            // line 91
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][val]\">
                                                    ";
                            // line 92
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 92));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 93
                                echo "                                                        <option ";
                                if (($context["val"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 95
                            echo "                                                </select>
                                            ";
                        } else {
                            // line 97
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 99
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 100
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][val]\"
                                                       id=\"config_";
                            // line 101
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 101), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "__val\">
                                                ";
                        }
                        // line 103
                        echo "                                            <br/>
                                            ";
                        // line 104
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 105
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 106))) {
                        // line 107
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                    name=\"config_";
                        // line 109
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 109), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][key]\">
                                                ";
                        // line 110
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 110));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 111
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 115
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 117), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 118
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 118), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "__key_\">
                                        ";
                    }
                    // line 120
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 120))) {
                        // line 121
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    name=\"config_";
                        // line 123
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][val]\">
                                                ";
                        // line 124
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 124));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 125
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 129
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 131
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 131), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 132
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 132), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "__val\">
                                            ";
                    }
                    // line 134
                    echo "                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 135
$context["option"], "type", [], "any", false, false, false, 135) == "array_val")) {
                    // line 136
                    echo "                                        <br/>
                                        ";
                    // line 137
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 137))) {
                        // line 138
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    multiple
                                                    name=\"config_";
                        // line 141
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141), "html", null, true);
                        echo "[]\"
                                                    id=\"config_";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 142), "html", null, true);
                        echo "\">
                                                ";
                        // line 143
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 143));
                        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                            // line 144
                            echo "                                                    <option ";
                            if (twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 144))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 146
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 148
                        echo "                                            ";
                        $context["counter"] = 0;
                        // line 149
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 149));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            // line 150
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 152
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 153
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "]\"
                                                       id=\"config_";
                            // line 154
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "_\">
                                                <br/>
                                                ";
                            // line 156
                            $context["counter"] = (($context["counter"] ?? null) + 1);
                            // line 157
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "_\">
                                            <br/>
                                        ";
                    }
                    // line 164
                    echo "                                    ";
                }
                // line 165
                echo "                                    <small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 165), "html", null, true);
                echo "</small>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                    </ul>
                </div>
            </div>
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 174,  598 => 169,  587 => 165,  584 => 164,  576 => 161,  570 => 160,  566 => 158,  560 => 157,  558 => 156,  551 => 154,  545 => 153,  541 => 152,  537 => 150,  532 => 149,  529 => 148,  525 => 146,  510 => 144,  506 => 143,  502 => 142,  498 => 141,  493 => 138,  491 => 137,  488 => 136,  486 => 135,  483 => 134,  476 => 132,  470 => 131,  466 => 129,  462 => 127,  451 => 125,  447 => 124,  441 => 123,  437 => 121,  434 => 120,  427 => 118,  421 => 117,  417 => 115,  413 => 113,  402 => 111,  398 => 110,  392 => 109,  388 => 107,  385 => 106,  379 => 105,  377 => 104,  374 => 103,  367 => 101,  361 => 100,  357 => 99,  353 => 97,  349 => 95,  334 => 93,  330 => 92,  324 => 91,  320 => 89,  317 => 88,  310 => 86,  304 => 85,  300 => 84,  296 => 82,  292 => 80,  277 => 78,  273 => 77,  267 => 76,  263 => 74,  260 => 73,  255 => 72,  253 => 71,  250 => 70,  247 => 69,  242 => 67,  236 => 66,  233 => 65,  229 => 63,  214 => 61,  210 => 60,  204 => 59,  200 => 57,  197 => 56,  195 => 55,  192 => 54,  187 => 52,  181 => 51,  176 => 48,  172 => 46,  157 => 44,  153 => 43,  147 => 42,  143 => 40,  140 => 39,  138 => 38,  131 => 36,  125 => 35,  121 => 33,  119 => 32,  115 => 31,  111 => 29,  107 => 28,  100 => 24,  96 => 22,  92 => 21,  87 => 18,  83 => 17,  72 => 9,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/config.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
