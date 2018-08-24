<?php

/* @OroCommerceMenu/layouts/default/page/main_menu_logged.yml */
class __TwigTemplate_3dffdf40899d1f8180972d982490f42b5233cb90924a5b88c15889125a1b193d extends Twig_Template
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
            themes: 'main_menu_logged.html.twig'
        - '@addTree':
            items:
                header_row_shopping:
                    blockType: container
                    prepend: false
                    options:
                        visible: 'context[\"is_logged_in\"]'
                main_menu_messages:
                    blockType: block
            tree:
                header_row:
                    header_row_shopping:
                      # main_menu_messages: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/default/page/main_menu_logged.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/default/page/main_menu_logged.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.yml");
    }
}
