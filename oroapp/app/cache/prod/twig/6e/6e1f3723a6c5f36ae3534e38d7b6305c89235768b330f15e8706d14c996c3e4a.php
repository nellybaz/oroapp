<?php

/* OroCampaignBundle:Chart:multiline.html.twig */
class __TwigTemplate_2811374e0a7c255d116f86592c0c3728a8bba20b42e6bffe3a7b90536e8a6b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 21
            echo "    ";
            $context["containerId"] = ("chart-container-" . twig_random($this->env));
            // line 22
            echo "    <div class=\"chart-container\">
        <div class=\"clearfix\">
            <div id=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["containerId"] ?? null), "html", null, true);
            echo "-chart\" class=\"multiline-chart chart pull-left\"></div>
        </div>
    </div>

    <script type=\"text/javascript\">
    require(['jquery', 'oroui/js/layout', 'flotr2', 'orochart/js/data_formatter', 'oroui/js/mediator'],
            function (\$, layout, Flotr, dataFormatter, mediator) {
                \$(function () {
                    var \$chart = \$('#";
            // line 32
            echo twig_escape_filter($this->env, ($context["containerId"] ?? null), "html", null, true);
            echo "-chart');
                    var \$widgetContent = \$chart.parents('.chart-container').parent();
                    var setChartSize = function () {
                        var chartWidth = Math.round(\$widgetContent.width() * 0.75);
                        if (chartWidth != \$chart.width()) {
                            \$chart.width(chartWidth);
                            \$chart.height(Math.min(Math.round(chartWidth * 0.4), 450));
                            return true;
                        }
                        return false;
                    };
                    var setChartContainerSize = function () {
                        \$chart.closest('.clearfix').width(\$chart.width());
                    };
                    var drawChart = function () {
                        var xFormat = ";
            // line 47
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "label", array()), "type", array()));
            echo ";
                        var yFormat = ";
            // line 48
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "value", array()), "type", array()));
            echo ";
                        if (!\$chart.get(0).clientWidth) {
                            return;
                        }

                        var rawData = ";
            // line 53
            echo twig_jsonencode_filter(($context["data"] ?? null));
            echo ";
                        var length = _.size(rawData[_.first(_.keys(rawData))]);

                        if (dataFormatter.isValueNumerical(xFormat)) {
                            var sort = function (rawData) {
                                rawData.sort(function (first, second) {
                                    if (first.label == null) {
                                        return -1;
                                    }
                                    if (second.label == null) {
                                        return 1;
                                    }
                                    var firstLabel = dataFormatter.parseValue(first.label, xFormat);
                                    var secondLabel = dataFormatter.parseValue(second.label, xFormat);
                                    return firstLabel - secondLabel;
                                });
                            };

                            _.each(rawData, sort);
                        }

                        var getXLabel = function (data) {
                            var label = dataFormatter.formatValue(data, xFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[number]['label'] === null ? '";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "' : rawData[number]['label'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var getYLabel = function (data) {
                            var label = dataFormatter.formatValue(data, yFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[data]['value'] === null ? '";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "' : rawData[data]['value'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var connectDots = ";
            // line 100
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "settings", array()), "connect_dots_with_line", array()));
            echo ";
                        var colors = ";
            // line 101
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_settings", array()), "chartColors", array()));
            echo ";

                        var makeChart = function (rawData, count, key) {
                            var chartData = [];
                            var prevYValue = 0;

                            for (var i in rawData) {
                                var yValue = dataFormatter.parseValue(rawData[i]['value'], yFormat);
                                yValue = yValue === null ? parseInt(i) : yValue;
                                yValue = yValue + prevYValue;
                                var xValue = dataFormatter.parseValue(rawData[i]['label'], xFormat);
                                xValue = xValue === null ? parseInt(i) : xValue;

                                var item = [xValue, yValue];
                                chartData.push(item);
                                prevYValue = yValue;
                            }

                            return {
                                label: key,
                                data: chartData,
                                color: colors[Math.ceil(colors.length/count)],
                                markers: { show: false },
                                points: { show: true }
                            };
                        };

                        var charts = [];
                        var count = 0;

                        _.each(rawData, function (rawData, key) {
                            var result = makeChart(rawData, count, key);
                            count++;

                            charts.push(result);
                        });

                        Flotr.draw(
                                \$chart.get(0),
                                charts,
                                {
                                    colors: colors,
                                    fontColor: ";
            // line 143
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "settings", array()), "chartFontColor", array()));
            echo ",
                                    fontSize: ";
            // line 144
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "settings", array()), "chartFontSize", array()));
            echo ",
                                    lines: {
                                        show: connectDots
                                    },
                                    mouse: {
                                        track: true,
                                        relative: true,
                                        trackFormatter: function (pointData) {
                                            return ";
            // line 152
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "label", array()), "label", array())));
            echo "
                                                + ': ' + getXLabel(pointData.x)
                                                + ';</br>' + ";
            // line 154
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "value", array()), "label", array())));
            echo "
                                                + ': ' + getYLabel(pointData.y);
                                        }
                                    },
                                    yaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 1,
                                        tickFormatter: function (y) {
                                            return getYLabel(y);
                                        },
                                        title: ";
            // line 164
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "value", array()), "label", array())));
            echo "
                                    },
                                    xaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 0,
                                        labelsAngle: 45,
                                        mode: 'time',
                                        noTicks: length * 2,
                                        tickFormatter: function (x) {
                                            return getXLabel(x);
                                        },
                                        title: ";
            // line 175
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array()), "label", array()), "label", array())));
            echo "
                                    },
                                    HtmlText: false,
                                    grid: {
                                        verticalLines: false,
                                        labelMargin: 10
                                    },
                                    legend: {
                                        show: true,
                                        noColumns: 1,
                                        position: 'nw'
                                    }
                                }
                        );
                    };

                    mediator.on('page:afterChange', function(){
                        setChartSize();
                        drawChart();
                        setChartContainerSize();
                    });

                    \$(window).resize(function () {
                        if (setChartSize()) {
                            drawChart();
                            setChartContainerSize();
                        }
                    });
                });
            });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:Chart:multiline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 175,  207 => 164,  194 => 154,  189 => 152,  178 => 144,  174 => 143,  129 => 101,  125 => 100,  114 => 92,  98 => 79,  69 => 53,  61 => 48,  57 => 47,  39 => 32,  28 => 24,  24 => 22,  21 => 21,  19 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:Chart:multiline.html.twig", "");
    }
}
