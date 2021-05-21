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

/* partials/javascript_print.html.twig */
class __TwigTemplate_2c1652ef7b28e156f01fb14206273c7d43483177f97345fca3fe1a1a9c093659 extends \Twig\Template
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
        echo "<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
";
        // line 21
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "partials/javascript_print.html.twig", 21)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/javascript_print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/javascript_print.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/javascript_print.html.twig");
    }
}
