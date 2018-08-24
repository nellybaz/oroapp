<?php

/* OroProductBundle:Sidebar:grid-sidebar.html.twig */
class __TwigTemplate_f96608b92867bd82a1763ee89fb9696cab1e1cbbb8ea05507795b80304f39445 extends Twig_Template
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
        return "OroProductBundle:Sidebar:grid-sidebar.html.twig";
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
        return new Twig_Source("", "OroProductBundle:Sidebar:grid-sidebar.html.twig", "");
    }
}
