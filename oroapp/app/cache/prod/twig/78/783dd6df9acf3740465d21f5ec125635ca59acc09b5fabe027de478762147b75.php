<?php

/* @OroMoneyOrder/layouts/default/imports/oro_payment_method_options/layout.yml */
class __TwigTemplate_fa47f7faf7910b958f87433ddd1eaa1cbfff4175dc53b9b808fd8c5bfe3f4bb2 extends Twig_Template
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
        return "@OroMoneyOrder/layouts/default/imports/oro_payment_method_options/layout.yml";
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
        return new Twig_Source("", "@OroMoneyOrder/layouts/default/imports/oro_payment_method_options/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/MoneyOrderBundle/Resources/views/layouts/default/imports/oro_payment_method_options/layout.yml");
    }
}
