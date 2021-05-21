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

/* partials/menu_login_logout_button.html.twig */
class __TwigTemplate_62b8f803e1e36281e2167b4e8fc16c8d99e3490421a014116ca127f36c0c730e extends \Twig\Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <a class=\"nav-link justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"
    ";
            // line 3
            if ((isset($context["confirmLogout"]) || array_key_exists("confirmLogout", $context))) {
                // line 4
                echo "        onclick=\"return confirmLogout();\"
    ";
            }
            // line 5
            echo ">
        <button type=\"button\" class=\"btn btn-outline-info btn-sm\">
            <i class=\"fas fa-sign-out-alt\"></i> Logout
        </button>
    </a>
";
        } else {
            // line 11
            echo "    <a class=\"nav-link justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
        <button type=\"button\" class=\"btn btn-info btn-sm\">
            <i class=\"fas fa-sign-in-alt\"></i> Login
        </button>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/menu_login_logout_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  50 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/menu_login_logout_button.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/menu_login_logout_button.html.twig");
    }
}
