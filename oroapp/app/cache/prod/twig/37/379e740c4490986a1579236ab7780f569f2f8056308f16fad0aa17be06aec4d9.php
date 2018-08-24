<?php

/* @OroForm/layouts/blank/theme.yml */
class __TwigTemplate_0e8c73e45093c630aa199eb30c6c727d29bfb220b511183fb7d2883356276e9a extends Twig_Template
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
        echo "label: Blank theme
description: Blank theme.
groups: [ main ]
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/blank/theme.yml";
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
        return new Twig_Source("", "@OroForm/layouts/blank/theme.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/theme.yml");
    }
}
