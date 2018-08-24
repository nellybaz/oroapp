<?php

/* @OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/form_session_id.yml */
class __TwigTemplate_1b646e61137ee77e3964faa72cba20d0a843e87487d8bc9b4a19ebefb06b4eda extends Twig_Template
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
            id:        embedded_form_session_id
            parentId:  embedded_form
            blockType: input
            options:
                type:  hidden
                name:  '=data[\"embedded_form_session_id_field_name\"]'
                value: '=data[\"embedded_form_session_id\"]'

    conditions: 'context[\"embedded_form\"] !== null'

";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/form_session_id.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_submit/form_session_id.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/form_session_id.yml");
    }
}
