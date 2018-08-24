<?php

/* @OroSale/layouts/blank/oro_sale_quote_frontend_choice/layout.yml */
class __TwigTemplate_10f54d59af2a2675b9185b7d68609d369a587ac4fff978014e6139416a13f1e2 extends Twig_Template
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
        return "@OroSale/layouts/blank/oro_sale_quote_frontend_choice/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/blank/oro_sale_quote_frontend_choice/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/oro_sale_quote_frontend_choice/layout.yml");
    }
}
