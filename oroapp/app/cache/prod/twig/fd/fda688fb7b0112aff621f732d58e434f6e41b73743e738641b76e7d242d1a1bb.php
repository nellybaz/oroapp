<?php

/* @OroContactUsBridge/layouts/blank/oro_contactus_bridge_contact_us_page/layout.yml */
class __TwigTemplate_6fcc2c009ed5fd11a50645d44dfdf211d7c19ed4e81567f33dee742d14f0af55 extends Twig_Template
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
            id: form_item
            parentId: page_content
            blockType: form_fields
            options:
                form: '=data[\"contact_us_request_form\"]'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.contactus.title'
";
    }

    public function getTemplateName()
    {
        return "@OroContactUsBridge/layouts/blank/oro_contactus_bridge_contact_us_page/layout.yml";
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
        return new Twig_Source("", "@OroContactUsBridge/layouts/blank/oro_contactus_bridge_contact_us_page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/oro_contactus_bridge_contact_us_page/layout.yml");
    }
}
