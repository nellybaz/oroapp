<?php

/* @OroProduct/layouts/custom/config/assets.yml */
class __TwigTemplate_7dacd442200e6a1a31c6e049a1d5f92c94e3cc1d10d45757fa2c5c6a4e365fdd extends Twig_Template
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
        - 'bundles/oroproduct/custom/scss/variables/page-templates/list-theme-config.scss'
        - 'bundles/oroproduct/custom/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/custom/config/assets.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/custom/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/custom/config/assets.yml");
    }
}
