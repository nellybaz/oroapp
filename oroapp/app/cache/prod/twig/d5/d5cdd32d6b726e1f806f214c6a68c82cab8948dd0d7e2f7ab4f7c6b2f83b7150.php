<?php

/* @OroCommerceMenu/layouts/default/page/main_menu.yml */
class __TwigTemplate_fe0e121742cd47ac42942044a027d7954253aad13ff7882c612795e221c3f04d extends Twig_Template
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
            themes: 'main_menu.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/default/page/main_menu.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/default/page/main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu.yml");
    }
}
