<?php

/* @OroUI/layouts/blank/page/page-footer.yml */
class __TwigTemplate_3f925bfd80c9606f0bd6b0c0d6682386da3377ed6e21cab8771d33fdb185375c extends Twig_Template
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
            themes: 'page-footer.html.twig'

        - '@addTree':
            items:
                page_footer:
                    blockType: container
                    prepend: false
                page_footer_container:
                    blockType: container
                page_footer_base:
                    blockType: container
                page_footer_side:
                    blockType: container
            tree:
                page_container:
                    page_footer:
                        page_footer_container:
                            page_footer_base: ~
                            page_footer_side: ~
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/page-footer.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/page-footer.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-footer.yml");
    }
}
