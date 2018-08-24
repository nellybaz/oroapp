<?php

/* @OroRFP/layouts/blank/oro_rfp_frontend_request_view/layout.yml */
class __TwigTemplate_f6dc26b6cf8fedb0218a628b09fe351ab5d305f17a81a7717f30623f5690911b extends Twig_Template
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
        return "@OroRFP/layouts/blank/oro_rfp_frontend_request_view/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/blank/oro_rfp_frontend_request_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/blank/oro_rfp_frontend_request_view/layout.yml");
    }
}
