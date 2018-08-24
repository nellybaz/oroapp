<?php

/* @OroForm/layouts/default/theme.yml */
class __TwigTemplate_036cece0e60ef118d4fe6f94e9bd0cf77475020d25de6157e5a9516f5f1ef7d8 extends Twig_Template
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
        echo "label: Default theme
description: Default theme.
groups: [ main ]
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/default/theme.yml";
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
        return new Twig_Source("", "@OroForm/layouts/default/theme.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/default/theme.yml");
    }
}
