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

/* jury/executable_content.html.twig */
class __TwigTemplate_1567f01b88f62eefd2da0f4e245879981eb01d1009602083b7136670ca2c76ae extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "View content of executable ";
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
    <h1>View content of executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if ( !twig_test_empty(($context["skippedBinary"] ?? null))) {
            // line 16
            echo "        <div>
            Binary files:
            <ul>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skippedBinary"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 20
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </ul>
        </div>
    ";
        }
        // line 25
        echo "
    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 27
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
            // line 28
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
                   href=\"#source-";
            // line 31
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
        // line 34
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 37
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
            // line 38
            echo "            <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                echo "show active";
            }
            echo "\" id=\"source-";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download_single", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 42), "index" => $context["idx"]]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                        <a class=\"btn btn-secondary btn-sm\"
\t\t\t   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit_files", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 47), "index" => $context["idx"]]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-pencil-alt\"></i> Edit
\t\t\t</a>";
            }
            // line 51
            echo "                </div>

                ";
            // line 53
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["files"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["idx"]] ?? null) : null), $context["idx"], null, false, "", (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["aceFilenames"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["idx"]] ?? null) : null));
            echo "
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
        // line 56
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/executable_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 56,  215 => 53,  211 => 51,  205 => 47,  202 => 46,  200 => 45,  195 => 42,  183 => 38,  166 => 37,  162 => 34,  144 => 31,  138 => 30,  134 => 28,  117 => 27,  114 => 25,  109 => 22,  100 => 20,  96 => 19,  91 => 16,  89 => 15,  84 => 13,  81 => 12,  77 => 11,  71 => 8,  67 => 7,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/executable_content.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/executable_content.html.twig");
    }
}
