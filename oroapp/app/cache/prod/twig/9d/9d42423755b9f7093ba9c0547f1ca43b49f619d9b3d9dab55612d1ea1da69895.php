<?php

/* @OroProduct/layouts/blank/imports/line_item_buttons/line_item_buttons.yml */
class __TwigTemplate_447eb8eee1da24f48d1e6bcf3253447471dc39161b0ce52a09ee8d761db36c5e extends Twig_Template
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
           themes: 'line_item_buttons.html.twig'
        - '@add':
           id: __line_item_buttons
           blockType: container
           parentId: __root
           siblingId: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/line_item_buttons/line_item_buttons.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/line_item_buttons/line_item_buttons.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/line_item_buttons/line_item_buttons.yml");
    }
}
