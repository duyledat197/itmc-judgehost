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

/* jury/partials/rejudging_buttons.html.twig */
class __TwigTemplate_21e2887781b1051f6bb68e0ab059311478c00bb956f6c607fc62a37e3bab2dba extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div>
        ";
            // line 3
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 3), "action" => "cancel"]), "Cancel rejudging", "danger", "times");
            echo "
        ";
            // line 4
            if ((($context["todo"] ?? null) == 0)) {
                // line 5
                echo "            ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 5), "action" => "apply"]), "Apply rejudging", "success", "check");
                echo "
        ";
            }
            // line 7
            echo "    </div>
";
        } else {
            // line 9
            echo "    <div>
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
            <i class=\"fas fa-sync\"></i> Repeat rejudging
        </button>
    </div>

    <div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Repeat rejudging</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
            echo "\" method=\"post\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"table\" value=\"rejudging\"/>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 27), "html", null, true);
            echo "\"/>
                        This will create a new rejudging with the same submissions as this rejudging.
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                        <input type=\"submit\" value=\"Repeat rejudging\" class=\"btn btn-primary\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 24,  58 => 9,  54 => 7,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_buttons.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/partials/rejudging_buttons.html.twig");
    }
}
