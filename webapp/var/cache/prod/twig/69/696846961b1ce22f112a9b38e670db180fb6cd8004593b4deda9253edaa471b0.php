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

/* jury/base.html.twig */
class __TwigTemplate_33e0f330ed36236a82a769f8c7fc6d676f19478afd595dc8119fe3689c60a2ad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'messages' => [$this, 'block_messages'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "jury/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), "PTIT HCM")) : ("PTIT HCM")), "html", null, true);
    }

    // line 5
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "

    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 8), "flashBag", [], "any", false, false, false, 8), "has", [0 => "scoreboard_refresh"], "method", false, false, false, 8)) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "flashBag", [], "any", false, false, false, 9), "get", [0 => "scoreboard_refresh"], "method", false, false, false, 9));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "            ";
                $this->loadTemplate("jury/refresh_scoreboard.html.twig", "jury/base.html.twig", 10)->display($context);
                // line 11
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_jury.css"), "html", null, true);
        echo "\">
";
    }

    // line 20
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->loadTemplate("jury/menu.html.twig", "jury/base.html.twig", 21)->display($context);
    }

    // line 23
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <script>
        \$(function () {
            /* Show the notification options if the browser supports it */
            if ('Notification' in window) {
                \$('#notify_disable').click(disableNotifications);
                \$('#notify_enable').click(enableNotifications);
                if (getCookie('domjudge_notify') != 1) {
                    \$('#notify_enable').removeClass('d-none');
                } else {
                    \$('#notify_disable').removeClass('d-none');
                }
            }

            updateMenuAlerts();
            setInterval(updateMenuAlerts, 20000);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 24,  133 => 23,  128 => 21,  124 => 20,  118 => 17,  113 => 16,  109 => 15,  104 => 12,  90 => 11,  87 => 10,  69 => 9,  67 => 8,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/base.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/base.html.twig");
    }
}
