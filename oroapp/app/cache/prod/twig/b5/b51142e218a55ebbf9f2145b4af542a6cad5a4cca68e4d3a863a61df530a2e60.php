<?php

/* @OroMagentoContactUs/layouts/embedded_default/oro_embedded_form_submit/default.yml */
class __TwigTemplate_814e56c40e427eb95ec2dec7bd2ca24cd80846d1aff308af45e23ba9f6ba3410 extends Twig_Template
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
            themes: 'OroMagentoContactUsBundle:layouts:embedded_default/oro_embedded_form_submit/magento_form.html.twig'
        - '@setOption':
            id:          embedded_form
            optionName:  preferred_fields
            optionValue: [firstName, lastName, organizationName, preferredContactMethod, emailAddress,  phone, contactReason]
        - '@setOption':
            id:          embedded_form
            optionName:  groups
            optionValue:
                contact:
                    title:   Contact Information
                    default: true
        - '@move':
            id:          embedded_form_submit
            parentId:    embedded_form
            siblingId:   'embedded_form:group_contact'

    conditions: 'context[\"embedded_form_type\"] == \"oro_magento_contact_us.embedded_form\"'
";
    }

    public function getTemplateName()
    {
        return "@OroMagentoContactUs/layouts/embedded_default/oro_embedded_form_submit/default.yml";
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
        return new Twig_Source("", "@OroMagentoContactUs/layouts/embedded_default/oro_embedded_form_submit/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/crm-magento-embedded-contact-us/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml");
    }
}
