<?php

/* @OroProduct/layouts/blank/oro_frontend_root/new_arrivals_mobile.yml */
class __TwigTemplate_8688feabe47e23fca3b62a5b5c68fe500aaa6e52b9ccd23e108e9d1096ebe07e extends Twig_Template
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
        - '@setOption':
            id: new_arrival_products
            optionName: use_slider
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_product.new_arrivals_use_slider_on_mobile\")'

    conditions: 'context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_frontend_root/new_arrivals_mobile.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_frontend_root/new_arrivals_mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/new_arrivals_mobile.yml");
    }
}
