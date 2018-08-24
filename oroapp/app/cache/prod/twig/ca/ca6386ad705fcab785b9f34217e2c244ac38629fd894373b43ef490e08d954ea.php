<?php

/* @OroProduct/Sidebar/grid-sidebar.html.twig */
class __TwigTemplate_a2e65a370dde3c7f30cb532247558f32668f8846688b90047ad8e74323cbabce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar_content' => array($this, 'block_sidebar_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar_content', $context, $blocks);
    }

    public function block_sidebar_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@OroProduct/Sidebar/grid-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroProduct/Sidebar/grid-sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/Sidebar/grid-sidebar.html.twig");
    }
}
