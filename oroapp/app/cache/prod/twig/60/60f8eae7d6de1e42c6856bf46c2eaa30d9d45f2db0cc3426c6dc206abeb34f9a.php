<?php

/* @OroUI/layouts/blank/page/logo.yml */
class __TwigTemplate_402ded6f7ec89892dadc2469e3dc1d4d318071d087d4f7bd12a1d8eb1d3bb76b extends Twig_Template
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
        - '@add':
            id: logo
            parentId: middle_bar_logo
            blockType: logo

        - '@add':
            id: logo_print
            blockType: logo
            parentId: page_container
            siblingId: page_header
            options:
                attr:
                    class: 'logo--print-only'
                renderLink: false
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/logo.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/logo.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/logo.yml");
    }
}
