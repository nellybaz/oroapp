<?php

/* OroFrontendBundle:layouts/default/oro_frontend_datagrid_widget:datagrid.html.twig */
class __TwigTemplate_c7ab7f0d387ed88a6dd35faf3591457faf006524f0b15341e5e3a55913f23ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_widget_datagrid_widget' => array($this, 'block__widget_datagrid_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_widget_datagrid_widget', $context, $blocks);
    }

    public function block__widget_datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["grid_parameters"] = twig_array_merge(array("enableFullScreenLayout" => true), ($context["grid_parameters"] ?? null));
        // line 3
        echo "    ";
        // line 4
        echo "    <script type=\"text/javascript\">
        require(['oroui/js/mediator', 'oroui/js/widget-manager'],
                function(mediator, widgetManager) {
                    var gridName = ";
        // line 7
        echo twig_jsonencode_filter(($context["grid_full_name"] ?? null));
        echo ";
                    mediator.bind('datagrid_create_before', function(options) {
                        if (options.name == gridName) {
                            ";
        // line 10
        if (($context["multiselect"] ?? null)) {
            // line 11
            echo "                            options.multiSelectRowEnabled = true;
                            ";
        } else {
            // line 13
            echo "                            options.rowClickAction = function(data) {
                                return {
                                    run: function() {
                                        widgetManager.getWidgetInstance(
                                                ";
            // line 17
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
        // line 26
        echo "                        }
                    });
                });
    </script>
    <div class=\"flash-messages\">
        <div class=\"flash-messages-frame\">
            <div class=\"flash-messages-holder\"></div>
        </div>
    </div>
    ";
        // line 35
        if ((($context["split_to_cells"] ?? null) != false)) {
            // line 36
            echo "        ";
            $context["themeOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array()));
            // line 37
            echo "        ";
            $context["themeOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["themeOptions"] ?? null), array("headerRowTemplateSelector" => "#template-datagrid-header-row", "rowTemplateSelector" => "#template-datagrid-row"));
            // line 41
            echo "        ";
            $context["toolbarOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array()), array())) : (array()));
            // line 42
            echo "        ";
            $context["toolbarOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["toolbarOptions"] ?? null), array("columnManager" => array("addSorting" => false)));
            // line 45
            echo "        ";
            $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("themeOptions" =>             // line 46
($context["themeOptions"] ?? null), "toolbarOptions" =>             // line 47
($context["toolbarOptions"] ?? null)));
            // line 49
            echo "        ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
    ";
        }
        // line 51
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroFrontendBundle:layouts/default/oro_frontend_datagrid_widget:datagrid.html.twig", 51);
        // line 52
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid(($context["grid_full_name"] ?? null), ($context["grid_parameters"] ?? null), twig_array_merge(array("enableViews" => false, "routerEnabled" => false), ($context["grid_render_parameters"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/oro_frontend_datagrid_widget:datagrid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  102 => 51,  96 => 49,  94 => 47,  93 => 46,  91 => 45,  88 => 42,  85 => 41,  82 => 37,  79 => 36,  77 => 35,  66 => 26,  54 => 17,  48 => 13,  44 => 11,  42 => 10,  36 => 7,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/oro_frontend_datagrid_widget:datagrid.html.twig", "");
    }
}
