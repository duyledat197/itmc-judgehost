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

/* jury/analysis/contest_overview.html.twig */
class __TwigTemplate_83122e8a73324134a7e5c04d35c4a90954645d31e0bc83c0fb6babf1da233387 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/contest_overview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Analysis - Contest";
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
.clickable-row:hover {
  cursor: pointer;
}
.card-body.tablecard{
  overflow-y: auto;
  height: 500px;
  max-height: 500px;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<script>
\$(function() {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
    \$('[data-toggle=\"popover\"]').popover({
      trigger: 'hover',
      html: true
    })
})
</script>
";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-12 mt-3\">
      <h1>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
      ";
        // line 43
        $this->loadTemplate("jury/partials/analysis_filter.html.twig", "jury/analysis/contest_overview.html.twig", 43)->display($context);
        // line 44
        echo "    </div>
    <div class=\"col-md-3 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Contest Stats
        </div>
        <div class=\"card-body\">
          <abbr data-toggle=\"popover\" data-placement=\"bottom\" title=\"Misery Index\" data-content=\"
            This is a measure of how 'bored' contestants are. It is the average number of
            people-minutes spent fruitlessly trying to solve problems at the end of the contest.
            <br>
            Calculated as:<br>
            average across all teams of [3 people x (number of minutes elapsed - minute last problem solved by team t)]
          \">Misery index</abbr>: ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "misery_index", [], "any", false, false, false, 57), 0), "html", null, true);
        echo " minutes<br>
          # Submissions: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "total_submissions", [], "any", false, false, false, 58), "html", null, true);
        echo "<br>
          # Accepted Submissions: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "total_accepted", [], "any", false, false, false, 59), "html", null, true);
        echo " <span class=\"text-muted\">(~";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "total_submissions", [], "any", false, false, false, 59) > 0)) ? (((twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "total_accepted", [], "any", false, false, false, 59) / twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "total_submissions", [], "any", false, false, false, 59)) * 100)) : (0)), 0), "html", null, true);
        echo "%)</span><br>
          # of Teams: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "num_teams", [], "any", false, false, false, 60), "html", null, true);
        echo "<br>

<!--
          # of Teams solving n problems<br>
          <table class=\"table table-sm\">
            <thead>
              <tr>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["problems"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 68
            echo "                <th>";
            echo twig_escape_filter($this->env, $context["x"], "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "              </tr>
            </thead>
            <tbody>
              <tr>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["problems"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 75
            echo "                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 75), $context["n"], [], "array", true, true, false, 75)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 75)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["n"]] ?? null) : null), " ")) : (" ")), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "              </tr>
            </tbody>
          </table>
-->
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mt-3\" id=\"graph_languages\">
      <div class=\"card\">
        <div class=\"card-header\">
          Language Stats
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-5 mt-3\" id=\"graph_problems\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems Attempted/Solved
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-12 mt-3\" id=\"graph_submissions\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions Over Time
        </div>
        <div class=\"card-body\">
        <svg style=\"height: 400px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">time<br>limit</th>
                <th scope=\"col\">memory<br>limit</th>
                <th scope=\"col\">test<br>cases</th>
                <th scope=\"col\"># <br>attempts/solutions</th>
                <th scope=\"col\"># teams<br>attempted/solved</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 136
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["p"], "probid", [], "any", false, false, false, 136);
            // line 137
            echo "              <tr class='clickable-row' data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_problem", ["probid" => ($context["id"] ?? null), "view" => ($context["view"] ?? null)]), "html", null, true);
            echo "\">
                <th scope=\"row\">";
            // line 138
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "</th>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "shortname", [], "any", false, false, false, 139) . " - ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139)), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 140), "timelimit", [], "any", false, false, false, 140), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 141), "memlimit", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 141), "memlimit", [], "any", false, false, false, 141), "default")) : ("default")), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_num_testcases", [], "any", false, false, false, 142)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["id"] ?? null)] ?? null) : null), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 143), ($context["id"] ?? null), [], "array", true, true, false, 143)) ? (_twig_default_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 143)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["id"] ?? null)] ?? null) : null), 0)) : (0)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 143), ($context["id"] ?? null), [], "array", true, true, false, 143)) ? (_twig_default_filter((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 143)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["id"] ?? null)] ?? null) : null), 0)) : (0)), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_attempted", [], "any", false, true, false, 144), ($context["id"] ?? null), [], "array", true, true, false, 144)) ? (_twig_default_filter((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_attempted", [], "any", false, true, false, 144)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["id"] ?? null)] ?? null) : null), [])) : ([]))), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_solved", [], "any", false, true, false, 144), ($context["id"] ?? null), [], "array", true, true, false, 144)) ? (_twig_default_filter((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_solved", [], "any", false, true, false, 144)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["id"] ?? null)] ?? null) : null), [])) : ([]))), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Teams
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">affiliation</th>
                <th scope=\"col\" style=\"max-width: 200px\">name</th>
                <th scope=\"col\">#<br>submitted/correct</th>
                <th scope=\"col\"># problems<br>attempted/solved</th>
                <th scope=\"col\">Misery<br>Index</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 171
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["t"], "teamid", [], "any", false, false, false, 171);
            // line 172
            echo "              <tr class=\"clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_team", ["teamid" => ($context["id"] ?? null)]), "html", null, true);
            echo "\">
                <th scope=\"row\">";
            // line 173
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "</th>
                <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "affiliation", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
                <td class=\"truncate\" style=\"max-width: 200px\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "effectiveName", [], "any", false, false, false, 175), "html", null, true);
            echo "</td>
                <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "team_stats", [], "any", false, false, false, 176)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["id"] ?? null)] ?? null) : null), "total_submitted", [], "any", false, false, false, 176), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "team_stats", [], "any", false, false, false, 176)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["id"] ?? null)] ?? null) : null), "total_accepted", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
                <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "team_stats", [], "any", false, false, false, 177)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["id"] ?? null)] ?? null) : null), "problems_submitted", [], "any", false, false, false, 177)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "team_stats", [], "any", false, false, false, 177)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["id"] ?? null)] ?? null) : null), "problems_accepted", [], "any", false, false, false, 177)), "html", null, true);
            echo "</td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "team_stats", [], "any", false, false, false, 178)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["id"] ?? null)] ?? null) : null), "misery_index", [], "any", false, false, false, 178), 0), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-6 mt-3 mb-3\">
          <div class=\"card\">
              <div class=\"card-header\">
                  Delayed Judgings (by more than ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delayed_judgings"] ?? null), "delay", [], "any", false, false, false, 191), "html", null, true);
        echo "s)
              </div>
              <div class=\"card-body tablecard\">
                  ";
        // line 194
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delayed_judgings"] ?? null), "data", [], "any", false, false, false, 194)) > 0)) {
            // line 195
            echo "                      <table class=\"table table-sm table-striped table-hover\">
                          <thead>
                          <tr>
                              <th scope=\"col\">submit ID</th>
                              <th scope=\"col\">judging ID</th>
                              <th scope=\"col\">submit time</th>
                              <th scope=\"col\">num judgings</th>
                              <th scope=\"col\">time to<br/>first judging</th>
                          </tr>
                          </thead>
                          <tbody>
                          ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delayed_judgings"] ?? null), "data", [], "any", false, false, false, 206));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 207
                echo "                              ";
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["j"], "submitid", [], "any", false, false, false, 207);
                // line 208
                echo "                              <tr class='clickable-row' data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => ($context["id"] ?? null)]), "html", null, true);
                echo "\">
                                  <th scope=\"row\">";
                // line 209
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "</th>
                                  <td scope=\"row\">";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 210), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["j"], "submittime", [], "any", false, false, false, 211)), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "num_judgings", [], "any", false, false, false, 212), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 213
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "timediff", [], "any", false, false, false, 213), 2), "html", null, true);
                echo "s</td>
                              </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                          </tbody>
                      </table>
                      ";
            // line 218
            if ((twig_get_attribute($this->env, $this->source, ($context["delayed_judgings"] ?? null), "overflow", [], "any", false, false, false, 218) > 0)) {
                // line 219
                echo "                          <div class=\"alert alert-warning\">There are ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delayed_judgings"] ?? null), "overflow", [], "any", false, false, false, 219), "html", null, true);
                echo " more delayed judgings which are not shown.</div>
                      ";
            }
            // line 221
            echo "                  ";
        } else {
            // line 222
            echo "                      <div class=\"alert alert-warning\">There are no judgings delayed so far.</div>
                  ";
        }
        // line 224
        echo "              </div>
          </div>
      </div>
  </div>
</div>


<script>
";
        // line 233
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 244
        echo "

//////////////////////////////////////
// Results by language
// bar graph, x axis is language, y axis is # of solutions
// mutlibar, one for attempts, one for solutions
var language_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "language_stats", [], "any", false, false, false, 255), "total_submissions", [], "any", false, false, false, 255));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 256
            echo "        {
          \"label\" : \"";
            // line 257
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 258
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "language_stats", [], "any", false, false, false, 267), "total_solutions", [], "any", false, false, false, 267));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 268
            echo "        {
          \"label\" : \"";
            // line 269
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 270
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Submissions');
  chart.xAxis.axisLabel(\"Language\");
  d3.select('#graph_languages svg')
      .datum(language_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Results by problem
// Graph, multibar chart, x axis is problem id/shortname, y axis is # of teams
// one bar for #teams attempted(red), second bar for solved(green)
var problem_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 309
            echo "        {
          \"label\" : \"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 310), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 311
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 311), "teams_attempted", [], "any", false, true, false, 311), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 311), [], "array", true, true, false, 311)) ? (_twig_default_filter((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 311), "teams_attempted", [], "any", false, true, false, 311)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 311)] ?? null) : null), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 321
            echo "        {
          \"label\" : \"";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 322), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 323
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 323), "teams_solved", [], "any", false, true, false, 323), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 323), [], "array", true, true, false, 323)) ? (_twig_default_filter((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 323), "teams_solved", [], "any", false, true, false, 323)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 323)] ?? null) : null), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Teams');
  chart.xAxis.axisLabel(\"Problem\");
  d3.select('#graph_problems svg')
      .datum(problem_stats)
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
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 360
            echo "  {
    key: \"";
            // line 361
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
    color: \"";
            // line 362
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["colors"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["result"]] ?? null) : null), "html", null, true);
            echo "\",
    values: [
      ";
            // line 365
            echo "      ";
            // line 366
            echo "      [0,0],
      ";
            // line 367
            $context["count"] = 0;
            // line 368
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["submissions"] ?? null), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 368); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 369
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 369) == $context["result"])) {
                    $context["count"] = (($context["count"] ?? null) + 1);
                }
                // line 370
                echo "        [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 370) - twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 370)) / 60.0), "html", null, true);
                echo ",
          ";
                // line 371
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "
        ],
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "    ]
  },
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "];
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
        // line 389
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "endtime", [], "any", false, false, false, 389) - twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 389)) / 60), "html", null, true);
        echo "])
      .forceY([0, ";
        // line 390
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["submissions"] ?? null)) * 1.1), "html", null, true);
        echo "])
      ;
  chart.xAxis     //Chart x-axis settings
      .axisLabel('Contest Time(minutes)')
      .tickFormat(d3.format('d'));

  chart.yAxis     //Chart y-axis settings
      .axisLabel('Total Submissions')
      .tickFormat(d3.format('d'));

  d3.select('#graph_submissions svg')
      .datum(submission_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


</script>
";
        // line 409
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/contest_overview.html.twig", 409)->display($context);
    }

    public function getTemplateName()
    {
        return "jury/analysis/contest_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 409,  724 => 390,  720 => 389,  706 => 377,  698 => 374,  689 => 371,  684 => 370,  679 => 369,  674 => 368,  672 => 367,  669 => 366,  667 => 365,  662 => 362,  658 => 361,  655 => 360,  651 => 359,  616 => 326,  607 => 323,  603 => 322,  600 => 321,  596 => 320,  588 => 314,  579 => 311,  575 => 310,  572 => 309,  568 => 308,  531 => 273,  522 => 270,  518 => 269,  515 => 268,  511 => 267,  503 => 261,  494 => 258,  490 => 257,  487 => 256,  483 => 255,  470 => 244,  468 => 233,  458 => 224,  454 => 222,  451 => 221,  445 => 219,  443 => 218,  439 => 216,  430 => 213,  426 => 212,  422 => 211,  418 => 210,  414 => 209,  409 => 208,  406 => 207,  402 => 206,  389 => 195,  387 => 194,  381 => 191,  369 => 181,  360 => 178,  354 => 177,  348 => 176,  344 => 175,  340 => 174,  336 => 173,  331 => 172,  328 => 171,  324 => 170,  299 => 147,  288 => 144,  282 => 143,  278 => 142,  274 => 141,  270 => 140,  266 => 139,  262 => 138,  257 => 137,  254 => 136,  250 => 135,  190 => 77,  181 => 75,  177 => 74,  171 => 70,  162 => 68,  158 => 67,  148 => 60,  142 => 59,  138 => 58,  134 => 57,  119 => 44,  117 => 43,  113 => 42,  108 => 39,  104 => 38,  72 => 9,  68 => 8,  64 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/analysis/contest_overview.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/analysis/contest_overview.html.twig");
    }
}
