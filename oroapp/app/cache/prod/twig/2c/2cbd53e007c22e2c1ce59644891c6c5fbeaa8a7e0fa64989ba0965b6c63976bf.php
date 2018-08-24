<?php

/* @OroPaymentTerm/layouts/default/imports/oro_payment_method_order_submit/layout.yml */
class __TwigTemplate_bb1dd23453c572edb6047afd9d72cfe7198a2f363770e3ecb3f4dbf500d29708 extends Twig_Template
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
            themes:
                - 'layout.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroPaymentTerm/layouts/default/imports/oro_payment_method_order_submit/layout.yml";
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
        return new Twig_Source("", "@OroPaymentTerm/layouts/default/imports/oro_payment_method_order_submit/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentTermBundle/Resources/views/layouts/default/imports/oro_payment_method_order_submit/layout.yml");
    }
}
