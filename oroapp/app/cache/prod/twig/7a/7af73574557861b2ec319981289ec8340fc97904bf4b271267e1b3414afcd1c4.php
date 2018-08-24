<?php

/* @OroWindows/layouts/blank/config/requirejs.yml */
class __TwigTemplate_66357d9a4dfa45669225a0f981f5f869a9fd7d6b4bd4a651c1173fadebb41949 extends Twig_Template
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
    shim:
        'jquery.dialog.extended':
            deps:
                - 'jquery-ui'
    paths:
        'jquery.dialog.extended': 'bundles/orowindows/lib/jquery.dialog.extended.js'
        'oro/dialog-widget': 'bundles/orowindows/js/widget/dialog-widget.js'
";
    }

    public function getTemplateName()
    {
        return "@OroWindows/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroWindows/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
