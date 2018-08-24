<?php

/* @OroUI/layouts/blank/page/page-header.yml */
class __TwigTemplate_16227f0c6c8f43c6e025f0a2dd6bbf25a8d08815b2995994707be226c527ec5a extends Twig_Template
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
            themes: 'page-header.html.twig'

        - '@add':
            id: page_header
            parentId: page_container
            blockType: container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/page-header.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/page-header.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.yml");
    }
}
