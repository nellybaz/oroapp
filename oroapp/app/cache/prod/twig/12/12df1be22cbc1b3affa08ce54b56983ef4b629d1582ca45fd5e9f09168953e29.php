<?php

/* @OroCommerceMenu/layouts/blank/page/main_menu.yml */
class __TwigTemplate_6082c7254093f4f159cc6f2e945a3b542e11778b704970dd7cfc5accda5ccd7a extends Twig_Template
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
            themes: 'main_menu.html.twig'
        - '@addTree':
            items:
                header_row:
                    blockType: container
                    prepend: false
                header_row_main_menu:
                    blockType: container
                main_menu_extra_container:
                    blockType: container
                main_menu_container:
                    blockType: container
                main_menu_list:
                    blockType: container
                main_menu:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"commerce_main_menu\")'
                        depth: 1
            tree:
                page_header:
                    header_row:
                        header_row_main_menu:
                            main_menu_extra_container: ~
                            main_menu_container:
                                main_menu_list:
                                    main_menu: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/page/main_menu.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/page/main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.yml");
    }
}
