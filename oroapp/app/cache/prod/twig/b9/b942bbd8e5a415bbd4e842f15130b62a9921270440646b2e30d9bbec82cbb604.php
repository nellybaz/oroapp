<?php

/* @OroPromotion/layouts/blank/config/requirejs.yml */
class __TwigTemplate_deed786a834035670234f077ce66d8509ad8b26f942791cf4260822114dd7dbe extends Twig_Template
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
        echo "config:
    paths:
        'oropromotion/js/app/views/frontend-coupon-add-view': 'bundles/oropromotion/js/app/views/frontend-coupon-add-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroPromotion/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
