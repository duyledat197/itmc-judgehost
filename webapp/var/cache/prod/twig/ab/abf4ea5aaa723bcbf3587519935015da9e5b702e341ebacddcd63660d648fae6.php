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

/* jury/clarification.html.twig */
class __TwigTemplate_78c9f807ecb6a86557f21e5128612b31ea20e4471bc381fecf7e62e41517bac8 extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        // line 3
        $context["origclar"] = twig_first($this->env, ($context["list"] ?? null));
        // line 4
        $context["claimed"] = ( !twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", true, true, false, 4));
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Clarification ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 6), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
<div class=\"container clarificationform\">
";
        // line 15
        if (($context["claimed"] ?? null)) {
            // line 16
            echo "<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "jurymember_is_me", [], "any", false, false, false, 18)) {
                echo "(it's you!)";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clar"]) {
            // line 24
            echo "
<div class=\"card mb-3 ";
            // line 25
            if ( !twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 25)) {
                echo "border-primary";
            }
            echo "\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 28), "html", null, true);
            echo "
    ";
            // line 29
            if (($context["showExternalId"] ?? null)) {
                // line 30
                echo "        (external ID: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "externalid", [], "any", false, false, false, 30), "html", null, true);
                echo ")
    ";
            }
            // line 32
            echo "</div>
<div class=\"col-sm text-muted text-right\">";
            // line 33
            echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, $context["clar"], "time", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, $context["clar"], "contest", [], "any", false, false, false, 33));
            echo "</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 40)) {
                // line 41
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamname", [], "any", false, false, false, 41), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 41), "html", null, true);
                echo ")</a>
";
            } else {
                // line 43
                echo "Jury
    ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", true, true, false, 44)) {
                    // line 45
                    echo "        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", false, false, false, 45), "html", null, true);
                    echo ")
    ";
                }
            }
            // line 48
            echo "</div>

<div class=\"col-sm\">
Subject: <span class=\"clarification-subject\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 51), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-subject-change-button\"><i class=\"far fa-edit\" title=\"Change subject\"></i></button></span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 53), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
<form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_subject", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" id=\"subject\" class=\"custom-select custom-select-sm\">
";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "subjects", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
                // line 57
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo "\">
";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["subject"]);
                foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                    // line 59
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 59) == $context["id"])) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "</optgroup>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
";
            // line 74
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", true, true, false, 74)) {
                // line 75
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamname", [], "any", false, false, false, 75), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 75), "html", null, true);
                echo ")</a>
";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 76
$context["clar"], "from_teamid", [], "any", true, true, false, 76)) {
                // line 77
                echo "Jury
";
            } else {
                // line 79
                echo "<strong>All</strong>
";
            }
            // line 81
            echo "</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queue", [], "any", false, false, false, 83), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 85), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
<form action=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" id=\"queue\" class=\"custom-select custom-select-sm\">
<option value=\"\">Unassigned issues</option>
";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "queues", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["qid"] => $context["queue"]) {
                // line 90
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["qid"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 90) == $context["qid"])) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['qid'], $context['queue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "body", [], "any", false, false, false, 104), "html", null, true);
            echo "</pre></div>

</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 120
        if (($context["claimed"] ?? null)) {
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "jurymember_is_me", [], "any", false, false, false, 121)) {
                // line 122
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
";
            } else {
                // line 124
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
";
            }
        } else {
            // line 127
            echo "<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 127)) {
                echo "disabled";
            }
            echo "><i class=\"fas fa-lock\"></i> claim</button>
";
        }
        // line 129
        echo "
</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_set_answered", ["clarId" => twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 136)) {
            // line 137
            echo "<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
";
        } else {
            // line 139
            echo "<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
";
        }
        // line 141
        echo "</form>
</div>

</div>
</div>

</div>

<div class=\"collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">";
        // line 152
        $this->loadTemplate("jury/partials/clarification_form.html.twig", "jury/clarification.html.twig", 152)->display($context);
        // line 153
        echo "</div>
</div></div>

<div class=\"mb-5\"></div>
";
    }

    // line 158
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 159,  404 => 158,  396 => 153,  394 => 152,  382 => 141,  378 => 139,  374 => 137,  372 => 136,  367 => 134,  360 => 129,  352 => 127,  347 => 124,  343 => 122,  341 => 121,  339 => 120,  334 => 118,  324 => 110,  312 => 104,  298 => 92,  283 => 90,  279 => 89,  273 => 86,  267 => 85,  262 => 83,  258 => 81,  254 => 79,  250 => 77,  248 => 76,  239 => 75,  237 => 74,  224 => 63,  217 => 61,  202 => 59,  198 => 58,  193 => 57,  189 => 56,  184 => 54,  178 => 53,  173 => 51,  168 => 48,  161 => 45,  159 => 44,  156 => 43,  146 => 41,  144 => 40,  134 => 33,  131 => 32,  125 => 30,  123 => 29,  119 => 28,  111 => 25,  108 => 24,  104 => 23,  100 => 21,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  83 => 15,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  54 => 6,  49 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/clarification.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/clarification.html.twig");
    }
}
