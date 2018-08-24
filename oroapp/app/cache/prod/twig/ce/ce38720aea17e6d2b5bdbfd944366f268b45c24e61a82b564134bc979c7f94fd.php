<?php

/* @OroUI/layouts/blank/dialog/dialog.yml */
class __TwigTemplate_44a71531a15e09bb723b1a0f7415ed1019c8bb26b9e7a30b7532e00094e5b671 extends Twig_Template
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
            themes: 'dialog.html.twig'
        - '@addTree':
            items:
                widget_content:
                    blockType: widget_content
                widget_actions:
                    blockType: widget_actions
            tree:
                root:
                    widget_content:
                        widget_actions: ~
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/dialog/dialog.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/dialog/dialog.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/dialog/dialog.yml");
    }
}
