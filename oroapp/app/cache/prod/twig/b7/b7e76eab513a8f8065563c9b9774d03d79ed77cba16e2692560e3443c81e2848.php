<?php

/* OroProductBundle:layouts/blank/imports/oro_product_list:oro_product_list.html.twig */
class __TwigTemplate_ce8d2a246f9684ac3d83ce0f0909ef604ffd7b974b7ecd9471e118ad9e379706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_list__product_widget' => array($this, 'block___oro_product_list__product_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_list__product_widget', $context, $blocks);
    }

    public function block___oro_product_list__product_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-role" => "product-item", "~class" => " product-item"));
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_product_list:oro_product_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_product_list:oro_product_list.html.twig", "");
    }
}
