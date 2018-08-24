<?php

/* OroCustomThemeBundle:layouts/custom/imports/oro_product_grid:require_js_config.html.twig */
class __TwigTemplate_4b082647204e7a827b5ad52c81a31827c46dd120e36169669cb44e0e9964831f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_require_js_filters_config_widget' => array($this, 'block__require_js_filters_config_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_require_js_filters_config_widget', $context, $blocks);
    }

    public function block__require_js_filters_config_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <script>
        require({
            config: {
                'orofilter/js/datafilter-builder': {
                    FiltersManager: 'orocustomtheme/FilterBundle/js/datagrid/frontend-collection-filters-manager'
                },
                'orocustomtheme/FilterBundle/js/datagrid/frontend-collection-filters-manager': {
                    enableMultiselectWidget: false
                },
                'orofrontend/js/app/datafilter/frontend-multiselect-decorator': {
                    additionalClass: true
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/imports/oro_product_grid:require_js_config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/imports/oro_product_grid:require_js_config.html.twig", "");
    }
}
