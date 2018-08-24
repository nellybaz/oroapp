<?php

/* @OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_success/default.yml */
class __TwigTemplate_9e4eb3b41f01bfee02d7e39efde3f774a24a9f0bb4e0c1090568e9447094b4d0 extends Twig_Template
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
            id:        success_message
            parentId:  content
            blockType: embed_form_success
            options:
                message: '=data[\"embedded_form_entity\"].getSuccessMessage()'
                form_id: '=data[\"embedded_form_entity\"].getId()'
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_success/default.yml";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/oro_embedded_form_success/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_success/default.yml");
    }
}
