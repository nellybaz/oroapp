<?php

/* @OroSale/layouts/blank/oro_sale_quote_frontend_index/layout.yml */
class __TwigTemplate_17024c1cb9737c52c86ef3631635c012c27b57e1e292363dfb0b75b6ac898417 extends Twig_Template
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
    imports:
        -
            id: oro_customer_page
    actions: []
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/blank/oro_sale_quote_frontend_index/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/blank/oro_sale_quote_frontend_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/oro_sale_quote_frontend_index/layout.yml");
    }
}
