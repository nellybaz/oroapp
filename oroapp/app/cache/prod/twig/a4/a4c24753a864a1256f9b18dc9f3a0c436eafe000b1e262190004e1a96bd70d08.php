<?php

/* @OroEmbeddedForm/layouts/embedded_default/default.yml */
class __TwigTemplate_9636a21c8d2860bf67377295541297e1ea43ba4e08e8151344bb7a806208a4aa extends Twig_Template
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
        - '@addTree':
            items:
                head:
                    blockType:   head
                title:
                    blockType:   title
                    options:
                        value:   Form
                meta_charset:
                    blockType:   meta
                    options:
                        charset: 'utf-8'
                meta_x_ua_compatible:
                    blockType:   meta
                    options:
                        http_equiv: 'X-UA-Compatible'
                        content:    'IE=edge,chrome=1'
                meta_viewport:
                    blockType:   meta
                    options:
                        name:    'viewport'
                        content: 'width=device-width, initial-scale=1.0'
                base_css:
                    blockType:   style
                form_css:
                    blockType:   style
                    options:
                        content: '=data[\"embedded_form_entity\"].getCss()'
                content:
                    blockType: body
            tree:
                root:
                    head:
                        title: ~
                        meta_charset: ~
                        meta_x_ua_compatible: ~
                        meta_viewport: ~
                        base_css: ~
                        form_css: ~
                    content: ~
        - '@setBlockTheme':
            themes: 'OroEmbeddedFormBundle:layouts:embedded_default/form.html.twig'

    conditions: 'context[\"embedded_form_inline\"]==false'
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/default.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/default.yml");
    }
}
