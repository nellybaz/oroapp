<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_form/oro_customer_form.yml */
class __TwigTemplate_41c41b3663c2999d80ab7d6a5c6d76040417f4712c722997d611e4a617ccb31d extends Twig_Template
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
            themes: 'oro_customer_form.html.twig'
        - '@addTree':
            items:
                __page_wrapper:
                    blockType: vertical_container
                __page:
                    blockType: container
                __label_wrapper:
                    blockType: container
                __label:
                    blockType: text
                    options:
                        text: ''
                __description:
                    blockType: text
                    options:
                        visible: '=text!=null'
                        text: ''
                __form:
                    blockType: form
                __form_submit_wrapper:
                    blockType: container
                __form_submit:
                    blockType: button
                    options:
                        type: input
                        action: submit
                        style: auto
                        text: ''
                __links:
                    blockType: container
            tree:
                __root:
                    __page_wrapper:
                        __page:
                            __label_wrapper:
                                __label: ~
                            __description: ~
                            __form: ~
                            __form_submit_wrapper:
                                __form_submit: ~
                            __links: ~

        - '@move':
            id: __form_submit_wrapper
            parentId: __form
            siblingId: __form_end
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_form/oro_customer_form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_form/oro_customer_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.yml");
    }
}
