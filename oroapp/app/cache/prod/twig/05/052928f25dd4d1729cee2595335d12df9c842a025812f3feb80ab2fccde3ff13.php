<?php

/* @OroPaymentTerm/layouts/default/imports/oro_payment_method_options/layout.yml */
class __TwigTemplate_06129032ebb915e853451274a6eb88b70f625f9861dad4edc859d5bc74198853 extends Twig_Template
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
        return "@OroPaymentTerm/layouts/default/imports/oro_payment_method_options/layout.yml";
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
        return new Twig_Source("", "@OroPaymentTerm/layouts/default/imports/oro_payment_method_options/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentTermBundle/Resources/views/layouts/default/imports/oro_payment_method_options/layout.yml");
    }
}
