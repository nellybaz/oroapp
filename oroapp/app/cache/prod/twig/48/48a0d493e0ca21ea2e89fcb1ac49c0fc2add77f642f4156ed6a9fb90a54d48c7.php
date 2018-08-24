<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view:colored_short.html.twig */
class __TwigTemplate_9fe12e2756ec0bf27aed4087d569b9e0ae66ceff292b56d45a8d0165230183ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_view_specification_container_widget' => array($this, 'block__product_view_specification_container_widget'),
            '_product_view_description_container_widget' => array($this, 'block__product_view_description_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_view_specification_container_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_product_view_description_container_widget', $context, $blocks);
    }

    // line 1
    public function block__product_view_specification_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__specification--colored", "data-role" => "layout-subtree-loading-container"));
        // line 6
        echo "
    <div ";
        // line 7
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 12
    public function block__product_view_description_container_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__description--short"));
        // line 16
        echo "
    <div ";
        // line 17
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 18
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view:colored_short.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  59 => 17,  56 => 16,  53 => 13,  50 => 12,  43 => 8,  39 => 7,  36 => 6,  33 => 2,  30 => 1,  26 => 12,  23 => 11,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view:colored_short.html.twig", "");
    }
}
