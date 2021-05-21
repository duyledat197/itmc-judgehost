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

/* partials/problem_list.html.twig */
class __TwigTemplate_b1e31992cebdb14efc254347e70710bd5c0791928efe6bf71cfa8c675e51dfcc extends \Twig\Template
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
        // line 2
        echo "
<h1 class=\"mt-4 text-center\">Contest problems</h1>

";
        // line 5
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 11
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 14
                    echo "                            ";
                    if (twig_test_empty($context["problemData"])) {
                        // line 15
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 17
                        echo "                                ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 17);
                        // line 18
                        echo "                                ";
                        $context["numsamples"] = twig_get_attribute($this->env, $this->source, $context["problemData"], "numsamples", [], "any", false, false, false, 18);
                        // line 19
                        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            ";
                        // line 22
                        if (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "color", [], "any", false, false, false, 22)) {
                            // line 23
                            echo "                                                <div class=\"circle\"
                                                     style=\"background-color: ";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "color", [], "any", false, false, false, 24), "html", null, true);
                            echo ";\"></div>
                                                Problem ";
                            // line 25
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "shortName", [], "any", false, false, false, 25), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 27
                        echo "                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                        echo "
                                        </h4>
                                        ";
                        // line 31
                        if (($context["showLimits"] ?? null)) {
                            // line 32
                            echo "                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 33), "timelimit", [], "any", false, false, false, 33), "html", null, true);
                            echo "
                                                second";
                            // line 35
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 35), "timelimit", [], "any", false, false, false, 35) > 1)) {
                                echo "s";
                            }
                            // line 36
                            if (($context["timeFactorDiffers"] ?? null)) {
                                // line 37
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 39
                            echo "                                                /
                                                ";
                            // line 40
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 40), "memlimit", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 40), "memlimit", [], "any", false, false, false, 40), ($context["defaultMemoryLimit"] ?? null))) : (($context["defaultMemoryLimit"] ?? null))) * 1024));
                            echo "
                                            </h5>
                                        ";
                        }
                        // line 43
                        echo "
                                        ";
                        // line 44
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 44), "problemtextType", [], "any", false, false, false, 44))) {
                            // line 45
                            echo "                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 47
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_text_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 47)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 48
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 48), "problemtextType", [], "any", false, false, false, 48), "html", null, true);
                            echo "\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                        ";
                        }
                        // line 53
                        echo "
                                        ";
                        // line 54
                        if ((($context["numsamples"] ?? null) > 0)) {
                            // line 55
                            echo "                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, ($context["numsamples"] ?? null)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 61
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 63
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_testcase_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 63), "type" => "input", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            input ";
                                // line 64
                                if ((($context["numsamples"] ?? null) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 65
                                echo "                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 67
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_testcase_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 67), "type" => "output", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            output ";
                                // line 68
                                if ((($context["numsamples"] ?? null) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 69
                                echo "                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 72
                            echo "                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"";
                            // line 74
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_zip_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 74)]), "html", null, true);
                            echo "\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        ";
                        }
                        // line 80
                        echo "                                    </div>
                                </div>
                            ";
                    }
                    // line 83
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>

        ";
            // line 89
            if ((($context["showLimits"] ?? null) && ($context["timeFactorDiffers"] ?? null))) {
                // line 90
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 98
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 98,  242 => 90,  240 => 89,  236 => 87,  228 => 84,  222 => 83,  217 => 80,  208 => 74,  204 => 72,  196 => 69,  191 => 68,  187 => 67,  183 => 65,  178 => 64,  174 => 63,  170 => 61,  166 => 60,  159 => 55,  157 => 54,  154 => 53,  146 => 48,  142 => 47,  138 => 45,  136 => 44,  133 => 43,  127 => 40,  124 => 39,  120 => 37,  118 => 36,  114 => 35,  110 => 33,  107 => 32,  105 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 19,  74 => 18,  71 => 17,  67 => 15,  64 => 14,  60 => 13,  56 => 11,  52 => 10,  48 => 8,  44 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/problem_list.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/partials/problem_list.html.twig");
    }
}
