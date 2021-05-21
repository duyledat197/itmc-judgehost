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

/* jury/analysis/download_graphs.html.twig */
class __TwigTemplate_203671e9708c8c90f71f09d967765495eb529b6fbe8dd253cb484d82c9c6afcc extends \Twig\Template
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
    // Source: http://bl.ocks.org/Rokotyan/0556f8facbaf344507cdc45dc3622177
    // Slightly modified to copy the correct CSS
    function getSVGString(svgNode) {
        svgNode.setAttribute('xlink', 'http://www.w3.org/1999/xlink');
        var cssStyleText = getCSSStyles();
        appendCSS(cssStyleText, svgNode);

        var serializer = new XMLSerializer();
        var svgString = serializer.serializeToString(svgNode);
        svgString = svgString.replace(/(\\w+)?:?xlink=/g, 'xmlns:xlink='); // Fix root xlink without namespace
        svgString = svgString.replace(/NS\\d+:href/g, 'xlink:href'); // Safari NS namespace fix

        return svgString;

        function getCSSStyles() {
            // Extract CSS Rules
            var extractedCSSText = \"\";
            for (var i = 0; i < document.styleSheets.length; i++) {
                var s = document.styleSheets[i];

                try {
                    if (!s.cssRules) continue;
                } catch (e) {
                    if (e.name !== 'SecurityError') throw e; // for Firefox
                    continue;
                }

                var cssRules = s.cssRules;
                for (var r = 0; r < cssRules.length; r++) {
                    if (/nvd3/.test(cssRules[r].selectorText) || true) {
                        extractedCSSText += cssRules[r].cssText;
                    }
                }
            }

            return extractedCSSText;
        }

        function appendCSS(cssText, element) {
            var styleElement = document.createElement(\"style\");
            styleElement.setAttribute(\"type\", \"text/css\");
            styleElement.innerHTML = cssText;
            var refNode = element.hasChildNodes() ? element.children[0] : null;
            element.insertBefore(styleElement, refNode);
        }
    }

    \$(function () {
        \$('.container-fluid svg').each(function () {
            var \$button = \$('<button class=\"btn btn-sm btn-outline-secondary\" style=\"margin-left: 8px;\"><i class=\"fas fa-download\"></i> SVG</button>');
            var \$svg = \$(this);

            // Pick a good place for the button, on the submission page next to
            // the title, otherwise next to the card header.
            if (\$(this).parent().children(':first-child').is('h3')) {
                \$(this).parent().children(':first-child').append(\$button);
            } else {
                \$(this).parent().parent().children(':first-child').append(\$button);
            }

            \$button.on('click', function () {
                var svg = \$svg[0];
                var svgString = getSVGString(svg);
                var svgBlob = new Blob([svgString], {type: \"image/svg+xml;charset=utf-8\"});
                saveAs(svgBlob, 'graph.svg');
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/analysis/download_graphs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/analysis/download_graphs.html.twig", "/home/tncnhan/domjudge/domserver/webapp/templates/jury/analysis/download_graphs.html.twig");
    }
}
