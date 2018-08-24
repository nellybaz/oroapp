<?php

/* @OroFrontend/layouts/default/theme.yml */
class __TwigTemplate_22edd503dfb810fcbef1821eb27533361af7adfbdb8e99e103dd276251f98d2e extends Twig_Template
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
        echo "parent: blank
label: Default theme
description: Default theme.
groups: [ commerce ]
icon: bundles/orofrontend/default/images/favicon.ico
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/theme.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/theme.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/theme.yml");
    }
}
