<?php

/* @OroUI/layouts/blank/page/components.yml */
class __TwigTemplate_dbfc370d28fb3e46f06d3c167ef234f3c62f2705b5b9f6c0257ab1cf37794a97 extends Twig_Template
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
            themes: 'components.html.twig'

        - '@add':
            id: copyright
            parentId: page_footer
            prepend: false
            blockType: text
            options:
                text: 'oro_frontend.copyright'
                escape: false
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/components.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/components.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/components.yml");
    }
}
