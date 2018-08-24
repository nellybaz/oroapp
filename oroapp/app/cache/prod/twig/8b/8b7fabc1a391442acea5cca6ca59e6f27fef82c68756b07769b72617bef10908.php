<?php

/* @OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default.yml */
class __TwigTemplate_7ebad6e0e7370d63e75fb1006565b78a6938cd773271b9e307317af496c5718b extends Twig_Template
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
            id:        embedded_form_start
            parentId:  content
            blockType: embed_form_start
            options:
                form_name: embedded_form
        - '@add':
            id:        embedded_form
            parentId:  content
            blockType: embed_form_fields
            options:
                form_name: embedded_form
        - '@add':
            id:        embedded_form_end
            parentId:  content
            blockType: embed_form_end
            options:
                form_name: embedded_form

    conditions: 'context[\"embedded_form_custom_layout\"]==\"\"'

";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml");
    }
}
