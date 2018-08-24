<?php

/* @OroRFP/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_70bb7881e0c2da0964fe04eb8a7256108e1257218c584f4b6096034ac0a115a5 extends Twig_Template
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
        - '@add':
            id: customer_sidebar_request
            parentId: customer_sidebar
            blockType: link
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_rfp_frontend_request_view\") && data[\"feature\"].isResourceEnabled(\"oro_rfp_frontend_request_index\", \"routes\")'
                route_name: oro_rfp_frontend_request_index
                text: oro.frontend.rfp.request.entity_plural_label
            siblingId: customer_sidebar_sign_out
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}
