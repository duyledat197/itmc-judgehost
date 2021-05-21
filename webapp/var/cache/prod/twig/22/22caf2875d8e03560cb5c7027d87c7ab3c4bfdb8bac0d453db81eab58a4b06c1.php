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

/* team/partials/submit_scripts.html.twig */
class __TwigTemplate_c5628334b7aef51a75677f5092513f015edf28d5149a2a2d452c5834efb3f705 extends \Twig\Template
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
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "team/partials/submit_scripts.html.twig", 1)->display($context);
        // line 2
        echo "<script>
    function entryPointDetectJava(filename) {
        return filename.replace(/\\.[^\\.]*\$/, '');
    }

    function entryPointDetectKt(filename) {
        var filebase = filename.replace(/\\.[^\\.]*\$/, '');
        if (filebase === '') return '_Kt';

        filebase = filebase.replace(/[^a-zA-Z0-9]/, '_');
        if (filebase.charAt(0).match(/^[a-zA-Z]\$/)) {
            return filebase.charAt(0).toUpperCase() + filebase.slice(1) + 'Kt';
        } else {
            return '_' + filebase + 'Kt';
        }
    }

    function maybeShowEntryPoint(filename) {
        var langid = \$('#submit_problem_language').val();
        if (langid === \"\") {
            return;
        }
        var \$entryPoint = \$('[data-entry-point]');
        var \$entryPointLabel = \$entryPoint.find('label');
        var \$entryPointInput = \$entryPoint.find('input');
        var entryPointDescription = getEntryPoint(langid);
        if (entryPointDescription) {
            \$entryPoint.show();
        } else {
            \$entryPoint.hide();
        }

        if (entryPointDescription) {
            var \$labelChildren = \$entryPointLabel.children();
            \$entryPointLabel.text(entryPointDescription).append(\$labelChildren);
            \$entryPointInput.attr('required', 'required');
        } else {
            \$entryPointInput.attr('required', null);
        }

        if (entryPointDescription && filename) {
            switch (langid) {
                case 'java':
                    \$entryPointInput.val(entryPointDetectJava(filename));
                    break;
                case 'kt':
                    \$entryPointInput.val(entryPointDetectKt(filename));
                    break;
                default:
                    \$entryPointInput.val(filename);
            }
        } else {
            \$entryPointInput.val('');
        }
    }

    \$(function () {
        var \$entryPoint = \$('[data-entry-point]');
        \$entryPoint.hide();

        var processFile = function () {
            var filename = \$('#submit_problem_code').val();
            if (filename !== '' && filename !== undefined) {
                filename = filename.replace(/^.*[\\\\\\/]/, '');
                var parts = filename.split('.').reverse();
                if (parts.length < 2) return;
                var lcParts = [parts[0].toLowerCase(), parts[1].toLowerCase()];

                // Problem ID

                var problem = document.getElementById('submit_problem_problem');
                // the \"autodetect\" option has empty value
                if (problem.value !== '') {
                    return;
                }

                for (var i = 0; i < problem.length; i++) {
                    if (problem.options[i].text.split(/ - /)[0].toLowerCase() === lcParts[1]) {
                        problem.selectedIndex = i;
                    }
                }

                // language ID

                var language = document.getElementById('submit_problem_language');
                // the \"autodetect\" option has empty value
                if (language.value !== '') return;

                var langid = getMainExtension(lcParts[0]);
                for (i = 0; i < language.length; i++) {
                    if (language.options[i].value === langid) {
                        language.selectedIndex = i;
                    }
                }

                maybeShowEntryPoint(filename);
            }
        };

        var \$body = \$('body');
        \$body.on('change', '#submit_problem_code', processFile);
        \$body.on('change', '#submit_problem_language', function () {
            maybeShowEntryPoint();
        });

        \$body.on('submit', 'form[name=submit_problem]', function () {
            var langelt = document.getElementById(\"submit_problem_language\");
            var language = langelt.options[langelt.selectedIndex].value;
            var languagetxt = langelt.options[langelt.selectedIndex].text;
            var fileelt = document.getElementById(\"submit_problem_code\");
            var filenames = fileelt.files;
            var filename = filenames[0].name;
            var probelt = document.getElementById(\"submit_problem_problem\");
            var problem = probelt.options[probelt.selectedIndex].value;
            var problemtxt = probelt.options[probelt.selectedIndex].text;

            var error = false;
            if (language === \"\") {
                langelt.focus();
                langelt.className = langelt.className + \" errorfield\";
                error = true;
            }
            if (problem === \"\") {
                probelt.focus();
                probelt.className = probelt.className + \" errorfield\";
                error = true;
            }
            if (filename === \"\") {
                error = true;
            }
            if (error) return false;

            var auxfileno = 0;
            // start at one; skip maincode file field
            for (var i = 1; i < filenames.length; i++) {
                if (filenames[i].value !== \"\") {
                    auxfileno++;
                }
            }
            var extrafiles = '';
            if (auxfileno > 0) {
                extrafiles = \"Additional source files: \" + auxfileno + '\\n';
            }
            var question =
                'Main source file: ' + filename + '\\n' +
                extrafiles + '\\n' +
                'Problem: ' + problemtxt + '\\n' +
                'Language: ' + languagetxt + '\\n' +
                '\\nMake submission?';
            return confirm(question);
        });

        processFile();
        maybeShowEntryPoint();

        window.initSubmitModal = function (\$elem) {
            \$('[data-entry-point]').hide();
        };
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "team/partials/submit_scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submit_scripts.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/team/partials/submit_scripts.html.twig");
    }
}
