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

/* jury/submission_source.html.twig */
class __TwigTemplate_89e0d90ead117b49ad9ede1eea8f65cee8c0e41be39d20fe3633ea02246e3bd0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission_source.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Source s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 3), "html", null, true);
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
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <h1>
        Source code for submission
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 15)) {
            // line 16
            echo "            (resubmit of
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 17), "submitid", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 17), "submitid", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>)";
        }
        // line 19
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 19))) {
            // line 20
            echo "            (resubmitted as";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 21));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "origsubmitid", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>";
                // line 23
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo ")
        ";
        }
        // line 27
        echo "
    </h1>";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "entryPoint", [], "any", false, false, false, 30)) {
            // line 31
            echo "
        <p><b>Entry point</b>: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "entryPoint", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>";
        }
        // line 35
        if ( !(null === ($context["oldSubmission"] ?? null))) {
            // line 36
            echo "
        <p><a href=\"#diff\">Go to diff to previous submission</a></p>";
        }
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "origsubmitid", [], "any", false, false, false, 40)) {
            // line 41
            echo "
        <p><a href=\"#origdiff\">Go to diff to original submission</a></p>";
        }
        // line 44
        echo "
    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 47
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
                   href=\"#source-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 50), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 50), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 57
            echo "
            <div class=\"tab-pane fade ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 58)) {
                echo "show active";
            }
            echo "\" id=\"source-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 62), "fetch" => twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_edit_source", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 66), "rank" => twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-pencil-alt\"></i> Edit
                    </a>
                </div>

                ";
            // line 71
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor(twig_get_attribute($this->env, $this->source, $context["file"], "sourcecode", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 71), "aceLanguage", [], "any", false, false, false, 71));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    </div>";
        // line 77
        if ( !(null === ($context["oldSubmission"] ?? null))) {
            // line 78
            echo "
        <h2 id=\"diff\" class=\"mt-3\">
            Diff to submission
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["oldSubmission"] ?? null), "submitid", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                s";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oldSubmission"] ?? null), "submitid", [], "any", false, false, false, 82), "html", null, true);
            echo "
            </a>
        </h2>";
            // line 86
            $this->loadTemplate("jury/partials/submission_diff.html.twig", "jury/submission_source.html.twig", 86)->display(twig_array_merge($context, ["oldSubmission" => ($context["oldSubmission"] ?? null), "oldFiles" => ($context["oldFiles"] ?? null), "oldFileStats" => ($context["oldFileStats"] ?? null)]));
        }
        // line 89
        if ( !(null === ($context["originalSubmission"] ?? null))) {
            // line 90
            echo "
        <h2 id=\"origdiff\" class=\"mt-3\">
            Diff to original submission
            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["originalSubmission"] ?? null), "submitid", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
                s";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["originalSubmission"] ?? null), "submitid", [], "any", false, false, false, 94), "html", null, true);
            echo "
            </a>
        </h2>";
            // line 98
            $this->loadTemplate("jury/partials/submission_diff.html.twig", "jury/submission_source.html.twig", 98)->display(twig_array_merge($context, ["oldSubmission" => ($context["originalSubmission"] ?? null), "oldFiles" => ($context["originalFiles"] ?? null), "oldFileStats" => ($context["originalFileStats"] ?? null)]));
        }
        // line 100
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/submission_source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 100,  322 => 98,  317 => 94,  313 => 93,  308 => 90,  306 => 89,  303 => 86,  298 => 82,  294 => 81,  289 => 78,  287 => 77,  284 => 74,  268 => 71,  260 => 66,  253 => 62,  242 => 58,  239 => 57,  222 => 56,  218 => 53,  200 => 50,  194 => 49,  190 => 47,  173 => 46,  170 => 44,  166 => 41,  164 => 40,  160 => 36,  158 => 35,  154 => 32,  151 => 31,  149 => 30,  146 => 27,  142 => 25,  126 => 23,  120 => 22,  103 => 21,  101 => 20,  98 => 19,  92 => 17,  89 => 16,  87 => 15,  82 => 14,  77 => 11,  73 => 10,  67 => 7,  62 => 6,  58 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submission_source.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/submission_source.html.twig");
    }
}
