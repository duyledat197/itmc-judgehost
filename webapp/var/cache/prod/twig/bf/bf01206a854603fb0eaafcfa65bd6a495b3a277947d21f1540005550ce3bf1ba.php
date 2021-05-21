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

/* jury/index.html.twig */
class __TwigTemplate_4a6facd7253afc046f4217886fe5b76aa565f7d791fd6d1451e9d6c9b3465e19 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h1>DOMjudge Jury interface</h1>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "    ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 13)->display(twig_array_merge($context, ["type" => "danger", "message" => $context["error"]]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<a href=\"https://www.domjudge.org/\">
  <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\" />
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 23
            echo "        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a></li>
                    <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a></li>
                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">Judgehost Restrictions</a></li>
                    <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                    <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                    <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                    <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">Team Categories</a></li>
                    <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">Team Affiliations</a></li>
                </ul>
            </div>
        </div>
        ";
        }
        // line 43
        echo "
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
        echo "\">Balloon Status</a></li>
                    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 52
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">Clarifications</a></li>
                        <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">Internal Errors</a></li>
                    ";
        }
        // line 55
        echo "                    ";
        if (($context["have_printing"] ?? null)) {
            // line 56
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                    ";
        }
        // line 58
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 59
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a></li>
                        <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">Statistics/Analysis</a></li>
                        <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a></li>
                        ";
            // line 63
            if (($context["show_shadow_differences"] ?? null)) {
                // line 64
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">Shadow Differences</a></li>
                        ";
            }
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 74
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">Configuration settings</a></li>
          <li><a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a></li>
          <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">Import / export</a></li>
          <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">Manage team passwords</a></li>
          <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">Refresh scoreboard cache</a></li>
          <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">Judging verifier</a></li>
          <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
        </ul>
      </div>
    </div>
    ";
        }
        // line 91
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/html/index.html"), "html", null, true);
        echo "\">DOMjudge manual</a></li>
        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/team/domjudge-team-manual.pdf"), "html", null, true);
        echo "\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 100,  300 => 99,  296 => 98,  287 => 91,  279 => 86,  275 => 85,  271 => 84,  267 => 83,  263 => 82,  259 => 81,  255 => 80,  247 => 74,  245 => 73,  237 => 67,  234 => 66,  228 => 64,  226 => 63,  222 => 62,  218 => 61,  214 => 60,  209 => 59,  206 => 58,  200 => 56,  197 => 55,  192 => 53,  187 => 52,  185 => 51,  181 => 50,  172 => 43,  164 => 38,  160 => 37,  156 => 36,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  120 => 23,  118 => 22,  110 => 17,  106 => 15,  91 => 13,  74 => 12,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/index.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/index.html.twig");
    }
}
