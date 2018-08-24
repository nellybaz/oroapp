<?php

/* @OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_directions.yml */
class __TwigTemplate_60517ae4b0f51b19bc1299f3fffaab00e327d754772122df54e57715a3cf3eff extends Twig_Template
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
        // line 1
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'quick_add_import_directions.html.twig'
        - '@setOption':
            id: widget_content
            optionName: 'attr.data-page-component-module'
            optionValue: 'orofrontend/js/app/components/widget-form-component'
        - '@addTree':
            items:
                quick_add_import_help:
                    blockType: quick_add_form_directions
                    options:
                        method: '=context[\"method\"]'
            tree:
                widget_content:
                    quick_add_import_help: ~

    conditions: 'context[\"import_step\"]==\"form\"'

";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_directions.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_directions.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_quick_add_import/dialog/quick_add_import_directions.yml");
    }
}
