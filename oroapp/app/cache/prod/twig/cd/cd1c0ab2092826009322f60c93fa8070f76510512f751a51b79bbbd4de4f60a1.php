<?php

/* @OroFrontend/layouts/default/page/middle_bar.yml */
class __TwigTemplate_93d6397728de3532ba5dd710b6d22b7acb55ba57c778ffbcf591c9e1d84c6f74 extends Twig_Template
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
        - '@add':
            id: middle_bar_search
            parentId: middle_bar_center
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/page/middle_bar.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/page/middle_bar.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.yml");
    }
}
