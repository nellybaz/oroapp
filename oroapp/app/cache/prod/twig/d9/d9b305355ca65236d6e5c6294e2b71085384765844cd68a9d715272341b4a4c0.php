<?php

/* @OroFrontend/layouts/blank/oro_frontend_style_book/layout.yml */
class __TwigTemplate_3a2b5db59938fcce2e04b4ef51af90be8d022c04e6c364544deec7f6e651f29d extends Twig_Template
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
    imports:
        -
            id: style-book
    actions: []
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/oro_frontend_style_book/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/oro_frontend_style_book/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/oro_frontend_style_book/layout.yml");
    }
}
