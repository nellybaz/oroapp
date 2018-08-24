<?php

/* @OroCustomTheme/layouts/custom/page/notification.yml */
class __TwigTemplate_db894e1ea1a935b005ba53cec6cf16bb2d6fd181cdc5ff83b334cde78df29ad3 extends Twig_Template
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
            themes: 'notification.html.twig'
        - '@changeBlockType':
            id: sticky_element_notification
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/page/notification.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/page/notification.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/page/notification.yml");
    }
}
