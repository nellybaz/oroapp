<?php

/* @OroShoppingList/layouts/default/config/assets.yml */
class __TwigTemplate_fe17f3fa51204d6aa3316fa1faaa90e8fa1df0a55cea4dd36cc4791f7f26a54c extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/oroshoppinglist/default/scss/variables/matrix-order-widget-config.scss'
        - 'bundles/oroshoppinglist/default/scss/variables/shopping-list-owner-config.scss'

        - 'bundles/oroshoppinglist/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
