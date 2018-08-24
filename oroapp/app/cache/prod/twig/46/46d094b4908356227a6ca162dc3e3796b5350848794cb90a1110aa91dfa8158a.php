<?php

/* @OroFrontend/layouts/default/config/requirejs.yml */
class __TwigTemplate_5900bbaa922cc1bea8dd15f478e42b31ff25ab7b597dfca62f6e683e6ecbdc4c extends Twig_Template
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
    map:
        '*':
            'orodatagrid/templates/datagrid/visible-items-counter.html': 'orofrontend/default/templates/datagrid/visible-items-counter.html'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/config/requirejs.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/config/requirejs.yml");
    }
}
