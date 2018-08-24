<?php

/* @OroFrontend/layouts/default/imports/scroll_top/scroll_top.yml */
class __TwigTemplate_22efa3930daa5b20e5387cb87dbb8e272ac44734a08f1184ef7755aa053bc0c2 extends Twig_Template
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
            themes: 'scroll_top.html.twig'

        - '@add':
            id: __scroll_top
            parentId: __root
            blockType: scroll_top
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/imports/scroll_top/scroll_top.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/imports/scroll_top/scroll_top.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.yml");
    }
}
