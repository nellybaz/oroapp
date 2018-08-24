<?php

/* OroProductBundle:layouts/blank/oro_product_frontend_product_view:attributes.html.twig */
class __TwigTemplate_57d79c04520be04b75ba67bab65d80fb8d49920284363d85d0d5da4929ab67f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'attribute_group_rest_attribute_group_widget' => array($this, 'block_attribute_group_rest_attribute_group_widget'),
            '_product_view_attributes_container_widget' => array($this, 'block__product_view_attributes_container_widget'),
            'attribute_product_images_widget' => array($this, 'block_attribute_product_images_widget'),
            '_product_view_attribute_group_general_attribute_text_sku_widget' => array($this, 'block__product_view_attribute_group_general_attribute_text_sku_widget'),
            '_product_view_attribute_group_general_attribute_text_brand_widget' => array($this, 'block__product_view_attribute_group_general_attribute_text_brand_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_product_view_attributes_container_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('attribute_product_images_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_product_view_attribute_group_general_attribute_text_sku_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('_product_view_attribute_group_general_attribute_text_brand_widget', $context, $blocks);
    }

    // line 1
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 3
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter(($context["content"] ?? null))) > 0)) {
            // line 4
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroproduct/js/app/components/fullscreen-attribute-group-tab-content-component", "~data-page-component-options" => array("id" =>             // line 7
($context["group"] ?? null), "viewport" => array("maxScreenType" => "mobile-landscape"))));
            // line 13
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " style=\"display: none;\" class=\"tab-content\">
        ";
            // line 14
            echo ($context["content"] ?? null);
            echo "
    </div>
    ";
        }
    }

    // line 19
    public function block__product_view_attributes_container_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__attributes"));
        // line 23
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 25
        echo "</div>
";
    }

    // line 28
    public function block_attribute_product_images_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["product"] = ($context["entity"] ?? null);
        // line 30
        echo "    ";
        $this->displayBlock("_product_view_media_widget", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block__product_view_attribute_group_general_attribute_text_sku_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__number product-item__number_{{ class_prefix }}"));
        // line 37
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.index.item"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 42
    public function block__product_view_attribute_group_general_attribute_text_brand_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-brand"));
        // line 44
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <span class=\"product-view-brand\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.brand.label"), "html", null, true);
        echo ":</span>
        <span class=\"product-view-brand-title\">";
        // line 46
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/oro_product_frontend_product_view:attributes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  135 => 45,  130 => 44,  127 => 43,  124 => 42,  115 => 38,  110 => 37,  107 => 34,  104 => 33,  97 => 30,  94 => 29,  91 => 28,  86 => 25,  84 => 24,  80 => 23,  77 => 20,  74 => 19,  66 => 14,  61 => 13,  59 => 7,  57 => 4,  54 => 3,  51 => 2,  48 => 1,  44 => 42,  41 => 41,  39 => 33,  36 => 32,  34 => 28,  31 => 27,  29 => 19,  26 => 18,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:attributes.html.twig", "");
    }
}
