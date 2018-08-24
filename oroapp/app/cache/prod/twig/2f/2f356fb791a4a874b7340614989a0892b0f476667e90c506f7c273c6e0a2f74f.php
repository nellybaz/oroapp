<?php

/* @OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/main.yml */
class __TwigTemplate_b0bece3714dc63b0b0d128023aa8eaa11b04ff6abaa60306761be6cbfd3a02c6 extends Twig_Template
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
            themes: 'OroCustomThemeBundle:layouts:custom/oro_checkout_frontend_checkout/templates/main.html.twig'

        - '@setOption':
            id: page_title_container
            optionName: attr.class
            optionValue: 'page-title-wrapper--checkout'

        - '@add':
            id: checkout_container
            blockType: container
            parentId: page_content

        - '@move':
            id: checkout_content
            parentId: checkout_container
            prepend: true

        - '@move':
            id: page_title_container
            parentId: checkout_container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/main.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/oro_checkout_frontend_checkout/page/main.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/oro_checkout_frontend_checkout/page/main.yml");
    }
}
