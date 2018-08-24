<?php

/* @OroCommerceMenu/layouts/default/page/search_row.yml */
class __TwigTemplate_328fc664656bf05880c38340ef8261297ede826b9ccfe0c5af6b1303d008d0ba extends Twig_Template
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
            themes: 'search_row.html.twig'

        - '@addTree':
            items:
                search_row_main_container:
                    blockType: container
                    siblingId: header_row_main_menu
                    prepend: false
                search_row_trigger:
                    blockType: container
                search_row_extra_container:
                    blockType: block
            tree:
                header_row:
                    search_row_main_container:
                        search_row_trigger:
                            search_row_extra_container: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/default/page/search_row.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/default/page/search_row.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.yml");
    }
}
