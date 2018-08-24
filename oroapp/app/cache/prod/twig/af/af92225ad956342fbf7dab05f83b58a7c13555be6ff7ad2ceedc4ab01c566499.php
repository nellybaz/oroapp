<?php

/* OroProductBundle:Product/Sidebar:sidebar.html.twig */
class __TwigTemplate_5fcaa4d820244e5930b9cd161c15ae3e9763602a608a8e18332a61573b75add0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@OroProduct/Sidebar/grid-sidebar.html.twig", "OroProductBundle:Product/Sidebar:sidebar.html.twig", 1);
        $this->blocks = array(
            'sidebar_content' => array($this, 'block_sidebar_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@OroProduct/Sidebar/grid-sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("product_index_sidebar", $context)) ? (_twig_default_filter(($context["product_index_sidebar"] ?? null), "product_index_sidebar")) : ("product_index_sidebar")), array());
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/Sidebar:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/Sidebar:sidebar.html.twig", "");
    }
}
