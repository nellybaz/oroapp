<?php

/* @OroSEO/layouts/default/layout.yml */
class __TwigTemplate_1fbed90e05c5de1277e7190934411808e45697ca06d6a64daf1d93ddd4401f60 extends Twig_Template
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
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'OroSEOBundle:layouts:default/layout.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroSEO/layouts/default/layout.yml";
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
        return new Twig_Source("", "@OroSEO/layouts/default/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/layout.yml");
    }
}
