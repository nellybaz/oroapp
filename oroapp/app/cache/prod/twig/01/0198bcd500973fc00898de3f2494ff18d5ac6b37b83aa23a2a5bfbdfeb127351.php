<?php

/* @OroRFP/layouts/default/oro_rfp_frontend_request_create/layout.yml */
class __TwigTemplate_ed1c46bd55a6067f3a4b1119e02504b6e7a848f663d0ff508667c360964022ba extends Twig_Template
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
            id: oro_rfp_frontend_request_edit
            root: page_content
    actions:
        - '@setOption':
            id: breadcrumbs
            optionName: visible
            optionValue: '=context[\"is_logged_in\"]'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: oro.frontend.rfp.request.create_title.label
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/oro_rfp_frontend_request_create/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/oro_rfp_frontend_request_create/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/oro_rfp_frontend_request_create/layout.yml");
    }
}
