<?php

/* @OroCommerceMenu/layouts/blank/config/requirejs.yml */
class __TwigTemplate_89882db5f950704ff969130177b40b71cc9f1d738a3a1796ead4407ccbe0a882 extends Twig_Template
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
        'orocommercemenu/js/app/views/header-row-view': 'bundles/orocommercemenu/js/app/views/header-row-view.js'
        'orocommercemenu/js/app/widgets/menu-traveling-widget': 'bundles/orocommercemenu/js/app/widgets/menu-traveling-widget.js'
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
