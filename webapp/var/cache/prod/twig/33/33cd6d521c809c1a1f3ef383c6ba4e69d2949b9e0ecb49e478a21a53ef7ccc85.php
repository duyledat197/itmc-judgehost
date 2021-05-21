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

/* security/login.html.twig */
class __TwigTemplate_549db235603e5cf59023a3227d8a39605be0ee31e19aceec1d74bc24c569be30 extends \Twig\Template
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
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "DOMjudge Login";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        $context["hasaltmethods"] = ((twig_in_filter("xheaders",         // line 13
($context["allowed_authmethods"] ?? null)) && ($context["auth_xheaders_present"] ?? null)) || (twig_in_filter("ipaddress",         // line 14
($context["allowed_authmethods"] ?? null)) && (twig_length_filter($this->env, ($context["auth_ipaddress_users"] ?? null)) > 0)));
        // line 15
        echo "    ";
        $context["showregular"] = ( !($context["hasaltmethods"] ?? null) || ($context["error"] ?? null));
        // line 16
        echo "
    <div class=\"form-signin\" id=\"loginform\">
        <img style = \"margin-bottom: 100px\" class=\"loginLogo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" alt=\"Infomation Technology Multimedia Club\" width=\"300\">
        ";
        // line 19
        $this->loadTemplate("partials/messages.html.twig", "security/login.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            $context["message"] = (("You are currently automatically logged in as " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21)) . ".<br />Use the form below to change login.");
            // line 22
            echo "            ";
            $this->loadTemplate("partials/alert.html.twig", "security/login.html.twig", 22)->display(twig_array_merge($context, ["type" => "success"]));
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <br class=\"clearfix\">

        ";
        // line 27
        if (($context["hasaltmethods"] ?? null)) {
            // line 28
            echo "            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                ";
            // line 33
            if ((twig_in_filter("xheaders", ($context["allowed_authmethods"] ?? null)) && ($context["auth_xheaders_present"] ?? null))) {
                // line 34
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((twig_in_filter("ipaddress", ($context["allowed_authmethods"] ?? null)) && (twig_length_filter($this->env, ($context["auth_ipaddress_users"] ?? null)) > 0))) {
                // line 58
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                ";
                // line 66
                if ((($context["auth_ipaddress_users"] ?? null) == 1)) {
                    echo "The accounts associated with your IP are shown below.
                                ";
                } else {
                    // line 67
                    echo "The account associated with your IP is shown below.";
                }
                // line 68
                echo "                            </p>
                        </div>

                        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["auth_ipaddress_users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 72
                    echo "                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 73), "html", null, true);
                    echo "\">
                                Log in as ";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 74), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                ";
            }
            // line 84
            echo "            </div>

            <div class=\"vertical-line regularLoginform";
            // line 86
            if ( !($context["showregular"] ?? null)) {
                echo " d-none";
            }
            echo "\"></div>
        ";
        }
        // line 88
        echo "
        <div class=\"main-login ml-2 regularLoginform ";
        // line 89
        if ( !($context["showregular"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <h1 class=\"h3 mb-3 font-weight-normal center\" style = \"text-align: center;\">Sign In</h1>
            <form action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"login-content\">
                    ";
        // line 94
        if (($context["error"] ?? null)) {
            // line 95
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 95), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 97
        echo "
                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                ";
        // line 111
        if (($context["allow_registration"] ?? null)) {
            // line 112
            echo "                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register now</a>.
                    </div>
                ";
        }
        // line 117
        echo "            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\">DOMjudge ";
        // line 120
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo "</p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 120,  284 => 117,  278 => 114,  274 => 112,  272 => 111,  256 => 97,  250 => 95,  248 => 94,  243 => 92,  239 => 91,  232 => 89,  229 => 88,  222 => 86,  218 => 84,  209 => 77,  200 => 74,  196 => 73,  193 => 72,  189 => 71,  184 => 68,  181 => 67,  176 => 66,  168 => 61,  163 => 59,  160 => 58,  158 => 57,  155 => 56,  133 => 37,  128 => 35,  125 => 34,  123 => 33,  116 => 28,  114 => 27,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  87 => 16,  84 => 15,  82 => 14,  81 => 13,  80 => 12,  77 => 11,  73 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/security/login.html.twig");
    }
}
