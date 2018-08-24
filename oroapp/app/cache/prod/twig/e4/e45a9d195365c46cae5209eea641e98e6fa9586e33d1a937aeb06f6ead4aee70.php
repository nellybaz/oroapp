<?php

/* @OroEmbeddedForm/layouts/embedded_default/inline.yml */
class __TwigTemplate_d2a63af38a8683143db41fbb365ad06902a92ee6a01f2d3a1be5140a6533b7f1 extends Twig_Template
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
        - '@changeBlockType':
            - 'root'
            - 'container'
        - '@setBlockTheme':
            themes: 'OroEmbeddedFormBundle:layouts:embedded_default/form_inline.html.twig'
        - '@addTree':
            items:
                form_css:
                    blockType:   style
                    options:
                        content: '=data[\"embedded_form_entity\"].getCss()'
                content:
                    blockType: container
            tree:
                root:
                    content:
                        form_css: ~

    conditions: 'context[\"embedded_form_inline\"]==true'
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/inline.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/inline.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/inline.yml");
    }
}
