<?php

/* @OroUI/layouts/blank/page/middle_bar.yml */
class __TwigTemplate_dfaa65027017c43e0a52aee9362f981df781bb396875170d124ad7102d3d1dc4 extends Twig_Template
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
            themes: 'middle_bar.html.twig'
        - '@addTree':
            items:
                middle_bar:
                    blockType: container
                    siblingId: ~
                    prepend: true
                middle_bar_logo:
                    blockType: container
                middle_bar_center:
                    blockType: container
                middle_bar_right:
                    blockType: container
            tree:
                page_header:
                    middle_bar:
                        middle_bar_logo: ~
                        middle_bar_center: ~
                        middle_bar_right: ~
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/middle_bar.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/middle_bar.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.yml");
    }
}
