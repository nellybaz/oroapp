<?php

/* @OroUI/layouts/blank/page/layout_mobile.yml */
class __TwigTemplate_6183255e69459591335ff2bf62c8d02e40be1cb3d91b181162d1d061d5f1e4f6 extends Twig_Template
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
        - '@setOption':
            id: meta_viewport
            optionName: content
            optionValue: 'width=device-width, initial-scale=1, viewport-fit=cover'

    conditions: 'context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/layout_mobile.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/layout_mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout_mobile.yml");
    }
}
