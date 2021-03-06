<?php

/* @OroRFP/layouts/blank/oro_rfp_frontend_request_success/layout.yml */
class __TwigTemplate_a6cdf7b35f0da06a2b1cbb6cfd79a30ec906270b804bd965d2e6af3404bcb178 extends Twig_Template
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
    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@addTree':
            items:
                rfp_success_message:
                    blockType: rfp_request_success
                    options:
                        request: '=data[\"entity\"]'
            tree:
                page_content:
                    rfp_success_message: ~

        - '@setOption':
            id: breadcrumbs
            optionName: visible
            optionValue: false
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/blank/oro_rfp_frontend_request_success/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/blank/oro_rfp_frontend_request_success/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/blank/oro_rfp_frontend_request_success/layout.yml");
    }
}
