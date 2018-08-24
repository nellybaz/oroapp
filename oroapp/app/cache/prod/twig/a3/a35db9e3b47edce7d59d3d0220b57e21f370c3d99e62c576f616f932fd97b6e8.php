<?php

/* @OroCustomTheme/layouts/custom/theme.yml */
class __TwigTemplate_a735e7be4184aefd1805a1f7dd5afc9d0a3dc20e4546772c6e2edefbe5c697f6 extends Twig_Template
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
        echo "parent: default
label: Custom theme
description: Custom theme description.
groups: [ commerce ]
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/theme.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/theme.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/theme.yml");
    }
}
