<?php

/* @OroCustomer/layouts/default/page/top_nav_logged_dropdown.yml */
class __TwigTemplate_f5f69581b2aee091f231caff476c97ea1dc71669d4bde26baa2b24cd66b72d9e extends Twig_Template
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
            themes: 'top_nav_logged_dropdown.html.twig'
    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/page/top_nav_logged_dropdown.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/page/top_nav_logged_dropdown.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_logged_dropdown.yml");
    }
}
