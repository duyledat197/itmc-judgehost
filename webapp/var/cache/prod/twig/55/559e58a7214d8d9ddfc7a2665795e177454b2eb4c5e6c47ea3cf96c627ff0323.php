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

/* jury/executable_edit_content.html.twig */
class __TwigTemplate_94e8745e5a002c3a88d900aee87dee365ac510c868f1bc9470d93bdd19cd13fc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable_edit_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit content of executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ace.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ext-modelist.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Edit content of executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filenames"] ?? null));
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
        foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
            // line 19
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 21
            if ((((null === ($context["selected"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) || (($context["selected"] ?? null) == $context["idx"]))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
                   href=\"#source-";
            // line 22
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filenames"] ?? null));
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
        foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
            // line 29
            echo "            <div class=\"tab-pane fade ";
            if ((((null === ($context["selected"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 29)) || (($context["selected"] ?? null) == $context["idx"]))) {
                echo "show active";
            }
            echo "\" id=\"source-";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download_single", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 33), "index" => $context["idx"]]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit_files", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 37), "index" => $context["idx"]]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-pencil-alt\"></i> Edit
                    </a>
                </div>

                ";
            // line 42
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["files"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["idx"]] ?? null) : null), $context["idx"], null, true, ("form_source" . $context["idx"]), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["aceFilenames"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["idx"]] ?? null) : null));
            echo "
                <script>
                    \$(function () {
                        \$('#form_source";
            // line 45
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "').closest('.form-group').hide();
                    });
                </script>
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>
    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "jury/executable_edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 57,  217 => 54,  211 => 50,  193 => 45,  187 => 42,  179 => 37,  172 => 33,  160 => 29,  143 => 28,  139 => 25,  121 => 22,  115 => 21,  111 => 19,  94 => 18,  89 => 15,  84 => 13,  81 => 12,  77 => 11,  71 => 8,  67 => 7,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/executable_edit_content.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/executable_edit_content.html.twig");
    }
}
