<?php

/* @OroRFP/layouts/default/oro_rfp_frontend_request_update/layout.yml */
class __TwigTemplate_af729083357a366009e110cf2375ec0d61c3681780a6d618997156f031e1ff5f extends Twig_Template
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
    imports:
        -
            id: oro_rfp_frontend_request_edit
            root: page_content
    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.frontend.rfp.request.edit_title.label'
                parameters:
                    '%id%': '=data[\"entity\"].getId()'

        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%id%': '=data[\"entity\"].getId()'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/oro_rfp_frontend_request_update/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/oro_rfp_frontend_request_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/oro_rfp_frontend_request_update/layout.yml");
    }
}
