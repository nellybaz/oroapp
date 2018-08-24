<?php

/* @OroCMS/layouts/blank/config/assets.yml */
class __TwigTemplate_ab211823b756016e0cd96abb23e42babb7dc30510b1e0ca40148fbac29fb1335 extends Twig_Template
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
        - 'bundles/orocms/blank/scss/variables/defaults-config.scss'
        - 'bundles/orocms/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCMS/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroCMS/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}
