<?php

/* @OroProduct/layouts/default/config/assets.yml */
class __TwigTemplate_e269d52a7555d0b15ce1937953d8124c79d023af6759b22e2ae67e81acff4edd extends Twig_Template
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
        - 'bundles/oroproduct/default/scss/variables/sku-config.scss'
        - 'bundles/oroproduct/default/scss/variables/buttons-inline-group-config.scss'
        - 'bundles/oroproduct/default/scss/variables/product-view-layout-config.scss'
        - 'bundles/oroproduct/default/scss/variables/product-view-desc-title-config.scss'
        - 'bundles/oroproduct/default/scss/variables/embedded-products-config.scss'
        - 'bundles/oroproduct/default/scss/variables/quick-order-config.scss'
        - 'bundles/oroproduct/default/scss/variables/quick-order-add-config.scss'
        - 'bundles/oroproduct/default/scss/variables/quick-order-copy-paste-config.scss'
        - 'bundles/oroproduct/default/scss/variables/quick-order-import-config.scss'
        - 'bundles/oroproduct/default/scss/variables/page-templates/list-theme-config.scss'
        - 'bundles/oroproduct/default/scss/variables/page-templates/two-columns-theme-config.scss'
        - 'bundles/oroproduct/default/scss/variables/product-sticker-config.scss'
        - 'bundles/oroproduct/default/scss/variables/product-action-config.scss'

        - 'bundles/oroproduct/default/scss/components/filter-controls.scss'
        - 'bundles/oroproduct/default/scss/components/oro-more-info-toggler.scss'

        - 'bundles/oroproduct/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
