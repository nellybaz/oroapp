<?php

/* @OroProduct/layouts/blank/config/assets.yml */
class __TwigTemplate_12323f26a121bd360825804e338cedf8e02053512dd294d4fbf9c6e47b3127bc extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/oroproduct/blank/scss/variables/product-view-attributes-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-attribute-box-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-layout-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-desc-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-desc-list-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-desc-title-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-quantity-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-action-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-media/container-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-media/gallery-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-view-media/slider-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-item-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/sku-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-sticker-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/view-product-gallery-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-list-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/embedded-products-config.scss'
        - 'bundles/oroproduct/blank/scss/variables/product-popup-header.scss'

        - 'bundles/oroproduct/blank/scss/components/product.scss'
        - 'bundles/oroproduct/blank/scss/components/product-item.scss'
        - 'bundles/oroproduct/blank/scss/components/product-list.scss'
        - 'bundles/oroproduct/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
