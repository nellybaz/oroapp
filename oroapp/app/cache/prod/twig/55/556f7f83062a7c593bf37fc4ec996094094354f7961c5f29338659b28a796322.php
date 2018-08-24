<?php

/* @OroRFP/layouts/blank/oro_rfp_frontend_request_update/layout.yml */
class __TwigTemplate_500947aa86371cbb692ca27b617a2f25beace03eeeee86d412006ef0e67befa3 extends Twig_Template
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
        return "@OroRFP/layouts/blank/oro_rfp_frontend_request_update/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/blank/oro_rfp_frontend_request_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/blank/oro_rfp_frontend_request_update/layout.yml");
    }
}
