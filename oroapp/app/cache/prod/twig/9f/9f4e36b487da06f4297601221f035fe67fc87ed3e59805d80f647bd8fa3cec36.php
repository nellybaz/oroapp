<?php

/* @OroCommerceMenu/layouts/blank/page/quick_access.yml */
class __TwigTemplate_2b09e7c841def7f41366b91ecb3a33eacf4950eb9d3142d05a99894c122ebd15 extends Twig_Template
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
            themes: 'quick_access.html.twig'
        - '@addTree':
            items:
                quick_access_container:
                    blockType: container
                    prepend: false
                quick_access_menu:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"commerce_quick_access\")'
            tree:
                middle_bar_right:
                    quick_access_container:
                        quick_access_menu: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/page/quick_access.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/page/quick_access.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/quick_access.yml");
    }
}
