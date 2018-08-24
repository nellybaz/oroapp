<?php

/* @OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default_legacy.yml */
class __TwigTemplate_188ebd986f83a5526b78edf3521c16b22b88144ce05a2a14ec46a5580ebfccff extends Twig_Template
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
        - '@add':
            id:        form
            parentId:  content
            blockType: embed_form_legacy_form
            options:
                form: '=context[\"embedded_form\"].getView()'
                form_layout: '=context[\"embedded_form_custom_layout\"]'

    conditions: 'context[\"embedded_form_custom_layout\"]!=\"\"'

";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default_legacy.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default_legacy.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default_legacy.yml");
    }
}
