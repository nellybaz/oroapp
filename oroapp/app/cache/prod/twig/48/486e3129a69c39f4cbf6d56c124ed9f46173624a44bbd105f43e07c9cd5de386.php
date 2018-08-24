<?php

/* @OroSale/layouts/blank/layout.yml */
class __TwigTemplate_29696d351242454d0a0fc8fcce9599986272806c8544120fed4c30bfc83bc90a extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                contact_info:
                    blockType: sale_representative_info
                    options:
                        blockView: '=data[\"oro_sale_contact_info_widget_provider\"].getContactInfoBlock()'
            tree:
                page_footer_side:
                    contact_info: ~
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/blank/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/blank/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.yml");
    }
}
