<?php

/* OroDataGridBundle::macros.html.twig */
class __TwigTemplate_6bc05eec74d6a6178fd7e6f4bbed0d0a300bd8c600ed5538340d2b6be30e3547 extends Twig_Template
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
    }

    // line 9
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    ";
            $context["datagrid"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGrid(($context["name"] ?? null), ($context["params"] ?? null));
            // line 11
            echo "    ";
            if (($context["datagrid"] ?? null)) {
                // line 12
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_widgetContainer"), "method") == "dialog")) {
                    // line 13
                    echo "            ";
                    $context["renderParams"] = twig_array_merge(array("enableViews" => false), ($context["renderParams"] ?? null));
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "_grid_view", array(), "any", false, true), "_disabled", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["params"] ?? null), "_grid_view", array()), "_disabled", array()))) {
                    // line 16
                    echo "            ";
                    $context["renderParams"] = twig_array_merge(($context["renderParams"] ?? null), array("enableViews" => false));
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "        ";
                $context["metaData"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridMetadata(($context["datagrid"] ?? null), ($context["params"] ?? null));
                // line 19
                echo "        ";
                if ($this->getAttribute(($context["renderParams"] ?? null), "routerEnabled", array(), "any", true, true)) {
                    // line 20
                    echo "            ";
                    $context["metadataOptions"] = (($this->getAttribute(($context["metaData"] ?? null), "options", array(), "any", true, true)) ? ($this->getAttribute(($context["metaData"] ?? null), "options", array())) : (array()));
                    // line 21
                    echo "            ";
                    $context["metadataOptions"] = twig_array_merge(($context["metadataOptions"] ?? null), array("routerEnabled" => $this->getAttribute(($context["renderParams"] ?? null), "routerEnabled", array())));
                    // line 22
                    echo "            ";
                    $context["metaData"] = twig_array_merge(($context["metaData"] ?? null), array("options" => ($context["metadataOptions"] ?? null)));
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                if ((($this->getAttribute(($context["renderParams"] ?? null), "enableFullScreenLayout", array(), "any", true, true) && $this->getAttribute(                // line 25
($context["renderParams"] ?? null), "enableFullScreenLayout", array())) && $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_data_grid.full_screen_layout_enabled"))) {
                    // line 27
                    echo "            ";
                    $context["metaData"] = twig_array_merge(($context["metaData"] ?? null), array("enableFullScreenLayout" => true));
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "        ";
                if ($this->getAttribute(($context["renderParams"] ?? null), "enableFloatingHeaderPlugin", array(), "any", true, true)) {
                    // line 30
                    echo "            ";
                    $context["metaData"] = twig_array_merge(($context["metaData"] ?? null), array("enableFloatingHeaderPlugin" => $this->getAttribute(($context["renderParams"] ?? null), "enableFloatingHeaderPlugin", array())));
                    // line 31
                    echo "        ";
                } else {
                    // line 32
                    echo "            ";
                    $context["metaData"] = twig_array_merge(($context["metaData"] ?? null), array("enableFloatingHeaderPlugin" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
                    // line 33
                    echo "        ";
                }
                // line 34
                echo "        ";
                $context["data"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridData(($context["datagrid"] ?? null));
                // line 35
                echo "        ";
                $context["gridId"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->generateGridElementId(($context["datagrid"] ?? null));
                // line 36
                echo "        ";
                $context["enableFilters"] = (($this->getAttribute(($context["renderParams"] ?? null), "enableFilters", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "enableFilters", array())) : (true));
                // line 37
                echo "        ";
                if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile() &&  !$this->getAttribute(($context["renderParams"] ?? null), "enableToggleFilters", array(), "any", true, true))) {
                    // line 38
                    echo "            ";
                    $context["enableToggleFilters"] = false;
                    // line 39
                    echo "        ";
                } elseif ($this->getAttribute(($context["renderParams"] ?? null), "enableToggleFilters", array(), "any", true, true)) {
                    // line 40
                    echo "            ";
                    $context["enableToggleFilters"] = $this->getAttribute(($context["renderParams"] ?? null), "enableToggleFilters", array());
                    // line 41
                    echo "        ";
                } else {
                    // line 42
                    echo "            ";
                    $context["enableToggleFilters"] = true;
                    // line 43
                    echo "        ";
                }
                // line 44
                echo "        ";
                $context["options"] = array("el" => ("#" .                 // line 45
($context["gridId"] ?? null)), "gridName" => $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName($this->getAttribute(                // line 46
($context["datagrid"] ?? null), "name", array()), $this->getAttribute(($context["datagrid"] ?? null), "scope", array())), "builders" => twig_array_merge($this->getAttribute(                // line 47
($context["metaData"] ?? null), "requireJSModules", array()), (($this->getAttribute(($context["renderParams"] ?? null), "requireJSModules", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "requireJSModules", array()), array())) : (array()))), "metadata" =>                 // line 48
($context["metaData"] ?? null), "data" =>                 // line 49
($context["data"] ?? null), "enableFilters" =>                 // line 50
($context["enableFilters"] ?? null), "enableToggleFilters" =>                 // line 51
($context["enableToggleFilters"] ?? null), "filterContainerSelector" => (($this->getAttribute(                // line 52
($context["renderParams"] ?? null), "filterContainerSelector", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "filterContainerSelector", array())) : (null)), "filtersStateElement" => (($this->getAttribute(                // line 53
($context["renderParams"] ?? null), "filtersStateElement", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "filtersStateElement", array())) : (null)), "enableViews" => (($this->getAttribute(                // line 54
($context["renderParams"] ?? null), "enableViews", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "enableViews", array())) : (($context["enableFilters"] ?? null))), "showViewsInNavbar" => (($this->getAttribute(                // line 55
($context["renderParams"] ?? null), "showViewsInNavbar", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "showViewsInNavbar", array())) : (false)), "showViewsInCustomElement" => (($this->getAttribute(                // line 56
($context["renderParams"] ?? null), "showViewsInCustomElement", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "showViewsInCustomElement", array())) : (false)), "inputName" => $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridInputName($this->getAttribute(                // line 57
($context["datagrid"] ?? null), "name", array())), "themeOptions" => (($this->getAttribute(                // line 58
($context["renderParams"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "themeOptions", array()), array())) : (array())), "toolbarOptions" => (($this->getAttribute(                // line 59
($context["renderParams"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "toolbarOptions", array()), array())) : (array())), "gridViewsOptions" => (($this->getAttribute(                // line 60
($context["renderParams"] ?? null), "gridViewsOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "gridViewsOptions", array()), array())) : (array())), "gridBuildersOptions" => (($this->getAttribute(                // line 61
($context["renderParams"] ?? null), "gridBuildersOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "gridBuildersOptions", array()), array())) : (array())));
                // line 63
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, ($context["gridId"] ?? null), "html", null, true);
                echo "\"
             data-page-component-module=\"";
                // line 64
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["renderParams"] ?? null), "datagridComponent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "datagridComponent", array()), "orodatagrid/js/app/components/datagrid-component")) : ("orodatagrid/js/app/components/datagrid-component")), "html", null, true);
                echo "\"
             data-page-component-name=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "gridName", array()), "html", null, true);
                echo "\"
             data-page-component-options=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
                echo "\"
             ";
                // line 67
                if ($this->getAttribute(($context["renderParams"] ?? null), "cssClass", array(), "any", true, true)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["renderParams"] ?? null), "cssClass", array()), "html", null, true);
                    echo "\" ";
                }
                echo ">
             ";
                // line 68
                if ((($this->getAttribute(($context["renderParams"] ?? null), "viewLoading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "viewLoading", array()), false)) : (false))) {
                    // line 69
                    echo "                 ";
                    $this->loadTemplate("OroUIBundle::view_loading.html.twig", "OroDataGridBundle::macros.html.twig", 69)->display($context);
                    // line 70
                    echo "             ";
                }
                // line 71
                echo "        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  182 => 70,  179 => 69,  177 => 68,  169 => 67,  165 => 66,  161 => 65,  157 => 64,  152 => 63,  150 => 61,  149 => 60,  148 => 59,  147 => 58,  146 => 57,  145 => 56,  144 => 55,  143 => 54,  142 => 53,  141 => 52,  140 => 51,  139 => 50,  138 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  132 => 44,  129 => 43,  126 => 42,  123 => 41,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 30,  87 => 29,  84 => 28,  81 => 27,  79 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  38 => 11,  35 => 10,  21 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle::macros.html.twig", "");
    }
}
