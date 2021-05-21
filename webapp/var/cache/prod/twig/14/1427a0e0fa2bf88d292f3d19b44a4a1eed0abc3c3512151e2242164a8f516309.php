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

/* jury/import_export.html.twig */
class __TwigTemplate_c9119d512bbee1f3c996fc0953b5008eaac58dcbd3014fd170e1c6997fb38ca9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Import and export - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Import and export</h1>

    <h3>Import / export via file down/upload</h3>

    <ul>
        <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export_yaml");
        echo "\">Contest data (<code>contest.yaml</code>)</a></li>
        <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
        echo "\">Problem archive</a></li>
        <li>
            Tab separated, export:
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "groups", 1 => "teams", 2 => "scoreboard"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 18
            echo "                    <li>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => $context["type"]]), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo ".tsv</code></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                <li><code>results.tsv</code> for sort order
                    <ul>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort_orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 25
            echo "                            <li>
                                <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => "results"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </li>
            </ul>
        </li>
        <li>
            HTML, export:
            <ul>
                <li><code>results.html</code> for sort order
                    <ul>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort_orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 39
            echo "                            <li>
                                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </ul>
                </li>
                <li><code>results.html</code> for on ICPC site for sort order
                    <ul>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort_orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 48
            echo "                            <li>
                                <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results-icpc"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </ul>
                </li>
                <li>
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "clarifications"]);
        echo "\" target=\"_blank\"><code>clarifications.html</code></a>
                </li>
            </ul>
        </li>
    </ul>

    <h4>Tab-separated import</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["tsv_form"] ?? null), 'form');
        echo "
        </div>
    </div>

    <h4>JSON import</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["json_form"] ?? null), 'form');
        echo "
        </div>
    </div>

    <h3>Import teams / upload standings from / to icpc.baylor.edu</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-info\">
                Create a \"Web Services Token\" with appropriate rights in the \"Export\" section for your contest at <a
                        href=\"https://icpc.baylor.edu/login\" target=\"_blank\">https://icpc.baylor.edu/login</a>.
                You can find the Contest ID (e.g. <code>Southwestern-Europe-2014</code>) in the URL.
            </div>

            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["baylor_form"] ?? null), 'form_start');
        echo "
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["baylor_form"] ?? null), "contest_id", [], "any", false, false, false, 86), 'row');
        echo "
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["baylor_form"] ?? null), "access_token", [], "any", false, false, false, 87), 'row');
        echo "
            <div class=\"form-group\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["baylor_form"] ?? null), "fetch_teams", [], "any", false, false, false, 89), 'widget');
        echo "
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["baylor_form"] ?? null), "upload_standings", [], "any", false, false, false, 90), 'widget');
        echo "
            </div>
            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["baylor_form"] ?? null), 'form_end');
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/import_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  238 => 90,  234 => 89,  229 => 87,  225 => 86,  221 => 85,  204 => 71,  194 => 64,  182 => 55,  177 => 52,  164 => 49,  161 => 48,  157 => 47,  151 => 43,  138 => 40,  135 => 39,  131 => 38,  120 => 29,  107 => 26,  104 => 25,  100 => 24,  96 => 22,  85 => 19,  82 => 18,  78 => 17,  71 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/import_export.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/import_export.html.twig");
    }
}
