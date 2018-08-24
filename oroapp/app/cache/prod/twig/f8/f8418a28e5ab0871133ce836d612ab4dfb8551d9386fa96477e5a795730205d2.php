<?php

/* @OroEmbeddedForm/layouts/embedded_default/layout.yml */
class __TwigTemplate_d5450405c9ca646b5e7218a7e1d0ab0262adcf6fa580787e5d3f3d383632f5df extends Twig_Template
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
            themes: 'OroEmbeddedFormBundle:layouts:embedded_default/layout.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/layout.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/layout.yml");
    }
}
