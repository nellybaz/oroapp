<?php

/* @OroPromotion/layouts/default/config/assets.yml */
class __TwigTemplate_6c09fa4a1d35a44719f4dfaf10a79df61fde082f3269f0880e0e8cc51444afa2 extends Twig_Template
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
        - 'bundles/oropromotion/default/scss/variables/coupon-container-config.scss'
        - 'bundles/oropromotion/default/scss/variables/coupons-list-config.scss'

        - 'bundles/oropromotion/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroPromotion/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
