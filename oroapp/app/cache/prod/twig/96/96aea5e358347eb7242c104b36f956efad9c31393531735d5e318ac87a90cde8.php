<?php

/* @OroFrontend/layouts/default/redirect/dialog/redirect.yml */
class __TwigTemplate_0c89d1df1f51ca06f0e836ef041360f14d48918472ed515659f82c510848ef40 extends Twig_Template
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
        - '@setOption':
            id: widget_content
            optionName: 'attr.data-page-component-module'
            optionValue: 'oroproduct/js/app/components/redirect-component'
        - '@setOption':
            id: widget_content
            optionName: 'attr.data-page-component-options.targetUrl'
            optionValue: '=context[\"targetUrl\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/redirect/dialog/redirect.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/redirect/dialog/redirect.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/redirect/dialog/redirect.yml");
    }
}
