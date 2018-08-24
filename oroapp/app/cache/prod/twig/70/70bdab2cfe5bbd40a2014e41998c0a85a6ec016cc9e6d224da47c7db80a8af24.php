<?php

/* @OroRFP/layouts/blank/config/requirejs.yml */
class __TwigTemplate_e3481d7533ca20b45c9da88bc45c774812980466ce60fe7d3df4f7b59df376a2 extends Twig_Template
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
    paths:
        'ororfp/js/app/views/line-items-view': 'bundles/ororfp/js/app/views/line-items-view.js'
        'ororfp/js/app/views/line-item-view': 'bundles/ororfp/js/app/views/line-item-view.js'
        'ororfp/js/app/views/line-item-offer-view': 'bundles/ororfp/js/app/views/line-item-offer-view.js'
        'ororfp/js/app/views/frontend-line-item-view': 'bundles/ororfp/js/app/views/frontend-line-item-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
