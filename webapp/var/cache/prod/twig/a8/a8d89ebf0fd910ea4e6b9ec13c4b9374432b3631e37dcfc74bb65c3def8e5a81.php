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

/* security/register.html.twig */
class __TwigTemplate_048ff87f7f77260688339abe603a536e5c2063a469683bfac7d1b9a780a86d4d extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'extrafooter' => [$this, 'block_extrafooter'],
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
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "security/register.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register Account";
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
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"additional-logins\">

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registration_form"] ?? null), 'form_start', ["attr" => ["class" => "form-signin"]]);
        echo "
        <h1 class=\"h3 mb-3 font-weight-normal\">Register Account</h1>
        <div class=\"mb-2\">
            Enter the following information to register your account with DOMjudge.
        </div>
        ";
        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registration_form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 25
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <script>
        \$(function () {
            \$('#user_registration_existingAffiliation').select2();

            var \$affiliationRadios = \$('[name=\"user_registration[affiliation]\"]');

            if (\$affiliationRadios.length) {
                \$affiliationRadios.on('change', function () {
                    var \$affiliationNameGroup = \$('#user_registration_affiliationName').closest('.form-group');
                    var \$affiliationCountryGroup = \$('#user_registration_affiliationCountry').closest('.form-group');
                    var \$existingAffiliationGroup = \$('#user_registration_existingAffiliation').closest('.form-group');
                    var value = \$affiliationRadios.filter(':checked').val();

                    switch (value) {
                        case 'none':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'new':
                            \$affiliationNameGroup.show();
                            \$affiliationCountryGroup.show();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'existing':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.show();
                            break;
                    }
                });

                var \$checkedRadio = \$affiliationRadios.filter(':checked');
                if (\$checkedRadio.length === 0) {
                    \$affiliationRadios.first().prop('checked', true);
                }

                \$affiliationRadios.change();
            }
        });
    </script>

    ";
        // line 68
        $this->loadTemplate("jury/partials/country_select.html.twig", "security/register.html.twig", 68)->display(twig_array_merge($context, ["field" => "#user_registration_affiliationCountry"]));
    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 68,  106 => 26,  102 => 25,  94 => 21,  86 => 15,  82 => 13,  78 => 12,  72 => 9,  68 => 8,  63 => 7,  59 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/register.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/security/register.html.twig");
    }
}
