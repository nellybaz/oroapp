<?php

/* OroSalesBundle:Widget:entityWithDataChannelGrid.html.twig */
class __TwigTemplate_c5835651c39d9c4dc4348ddcbb9035b0d4d00a67478d534d5fd3d149377b53b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OroDataGridBundle:Grid/widget:widget.html.twig", "OroSalesBundle:Widget:entityWithDataChannelGrid.html.twig", 2);
        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDataGridBundle:Grid/widget:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_widget_content($context, array $blocks = array())
    {
        // line 5
        echo "    <script type=\"text/javascript\">
        require(['oroui/js/mediator', 'oroui/js/widget-manager'],
            function(mediator, widgetManager) {
                var gridName = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["gridName"] ?? null), ($context["channelId"] ?? null)), "html", null, true);
        echo "';
                mediator.bind('datagrid_create_before', function(options) {
                    if (options.name == gridName) {
                        ";
        // line 11
        if (($context["multiselect"] ?? null)) {
            // line 12
            echo "                        options.multiSelectRowEnabled = true;
                        ";
        } else {
            // line 14
            echo "                        options.rowClickAction = function(data) {
                            return {
                                run: function() {
                                    widgetManager.getWidgetInstance(
                                            ";
            // line 18
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ",
                                            function(widget) {
                                                widget.trigger('grid-row-select', data);
                                            }
                                    );
                                }
                            }
                        };
                        ";
        }
        // line 27
        echo "                    }
                });
            });
    </script>

    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataGrid"] ?? null), "renderGrid", array(0 => $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(        // line 33
($context["gridName"] ?? null), ($context["channelId"] ?? null)), 1 => twig_array_merge(array("channelIds" =>         // line 34
($context["channelId"] ?? null), "routerEnabled" => false), ($context["renderParams"] ?? null))), "method"), "html", null, true);
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Widget:entityWithDataChannelGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  75 => 34,  74 => 33,  73 => 32,  66 => 27,  54 => 18,  48 => 14,  44 => 12,  42 => 11,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Widget:entityWithDataChannelGrid.html.twig", "");
    }
}
