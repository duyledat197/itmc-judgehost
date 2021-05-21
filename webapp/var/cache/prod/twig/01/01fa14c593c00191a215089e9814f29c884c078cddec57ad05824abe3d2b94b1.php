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

/* jury/analysis/team.html.twig */
class __TwigTemplate_851d834dd4d30561ec126575a859a974c1c4f116a5e798cbe06f021310e86f9d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Analysis - Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
<style>
.row.equal {
  display: flex;
  flex-wrap: wrap;
}
.card {
  height: 100%;
}

/* Don't show x-axis ticks/ticklines for max runtimes chart*/
#maxruntime .nv-x.nv-axis .tick {
  display: none;
}
</style>
";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<div class=\"container-fluid\">
  <div class=\"row equal mt-3\">
    <div class=\"col-12\">
      <h1>Team ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 30), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["submissions"] ?? null)), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", true, true, false, 43)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["results"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["correct"] ?? null) : null), 0)) : (0)), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "correct_percentage", [], "any", false, false, false, 43), 2), "html", null, true);
        echo "%)</span></dd>
          </dl>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 mt-3\" id=\"judging_results\">
      <div class=\"card\">
        <div class=\"card-header\">
          Judging Results
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-lg-5 col-sm-12 mt-3\" id=\"submission_times\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions over Time
        </div>
        <div class=\"card-body\">
            <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row equal\">
  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 71
            echo "      <div class=\"col-3 mt-3\" id=\"maxruntime_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
        <div class=\"card\">
          <div class=\"card-header\">
            Max Runtimes for problem ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "
          </div>
          <div class=\"card-body\">
            <svg style=\"height: 200px\"></svg>
          </div>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "  </div>
</div>


<script>
";
        // line 88
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 99
        echo "\$(function(){

    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 102
            echo "      var run_max_times_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 102), "html", null, true);
            echo " = [
        {
          key: \"Max Runtimes\",
          values: [
            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["judgings"] ?? null), function ($__j__) use ($context, $macros) { $context["j"] = $__j__; return (twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 106) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 106), "problem", [], "any", false, false, false, 106) == $context["problem"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 107
                echo "              {
                \"id\"    : ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 108), "html", null, true);
                echo ",
                \"label\" : \"j";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 109), "html", null, true);
                echo "\",
                \"value\" : ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "maxRuntime", [], "method", false, false, false, 110), "html", null, true);
                echo ",
                \"valid\" : ";
                // line 111
                echo ((twig_get_attribute($this->env, $this->source, $context["j"], "valid", [], "any", false, false, false, 111)) ? ("true") : ("false"));
                echo ",
                \"submittime\"  : \"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "submittime", [], "any", false, false, false, 112), null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "contest", [], "any", false, false, false, 112)), "html", null, true);
                echo "\",
                \"color\" : \"";
                // line 113
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["colors"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 113)] ?? null) : null), "html", null, true);
                echo "\",
\t\t\"firstfile\" : \"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 114), "files", [], "any", false, false, false, 114)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "filename", [], "any", false, false, false, 114), "html", null, true);
                echo "\",
              },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "          ]
        }
      ];
      nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .valueFormat(d3.format('.3f'))
            .staggerLabels(run_max_times_";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 125), "html", null, true);
            echo "[0].values.length > 10)
            .showValues(false)
            .forceY([0, ";
            // line 127
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 127) * 1.2), "html", null, true);
            echo "])
            .margin({bottom: 90})
            .duration(250)
          ;


        chart.yAxis
          .tickFormat(d3.format('.3f'))
          .axisLabel('Runtime(in s)');
        chart.xAxis.axisLabel(\"Judgings\");
        d3.select('#maxruntime_";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 137), "html", null, true);
            echo " svg')
            .datum(run_max_times_";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 138), "html", null, true);
            echo ")
            .call(chart);
        // Clicking on one of the bars takes you to the judgment
        chart.discretebar.dispatch.on('elementClick', function(e) {
          window.location = \"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => "_JUDGING_ID_"]);
            echo "\".replace('_JUDGING_ID_', e.data.id);
        });
        // More useful tooltip
        chart.tooltip.contentGenerator(function (obj) {
          var format = d3.format(\".3f\");
          var prepend = \"\";
          if (!obj.data.valid) {
            prepend = \"<b>(INVALID)</b><br>\"
          }
        return prepend
          + '<div style=\"background: LightCyan;\">'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
        });

        // Create our timelimit line
        d3.select('#maxruntime_";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 161), "html", null, true);
            echo " svg')
          .append('line')
          .attr({id: 'maxline'})
          .style(\"stroke\", \"#F00\");

        var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
        updateline_";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 167), "html", null, true);
            echo " = function(){
          line = d3.select('#maxruntime_";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 168), "html", null, true);
            echo " svg #maxline')
          .attr({
            x1: chart.margin().left,
            y1: chart.yAxis.scale()(";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 171), "html", null, true);
            echo ")+ chart.margin().top,
            x2: +svgsize - chart.margin().right,
            y2: chart.yAxis.scale()(";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 173), "html", null, true);
            echo ") + chart.margin().top,
          })
        }
        updateline_";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 176), "html", null, true);
            echo "();
        nv.utils.windowResize(function() {
          updateline_";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 178), "html", null, true);
            echo "();
          chart.update()
        });
        return chart;
      });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 193
            echo "            {
              \"label\" : \"";
            // line 194
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
              \"value\" : ";
            // line 195
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
              \"color\" : \"";
            // line 196
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["colors"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["result"]] ?? null) : null), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(judging_results[0].values.length > 2)
          .margin({bottom: 90})
          .duration(250)
          ;
      chart.yAxis
        .tickFormat(d3.format('.0f'))
        .axisLabel('Number of submissions');
      chart.xAxis.axisLabel(\"Judgement\");
      d3.select('#judging_results svg')
          .datum(judging_results)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });


    //////////////////////////////////////
    // Submissions over time
    // stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
    // x-axis is contest time
    // y axis is # of submissions

    var submission_stats = [
      ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 231
            echo "      {
        key: \"";
            // line 232
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
        color: \"";
            // line 233
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["colors"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["result"]] ?? null) : null), "html", null, true);
            echo "\",
        values: [
          ";
            // line 236
            echo "          ";
            // line 237
            echo "          [0,0],
          ";
            // line 238
            $context["count"] = 0;
            // line 239
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["submissions"] ?? null), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 239); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 240
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 240) == $context["result"])) {
                    $context["count"] = (($context["count"] ?? null) + 1);
                }
                // line 241
                echo "            [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 241) - twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 241)) / 60.0), "html", null, true);
                echo ",
              ";
                // line 242
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "
            ],
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "        ]
      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "    ];
    nv.addGraph(function() {
      var chart = nv.models.stackedAreaChart()
          // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
          // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
          // .transitionDuration(350)  //how fast do you want the lines to transition?
          // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
          .showControls(false)
          .x(function(d) { return d[0] })   //We can modify the data accessor functions...
          .y(function(d) { return d[1] })   //...in case your data is formatted differently.
          .showYAxis(true)        //Show the y-axis
          .showXAxis(true)        //Show the x-axis
          .forceX([0, ";
        // line 260
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "endtime", [], "any", false, false, false, 260) - twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 260)) / 60), "html", null, true);
        echo "])
          .forceY([0, ";
        // line 261
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["submissions"] ?? null)) * 1.1), "html", null, true);
        echo "])
          ;
      chart.xAxis     //Chart x-axis settings
          .axisLabel('Contest Time(minutes)')
          .tickFormat(d3.format('d'));

      chart.yAxis     //Chart y-axis settings
          .axisLabel('Total Submissions')
          .tickFormat(d3.format('d'));

      d3.select('#submission_times svg')
          .datum(submission_stats)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });

})
</script>
";
        // line 280
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/team.html.twig", 280)->display($context);
        // line 281
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/analysis/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 281,  515 => 280,  493 => 261,  489 => 260,  475 => 248,  467 => 245,  458 => 242,  453 => 241,  448 => 240,  443 => 239,  441 => 238,  438 => 237,  436 => 236,  431 => 233,  427 => 232,  424 => 231,  420 => 230,  387 => 199,  378 => 196,  374 => 195,  370 => 194,  367 => 193,  363 => 192,  353 => 184,  341 => 178,  336 => 176,  330 => 173,  325 => 171,  319 => 168,  315 => 167,  306 => 161,  284 => 142,  277 => 138,  273 => 137,  260 => 127,  255 => 125,  245 => 117,  236 => 114,  232 => 113,  228 => 112,  224 => 111,  220 => 110,  216 => 109,  212 => 108,  209 => 107,  205 => 106,  197 => 102,  193 => 101,  189 => 99,  187 => 88,  180 => 82,  166 => 74,  159 => 71,  155 => 70,  123 => 43,  117 => 40,  102 => 30,  97 => 27,  93 => 26,  73 => 9,  69 => 8,  65 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/analysis/team.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/analysis/team.html.twig");
    }
}
